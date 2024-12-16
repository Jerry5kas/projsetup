<x-layouts.app header="Testing">
    <div class="space-y-5 p-5">
        <div class="4/12 mx-auto flex ">
            <div class="w-full text-center">Test data</div>
            <a href="{{ route('test.create') }}" class=" px-6 py-2 bg-blue-600 text-white">Add</a>
        </div>
        <div>
            @foreach ($tests as $index => $test)
                <div class="w-11/12 text-xs justify-between flex gap-x-5 p-5 border border-collapse text-blue-800 font-lex mx-auto">
                    <div class="text-red-600">{{ $index + 1 }}</div>
                    <div class="">{{ $test->name }}</div>
                    <div class="">{{ $test->f_name }}</div>
                    <div class="">{{ $test->l_name }}</div>
                    <div class="">{{ $test->age }}</div>
                    <div class="">{{ $test->phone }}</div>
                    <div class="">{{ $test->date }}</div>
                    <div class="">{{ $test->s_date }}</div>
                    <div class="">{{ $test->e_date }}</div>
                    <div class="">{{ $test->body_1 }}</div>
                    <div class="">{{ $test->body_2}}</div>
                    <div class="">{{ $test->body_3}}</div>
                    <div class="">{{ $test->city}}</div>
                    <div class="">{{ $test->state}}</div>
                    <div class="">{{ $test->country}}</div>
                    <div class="">{{ $test->opening_amount}}</div>
                    <div class="">{{ $test->balance}}</div>
                    <div class="">{{ $test->is_active ? 'Active' : 'Inactive' }}</div>
                    <div class="max-h-max border text-red-600 text-center flex justify-center items-center">
                        <a href="{{ route('test.delete', $test->id) }}">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
{{--         <div>--}}
{{--            <div class="w-8/12 mx-auto">Contacts</div>--}}
{{--            @foreach ($contacts as $index => $contact)--}}
{{--                <div class="w-8/12 text-xs flex gap-x-5 p-5 border border-collapse text-blue-800 font-lex mx-auto ">--}}
{{--                    <div class="w-1/6 text-red-600">{{ $index + 1 }}</div>--}}
{{--                    <div class="w-1/6">{{ $contact->name }}</div>--}}
{{--                    <div class="w-1/6">{{ $contact->email }}</div>--}}
{{--                    <div class="w-1/6">{{ $contact->phone }}</div>--}}
{{--                    <div class="w-1/6">{{ $contact->adrs_1 }}</div>--}}
{{--                    <div class="w-1/6">{{ $contact->adrs_2 }}</div>--}}
{{--                    <div class="w-1/6">{{ $contact->city }}</div>--}}
{{--                    <div class="w-1/6">{{ $contact->state }}</div>--}}
{{--                    <div class="w-1/6">{{ $contact->pincode }}</div>--}}
{{--                    <div class="w-1/6">{{ $contact->active_id ? 'Active' : 'Inactive' }}</div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
    </div>

</x-layouts.app>
