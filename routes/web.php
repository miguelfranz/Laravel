<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('notes.index'));

Route::resource('notes', NoteController::class)->except('show');