<x-layouts.guest>
    <div class="bg-black/70 h-screen flex justify-center items-center">
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-lg space-y-5 flex-col flex p-5 text-xs">
            <div class="h-12 flex flex-col">
                <input type="text" name="category_id" value=" {{ old('category_id') }}" placeholder="Category"
                    class="py-4 px-2 rounded-md border">
                @error('category_id')
                    <span class=" text-red-600 ">{{ $message }}</span>
                @enderror
            </div>
            <div class="h-12 flex flex-col">
                <input type="text" name="name" value=" {{ old('name') }}" placeholder="Blog Title"
                    class="py-4 px-2 rounded-md border">
                @error('name')
                    <span class=" text-red-600 ">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <textarea name="description" placeholder="Blog Description" class="py-4 px-2 rounded-md border">{{ old('description') }}</textarea>
                @error('description')
                    <span class=" text-red-600 ">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-col flex gap-y-3 text-xs text-gray-700 font-semibold border rounded-md p-2">
                <label for="">Upload Product</label>
                <input type="file" name="image">
            </div>
            <div class="flex gap-x-3 text-xs text-gray-700">
                <label for="">Status</label>
                <input type="checkbox" name="is_active" {{ old('is_active') ? 'checked' : '' }}>
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white text-sm rounded-md py-2 ">Save</button>
            </div>
        </form>
    </div>
</x-layouts.guest>
