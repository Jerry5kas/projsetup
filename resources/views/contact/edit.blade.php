<x-layouts.guest>
    <div class="flex items-center justify-center h-screen bg-black/70">
        <div class="w-4/12 mx-auto bg-white rounded-md p-5">
            <form action="{{ route('contact.edit', $contact->id) }}" method="POST" class=" flex flex-col gap-y-5">
                @csrf
                @method('PUT')
                <input type="text" name="name" placeholder="Contact Name" value="{{$contact->name}}" class="px-1 py-3 text-xs border rounded-md">
                <input type="text" name="email" placeholder="Email" value="{{$contact->email}}" class="px-1 py-3 text-xs border rounded-md">
                <input type="text" name="phone" placeholder="Phone Number" value="{{$contact->phone}}" class="px-1 py-3 text-xs border rounded-md">
                <textarea name="adrs_1" placeholder="add address 1"
                          class="px-1 py-3 text-xs border rounded-md">{{$contact->adrs_1}}</textarea>
                <textarea name="adrs_2" placeholder="add address 2"
                          class="px-1 py-3 text-xs border rounded-md">{{$contact->adrs_2}}</textarea>
                <input type="text" name="city" placeholder="City" value="{{$contact->city}}" class="px-1 py-3 text-xs border rounded-md">
                <input type="text" name="state" placeholder="State" value="{{$contact->state}}" class="px-1 py-3 text-xs border rounded-md">
                <input type="text" name="pincode" placeholder="Pincode" value="{{$contact->pincode}}" class="px-1 py-3 text-xs border rounded-md">
                <div class="text-end pace-x-3">
                    <button class="px-4 py-1.5  text-white bg-blue-600 ">Save Changes</button>
                    <a href="/contacts" class="bg-gray-600 text-white px-4 py-2 max-w-max">Back</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guest>
