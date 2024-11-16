<x-layouts.app header="Blog">
    <div class="w-9/12 mx-auto py-16 text-end ">
        <a href="{{route('blog.create')}}" class="bg-blue-600 text-white px-5 py-2 rounded font-lex">New</a>
    </div>
    <div class="w-9/12 mx-auto space-y-5 pb-16">
        <div class="text-pink-700 font-roboto text-3xl tracking-wider ">All Blogs</div>
        <div class="grid grid-cols-3 gap-5">
            @foreach($posts as $post)
                <div class=" bg-white shadow-md border tracking-wider rounded space-y-3 p-5">
                    <div class="text-2xl font-merri capitalize">{{$post->title}}</div>
                    <div class="text-sm font-lex">{{$post->body}}</div>
                    <div class="flex justify-between items-center">
                        <div class="text-xs text-gray-500 font-lex">{{ $post->created_at->diffForHumans() }} ...</div>
                        <div class="text-xs gap-x-3 inline-flex items-center font-lex ">
                            <span class="text-blue-600 inline-flex items-center"><a href="">Edit</a></span>
                            <span class="text-red-600 inline-flex items-center"><a href="">Delete</a></span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
