<?php

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

use App\Task;
use Illuminate\Http\Request;

Route::resource('/tasks', 'TasksController'); {
};
// Route::get('/', function () {

// Route::get('/folders/{id}/tasks/{tasks}/edit', 'TaskController@showEditForm')->name('taskedit');



/* 削除機能　*/
Route::POST('/tasks', 'TasksController@destroy' ); {
//     $task->delete();
//     return redirect('/');
 };

// /*　タスク追加　*/
// Route::post('/task', function (Request $request) {
//     $validator = Validator::make($request->all(), [
//         'name' => 'required|max:10',
//     ]);

//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }

//     $task = new Task;
//     $task->name = $request->name;
//     $task->save();

//     return redirect('/');

// Route::post('/folders/{id}/tasks/{tasks}/edit', 'TaskController@edit');
// });
