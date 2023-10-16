@extends('layouts.app-lava')
@section('title', 'La Crosse Dance Team | Misty\'s Dance Unlimited')
@section('description', 'Elevate your dance team journey with Misty’s Dance Unlimited in La Crosse. Explore our specialized dance classes tailored to enhance your skills and prepare you for success as part of a La Crosse dance team. Join us today to take the first step towards becoming a standout performer.')
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
                <div class="col-sm">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                        <img src="/images/la-crosse-dance-team.jpg" alt="dancers" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm">
                    <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">Dance Team La Crosse</h3>
                    <p class="font-syne" style="font-size: 22px;">
                        Misty’s Dance Unlimited in La Crosse is your gateway to joining a prestigious La Crosse dance team. Our dance classes are meticulously designed to equip you with the essential skills, discipline, and artistry required to excel as a dancer. Whether you're a novice looking to get started or an experienced dancer aiming to improve, our instructors are here to guide you on your journey. Join Misty’s Dance Unlimited today and experience the transformative power of our dance programs, making you a sought-after talent for any La Crosse dance team.
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="/fall">
                            <div class="btn btn-lg btn-danger shadow mx-2">Find Your Class</div>
                        </a>
                        <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">
                            <div class="btn btn-lg btn-danger shadow mx-2">Register Now!</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
