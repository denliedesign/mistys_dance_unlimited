@extends('layouts.app-side-mist')

@section('title', 'Add New Community')

@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
    <div class="row">
        <div class="col-12">
            <h3 class="py-5 text-center">Add New Community</h3>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <form action="/communities" method="POST" enctype="multipart/form-data">
                    @include('communities.form')

                    <button type="submit" class="btn btn-primary">Add Community</button>
                </form>
            </div>
        </div>
    </div>

        </div>
    </div>

@endsection
