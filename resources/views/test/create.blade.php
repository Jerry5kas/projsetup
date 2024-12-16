<x-layouts.guest>
    <div class=" bg-gray-600/20 h-screen flex-col flex justify-center items-center font-lex space-y-5 ">
        <div class="text-gray-600 font-merri text-2xl">Testing</div>
        <form action="{{ route('test.store') }}" method="POST"
              class="w-8/12 p-5 flex-col flex gap-5 bg-white rounded-md">
            @csrf
            <div class="flex gap-5 w-full">
            <div class="w-full flex flex-col gap-y-5">
                <input type="text" name="f_name" placeholder="First Name" value="{{ old('f_name') }}"
                       class="border p-2 rounded text-xs">
                @error('f_name')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                <input type="text" name="l_name" placeholder="Last Name" value="{{ old('l_name') }}"
                       class="border p-2 rounded text-xs">
                @error('l_name')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
                       class="border p-2 rounded text-xs">
                @error('name')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror

                <input type="text" name="age" placeholder=" Age" value="{{ old('age') }}"
                       class="border p-2 rounded text-xs">
                @error('age')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror

                <input type="text" name="phone" placeholder=" Phone " value="{{ old('phone') }}"
                       class="border p-2 rounded text-xs">
                @error('phone')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror

                <input type="email" name="mail" placeholder=" Email " value="{{ old('mail') }}"
                       class="border p-2 rounded text-xs">
                @error('mail')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror

                <div class="flex-col flex text-xs">
                    <label for="" class="text-gray-400 px-3 ">Date</label>
                <input type="date" name="date" placeholder=" Date " value="{{ old('date') }}"
                       class="border p-2 rounded text-xs">
                @error('date')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                </div>
                <div class="flex-col flex text-xs">
                    <label for="" class="text-gray-400 px-3 ">Start Date</label>
                <input type="date" name="s_date" placeholder=" Start Date " value="{{ old('s_date') }}"
                       class="border p-2 rounded text-xs">
                @error('s_date')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                </div>

                <div class="flex-col flex text-xs">
                    <label for="" class="text-gray-400 px-3 ">End Date</label>
                <input type="date" name="e_date" placeholder=" End Date " value="{{ old('e_date') }}"
                       class="border p-2 rounded text-xs">
                @error('e_date')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="w-full flex flex-col gap-y-5">
                <textarea name="body_1" placeholder=" Description 1"
                          class="border p-2 rounded text-xs">{{ old('body_1') }}</textarea>
                @error('body_1')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                <textarea name="body_2" placeholder=" Description 2"
                          class="border p-2 rounded text-xs">{{ old('body_2') }}</textarea>
                @error('body_2')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                <textarea name="body_3" placeholder=" Description 3"
                          class="border p-2 rounded text-xs">{{ old('body_3') }}</textarea>
                @error('body_3')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror

                <input type="text" name="city" placeholder="City" value="{{ old('city') }}"
                       class="border p-2 rounded text-xs">
                @error('city')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                <input type="text" name="state" placeholder="State" value="{{ old('state') }}"
                       class="border p-2 rounded text-xs">
                @error('state')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                <input type="text" name="country" placeholder="Country" value="{{ old('country') }}"
                       class="border p-2 rounded text-xs">
                @error('country')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror

                <input type="text" name="opening_amount" placeholder="Opening Amount"
                       value="{{ old('opening_amount') }}"
                       class="border p-2 rounded text-xs">
                @error('opening_amount')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
                <input type="text" name="balance" placeholder="Balance" value="{{ old('balance') }}"
                       class="border p-2 rounded text-xs">
                @error('balance')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror

                <div class="flex gap-x-3 text-xs text-gray-700">
                    <label for="">Status</label>
                    <input type="checkbox" name="is_active" {{ old('is_active') ? 'checked' : '' }}>
                </div>
                @error('is_active')
                <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
            </div>

            </div>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Save</button>
        </form>
    </div>
</x-layouts.guest>

