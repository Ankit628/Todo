@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 text-center">
        <div class="text-center">
            <h1>Todo List</h1>
        </div>
        <form action="/create/todo" method="post">
            {{ csrf_field()}}
            <input type="text" class="form-control form-control-lg " placeholder="create a new todo" name="newTodo">
        </form>
    </div>
</div>
<hr>
@foreach ($todos as $todo)

<div class="herotext">
    {{$todo->todo}}
    <a href="{{route('todo.delete', ['id'=> $todo-> id])}}" class="btn btn-danger">X</a>
    <a href="{{route('todo.update', ['id'=> $todo-> id])}}" class="btn btn-primary">Update</a>
    @if (!$todo->completed)
    <a href="{{route('todos.completed', ['id' => $todo-> id])}}" class="btn btn-warning" value = 'true'>Mark as completed</a>
    @else
    <a href="javascript:void(0)" class="btn btn-success">Completed</a>
    @endif
</div>
<hr>
@endforeach
@endsection