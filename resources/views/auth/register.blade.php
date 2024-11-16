<x-layouts.guest>
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-96 bg-white p-5 rounded-md flex-col flex gap-y-5 ">
            <div class="text-xl font-semibold tracking-wider text-teal-500">New Registry</div>
            <form action="/registerUser" method="POST" class="flex-col flex gap-y-5">
                @csrf
                <input name="name" type="text" placeholder="name"  class="border rounded-md py-2 px-1 text-xs focus:border-0">
                <input name="email" type="text" placeholder="email"  class="border rounded-md py-2 px-1 text-xs focus:border-0">
                <input name="password" type="password" placeholder="password"  class="border rounded-md py-2 px-1 text-xs focus:border-2 focus:ring-0 focus:outline-0">
                <button class="max-w-max bg-blue-500 text-white font-semibold px-2 py-3 rounded-md text-xs">Register Now</button>
            </form>
        </div>
    </div>
</x-layouts.guest>
