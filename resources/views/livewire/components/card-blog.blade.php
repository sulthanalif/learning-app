<article class="flex max-w-sm bg-gray-50 rounded-xl py-4 px-4 flex-col items-start justify-between gap-y-2">
    <div class="flex items-center gap-x-4 text-xs justify-between w-full">
        <time datetime="2020-03-16" class="text-gray-500">{{ $post->created_at->format('d m Y') }}</time>
        @if ($post->category->name == 'Laravel')
            <a href="{{ route('blogs', ['category' => $post->category->name]) }}"
                class="relative z-10 rounded-full bg-red-500 text-white px-3 py-1.5 font-medium  hover:bg-red-200
        ">{{ $post->category->name }}</a>
        @elseif ($post->category->name == 'UI/UX')
            <a href="{{ route('blogs', ['category' => $post->category->name]) }}"
                class="relative z-10 rounded-full bg-green-500 text-white px-3 py-1.5 font-medium  hover:bg-green-200
        ">{{ $post->category->name }}</a>
        @elseif ($post->category->name == 'React')
            <a href="{{ route('blogs', ['category' => $post->category->name]) }}"
                class="relative z-10 rounded-full bg-blue-500 text-white px-3 py-1.5 font-medium  hover:bg-blue-200
        ">{{ $post->category->name }}</a>
        @elseif ($post->category->name == 'Vue')
            <a href="{{ route('blogs', ['category' => $post->category->name]) }}"
                class="relative z-10 rounded-full bg-yellow-500 text-white px-3 py-1.5 font-medium  hover:bg-yellow-200
        ">{{ $post->category->name }}</a>
        @endif
    </div>
    <div class="group relative">
        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a wire:navigate href="{{ route('blogs.show', $post->slug) }}">
                <span class="absolute inset-0"></span>
                {{ $post->title }}
            </a>
        </h3>
        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
            {{ $post->body}}
        </p>
    </div>
    <div class="relative mt-8 flex items-center gap-x-4">
        <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
                <a href="{{ route('blogs', ['author' => $post->user->name]) }}">
                    <span class="absolute inset-0"></span>
                    {{ $post->user->name }}
                </a>
            </p>
            <p class="text-gray-600">{{ $post->user->email }}</p>
        </div>
    </div>
</article>
