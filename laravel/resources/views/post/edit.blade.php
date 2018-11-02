@extends('layouts.main-layout');
@section('container')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Add New Post</h3>
        </div>
		
        <div class="panel-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('message'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('message')  }}</p>
                    </div>
            @endif


            <form action="{{ Route('blog.update',['id' => $post->id ]) }}" method="post">
                <div class="form-group">
                    {{ csrf_field() }}
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{ $post->title  }}" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" value="{{ $post->description  }}" name="description" id="description" placeholder="Description">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

@endsection