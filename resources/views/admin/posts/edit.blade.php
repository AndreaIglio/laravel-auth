@extends ('layouts.dashboard')


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

<form action="{{route('admin.posts.update', $post->slug)}}" class="flex column" method="post">
    @METHOD ('PATCH')
    @csrf

    <label for="title">Title</label>
    <input type="text" name="title" value="{{$post->title}}">

    <label for="body">Content</label>
    <textarea id="body" name="body" rows="10" cols="4">{{$post->body}}</textarea>




    <button type="submit" class="btn btn-dark">Edit</button>



</form>



@endsection