<div>
<ul role="list" class="divide-y divide-gray-100">
@foreach($books as $book)
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-700">Title: {{ $book->title }}</p>
        <p class="text-sm font-semibold leading-5 text-gray-700">Author: {{ $book->author }}</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-700">Description: {{ $book->description }}</p>
        <div class="flex">
          <p class="mt-1 truncate text-xs leading-5 text-gray-400">Categories: </p>
          @foreach ($book->categories as $category)
          <p class="text-xs mt-1 mr-1 border text-red-400"> {{ $category->name }}, </p>
          @endforeach
        </div>
      </div>
    </div>
    
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
    <a href="#" class="rounded-md bg-gray-100 px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-sky-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Borrow a Book</a>
    </div>
  </li>
  @endforeach
</ul>
</div>