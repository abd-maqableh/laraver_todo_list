@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>{{$page_title}}</h2>
        <h1>List of Posts</h1>
        @if(count($my_posts) > 0)
            <ul>
                @foreach($my_posts as $post)
                    <li>{{$post->name}}</li>
                @endforeach
            </ul>
        @else
            <p>No Records Found</p>
        @endif
    </div>
@endsection
