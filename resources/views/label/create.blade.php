<x-layouts.guest>
    <div class="bg-gray-600/20 h-screen flex justify-center items-center font-lex">
        <form action="{{ route('label.store') }}" method="POST" enctype="multipart/form-data"
              class="w-3/12 mx-auto p-5 flex flex-col gap-y-5 bg-white rounded-md">
            @csrf
            <input type="text" name="name" placeholder="Label Name" value="{{ old('name') }}"
                   class="border p-2 rounded text-xs">
            @error('name')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <textarea name="description" placeholder="Label Description" class="border p-2 rounded text-xs">{{ old('description') }}</textarea>
            @error('description')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <div class="flex gap-x-3 text-xs text-gray-700">
                <label for="">Status</label>
                <input type="checkbox" name="is_active" {{ old('is_active') ? 'checked' : '' }}>
            </div>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Save</button>
        </form>
    </div>
</x-layouts.guest>
