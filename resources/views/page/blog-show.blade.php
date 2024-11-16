<x-layouts.app header="Blog">
    <div class="w-9/12 mx-auto py-16 text-end ">
        <a href="{{route('blog.create')}}" class="bg-yellow-600 text-white px-5 py-2 rounded font-lex">New</a>
    </div>
    <div class="w-9/12 mx-auto space-y-5 pb-16">
        <div>All Blogs</div>
        <div class="grid grid-cols-3 gap-5">
            @foreach($posts as $post)
                <div class=" bg-slate-100 border tracking-wider rounded space-y-5 p-5">
                    <div class="text-2xl font-merri">{{$post->title}}</div>
                    <div class="text-sm font-lex">{{$post->body}}</div>
{{--                                <div class="text-xs font-lex">{{ date('d-M-Y', strtotime($posts->created_at))}}</div>--}}
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
