@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{route('todos.save',['id' => $todo-> id])}}" method="post">
            {{ csrf_field()}}
            <input type="text" class="form-control form-control-lg " placeholder="create a new todo" name="todo"
                value="{{$todo ->todo}}">
            <button class="btn btn-primary" type = "submit">Update</button>
        </form>
    </div>
</div>
@endsection