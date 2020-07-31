@extends('layouts.app')

@section('title', '2020-2021 Fall Schedule | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <div class="row" id="fall-select">
            <div class="col">
                <a href="/fall-studio">
                    <div class="box-three d-flex align-items-center justify-content-center">
                        In-Studio Classes with Livestream Backup
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/fall-online">
                    <div class="box-four d-flex align-items-center justify-content-center">
                        Online & Pre-Recorded Classes
                    </div>
                </a>
            </div>
        </div>
    </div>

    @include('footer')

@endsection


