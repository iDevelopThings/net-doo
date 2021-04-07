@props([
    'type' => 'text',
    'name' => '',
    'value' => '',
    'placeholder' => '',
])

<input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}" placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'rounded-md bg-gray-50 border border-gray-300 focus:border-blue-600 focus:ring-blue-100'.$type])}}>
@error($name)
    <div>
        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
    </div>
@enderror