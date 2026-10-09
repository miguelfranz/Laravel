@extends('layouts.app')

@section('content')
    <h2>Edit Note</h2>
    <form action="{{ route('notes.update', $note) }}" method="POST">
        @method('PUT')
        @include('notes._form')
    </form>
@endsection