<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="bg-white text-sm text-gray-600 hidden lg:block">
        <div class="mx-auto max-w-screen-xl px-4 py-6 sm:px-6 lg:px-8">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!empty($breadcrumb['url']))
                    <a class="hover:text-gray-800" href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                @else
                    <span>{{ $breadcrumb['name'] }}</span>
                @endif

                @if (!$loop->last)
                    <span class="mx-4">/</span>
                @endif

            @endforeach
        </div>
    </div>
</div>
