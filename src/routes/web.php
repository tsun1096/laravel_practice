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

Route::resource('/tasks', 'TasksController');

// Route::get('/', function () {

// Route::get('/folders/{id}/tasks/{tasks}/edit', 'TaskController@showEditForm')->name('taskedit');




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



// Route::post('/folders/{id}/tasks/{tasks}/edit', 'TaskController@edit');
// });




//  Laravelの教材コードここからスタート

// Route::get('hello/{id?}/{pass?}', 'TasksController@index');
// Route::get('hello', 'TasksController@index');
// Route::get('hello/other', 'TasksController@other');
// シングルアクションコントローラ
// Route::get('/hello', 'TasksController');
//  ルートパラメータ
//  Route::get('/hello/{msg?}',function ($msg='no message.') {
//  $html = <<<EOF
//  <html>
//  <head>
//  <title>Hello</title>
//  <style>
//  body {font-size: 20px; color: #999; }
//  h1 {font-size: 100px; text-align: right; color: #eee;
//      margin: 140px 30 150px 0; }
//  </style>
//  </head>
//  <body>
//      <h1>Hello</h1>
//      <p>{$msg}</p>
//      <p>これは、サンプルで作ったページです。</p>
//  </body>
//  </html>
//  EOF;
//      return $html;
//  });
//  Route::get('hello/{id?}', 'TasksController@index');
//  Route::get('hello', 'TasksController@index');
//  Route::post('hello', 'TasksController@post');
//  Laravelの教材コードここまで
