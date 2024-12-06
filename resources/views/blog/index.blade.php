<x-layouts.web>
    <div class="w-full text-end p-5">
        <a href="{{ route('blog.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Add</a>
    </div>
    <div>Blog</div>
    <div class="w-full grid grid-col-3 text-xs font-lex">

        <div class="w-1/3 rounded-2xl ov text-xs bg-gray-50">
            <div class="overflow-hidden rounded-lg">
                <img src="" alt=""
                     class="w-full h-72 duration-300 ease-linear transform transition hover:scale-105">
            </div>
            <div class="py-5 space-y-5">
                <div class="w-full inline-flex justify-between px-5">
                    <div class="text-sm font-semibold">Category</div>
                    <div class="font-semibold text-gray-400">20 min ago</div>
                </div>
                <div class="px-5 tracking-wider">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, debitis!
                </div>
            </div>
        </div>

    </div>
</x-layouts.web>
