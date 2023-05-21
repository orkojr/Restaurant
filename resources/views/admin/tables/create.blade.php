<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex  p-2 m-2">
                <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Menu Index    </a>
            </div>
            <div class="m-2 p-2" class=" bg-slate-100 rounded">

               <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form  method="POST" action="{{ route('admin.tables.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-700 ">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" class="block  w-full
                                transition appearance-none
                                 text-gray-900 duration-150 bg-gray-50 rounded-lg border border-gray-300  ">
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
                            <label for="status" class="block mb-2 text-sm font-medium  text-gray-700 dark:text-gray-300">Status</label>
                            <div class="mt-1">
                                <select class=" form-multiselect block w-full mt-1 border border-gray-300 " id="status" name="status">
                                    @foreach (App\Enums\TableStatus::cases() as $status)
                                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="location" class="block mb-2 text-sm font-medium  text-gray-700 dark:text-gray-300">Location</label>
                            <div class="mt-1">
                                <select class=" form-multiselect block w-full mt-1 border border-gray-300" id="location" name="location">
                                    @foreach (App\Enums\TableLocation::cases() as $location)
                                        <option value="{{ $location->value }}">{{ $location->name }}</option>
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
