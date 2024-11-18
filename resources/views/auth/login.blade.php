<x-layouts.guest>
    <div class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col p-5 bg-white rounded-md w-96 gap-y-5 ">
            <div class="text-xl font-semibold tracking-wider text-teal-500">Login Form</div>
            <form action="{{ route('loginUser') }}" method="POST" class="flex flex-col gap-y-5">
                @csrf
                <input name="email" type="text" placeholder="Email" required
                    class="px-1 py-2 text-xs border rounded-md focus:border-0">

                <input name="password" type="password" placeholder="Password" required
                    class="px-1 py-2 text-xs border rounded-md focus:border-2 focus:ring-0 focus:outline-0">
                <div class="inline-flex items-center justify-between">
                    <button class="px-2 py-3 text-xs font-semibold text-white bg-blue-500 rounded-md max-w-max">Login
                        Now</button>
                    <a class="text-xs font-semibold text-gray-500 hover:text-blue-600"
                        href="{{ route('register') }}">Register User</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guest>
