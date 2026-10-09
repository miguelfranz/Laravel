@extends('layouts.app')

@section('content')
    <h2>New Note</h2>
    <form action="{{ route('notes.store') }}" method="POST">
        @include('notes._form')
    </form>
@endsection