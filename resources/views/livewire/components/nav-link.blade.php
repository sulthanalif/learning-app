<div>
    <a href="{{ $href }}" wire:navigate class="rounded-md  px-3 py-2 text-sm font-medium {{ $isActive ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
       {{ $isActive ? 'aria-current=page' : '' }} >{{ $slot }}</a>
</div>
