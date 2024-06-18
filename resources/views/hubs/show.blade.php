@extends('layouts.app-side-mist')

@section('title', 'Spring Recital Hub | Misty\'s Dance Unlimited')

@section('content')

    <div class="bg-white py-5">
        <div class="mx-4 pb-5 poppins">

                <img src="{{ asset('/storage/' . $hub->hubImage) }}" alt="" class="img-fluid" style="max-width: 400px; width: 100%; height: auto;">


            <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">{{ $hub->hubTitle }}</h1>

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
