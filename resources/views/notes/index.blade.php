@extends('layouts.app')

@section('content')
    <p><a class="btn" href="{{ route('notes.create') }}">+ New Note</a></p>

    @forelse ($notes as $note)
        <div class="note">
            <h3>{{ $note->title }}</h3>
            <p>{{ $note->body }}</p>

            <div class="actions">
                <a href="{{ route('notes.edit', $note) }}">Edit</a>

                <form action="{{ route('notes.destroy', $note) }}" method="POST"
                      onsubmit="return confirm('Delete this note?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <p>No notes yet. Create your first one!</p>
    @endforelse
@endsection