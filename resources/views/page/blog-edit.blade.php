<x-layouts.guest>
    <div class="inset-0 flex items-center justify-center h-screen border shadow-md bg-black/80 font-lex">
        <div class="space-y-5 text-center">
            <div class="text-xl text-gray-100 font-merri ">Edit Post</div>

            <form action="/blog-edit/{{ $post->id }}" method="POST"
                  class="flex flex-col p-5 py-10 mx-auto bg-white border rounded w-96 gap-y-5">
                @csrf
                @method('PUT')
                <input type="text" name="title" value="{{ $post->title }}" placeholder="Blog title"
                       class="px-1 py-2 text-xs border rounded">
                <textarea name="body" placeholder="Blog Description ..."
                          class="px-1 py-2 text-xs border rounded">{{ $post->body }}</textarea>
                <div class="flex justify-end gap-x-2">
                    <button class="px-4 py-1  text-white bg-teal-600 rounded max-w-max">Save Changes</button>
                    <a href="/blog" class="px-4 py-1 text-white bg-gray-600 rounded max-w-max">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guest>
