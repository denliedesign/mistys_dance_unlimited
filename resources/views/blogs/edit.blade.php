@extends('layouts.app-lava')

@section('title', 'Edit Blog Post')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <h3 class="text-center py-5">Edit Blog Post</h3>

    <div class="container pb-5">
        <form action="{{ route('blogs.update', ['blog' => $blog]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('blogs.form')

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>

@endsection
