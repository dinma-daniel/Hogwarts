q@extends('layouts.admin')

@section('content')
    <h1>Books Management</h1>

    <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Add New Book</a>

    @if ($books->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->description }}</td>
                        <td>
                            <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.books.delete', $book->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No books found.</p>
    @endif
@endsection
