@extends('layouts.app')

@section('title', '2020-2021 Fall Schedule | Misty\'s Dance Unlimited')

@section('content')

    {{--    <div class="summer-banner-wrap d-none d-md-block">--}}
    {{--        <div class="fall-banner"></div>--}}
    {{--    </div>--}}

    {{--    <div class="d-block d-md-none">--}}
    {{--        <img src="images/fall1.jpg" alt="" style="width: 100%;">--}}
    {{--    </div>--}}

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container" id="summer">
            <h3 class="text-center"><a href="/images/2020-fall-schedule.pdf" target="_blank">2020-2021 Schedule</a></h3>
            <div class="text-center">
                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">REGISTER HERE!</button></a>
            </div>
            <img src="images/fall1.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/fall2.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/fall3.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/fall4.jpg" alt="" class="img-thumbnail my-3" id="preschool">
            <img src="images/fall5.jpg" alt="" class="img-thumbnail my-3" id="elementary">
            <img src="images/fall6.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/fall7.jpg" alt="" class="img-thumbnail my-3" id="graded">
            <img src="images/fall8.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/fall9.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/fall10.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/fall11.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/fall12.jpg" alt="" class="img-thumbnail my-3">
            <div class="text-center">
                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">REGISTER NOW!</button></a>
            </div>
            {{--            <div class="text-center">--}}
            {{--                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login"><button class="btn btn-danger btn-lg">REGISTER NOW!</button></a>--}}
            {{--            </div>--}}
        </div>
    </div>

    @include('footer')

@endsection


