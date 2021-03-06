<div>
    {{-- The best athlete wants his opponent at his best. --}}

    @if (isset($category))
        <div class="flex {{ $category->color }} items-center justify-between rounded-lg p-8 bg-red-500 mb-9">
            <div>
                <x-jet-application-mark class="block h-9 w-auto" />
                <p class=" mt-2">Tous les articles et tutoriels concernant Laravel</p>
            </div>
            <h2 class="font-bold text-4xl">{{ $category->name }}</h2>
        </div>
    @endif

    <div class="grid gap-6 max-w-lg mx-auto md:grid-cols-2 md:max-w-3xl lg:grid-cols-3 xl:grid-cols-4 lg:max-w-none">

        @foreach ($posts as $post)
            <a href="{{ route('blog.show', $post->id) }}"
                class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-200 ease-in-out">
                <div class="w-full h-44 bg-blue-200 rounded-md">
                </div>
                <h2 class="flex text-base text-gray-900 font-bold leading-6 group-hover:text-gray-700 mt-2">
                    {{ $post->title }} </h2>
                <div class="flex items-center mt-4">
                    <img src="{{ $post->creator->profile_photo_url }}" alt="{{ $post->creator->name }}"
                        class="w-10 h-10 rounded-full bg-indigo-400 flex-shrink-0">
                    <div class="ml-4">
                        <h4 class="text-sm leading-5 text-gray-600">{{ $post->creator->name }}</h4>
                        <div class="text-xs leading-4 text-gray-400">
                            Publish on {{ $post->published_at }}
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-10">
        {{ $posts->links() }}
    </div>
</div>
