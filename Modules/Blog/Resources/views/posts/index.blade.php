<x-app-layout>

    <!--categories-->
    <div class="bg-white py-6">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full flex items-center overflow-hidden overflow-x-scroll hidden-scrollbar">
                <h1 class="text-primary leading-5 text-sm font-medium pr-6">{{ __('Categories') }}</h1>
                <ul class="text-sm inline-flex border-l-2 border-gray-200 px-6 space-x-5">

                    @foreach ($categories as $item)
                        <li class="inline-block"><a
                                class="inline-flex items-center text-gray-500 hover:text-gray-700 leading-5 text-sm transition-colors duration-150 ease-in-out"
                                href="{{ route('category', $item->slug) }}"><span
                                    class="mr-2 w-2 h-2 rounded-full bg-{{ $item->color }}-500"></span>{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>



    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        @livewire('show-posts', ['category' => $category])

    </div>
</x-app-layout>
