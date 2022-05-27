@extends('layouts.vanilla')

@section('title', '2020-2021 Fall Schedule | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <h2 class="text-center">2022-23 Class Schedule</h2>
            <p class="text-center">
                Online Enrollment Begins Saturday, June 4th at 8:00am.
                <br>
                Classes Begin August 18th
{{--                It’s not too late to join the fun – enrollment ends January 31st--}}
{{--                <br>--}}
{{--                Sign up <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">HERE</a>--}}
            </p>
            <div class="text-center d-flex d-inline justify-content-center">
                <div class="mx-3 px-3">
                    <a href="/images/schedule-22-23.pdf" target="_blank"><button class="btn btn-danger btn-lg">VIEW CLASS SCHEDULE PDF</button></a>
                </div>
{{--                <div class="mx-3 px-3">--}}
{{--                    <a href="/images/fall-dress-code-10-9.pdf" target="_blank"><button class="btn btn-danger btn-lg">DRESS CODE</button></a>--}}
{{--                </div>--}}
            </div>
            <div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
                    <img src="/images/schedule-22-23-1.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-2.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-3.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-4.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-5.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-6.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-7.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-8.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-9.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-10.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-11.jpg" alt="fall schedule" class="img-fluid p-3">
                    <img src="/images/schedule-22-23-12.jpg" alt="fall schedule" class="img-fluid p-3">
                </div>
            </div>
            {{--        <div class="row" id="fall-select">--}}
            {{--            <div class="col">--}}
            {{--                <a href="/fall-studio">--}}
            {{--                    <div class="box-three d-flex align-items-center justify-content-center">--}}
            {{--                        In-Studio Classes with Livestream Backup--}}
            {{--                    </div>--}}
            {{--                </a>--}}
            {{--            </div>--}}
            {{--            <div class="col">--}}
            {{--                <a href="/fall-online">--}}
            {{--                    <div class="box-four d-flex align-items-center justify-content-center">--}}
            {{--                        Online & Pre-Recorded Classes--}}
            {{--                    </div>--}}
            {{--                </a>--}}
            {{--            </div>--}}
            {{--        </div>--}}
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection


