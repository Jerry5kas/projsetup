<x-layouts.app header="Testing">
    <div class="space-y-5 p-5">
        <div class="4/12 mx-auto flex ">
            <div class="w-full text-center">Test data</div>
            <a href="{{ route('test.create') }}" class=" px-6 py-2 bg-blue-600 text-white">Add</a>
        </div>
        <table class="w-11/12 mx-auto text-xs text-center border">
            <tr class="border">
                <th width="10%">S No</th>
                <th width="10%">Name</th>
                <th width="10%">First name</th>
                <th width="10%">Data</th>
                <th width="30%">Description</th>
                <th width="10%">Opening Amount</th>
                <th width="10%">Balance</th>
                <th width="10%">Status</th>            </tr>
            @foreach ($tests as $index => $test)
                <tr class="border">
                    <td class="text-red-600">{{ $index + 1 }}</td>
                    <td class="">{{ $test->name }}</td>
                    <td class="">{{ $test->f_name }}</td>
{{--                    <td class="">{{ $test->l_name }}</div>--}}
{{--                    <td class="">{{ $test->age }}</td>--}}
{{--                    <td class="">{{ $test->phone }}</td>--}}
                    <td class="">{{ $test->date }}</td>
{{--                    <td class="">{{ $test->s_date }}</td>--}}
{{--                    <td class="">{{ $test->e_date }}</td>--}}
                    <td class="">{{ $test->body_1 }}</td>
{{--                    <td class="">{{ $test->body_2}}</td>--}}
{{--                    <td class="">{{ $test->body_3}}</td>--}}
{{--                    <td class="">{{ $test->city}}</td>--}}
{{--                    <td class="">{{ $test->state}}</td>--}}
{{--                    <td class="">{{ $test->country}}</td>--}}
                    <td class="">{{ $test->opening_amount}}</td>
                    <td class="">{{ $test->balance}}</td>
                    <td class="">{{ $test->is_active ? 'Active' : 'Inactive' }}</td>
{{--                    <div class="max-h-max border text-red-600 text-center flex justify-center items-center">--}}
{{--                        <a href="{{ route('test.delete', $test->id) }}">Delete</a>--}}
{{--                    </div>--}}
                </tr>
            @endforeach
        </table>
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

                    <div class="w-8/12 mx-auto">Contacts</div>
                    @foreach ($categories as $index => $category)
                        <div class="w-8/12 text-xs flex gap-x-5 p-5 border border-collapse text-blue-800 font-lex mx-auto ">
                            <div class="w-1/6 text-red-600">{{ $index + 1 }}</div>
                            <div class="w-1/6">{{ $category->name }}</div>
                            <div class="w-1/6">{{ $category->is_active ? 'Active' : 'Inactive' }}</div>
                        </div>
                    @endforeach
                </div>
    </div>

</x-layouts.app>
