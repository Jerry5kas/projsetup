
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


            <div class="flex flex-col gap-2">
                <label class="text-gray-500">Upload File/Image</label>
                <label class="custom-file-upload">
                    <input type="file" name="image" id="image" accept="image/*" />
                    <span>Select a file</span>
                </label>
                @if($blog->image)
                    <div class="relative "  style="max-width: 200px;  height: 120px;">
                <div id="loading-spinner" class="loading-spinner absolute bottom-1/3 left-1/2" style="display: none;"></div>
                    <img id="image-preview" src="{{ asset($blog->image) }}" alt="Current Image" style="width: 100%;  height: 120px; margin-top: 10px;" class="rounded-sm" />
                    </div>
                @else
                    <div class="relative border rounded"  style="max-width: 200px;  height: 120px;">
                        <div id="loading-spinner" class="loading-spinner absolute bottom-1/3 left-1/2" style="display: none;"></div>
                        <img id="image-preview" src="#" alt="Image Preview" style="display: none; width: 100% ; margin-top: 10px;"  class="rounded-sm"/>
                    </div>
                @endif
            </div>


            <div class="flex gap-x-3 text-xs text-gray-700">
                <label for="">Status</label>
                <input type="checkbox" name="is_active" {{  $blog->is_active ? 'checked' : '' }}>
            </div>

            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Save</button>
        </form>
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
    document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('image-preview');
        const loadingSpinner = document.getElementById('loading-spinner');

        if (file) {
            loadingSpinner.style.display = 'block'; // Show loading spinner

            const reader = new FileReader();

            reader.onload = function(e) {
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



