@extends('layouts.app-lava')

@section('title', 'Add New Video')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="row">
        <div class="col-12">
            <h3 class="py-5 text-center">Add New Video</h3>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <form action="/videos" method="POST" enctype="multipart/form-data">
                    @include('videos.form')

                    <button type="submit" class="btn btn-primary mt-2">Add Video</button>
                </form>
            </div>
        </div>
    </div>

@endsection
