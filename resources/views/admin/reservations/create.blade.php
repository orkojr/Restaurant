<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex  p-2 m-2">
                <a href="{{ route('admin.reservations.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Reservation Index    </a>
            </div>
            <div class="m-2 p-2" class=" bg-slate-100 rounded">

               <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form  method="POST" action="{{ route('admin.reservations.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-700 ">First Name</label>
                            <div class="mt-1">
                                <input type="text" id="first_name" value="{{old('first_name')}}" name="first_name" class="block  w-full
                                transition appearance-none
                                 text-gray-900 duration-150 bg-gray-50 rounded-lg border border-gray-300  @error('first_name')
                                     border-red-500
                                 @enderror ">

                                 <span class="text-red-500 text-sm">{{ $message }}</span>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-700 ">Last Name</label>
                            <div class="mt-1">
                                <input type="text" id="last_name" value="{{old('last_name')}}" name="last_name" class="block  w-full
                                transition appearance-none
                                 text-gray-900 duration-150 bg-gray-50 rounded-lg border border-gray-300  @error('last_name')
                                     border-red-500
                                 @enderror ">

                                 <span class="text-red-500 text-sm">{{ $message }}</span>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-700 ">Email</label>
                            <div class="mt-1">
                                <input type="email" id="email" value="{{old('email')}}" name="email" class="block  w-full
                                transition appearance-none
                                 text-gray-900 duration-150 bg-gray-50 rounded-lg border border-gray-300  @error('email')
                                     border-red-500
                                 @enderror ">

                                 <span class="text-red-500 text-sm">{{ $message }}</span>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="tel_number" class="block mb-2 text-sm font-medium text-gray-700 ">Phone number</label>
                            <div class="mt-1">
                                <input type="text" id="tel_number" value="{{old('tel_number')}}" name="tel_number" class="block  w-full
                                transition appearance-none
                                 text-gray-900 duration-150 bg-gray-50 rounded-lg border border-gray-300  @error('tel_number')
                                     border-red-500
                                 @enderror ">

                                 <span class="text-red-500 text-sm">{{ $message }}</span>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="res_date" class="block mb-2 text-sm font-medium text-gray-700 ">Reservation date</label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" value="{{old('res_date')}}" name="res_date" class="block  w-full
                                transition appearance-none
                                 text-gray-900 duration-150 bg-gray-50 rounded-lg border border-gray-300  @error('res_date')
                                     border-red-500
                                 @enderror ">

                                 <span class="text-red-500 text-sm">{{ $message }}</span>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block mb-2 text-sm font-medium text-gray-700 ">Guest Numbe</label>
                            <div class="mt-1">
                                <input type="number" min="1" max="50" id="guest_number" name="guest_number" class="block  w-full
                                transition appearance-none
                                 text-gray-900 duration-150 bg-gray-50 rounded-lg border border-gray-300  ">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="table_id" class="block mb-2 text-sm font-medium  text-gray-700 dark:text-gray-300">Table</label>
                            <div class="mt-1">
                                <select class=" form-multiselect block w-full mt-1 border border-gray-300 " id="table_id" name="table_id">
                                    @foreach (App\Enums\TableStatus::cases() as $status)
                                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-lg">Store</button>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</x-admin-layout>
