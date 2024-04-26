<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
        </div>
    </div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <x-booklistborrow />
    </div>
    
</x-app-layout>
