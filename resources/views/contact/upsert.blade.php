<x-layouts.guest>
    <div class="flex items-center justify-center h-screen bg-black/70">
        <div class="w-4/12 mx-auto bg-white rounded-md p-5">
            <form action="{{ route('contact.store') }}" method="POST" class=" flex flex-col gap-y-5">
                @csrf
                <input type="text" name="name" placeholder="Contact Name" class="px-1 py-3 text-xs border rounded-md">
                <input type="text" name="email" placeholder="Email" class="px-1 py-3 text-xs border rounded-md">
                <input type="text" name="phone" placeholder="Phone Number" class="px-1 py-3 text-xs border rounded-md">
                <textarea name="adrs_1" placeholder="add address 1"
                          class="px-1 py-3 text-xs border rounded-md"></textarea>
                <textarea name="adrs_2" placeholder="add address 2"
                          class="px-1 py-3 text-xs border rounded-md"></textarea>
                <input type="text" name="city" placeholder="City" class="px-1 py-3 text-xs border rounded-md">
                <input type="text" name="state" placeholder="State" class="px-1 py-3 text-xs border rounded-md">
                <input type="text" name="pincode" placeholder="Pincode" class="px-1 py-3 text-xs border rounded-md">
                <div class="text-end pace-x-3">
                <button class="px-4 py-1.5  text-white bg-blue-600 ">Save</button>
                    <a href="/contacts" class="bg-gray-600 text-white px-4 py-2 max-w-max">Back</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guest>
