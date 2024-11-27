<x-layouts.app header="Testing">
    <div class="space-y-5 p-5">
        <div class="4/12 mx-auto flex ">
            <div class="w-full text-center">Test data</div>
            <a href="{{ route('test.create') }}" class=" px-6 py-2 bg-blue-600 text-white">Add</a>
        </div>
        <div>
            @foreach ($tests as $index => $test)
                <div class="w-4/12 text-xs flex gap-x-5 p-5 border border-collapse text-blue-800 font-lex mx-auto">
                    <div class="w-1/6 text-red-600">{{ $index + 1 }}</div>
                    <div class="w-1/6">{{ $test->name }}</div>
                    <div class="w-1/6">{{ $test->description }}</div>
                    <div class="w-1/6">{{ $test->count }}</div>
                    <div class="w-1/6">{{ $test->value }}</div>
                    <div class="w-1/6">{{ $test->is_active ? 'Active' : 'Inactive' }}</div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>