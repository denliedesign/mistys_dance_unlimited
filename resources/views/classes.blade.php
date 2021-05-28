@extends('layouts.vanilla')

@section('title', '2020-2021 Fall Schedule | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <h2 class="text-center">Classes</h2>
            <p class="text-center">
                Online Registration begins Sat. June 5th at 8 AM
                <br>Classes begin Wed., Aug. 18th
            </p>
            <div class="row" id="fall-select">
                <div class="col">
                    <a href="/fall-studio">
                        <div class="box-three d-flex align-items-center justify-content-center">
                            Summer Classes
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/fall-online">
                        <div class="box-four d-flex align-items-center justify-content-center">
                            Fall Classes
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection


