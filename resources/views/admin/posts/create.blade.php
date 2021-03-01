@extends('layouts.dashboard')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br />
@endif




<form action="{{route('admin.posts.store')}}" method="post" class="flex column">
    @csrf

    <label for="title">Title</label>
    <input type="text" name="title" value="{{$post->title}}">

    <label for="body">Content</label>
    <textarea id="body" name="body" rows="10" cols="4"></textarea>


    <button type="submit" class="btn btn-dark">Create</button>



</form>



@endsection