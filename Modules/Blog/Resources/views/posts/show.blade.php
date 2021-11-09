<x-app-layout>

    <!--面包屑-->
    @if (isset($breadcrumbs))
        @livewire('breadcrumbs', ['breadcrumbs' => $breadcrumbs])
    @endif



    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex space-x-4">
            <div class="sm:w-3/4 bg-white p-6">
                <h2 class="text-2xl font-extrabold tracking-tight sm:text-3xl">{{ $post->title }}</h2>
                <div class="flex items-center text-sm text-gray-400 py-2 border-b border-gray-200 leading-6 space-x-2">
                    <span>
                        {{ $post->category->name }}
                    </span>
                    <span>/</span>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span>{{ $post->visits }}</span>
                    </div>
                    <span>/</span>
                    <span>
                        发布于 {{ $post->published_at->diffForHumans() }}
                    </span>
                </div>

                <div class="prose lg:prose-xl py-8 lg:text-base min-w-full">
                    {!! $post->body !!}


                    <p>
                        从 Laravel 5.1 开始增加了一个叫做模型工厂的功能，主要为了允许开发者快速构建「假」模型。
                    </p>

                    <p>
                        这里有很多案例，其中两个最大的案例是测试案例和数据库种子案例。我们通过构建一个小的虚构的 App 的开端，来深入了解这一功能。
                    </p>

                    <h2>起始</h2>

                    <p>
                        我们假设你被一个叫做 LEMON 的房屋定制建筑商雇佣，他们需要一个在客户房屋建成后提交故障单的方式。使用类似 Lemon 这样的名称，你知道他们会被问题淹没，因此你的任务就是简化这个流程。
                    </p>

                    <p>
                        一切从简，我们可以为客户创建用户表，再创建新的问题表。我们现在就着手把这些做出来。
                    </p>


                </div>
            </div>
            <div class="w-1/4 hidden sm:flex flex-col">
                <div class="bg-white divide-y-2 divide-gray-100 flex flex-col px-6 rounded">
                    <div class="flex items-center justify-between py-2">
                        <div>
                            <h2 class=" font-bold text-lg">{{ $post->creator->name }}</h2>
                            <p class=" font-normal text-sm text-gray-500">{{ $post->creator->email }}</p>
                        </div>
                        <img src="{{ $post->creator->profile_photo_url }}" alt=""
                            class=" rounded-full w-16 flex-shrink-0">
                    </div>

                    <div class=" flex items-center justify-around py-4">
                        <div class="flex flex-col items-center">
                            <p class=" text-gray-500 text-sm">文章</p>
                            <p class="font-bold text-gray-500">281</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <p class=" text-gray-500 text-sm">粉丝</p>
                            <p class="font-bold text-gray-500">28</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <p class=" text-gray-500 text-sm">喜欢</p>
                            <p class="font-bold text-gray-500">81</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <p class=" text-gray-500 text-sm">收藏</p>
                            <p class="font-bold text-gray-500">281</p>
                        </div>
                    </div>

                    <div class="flex justify-center items-center py-4 space-x-2">
                        <button
                            class="flex items-center justify-center border border-gray-200 px-8 py-2 rounded flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            <span class="text-gray-600 text-sm">关注</span>
                        </button>

                        <button
                            class="flex items-center justify-center border border-gray-200 px-8 py-2 rounded flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <span class="text-gray-600 text-sm">私信</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
