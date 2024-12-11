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

         <div>
            <div class="w-8/12 mx-auto">Contacts</div>
            @foreach ($contacts as $index => $contact)
                <div class="w-8/12 text-xs flex gap-x-5 p-5 border border-collapse text-blue-800 font-lex mx-auto ">
                    <div class="w-1/6 text-red-600">{{ $index + 1 }}</div>
                    <div class="w-1/6">{{ $contact->name }}</div>
                    <div class="w-1/6">{{ $contact->email }}</div>
                    <div class="w-1/6">{{ $contact->phone }}</div>
                    <div class="w-1/6">{{ $contact->adrs_1 }}</div>
                    <div class="w-1/6">{{ $contact->adrs_2 }}</div>
                    <div class="w-1/6">{{ $contact->city }}</div>
                    <div class="w-1/6">{{ $contact->state }}</div>
                    <div class="w-1/6">{{ $contact->pincode }}</div>
                    <div class="w-1/6">{{ $contact->active_id ? 'Active' : 'Inactive' }}</div>
                </div>
            @endforeach
        </div>
    </div>

    <div x-data="{ open: false }" class="p-24">
        <!-- Card 1 -->
        <div x-show="!open" class="w-40 h-40 rounded-md bg-blue-600 text-white">
            <button @click="open = true" class="bg-yellow-400">btn 1</button>
            <div>Card 1.</div>
            <div>At.</div>
            <div>Rerum?</div>
            <div>Consequuntur.</div>
        </div>

        <!-- Card 2 -->
        <div x-show="open" class="w-40 h-40 rounded-md bg-blue-600 text-white">
            <button @click="open = false" class="bg-red-400">btn 2</button>
            <div>Card 2.</div>
            <div>At.</div>
            <div>Rerum?</div>
            <div>Consequuntur.</div>
        </div>
    </div>
</x-layouts.app>
