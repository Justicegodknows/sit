@props(['type' => 'a', 'active' => false])

@if ($type === 'a')
    <a class="{{ $active ? 'bg-gray-900 px-3 py-2 text-sm font-medium text-gray-300' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white'}}"
    aria-current="{{ $active ? 'page' : null }}""
    {{$attributes}}
    >{{ $slot }}</a>
@elseif ($type === 'button')
    <button class="{{ $active ? 'bg-gray-900 px-3 py-2 text-sm font-medium text-gray-300' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white'}}"
    aria-current="{{ $active ? 'page' : null }}""
    {{$attributes}}
    >{{ $slot }}</button>
@endif