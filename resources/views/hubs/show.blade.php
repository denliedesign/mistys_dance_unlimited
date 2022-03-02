@extends('layouts.vanilla')

@section('title', 'Spring Recital Hub | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white py-5">
        <div class="container pb-5">
            @if($hub->hubPdf)
                <img src="{{ asset('/storage/' . $hub->hubPdf) }}" class="img-fluid">
            @endif
            <p class="my-5">{!! $hub->hubContent !!}</p>

            <div class="">
                <a href="/hubs"><button class="btn btn-blue btn-lg text-white">Back To The Hub</button></a>
            </div>

        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
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
