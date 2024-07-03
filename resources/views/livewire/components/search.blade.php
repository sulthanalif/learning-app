<div class="flex justify-center w-full items-center py-4">
    <div class="mb-4 flex justify-center w-full items-center max-w-md space-x-4">
        <form wire:submit.prevent="search" class="flex w-full">
            <input id="search" wire:model.debounce.500ms="search" type="search" autocomplete="off" required
                class="flex-auto rounded-md border-0 bg-white px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                placeholder="Search...">
            <button type="submit"
                class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Search</button>
        </form>
    </div>
</div>

