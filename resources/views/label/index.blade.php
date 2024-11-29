<x-layouts.app header="Label">
    <div class="flex flex-col space-y-5 p-5">
        <div class="w-full text-end">
            <a href="{{ route('label.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md">Add category</a>
        </div>
        <table class="w-full">
            <tr class="bg-slate-200 text-center">
                <th class="border-2 border-gray-300 text-black border-collapse py-2">S. No</th>
                <th class="border-2 border-gray-300 text-black border-collapse py-2">Label Name</th>
                <th class="border-2 border-gray-300 text-black border-collapse py-2">Label Description</th>

                <th colspan="" width="10%" class="border-2 border-gray-300 text-black border-collapse">Status</th>
                <th colspan="" width="10%" class="border-2 border-gray-300 text-black border-collapse">Action</th>
            </tr>
            @foreach($labels as $index => $label)
                <tr class="border-2 border-gray-400 ">
                    <td class="border-2 border-collapse px-2 text-center py-2">{{$index + 1}}</td>
                    <td class="border-2 border-collapse px-2 text-center py-2">{{$label->name}}</td>
                    <td class="border-2 border-collapse px-2 text-center py-2">{{$label->description}}</td>

                    <td class="border-2 border-collapse px-2 text-center py-2 {{ $label->is_active ? 'text-green-600' : 'text-red-600' }}">
                        {{ $label->is_active ? 'active' : 'not active' }}
                    </td>
                    <td class="border-2 border-collapse px-2 text-center py-2">
                    <span class="inline-flex items-center gap-x-5 text-xs">
                        <a href="{{ route('label.edit', $label->id) }}" class="text-blue-600">Edit</a>
                        <a href="{{ route('label.delete', $label->id) }}"
                           onclick="return confirm('Are you sure ?')" class="text-red-600">Delete</a>
                    </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-layouts.app>
