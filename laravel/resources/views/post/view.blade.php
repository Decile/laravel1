@extends('layouts.main-layout');
@section('container')
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id  }}</td>
                <td>{{ $post->title  }}</td>
                <td>{{ $post->description  }}</td>
                <td><a href="{{ Route('blog.edit',['id' => $post->id ]) }}">Edit</a> |
                    <a href="{{ Route('blog.delete',['id' => $post->id ]) }}">Delete</a> </td>
            </tr>
        @endforeach

    </table>
@endsection