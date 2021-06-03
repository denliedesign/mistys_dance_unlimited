@extends('layouts.vanilla')

@section('title', 'Classes | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <h2 class="text-center">Classes</h2>
            <div class="row" id="fall-select">
                <div class="col">
                    <a href="/summer">
                        <div class="box-one d-flex align-items-center justify-content-center">
                            Summer Schedule
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/fall">
                        <div class="box-two d-flex align-items-center justify-content-center">
                            Fall Schedule
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


