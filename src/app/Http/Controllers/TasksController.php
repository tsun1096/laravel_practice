<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


use Validator;
use App\Task;

class TasksController extends Controller
{
  public function index()
  {
    return view('tasks');
}

  public function create()
  {
    //
  }

  public function showEditForm(int $id, int $task_id)
{
    $task = Task::find($task_id);

    return view('tasks/edit', [
        'task' => $task,
    ]);
}

  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
        'task' => 'required|max:255',
        'deadline' => 'required',
      ]);
      // バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('tasks.index')
      ->withInput()
      ->withErrors($validator);
  }
  // Eloquentモデル
  $task = new Task;
  $task->task = $request->task;
  $task->deadline = $request->deadline;
  $task->comment = $request->comment;;
  $task->save();
  // ルーティング「tasks.index」にリクエスト送信（一覧ページに移動）
  return redirect()->route('tasks.index');
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $task = Task::find($id);
  return view('taskedit', ['task' => $task]);
  }

  public function update(Request $request, $id)
  {
     //バリデーション
  $validator = Validator::make($request->all(), [
    'task' => 'required|max:255',
    'deadline' => 'required',
  ]);
  //バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('tasks.edit', $id)
      ->withInput()
      ->withErrors($validator);
  }
  //データ更新処理
  $task = Task::find($id);
  $task->task   = $request->task;
  $task->deadline = $request->deadline;
  $task->comment = $request->comment;
  $task->save();
  return redirect()->route('tasks.index');
}

public function edit(int $id, int $task_id, EditTask $request)
{
    // 1
    $task = Task::find($task_id);

    // 2
    $task->title = $request->title;
    $task->status = $request->status;
    $task->due_date = $request->due_date;
    $task->save();

    // 3
    return redirect()->route('tasks.index', [
        'id' => $task->folder_id,
    ]);
}
}
