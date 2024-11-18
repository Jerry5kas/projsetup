<x-layouts.app header="Blog">
    <div class="w-9/12 py-16 mx-auto text-end ">
        <a href="{{ route('blog.create') }}" class="px-5 py-2 text-white bg-blue-600 rounded font-lex">New</a>
    </div>
    <div class="w-9/12 pb-16 mx-auto space-y-5">
        <div class="text-3xl tracking-wider text-pink-700 font-roboto ">All Blogs</div>
        <div class="grid grid-cols-3 gap-5">
            @foreach ($posts as $post)
                <div class="p-5 space-y-3 tracking-wider bg-white border rounded shadow-md ">
                    <div class="text-2xl capitalize font-merri">{{ $post->title }}</div>
                    <div class="text-sm font-lex">{{ $post->body }}</div>
                    <div class="flex items-center justify-between">
                        <div class="text-xs text-gray-500 font-lex">{{ $post->created_at->diffForHumans() }} ...</div>
                        <div class="inline-flex items-center text-xs gap-x-3 font-lex ">
                            <span class="inline-flex items-center text-blue-600"><a
                                    href="/blog-edit/{{ $post->id }}">Edit</a></span>
                            <form action="/blog-delete/{{ $post->id }}-" method="POST"
                                class="inline-flex items-center text-red-600">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
