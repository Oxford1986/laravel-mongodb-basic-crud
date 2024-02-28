@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Books</h1>
    <table class="border-solid border-2 border-indigo-600">
        <tr class="border-solid border-2 border-indigo-600">
            <th>No</th>
            <th>Author</th>
            <th>Title</th>
            <th>Publication Year</th>
        </tr>
        @foreach ($books as $book)
            <tr class="border-solid border- border-indigo-600">
                <td>{{ ++$i }}</td>
                <td>{{ $book->Author }}</td>
                <td>{{ $book->Title }}</td>
                <td>{{ $book->PublicationYear }}</td>
            </tr>
        @endforeach
    </table>
@endsection