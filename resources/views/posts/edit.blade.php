@extends('layouts.app-lava')

@section('title', 'Edit Post')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <h3 class="text-center py-5">Edit Post</h3>

    <div class="container pb-5">
        <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('posts.form')

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>

@endsection
