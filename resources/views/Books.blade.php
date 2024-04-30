<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1>Here are the available books in catalogue.📑</h1>
        </div>
    </div>
    
    <div class="mx-auto max-w-7xl py-2 sm:px-6 lg:px-8">
      <x-booklistborroww :books="$books" />
    </div>
    
</x-app-layout>
