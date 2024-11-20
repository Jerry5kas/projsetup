<x-layouts.app header="Contact">
    <div class="w-full text-end  p-5 py-10">
        <a href="/contact-upsert" class="px-3 py-2 bg-blue-600 text-white">New</a>
    </div>
    <div class="font-roboto px-5 pb-5">
        <table class="w-full">
            <tr class="bg-slate-200 text-center">
                <th class="border-2 border-gray-300 text-black border-collapse py-2">Contact Person</th>
                <th class="border-2 border-gray-300 text-black border-collapse">Phone Number</th>
                <th class="border-2 border-gray-300 text-black border-collapse">Email</th>
                <th class="border-2 border-gray-300 text-black border-collapse">Address 1</th>
                <th class="border-2 border-gray-300 text-black border-collapse">Address 2</th>
                <th class="border-2 border-gray-300 text-black border-collapse">City</th>
                <th class="border-2 border-gray-300 text-black border-collapse">State</th>
                <th class="border-2 border-gray-300 text-black border-collapse">Pin code</th>
                <th colspan="2" width="10%" class="border-2 border-gray-300 text-black border-collapse">Action</th>
            </tr>
            @forelse($contacts as $contact)
                <tr class="border-2 border-gray-400 ">
                    <td class="border-2 border-collapse px-2 text-center py-2">{{$contact->name}}</td>
                    <td class="border-2 border-collapse px-2 text-center">{{$contact->phone}}</td>
                    <td class="border-2 border-collapse px-2 text-center">{{$contact->email}}</td>
                    <td class="border-2 border-collapse px-2 text-center">{{$contact->adrs_1}}</td>
                    <td class="border-2 border-collapse px-2 text-center">{{$contact->adrs_2}}</td>
                    <td class="border-2 border-collapse px-2 text-center">{{$contact->city}}</td>
                    <td class="border-2 border-collapse px-2 text-center">{{$contact->state}}</td>
                    <td class="border-2 border-collapse px-2 text-center">{{$contact->pincode}}</td>
                    <td class="border-2 border-collapse px-2 text-center">
                        <a href="{{route('contact.edit', $contact->id)}}" class="text-blue-600">Edit</a>
                    </td>
                    <td class="border-2 border-collapse  px-2 text-center">
                        <form action="{{route('contact.delete', $contact->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr class="border-2 border-gray-300 text-center">
                    <td colspan="10" class="py-6">No Data Found</td>
                </tr>
            @endforelse
        </table>
    </div>
</x-layouts.app>
