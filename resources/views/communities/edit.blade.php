@extends('layouts.app-side-mist')

@section('title', 'Edit Community')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <h3 class="text-center py-5">Edit Community</h3>
    <div class="container pb-5">
        <form action="{{ route('communities.update', ['community' => $community]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('communities.form')

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>

@endsection
