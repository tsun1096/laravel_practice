@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <h1 class="text-center">編集</h1>

            <form action="{{ route('tasks.update', [$task->id]) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="updatedTaskName" class="form-control input-lg" value="{{ $task->name }}">
                </div>

                <div class="form-group">
                    <input type="submit" value="編集完了" class="btn btn-success btn-lg">
                    <a href="{{ route('tasks.index') }}" class="btn btn-danger btn-lg float-right">一覧に戻る</a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
