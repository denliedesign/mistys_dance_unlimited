@extends('layouts.app-lava')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-sm text-center">
                    <div class="m-2 px-2">
                        <a href="/images-lava/schedule-22.pdf" target="_blank"><button class="btn btn-green btn-lg btn-family">VIEW CLASS SCHEDULE PDF</button></a>
                    </div>
                    <div class="m-2 px-2">
                        <a href="/images-lava/dress-code-22-23.pdf" target="_blank"><button class="text-white btn btn-blue btn-lg btn-family">VIEW DRESS CODE</button></a>
                    </div>
                    <div class="m-2 px-2">
                        <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="text-white btn btn-pink btn-lg btn-family">REGISTER HERE</button></a>
                    </div>
                </div>
                <div class="col-sm">
                    <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">2022-23 Class Schedule</h3>
                    <p class="font-syne" style="font-size: 22px;">
                        Online Enrollment has begun! Join the fun – YOU belong HERE!
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
                <img src="/images-lava/schedule-1.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images-lava/schedule-2.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images-lava/schedule-3.jpg" alt="fall schedule" class="img-fluid p-1" id="age-2-4">
                <img src="/images-lava/schedule-4.jpg" alt="fall schedule" class="img-fluid p-1" id="age-k-1st">
                <img src="/images-lava/schedule-5.jpg" alt="fall schedule" class="img-fluid p-1" id="age-2nd-3rd">
                <img src="/images-lava/schedule-6.jpg" alt="fall schedule" class="img-fluid p-1" id="age-graded">
                <img src="/images-lava/schedule-7.jpg" alt="fall schedule" class="img-fluid p-1" id="age-teen">
                <img src="/images-lava/schedule-8.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images-lava/schedule-9.jpg" alt="fall schedule" class="img-fluid p-1" id="age-guys">
                <img src="/images-lava/schedule-10.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images-lava/schedule-11.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images-lava/schedule-12.jpg" alt="fall schedule" class="img-fluid p-1">
            </div>
        </div>
    </div>

@endsection
