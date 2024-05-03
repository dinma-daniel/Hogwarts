<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail</title>
    <link rel="stylesheet" href="/css/hsdemo.css"/>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="my-0 mx-auto">
<div class="my-0 mx-auto">
  <div class="px-4 sm:px-0">
    <h3 class="text-base font-semibold leading-7 text-gray-900">{{ $book->title }}</h3>
  </div>
  <div class="mt-6 border-t border-gray-100">
    <dl class="divide-y divide-gray-100">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Book Author</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $book->author }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Book description</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $book->description }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Categories</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><p>
            @foreach ($book->categories as $category)
                {{ $category->name }}
                @if (!$loop->last)
                    ,
                @endif
            @endforeach
        </p></dd>
      </div>
      
      
    </dl>
  </div>
</div>
</body>
</html>








