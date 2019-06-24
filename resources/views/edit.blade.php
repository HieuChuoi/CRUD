<!-- edit.blade.php -->

@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        <b>Edit Post</b>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('posts.update', $post->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}" />
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <input type="text" class="form-control" name="content" value="{{$post->content}}" />
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" name="author" value="{{$post->author}}" />
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
</div>
@endsection