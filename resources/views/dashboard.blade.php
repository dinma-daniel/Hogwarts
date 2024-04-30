<x-app-layout>
    <x-slot name="header">
        <div class="flex align-middle justify-between">
            <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <a href="{{ route('books.index') }}" class="rounded-md bg-gray-100 px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-sky-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Borrow a Book</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white light:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 light:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 flex flex-row ">
        <div class="flex-1 border border-sky-400 p-6 rounded-lg">
        <h1 class="text-black">Borrowed Books📕</h1>
        <x-borrowlist/>
        </div>
        <div class=" p-6">
        </div>
        <div class="flex-1 border border-sky-400 p-6 rounded-lg">
        <h1 class="text-black">New Books available📖</h1>
        <x-booklist />
        </div>
      <br>
    </div>
    
</x-app-layout>
