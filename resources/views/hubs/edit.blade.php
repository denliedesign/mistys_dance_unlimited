@extends('layouts.vanilla')

@section('title', 'Edit Hub')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <h3 class="text-center py-5">Edit Hub</h3>
        <div class="container pb-5">
            <form action="{{ route('hubs.update', ['hub' => $hub]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('hubs.form')

                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection
