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
                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.categories.update', $category->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-700 ">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name"
                                    name="name"
                                    value="{{ $category->name}}"
                                    class="block  w-full transition appearance-none
                                    text-gray-900 duration-150 bg-gray-50 rounded-lg border border-gray-300  ">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Image</label>
                            <div>
                                <img src="{{ Storage::url($category->image)}}" class=" w-32 h-32">
                            </div>
                            <div class="mt-1">
                                <input type="file" id="image" value="{{ $category->image}}" name="image" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 ">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                            <div class="mt-1">

                                <textarea  id="description" name="description"  rows="4" class="block p-2.5 w-full  text-gray-900 bg-gray-50 rounded-lg border border-gray-300 " placeholder="Leave a comment...">
                                    {{ $category->description}}
                                </textarea>

                            </div>
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-lg">Update</button>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</x-admin-layout>
