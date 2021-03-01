@extends('layouts.app')


@section('content')


@foreach($posts as $post)

<div class="card flex column">

    <h3>Title: {{$post->title}}</h3>
    <h3>Content: {{$post->body}}</h3>


</div>


@endforeach
@endsection