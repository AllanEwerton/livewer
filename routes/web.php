<?php

use App\Livewire\ShowTarefa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tarefas', ShowTarefa::class)->name('tarefas.index');
