@extends('layouts.app')

@section('title', 'Summer 2020 | Misty\'s Dance Unlimited')

@section('content')

    <div class="summer-banner-wrap d-none d-md-block">
        <div class="summer-banner"></div>
    </div>

    <div class="d-md-none">
        <img src="images/summer1.jpg" alt="" style="width: 100%;">
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container" id="summer">
            <h3 class="text-center">Summer Calendar 2020</h3>
            <img src="images/summer2.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/summer3.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/summer4.jpg" alt="" class="img-thumbnail my-3">
            <div class="text-center">
                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login"><button class="btn btn-danger btn-lg">REGISTER NOW!</button></a>
            </div>
        </div>
    </div>
    <div class="bg-mdu-yellow pt-1 pb-5">
        <p class="text-center mt-5 mb-1">Fall Schedule is Now Available</p>
        <div class="d-flex justify-content-center">
            <a href="/fall"><div class="btn btn-primary text-uppercase">Learn More</div></a>
        </div>
    </div>

    @include('footer')

@endsection


