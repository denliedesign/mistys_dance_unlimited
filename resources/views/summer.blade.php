@extends('layouts.app')

@section('title', 'Summer 2021 | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

{{--    <div class="d-md-none">--}}
{{--        <img src="images/summer-1.jpg" alt="" style="width: 100%;">--}}
{{--    </div>--}}

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container" id="summer">
            <h3 class="text-center">Summer Calendar 2021</h3>
            <div class="text-center">
                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">ENROLL NOW!</button></a>
            </div>
            <img src="images/summer-1.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/summer-june.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/summer-july.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/summer-august.jpg" alt="" class="img-thumbnail my-3">
            <img src="images/miss-larissa-ballet-series.png" alt="" class="img-thumbnail my-3">
            <div class="text-center">
                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">ENROLL NOW!</button></a>
            </div>

{{--            <div id="almuni" class="d-flex justify-content-end m-5">--}}
{{--                <!-- Button trigger modal -->--}}
{{--                <div type="button" class="bg-ivory text-white d-flex align-items-center" data-toggle="modal" data-target="#alumniModal" style="height: 125px; width: 125px; border-radius: 50%; border: 6px solid #88c349; transform: rotate(12deg); box-shadow: 2px 2px 4px black, -2px -2px 4px white;">--}}
{{--                    <p class="text-center font-weight-bold pt-3">SPECIAL ALUMNI RATES</p>--}}
{{--                </div>--}}

{{--                <!-- Modal -->--}}
{{--                <div class="modal fade" id="alumniModal" tabindex="-1" role="dialog" aria-labelledby="alumniModalLabel" aria-hidden="true">--}}
{{--                    <div class="modal-dialog">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 class="modal-title" id="alumniModalLabel">Special Alumni Summer Tuition Rates</h5>--}}
{{--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                To celebrate our alumni, we offer special discounted Summer pricing to allow our returning dancers full access to our Summer schedule and offerings.--}}
{{--                                <br><br>--}}
{{--                                Alumni Tuition Rates: $10/class, $49/month, $99/Summer rate.--}}
{{--                                <br><br>--}}
{{--                                Email mistysdance@gmail.com to inquire more and sign-up for your class pass this Summer!--}}
{{--                                <br><br>--}}
{{--                                BONUS:  As a special thanks from MDU to our dancers, the Summer after graduation is free--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>

{{--    <div class="bg-mdu-yellow pt-1 pb-5">--}}
{{--        <p class="text-center mt-5 mb-1">Fall Schedule is Now Available</p>--}}
{{--        <div class="d-flex justify-content-center">--}}
{{--            <a href="/fall"><div class="btn btn-primary text-uppercase">Learn More</div></a>--}}
{{--        </div>--}}
{{--    </div>--}}

    @include('footer')

@endsection


