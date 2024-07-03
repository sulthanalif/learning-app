<x-layouts.app>
    <x-slot:title>{{ $title }}</x-slot:title>

        <livewire:components.search />
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <livewire:components.card-blog :post="$post"/>
            @endforeach
        </div>
        
        <div class="flex justify-center">
            {{ $posts->links('components.paginator') }}
        </div>
</x-layouts.app>
