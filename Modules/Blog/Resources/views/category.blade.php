<x-app-layout>

    <!--面包屑-->
    @if (isset($breadcrumbs))
        @livewire('breadcrumbs', ['breadcrumbs' => $breadcrumbs])
    @endif


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        @livewire('show-posts', ['category' => $category])

    </div>
</x-app-layout>
