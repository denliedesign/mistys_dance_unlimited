@extends('layouts.app')

@section('title', 'Add New Article')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="row">
        <div class="col-12">
            <h3 class="py-5 text-center">Add New Article</h3>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <form action="/articles" method="POST" enctype="multipart/form-data">
                    @include('articles.form')

                    <button type="submit" class="btn btn-primary">Add Article</button>
                </form>
            </div>
        </div>
    </div>

    @include('footer')

@endsection
