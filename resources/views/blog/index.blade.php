<x-layouts.app header="Blogs">
    <div class="bg-zinc-50">
        <div class="w-10/12 mx-auto text-end p-5 py-16 ">
            <a href="{{ route('blog.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Add</a>
        </div>
        <div class="w-10/12 mx-auto justify-items-center grid gap-5 grid-cols-3 text-xs font-lex ">
            @foreach($blogs as $blog)
                <div class="w-[20rem] bg-white rounded-2xl ov text-xs shadow-md space-y-3 py-5">
                    <div class="px-5">{{$blog->name}}</div>
                    <div class="overflow-hidden rounded">
                        <img src="{{ asset( $blog->image ) }}" alt="image"
                             class="w-full h-60 object-cover object-center ease-in-out transform transition duration-300 hover:scale-105 ">
                    </div>
                    <div class=" space-y-5">
                        <div class="w-full inline-flex justify-between px-5">
                            <div class="text-sm font-semibold text-blue-600">#{{$blog->category->name}}</div>
                            <div class="font-semibold text-gray-400">{{$blog->created_at->diffForHumans()}}</div>
                        </div>
                        <div class="px-5 tracking-wider line-clamp-1">
                            {{$blog->description}}
                        </div>
                    </div>
                    <div class="flex justify-end px-5">
                        <span class="inline-flex items-center gap-x-5 text-xs">
                            <a href="{{ route('blog.edit', $blog->id) }}" class="text-blue-600">Edit</a>
                            <a href="{{ route('blog.delete', $blog->id) }}"
                               onclick="return confirm('Are you sure?')" class="text-red-600">Delete</a>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.app>
