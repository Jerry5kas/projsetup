<x-layouts.guest>
    <div class="bg-gray-600/20 h-screen flex justify-center items-center font-lex">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="w-3/12 mx-auto p-5 flex flex-col gap-y-5 bg-white rounded-md">
            @csrf
            <input type="text" name="name" placeholder="Product Name" class="border p-2 rounded text-xs">
            <textarea name="body" placeholder="Product Description"  class="border p-2 rounded text-xs"></textarea>
            <input type="text" name="brand" placeholder="Brand Name" class="border p-2 rounded text-xs">
             <input type="number" id="quantity" name="price" min="1" placeholder="Price Name" max="5" class="border p-2 rounded text-xs">
            <input type="range" name="price" placeholder="Category Name" class="border p-2 rounded text-xs">
            <div class="flex-col flex gap-y-3 text-xs text-gray-700 font-semibold border rounded-md p-2">
                <label for="">Upload Product</label>
            <input type="file" name="image">
            </div>
            <div class="flex gap-x-3 text-xs text-gray-700">
                <label for="">Status</label>
            <input type="checkbox" name="is_active" checked>
            </div>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Save</button>
        </form>
    </div>
</x-layouts.guest>
