

<x-layouts.guest>
    <div class="flex items-center justify-center h-screen bg-black/70 flex-col space-y-5 font-lex text-xs">
        <div class="text-2xl font-merri text-white">Write Your Blogs.</div>
        <div class="w-3/12 bg-white p-5 rounded-sm">
            <form action="{{ url('blog-store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-y-5">
                @csrf

                <!-- Category Dropdown -->
                <select name="category_id" class="text-xs border py-2 px-1 text-gray-600 rounded-sm bg-white" required>
                    <option value="">Select Blog Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="text-red-600">{{ $message }}</span>
                @enderror

                <!-- Blog Title Input -->
                <input type="text" name="name" placeholder="Blog Title"
                       class="text-xs border py-2 px-1 rounded-sm" value="{{ old('name') }}">
                @error('name')
                <span class="text-red-600">{{ $message }}</span>
                @enderror

                <!-- Blog Description Textarea -->
                <textarea name="description" placeholder="Blog Description" rows="5"
                          class="text-xs border py-2 px-1 rounded-sm">{{ old('description') }}</textarea>
                @error('description')
                <span class="text-red-600">{{ $message }}</span>
                @enderror

                <!-- File Upload Input -->
                <div class="flex flex-col gap-2">
                    <label class="text-gray-500">Upload File/Image</label>
                    <input type="file" name="image" class="border p-1 max-w-max rounded text-xs font-lex bg-slate-100">
                </div>

                <!-- Is Active Checkbox -->
                <div class="flex items-center gap-x-5 text-gray-500">
                    <label for="">Is Active</label>
                    <input type="checkbox" name="is_active" {{ old('is_active') ? 'checked' : '' }}>
                </div>
                @error('is_active')
                <span class="text-red-600">{{ $message }}</span>
                @enderror

                <!-- Submit and Back Buttons -->
                <div class="text-gray-300 text-end space-x-3">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
                    <a href="{{ route('blog.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded">Back</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guest>
