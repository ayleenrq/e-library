<div class="mb-4">
    <input 
        type="{{ $type ?? 'text' }}" 
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
        required
    >
    @if ($type === 'password')
        <i class="fa-regular fa-eye cursor-pointer absolute top-1/2 right-0 -translate-y-1/2 pr-4 text-gray-400"></i>
    @endif
</div> 