{{--<x-layouts.guest>--}}
{{--    <div class="bg-gray-600/20 h-screen flex justify-center items-center font-lex">--}}
{{--        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data"--}}
{{--              class="w-3/12 mx-auto p-5 flex flex-col gap-y-5 bg-white rounded-md">--}}
{{--            @csrf--}}
{{--            @method('PUT')--}}
{{--            <select name="category_id" class="text-xs border py-2 px-1 text-gray-400 rounded-sm bg-white" required>--}}
{{--                <option value="">Select Blog Category</option>--}}
{{--                @foreach($categories as $category)--}}
{{--                    <option value="{{ $category->id }}" {{ 'category_id' == $category->id ? 'selected' : '' }}>--}}
{{--                        {{ $category->name }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            @error('category_id')--}}
{{--            <span class="text-red-600">{{ $message }}</span>--}}
{{--            @enderror--}}

{{--            <input type="text" name="name" placeholder="Blog Title" value="{{ $blog->name }}"--}}
{{--                   class="border p-2 rounded text-xs">--}}
{{--            @error('name')--}}
{{--            <span class="text-red-600 text-xs">{{ $message }}</span>--}}
{{--            @enderror--}}

{{--            <textarea name="description" placeholder="Blog Description" class="border p-2 rounded text-xs">{{ $blog->description }}</textarea>--}}
{{--            @error('body')--}}
{{--            <span class="text-red-600 text-xs">{{ $message }}</span>--}}
{{--            @enderror--}}
{{--            <!-- Image Preview -->--}}
{{--            <div class="flex-col flex gap-y-3 text-xs text-gray-700 font-semibold border rounded-md p-2">--}}
{{--                <label for="">Upload Product</label>--}}
{{--                <!-- Display existing image if available -->--}}
{{--                @if ($blog->image)--}}
{{--                    <img src="{{ asset($blog->image) }}" alt="Current Image" class="mb-2 w-10 h-auto rounded-md">--}}
{{--                @endif--}}
{{--                <input type="file" name="image">--}}
{{--            </div>--}}
{{--            <div class="flex gap-x-3 text-xs text-gray-700">--}}
{{--                <label for="">Status</label>--}}
{{--                <input type="checkbox" name="is_active" {{  $blog->is_active ? 'checked' : '' }}>--}}
{{--            </div>--}}
{{--            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Save</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</x-layouts.guest>--}}

<x-layouts.guest>
    <div class="bg-gray-600/20 h-screen flex justify-center items-center font-lex">
        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data"
              class="w-3/12 mx-auto p-5 flex flex-col gap-y-5 bg-white rounded-md">
            @csrf
            @method('PUT')
            <select name="category_id" class="text-xs border py-2 px-1 text-gray-400 rounded-sm bg-white" required>
                <option value="">Select Blog Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $blog->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <span class="text-red-600">{{ $message }}</span>
            @enderror

            <input type="text" name="name" placeholder="Blog Title" value="{{ $blog->name }}"
                   class="border p-2 rounded text-xs">
            @error('name')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror

            <textarea name="description" placeholder="Blog Description" class="border p-2 rounded text-xs">{{  $blog->description }}</textarea>
            @error('description')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror

            <div class="flex-col flex gap-y-3 text-xs text-gray-700 font-semibold border rounded-md p-2">
                <label for="">Upload Image</label>
                @if ($blog->image)
                    <img src="{{ asset($blog->image) }}" alt="Current Image" class="mb-2 w-10 h-auto rounded-md">
                @endif
                <input type="file" name="image" value="{{$blog->image}}">
            </div>

            <div class="flex gap-x-3 text-xs text-gray-700">
                <label for="">Status</label>
                <input type="checkbox" name="is_active" {{  $blog->is_active ? 'checked' : '' }}>
            </div>

            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Save</button>
        </form>
    </div>
</x-layouts.guest>

