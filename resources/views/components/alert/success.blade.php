<div x-data="{ open: true }"
     x-show="open"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform translate-y-2"
     x-transition:enter-end="opacity-100 transform translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 transform translate-y-0"
     x-transition:leave-end="opacity-0 transform translate-y-2"
     x-init="setTimeout(() => open = false, 2000)"
     class="max-w-max fixed top-2 right-2 z-50 bg-green-500 text-white p-4 rounded-lg shadow-lg">
    <div class="flex justify-between items-center">
        <span>{{ session('message') }}</span>
        <button @click="open = false" class="ml-4 text-white hover:text-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
