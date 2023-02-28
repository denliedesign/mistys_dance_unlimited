@extends('layouts.app-lava')

@section('title', 'Spring Recital Hub | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container pb-5">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('/storage/' . $hub->hubImage) }}" alt="" class="img-fluid" style="max-width: 400px; height: auto;">
            </div>
            <h3 class="text-center py-5 font-staat" style="font-size: 100px; line-height: 0.9em;">{{ $hub->hubTitle }}</h3>
            @if($hub->hubPdf)
                <img src="{{ asset('/storage/' . $hub->hubPdf) }}" class="img-fluid">
            @endif
            <p class="my-5">{!! $hub->hubContent !!}</p>

            <div class="">
                <a href="/hubs"><button class="btn btn-blue btn-lg text-white">Back To The Hub</button></a>
            </div>

        </div>
    </div>

@endsection

{{--<style>--}}
{{--    h2 {--}}
{{--        background: #008cc0;--}}
{{--        color: white;--}}
{{--        padding: 5px;--}}
{{--        border-radius: 5px;--}}
{{--        box-shadow: 2px 2px 3px rgba(0,0,0,0.6),--}}
{{--                    -2px -2px 6px rgba(255,255,255,1);--}}
{{--    }--}}
{{--</style>--}}
