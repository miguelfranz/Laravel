<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    
    public function index()
    {
        $notes = Note::latest()->get();          
        return view('notes.index', compact('notes'));   
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'body'  => 'nullable',
        ]);

        Note::create($data);                    

        return redirect()->route('notes.index')
                         ->with('success', 'Note created!');
    }


    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'body'  => 'nullable',
        ]);

        $note->update($data);                   

        return redirect()->route('notes.index')
                         ->with('success', 'Note updated!');
    }


    public function destroy(Note $note)
    {
        $note->delete();                        

        return redirect()->route('notes.index')
                         ->with('success', 'Note deleted!');
    }
}