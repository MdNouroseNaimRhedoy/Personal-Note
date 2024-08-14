<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'welcome'])->name('welcome');


//Route::get('/note', [NoteController::class,'index'])->name('note.index');
//Route::get('/note/create', [NoteController::class,'create'])->name('note.create');
//Route::post('/note', [NoteController::class,'store'])->name('note.store');
//Route::get('/note/{id}', [NoteController::class,'show'])->name('note.show');
//Route::put('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
//Route::delete('/note/{id}', [NoteController::class,'destroy'])->name('note.destroy');

// 7 lines in 1 line
Route::resource('note',NoteController::class);