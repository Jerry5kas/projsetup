<x-layouts.app header="">

    <div class="overflow-hidden relative">
        <img src="{{ asset('images/bg-2.jpg') }}" alt=""
             class="w-full h-[45rem] bg-cover transition transform duration-500 ease-in-out hover:scale-105">
        <div class="absolute top-1/2 w-full text-center p-5 text-6xl font-merri  capitalize text-white">
            <div class=" ">
                welcome <span class="text-pink-600">{{ auth()->user() ? auth()->user()->name : 'Guest' }}</span>
            </div>
        </div>
    </div>
</x-layouts.app>
