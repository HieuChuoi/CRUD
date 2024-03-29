<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        <b>Add Post</b>
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
        <form method="post" action="{{ route('posts.store') }}">
            <div class="form-group">
                @csrf
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" />
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" name="content" />
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="author" />
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
</div>
@endsection