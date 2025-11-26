@props(['type' => 'text', 'name' => null, 'id' => null, 'placeholder' => null, 'required' => false])

<input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" required="{{ $required }}" {{ $attributes->merge(['class' => "w-full border border-gray-300 p-2 rounded"]) }} /> 