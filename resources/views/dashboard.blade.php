<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 flex flex-row ">
        <div class="flex-1 ">
        <h1 class="text-white">Borrowed Books📕</h1>
            <!-- hello1 -->
        <x-borrowlist/>
        </div>
        <div class=" p-6">
           
        <!-- <x-borrowlist/> -->
        </div>
        <div class="flex-1 ">
        <h1 class="text-white">New Books available📖</h1>
            <!-- hello3 -->
        <x-booklist />
        </div>
        <!-- <x-borrowlist class="flex-1"/> -->
            <!-- <x-booklist class="flex-1"/> -->
        
      <br>
    </div>
    
</x-app-layout>
