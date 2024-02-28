@extends('layouts.app')
@section('content')
    <div>
    <h1 class="text-4xl">Book</h1>
        <div>
            <a href="{{ route('index') }}">Back</a>
        </div>
        <div>
            <strong>Author:</strong>
            {{ $book->Author }}
        </div>
        <div>
            <strong>Title:</strong>
            {{ $book->Title }}
        </div>
        <div>
            <strong>Publication Year:</strong>
            {{ $book->PublicationYear }}
        </div>
    </div>
@endsection