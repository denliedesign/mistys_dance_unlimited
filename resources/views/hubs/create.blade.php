@extends('layouts.vanilla')

@section('title', 'Add New Hub')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="row">
            <div class="col-12">
                <h3 class="py-5 text-center">Add New Hub</h3>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <form action="/hubs" method="POST" enctype="multipart/form-data">
                        @include('hubs.form')

                        <button type="submit" class="btn btn-primary">Add Hub</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection
