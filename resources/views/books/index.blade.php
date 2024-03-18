@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Books</h1>
    <table class="border-solid border-2 border-indigo-600">
        <tr>
            <th class="px-8 py-4">No</th>
            <th class="px-8 py-4">Author</th>
            <th class="px-8 py-4">Title</th>
            <th class="px-8 py-4">Publication Year</th>
            <th class="px-8 py-4"></th>
            <th class="px-8 py-4"></th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td class="border-solid border-2 border-indigo-600 px-8 py-4">{{ ++$i }}</td>
                <td class="border-solid border-2 border-indigo-600 px-8 py-4">{{ $book->Author }}</td>
                <td class="border-solid border-2 border-indigo-600 px-8 py-4">{{ $book->Title }}</td>
                <td class="border-solid border-2 border-indigo-600 px-8 py-4">{{ $book->PublicationYear }}</td>
                <td class="border-solid border-2 border-indigo-600 px-8 py-4"><a href="http://localhost:8000/book/{{ $i }}">Edit</a></td>
                <td class="border-solid border-2 border-indigo-600 px-8 py-4">{{ $book->PublicationYear }}</td>
            </tr>
        @endforeach
    </table>
@endsection