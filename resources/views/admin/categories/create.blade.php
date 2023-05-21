<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex  p-2 m-2">
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Category Index    </a>
            </div>
            <div class="m-2 p-2" class=" bg-slate-100 rounded">

               <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.categories.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-700 ">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name"  class="block  w-full
                                transition appearance-none
                                 text-gray-900 duration-150 bg-gray-50 rounded-lg border border-gray-300  @error('name')
                                     border-red-500
                                 @enderror  ">
                                 @error('name')
                                 <span class="text-red-500 text-sm">{{ $message }}</span>
                             @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Image</label>
                            <div class="mt-1">
                                <input type="file" id="image" value="{{old('name')}}" name="image" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 ">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                            <div class="mt-1">

                                <textarea  id="description" value="{{old('description')}}" name="description" class="border-gray-300 shadow-sm @error('description')
                                    border-red-500
                                @enderror focus:ring-indigo-500 appearance-none bg-white border rounded-lg py-2 px-3 text-base leading-normal w-full" placeholder="Leave a comment...">

                                </textarea>
                                @error('description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror

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
