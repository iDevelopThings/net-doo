@extends('layouts.app')

@section('content')    
    <div class="w-full min-h-full flex flex-col">

        <div class="bg-gray-300 h-screen fixed top-0 left-0 xl:w-3/12 xl:bg-gray-50 2xl:w-2/12 border-r-2 border-gray-200 ">

            <div class="xl:py-12 xl:px-10 font-semibold">
                <h3 class="text-2xl">Admin panel</h3>
            </div>

            <div class="text-base">

                <x-admin-panel.side-menu.item href="/" text="Narudzbe">
                    <x-icons.truck size="20"></x-icons.truck>
                </x-admin-panel.side-menu.item>

                <x-admin-panel.side-menu.item href="/admin-panel/products" text="Proizvodi" active="true">
                    <x-icons.tv size="20"></x-icons.tv>
                </x-admin-panel.side-menu.item>

                <x-admin-panel.side-menu.item href="/" text="Akcije u toku">
                    <x-icons.precent size="20"></x-icons.precent>
                </x-admin-panel.side-menu.item>

                <x-admin-panel.side-menu.item href="/" text="Logout">
                    <x-icons.logout size="20"></x-icons.logout>
                </x-admin-panel.side-menu.item>
                
            </div>
            
        </div>
        
        <div class="bg-gray-100 min-h-screen xl:w-9/12 xl:px-10 2xl:w-10/12 self-end">

            <div class="min-h-screen bg-gray-100 w-full">
                
                <div class="xl:py-10">
                    <a href="/admin-panel/products/create" class="text-base w-40 border flex border-gray-200 shadow-sm  py-2 px-2 bg-gray-50 rounded-md hover:bg-blue-600 hover:text-gray-50">
                        <div class="mr-2 flex">
                            <x-icons.add size="20"></x-icons.add>
                        </div>
                        Dodaj proizvod
                    </a>
                </div>

                <div class="bg-gray-50 px-6 py-6 rounded-md border border-gray-200 shadow-sm">
                    @if (session()->has('Success'))
                        <div class="bg-green-400 border border-gray-200 text-white absolute top-8 right-10 font-semibold py-2 px-4 rounded-md flex">
                            <p class="mr-2">{{ session()->get('Success') }}</p>
                            <x-icons.check size="18"></x-icons.check>
                        </div>
                    @endif

                    <div class="mb-12 flex">
                        <x-icons.tv size="32"></x-icons.tv>
                        <h1 class="font-semibold text-3xl ml-2">Dodaj novi proizvod</h1>
                    </div>

                    <form action="/admin-panel/products" method="POST" class="grid">
                        @csrf
                        @method('POST')

                        <div class=" grid grid-cols-3 gap-6">
                            <div class="flex flex-col">
                                <label for="" class="mb-2">Naziv proizvoda *</label>
                                <input type="text" name="name" class="rounded-md">
                                @error('name')
                                    <div class="mt-2">
                                        <p class="text-sm text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="flex flex-col">
                                <label for="" class="mb-2">Cijena *</label>
                                <input type="number" name="price" step="0.01" placeholder="0.00" class="rounded-md">
                                @error('price')
                                    <div class="mt-2">
                                        <p class="text-sm text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="flex flex-col">
                                <label for="" class="mb-2">Kolicina *</label>
                                <input type="text" name="amount" class="rounded-md">
                                @error('amount')
                                    <div class="mt-2">
                                        <p class="text-sm text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-6 mt-6">
                            <div class="flex flex-col">
                                <label for="" class="mb-2">Stanje</label>
                                <select name="state" id="" class="rounded-md">
                                    <option value="0">Novo</option>
                                    <option value="1">Polovno</option>
                                    <option value="2">Refurbished</option>
                                </select>
                            </div>
                            
                            <div class="flex flex-col">
                                <label for="" class="mb-2">Kategorija</label>
                                <select name="category" id="" class="rounded-md">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-6">
                            <button type="submit" class="bg-white border border-gray-400 py-2 px-2 mt-10 rounded-md">Spasi proizvod</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection