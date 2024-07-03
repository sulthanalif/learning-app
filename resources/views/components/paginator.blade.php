<div class="flex justify-center mt-6">
    <ul class="flex list-none">
        <li class="mx-1">
            @if ($paginator->onFirstPage())
                <a wire:navigate class="px-3 py-2 bg-gray-200 text-gray-400 rounded-l-lg">Previous</a>
            @else
                <a wire:navigate href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 bg-white text-gray-700 rounded-l-lg">Previous</a>
            @endif
        </li>
        <li class="mx-1">
            @if (!$paginator->hasMorePages())
                <a wire:navigate class="px-3 py-2 bg-gray-200 text-gray-400 rounded-r-lg">Next</a>
            @else
                <a wire:navigate href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 bg-white text-gray-700 rounded-r-lg">Next</a>
            @endif
        </li>
    </ul>
</div>
