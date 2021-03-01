@extends('layouts.dashboard')


@section('content')

@include('layouts.partials.create_btn')

<h1>All posts for the Admin</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Body</th>

            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td scoper="row">{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->body }}</td>


            <td>
                <a href="{{route('admin.posts.show', ['post' => $post->slug])}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>

                <a href="{{route('admin.posts.edit', ['post' => $post->slug])}}" class="btn btn-warning"><i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>

                <form action="{{route('admin.posts.destroy', $post->slug)}}" method="post">
                    @METHOD('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash fa-xs fa-fw"></i></button>
                </form>

            </td>
        </tr>

        @endforeach
    </tbody>
</table>



@endsection