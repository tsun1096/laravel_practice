<?php

public function update(Request $request, $id)
{
  $task = Task::find($id);
  return view('taskedit', ['task' => $task]);
}
{
  //バリデーション
  $validator = Validator::make($request->all(), [
    'task' => 'required|max:255',
    // 下記を追記
    'deadline' => 'required',
  ]);
  //バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('tasks.index')
      ->withInput()
      ->withErrors($validator);
  }
  // Eloquentモデル
  $task = new Task;
  $task->task = $request->task;
  // 下記のように編集
  $task->deadline = $request->deadline;
  $task->comment = $request->comment;;
  // ここまで編集
  $task->save();
  //「/」ルートにリダイレクト
  return redirect()->route('tasks.index');

}
