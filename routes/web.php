<?php
use App\Task;

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

Route::get('/tasks', function () {
    $data=App\Task::all();
    $task = new Task;
    $data = $task->all();
    return view('tasks')->with('tasks',$data);
});

Route::post('/saveTask','Taskcontroller@store');

Route::get('/markascompleted/{id}','Taskcontroller@UpdateAsCompleted');

Route::get('/markasnotcompleted/{id}','Taskcontroller@UpdateAsNotCompleted');

Route::get('/deletetask/{id}','Taskcontroller@DeleteTask');

Route::get('/updatetask/{id}','Taskcontroller@updateTask');

Route::get('/updatenewtask','Taskcontroller@updatenewtask');