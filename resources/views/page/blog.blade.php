<x-layouts.guest>
    <div class="inset-0 flex items-center justify-center h-screen border shadow-md bg-black/80 font-lex">
        <div class="space-y-5 text-center ">
            <div class="text-xl text-gray-100 font-merri ">Create a New Post</div>
            <form action="/blog-post" method="POST"
                class="flex flex-col p-5 py-10 mx-auto bg-white border rounded w-96 gap-y-5">
                @csrf
                <input type="text" name="title" placeholder="Blog title" class="px-1 py-2 text-xs border rounded">
                <input type="text" name="body" placeholder="Blog Description ..."
                    class="px-1 py-2 text-xs border rounded">
                <button class="px-4 py-1 mx-auto text-white bg-teal-600 rounded max-w-max">Save</button>
            </form>
        </div>
    </div>
</x-layouts.guest>
