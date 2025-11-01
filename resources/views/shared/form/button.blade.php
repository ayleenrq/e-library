<button
    type="{{ $type }}"
    @if($onclick) onclick="{{ $onclick }}" @endif
    {{ $attributes->merge([
        'class' => "w-full px-4 py-2 bg-$color-600 hover:bg-$color-700 text-white font-medium rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-$color-500 focus:ring-offset-2"
    ]) }}
>
    {{ $text }}
</button>