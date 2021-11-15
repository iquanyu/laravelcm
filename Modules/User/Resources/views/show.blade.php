<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:py-12">

        <div class="overflow-hidden sm:rounded-lg p-4">
            <div class="flex mt-4">
                <div class="border-4 border-white shadow rounded-full">
                    <img src="{{ $user->profile_photo_url }}" alt="admin"
                        class="w-24 h-24 rounded-full bg-indigo-400 flex-shrink-0">
                </div>
                <div class="ml-4 bg-orange-400 rounded-md p-4 text-white w-96">
                    <h4 class="leading-5 font-bold text-xl text-white">{{ $user->name }}</h4>
                    <div class="leading-4 text-white mt-2 font-semibold">
                        {{ $user->email }}
                    </div>
                    <p class="text-sm mt-2">注册于：{{ $user->created_at->diffForHumans() }}
                        ，上次登录：{{ $user->last_login_at->diffForHumans() }}</p>
                </div>
            </div>

        </div>

        <div class="px-4 py-6 sm:px-0">
            <div class="border-2 border-dashed border-gray-200 rounded-lg h-96"></div>
        </div>

    </div>
</x-app-layout>
