@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Create a Post</h1>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">Task Name</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Task name...">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
