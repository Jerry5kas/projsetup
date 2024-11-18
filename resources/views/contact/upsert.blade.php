<div class="flex items-center justify-center h-screen bg-black/70">
    <div class="bg-white rounded-md w-3xl">
        <form action="/contact-upsert" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Contact Name" class="px-1 py-3 text-xs border rounded-md">
            <input type="text" name="email" placeholder="Email" class="px-1 py-3 text-xs border rounded-md">
            <input type="text" name="phone" placeholder="Phone Number" class="px-1 py-3 text-xs border rounded-md">
            <textarea name="adrs_1" placeholder="add address 1" class="px-1 py-3 text-xs border rounded-md"></textarea>
            <textarea name="adrs_2" placeholder="add address 2" class="px-1 py-3 text-xs border rounded-md"></textarea>
            <input type="text" name="city" placeholder="City" class="px-1 py-3 text-xs border rounded-md">
            <input type="text" name="state" placeholder="State" class="px-1 py-3 text-xs border rounded-md">
            <input type="text" name="pincode" placeholder="Pincode" class="px-1 py-3 text-xs border rounded-md">
            <button class="px-4 py-1 mx-auto text-white bg-blue-600 max-w-max">Save</button>
        </form>
    </div>
</div>
