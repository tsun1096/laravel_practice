<!doctype html>
<html lang="ja">
  <head>
    <title>Jum taskリスト</title>
  <!-- 必要なメタタグ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top:50px;">
    <h1>taskリスト追加</h1>

    <form action='{{ url('/tasks')}}' method="post">
      {{csrf_field()}}
  <div class="form-group">
    <label >やることを追加してください</label>
    <input type="text" name="name"class="form-control" placeholder="task list" style="max-width:1000px;">
  </div>
  <button type="submit" class="btn btn-primary">追加する</button>  </form>

    <h1 style="margin-top:50px;">taskリスト</h1>
    <table class="table table-striped" style="max-width:1000px; margin-top:20px;">
    <!-- <thead>
    <tr>
      <th></th><th></th><th></th>
    </tr>
  </thead> -->
  <tbody>
    @foreach ($tasks as $task)
    <tr>
      <td>{{$task->name}}</td>
      <td><form action="{{ action('tasksController@edit', $task) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('get') }}
          <button type="submit" class="btn btn-primary">編集</button>
      </form>
      </td>

      <!-- 削除ボタン -->
      <td><form action="{{url('/tasks', $task->id)}}" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <button type="submit" class="btn btn-danger">削除</button>
      </form>
      </td>

      <!-- 削除した際にポップ画面で確認をする -->
      <!-- <td><a class="del" data-id="{{ $task->id }}" href="#">削除</a>
        <form method="post" action='{{ url('/tasks', $task->id) }}' id="form_{{ $task->id}}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      </td> -->
    </tr>
    @endforeach
  </table>
</div>
  <!-- オプションのJavaScript -->
  <!-- 最初にjQuery、次にPopper.js、次にBootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
    (function() {
  'use strict';

  var cmds = document.getElementsByClassName('del');
  var i;

  for (i = 0; i < cmds.length; i++) {
    cmds[i].addEventListener('click', function(e) {
      e.preventDefault();
      if (confirm('are you sure?')) {
        document.getElementById('form_' + this.dataset.id).submit();
      }
    });
  }

})();
</script>
  </body>
</html>
