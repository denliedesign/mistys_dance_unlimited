@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">{{ $update->title }}</h1>
        <p>
            {!! $update->description !!}
        </p>
    </div>
    @include('footer')
@endsection
