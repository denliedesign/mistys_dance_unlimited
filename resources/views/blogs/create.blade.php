@extends('layouts.app-lava')

@section('title', 'Add New Blog Post')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <h3 class="text-center py-5">Add New Blog Post</h3>

    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <form action="/blogs" method="POST" enctype="multipart/form-data">
                    @include('blogs.form')

                    <button type="submit" class="btn btn-primary">Add Blog Post</button>
                </form>
            </div>
        </div>
    </div>

@endsection
