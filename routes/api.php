<?php

use App\Http\Controllers\TodoListController;
use App\Models\TodoList;
use Illuminate\Support\Facades\Route;


Route::get('todo-list', [TodoListController::class, 'index'])
->name('todo-list.index');

Route::get('todo-list/{todolist}', [TodoListController::class, 'show'])->name('todo-list.show');

Route::post('todo-list', [TodoListController::class, 'store'])
->name('todo-list.store');

Route::delete('todo-list/{todolist}', [TodoListController::class, 'destroy'])
->name('todo-list.destroy');

Route::patch('todo-list/{todolist}', [TodoListController::class, 'update'])
->name('todo-list.update');



