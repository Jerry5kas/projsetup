<x-layouts.guest>
    <div class="flex items-center justify-center h-screen bg-black/70 flex-col space-y-5 font-lex text-xs">
        <div class="text-2xl font-merri text-white">Write Your Blogs.</div>
        <div class="w-3/12 bg-white p-5 rounded-sm">
            <form action="{{ url('blog-store') }}" method="POST" enctype="multipart/form-data"
                  class="flex flex-col gap-y-5">
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
                {{--                <div class="flex flex-col gap-2">--}}
                {{--                    <label class="text-gray-500">Upload File/Image</label>--}}
                {{--                    <input type="file" name="image" class="border p-1 max-w-max rounded text-xs font-lex bg-slate-100">--}}
                {{--                </div>--}}

                <div class="flex flex-col gap-2">

                    <label class="text-gray-500">Upload File/Image</label>
                    <label class="custom-file-upload">
                        <input type="file" name="image" id="image" accept="image/*"/>
                        <span>Select a file</span>
                    </label>
                    <div class="relative" style="max-width: 200px;  height: 120px;">
                        <div id="loading-spinner" class="loading-spinner absolute bottom-1/3 left-1/2"
                             style="display: none;"></div>
                        <img id="image-preview" src="#" alt="Image Preview"
                             style="display: none; max-width: 200px; margin-top: 10px;" class="rounded-sm"/>
                    </div>
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

<style>
    .custom-file-upload {
        width: 200px;
        display: inline-block;
        padding: 8px 20px;
        font-size: 10px;
        cursor: pointer;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f0f0f0;
        color: #333;
        transition: background-color 0.3s ease;
    }

    .custom-file-upload:hover {
        background-color: #e0e0e0; /* Change background on hover */
    }

    .custom-file-upload input[type="file"] {
        display: none; /* Hide the default file input */
    }

    .loading-spinner {
        border: 4px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        border-top-color: #3498db;
        width: 30px;
        height: 30px;
        animation: spin 1s linear infinite;
        margin-top: 10px;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }
</style>

<script>
    document.getElementById('image').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const preview = document.getElementById('image-preview');
        const loadingSpinner = document.getElementById('loading-spinner');

        if (file) {
            loadingSpinner.style.display = 'block'; // Show loading spinner

            const reader = new FileReader();

            reader.onload = function (e) {
                setTimeout(() => { // Simulate upload time
                    preview.src = e.target.result; // Set the source of the img tag to the loaded image
                    preview.style.display = 'block'; // Show the preview
                    loadingSpinner.style.display = 'none'; // Hide loading spinner
                }, 1500); // Delay for 1.5 seconds
            }

            reader.readAsDataURL(file); // Read the file as a Data URL
        } else {
            preview.src = '#'; // Reset if no file is selected
            preview.style.display = 'none'; // Hide the preview
            loadingSpinner.style.display = 'none'; // Hide loading spinner
        }
    });
</script>



