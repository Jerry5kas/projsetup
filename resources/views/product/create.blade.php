<x-layouts.guest>
    <div class="bg-gray-600/20 h-screen flex justify-center items-center font-lex">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"
            class="w-3/12 mx-auto p-5 flex flex-col gap-y-5 bg-white rounded-md">
            @csrf
            <input type="text" name="name" placeholder="Product Name" value="{{ old('name') }}"
                class="border p-2 rounded text-xs">
            @error('name')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <textarea name="body" placeholder="Product Description" class="border p-2 rounded text-xs">{{ old('body') }}</textarea>
            @error('body')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <input type="text" name="brand" placeholder="Brand Name" value="{{ old('brand') }}"
                class="border p-2 rounded text-xs">
            @error('brand')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <input type="text" name="price" placeholder="Price Name" value="{{ old('price') }}"
                class="border p-2 rounded text-xs">
            @error('price')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <input type="text" name="category" placeholder="Category Name" value="{{ old('category') }}"
                class="border p-2 rounded text-xs">
            @error('category')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <div class="flex-col flex gap-y-3 text-xs text-gray-700 font-semibold border rounded-md p-2">
                <label for="">Upload Product</label>
                <input type="file" name="image">
            </div>
            <div class="flex gap-x-3 text-xs text-gray-700">
                <label for="">Status</label>
                <input type="checkbox" name="is_active" {{ old('is_active') ? 'checked' : '' }}>
            </div>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Save</button>
        </form>
    </div>
</x-layouts.guest>
