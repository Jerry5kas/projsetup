<x-layouts.guest >
    <div class="h-screen border inset-0 shadow-md bg-black/80 flex justify-center items-center font-lex">
        <div class="space-y-5 text-center ">
            <div class="text-gray-100 font-merri text-xl ">Create a New Post</div>
            <form action="/blog-post" method="POST" class="w-96 mx-auto flex flex-col gap-y-5 border rounded  p-5 py-10 bg-white">
                @csrf
                <input type="text" name="title" placeholder="Blog title" class="border rounded py-2 px-1 text-xs">
                <input type="text" name="body" placeholder="Blog Description ..." class="border rounded py-2 px-1 text-xs">
                <button class="px-4 py-1 max-w-max mx-auto bg-teal-600 text-white rounded">Save</button>
            </form>
        </div>
    </div>
</x-layouts.guest>
