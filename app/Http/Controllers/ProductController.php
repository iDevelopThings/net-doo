<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('admin-panel.products.index', [
            'products' => \App\Models\Product::with('categories')->paginate(30),
            'categories' => \App\Models\Category::all()
        ]);
    }

    public function create()
    {
        return view('admin-panel.products.create', [
            'categories' => \App\Models\Category::where('root', 0)->get()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'price' => 'required',
            'amount' => 'required',
            'state' => 'required',
            'active' => 'required',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024'
        ]);

        $imageName = '/images/image-' . strtolower('netdoo') . '-' . date('Y') . '-' . time() . '.' . request()->image_url->extension();

        request()->image_url->move(public_path('images'), $imageName);

        $validated['image_url'] = $imageName;
        
        $product = new \App\Models\Product($validated);
        $product->save();
        
        $productCategoryAttributes = [
            'category_id' => (int)$request->category,
            'product_id' => (int)$product->id
        ];

        $productCategory = new \App\Models\CategoryProduct($productCategoryAttributes);
        $productCategory->save();

        return redirect()->back()->with('Success', 'Proizvod spašen!');
    }

    public function edit($id)
    {
        return view('admin-panel.products.edit', [
            'product' => \App\Models\Product::find($id)->load('categories'),
            'categories' => \App\Models\Category::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        if(!isset($request->image_url))
        {
            $product = Product::find($id);
            $validated = request()->validate([
                'name' => [
                    'required',
                    'max:255',
                    Rule::unique('products')->ignore($product)
                ],
                'price' => 'required',
                'amount' => 'required',
                'state' => 'required',
                'active' => 'required'
            ]);

            $product->update($validated);
            return redirect("/admin-panel/products/$product->id/edit")->with('Success', 'Promjene spasene!');
        }else{

            $product = Product::find($id);
            $validated = request()->validate([
                'name' => [
                    'required',
                    'max:255',
                    Rule::unique('products')->ignore($product)
                ],
                'price' => 'required',
                'amount' => 'required',
                'state' => 'required',
                'image_url' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024'
            ]);

            $imageName = '/images/image-' . strtolower('net-doo') . '-' . date('Y') . '-' . time() . '.' . request()->image_url->extension();

            request()->image_url->move(public_path('images'), $imageName);

            $validated['image_url'] = $imageName;

            $product->update($validated);

            return redirect("/admin-panel/products/$product->id/edit")->with('Success', 'Promjene spasene!');
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin-panel/products')->with('delete-success', 'Proizvod izbrisan');
    }

    public function search(Request $request)
    {
        if(intval($request->category) === 0)
        {
            return view('admin-panel.products.index', [
                'products' => \App\Models\Product::with('categories')->paginate(30),
                'categories' => \App\Models\Category::all()
            ]);
        }

        $categoryProducts = \App\Models\CategoryProduct::where('category_id', $request->category)->get()->pluck('product_id');

        return view('admin-panel.products.index', [
            'products' => \App\Models\Product::whereIn('id', $categoryProducts)->with('categories')->paginate(3),
            'categories' => \App\Models\Category::all()
        ]);
    }
}
