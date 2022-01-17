<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
 return view('welcome');
});

Route::get('/todo', [TodoController::class, 'index']);

Route::get('todo/{id}', [TodoController::class, 'show']);

Route::get('createtodo', [TodoController::class, 'create']);

Route::post('addtodo', [TodoController::class, 'addTodo']);


Route::post('/{id}/edith-todo', [TodoController::class, 'SubmitEdith']);
Route::get('mytodo/{id}/edith', [TodoController::class, 'edithForm']);
Route::get('mytodo/{id}/delete', [TodoController::class, 'deleteTodo']);

Route::get('todo/{id}/complete', [TodoController::class, 'task']);