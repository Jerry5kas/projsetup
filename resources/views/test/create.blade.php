<x-layouts.guest>
    <div class="bg-gray-600/20 h-screen flex-col flex justify-center items-center font-lex space-y-5">
        <div class="text-gray-600 font-merri text-2xl">Testing</div>
        <form action="{{ route('test.store') }}" method="POST"
              class="w-3/12 mx-auto p-5 flex flex-col gap-y-5 bg-white rounded-md">
            @csrf
            <input type="text" name="name" placeholder=" Name" value="{{ old('name') }}"
                   class="border p-2 rounded text-xs">
            @error('name')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <textarea name="description" placeholder=" Description"
                      class="border p-2 rounded text-xs">{{ old('description') }}</textarea>
            @error('description')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <input type="text" name="value" placeholder="Value" value="{{ old('value') }}"
                   class="border p-2 rounded text-xs">
            @error('value')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <input type="text" name="count" placeholder="Count" value="{{ old('count') }}"
                   class="border p-2 rounded text-xs">
            @error('count')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <div class="flex gap-x-3 text-xs text-gray-700">
                <label for="">Status</label>
                <input type="checkbox" name="is_active" {{ old('is_active') ? 'checked' : '' }}>
            </div>
            @error('is_active')
            <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Save</button>
        </form>
    </div>
</x-layouts.guest>

