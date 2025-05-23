@extends('layouts.app-lava')
@section('title', 'Holmen Dance Team | Misty\'s Dance Unlimited')
@section('description', 'Elevate your dance aspirations with Misty’s Dance Unlimited, your path to success with the Holmen dance team. Explore our specialized Holmen dance classes, meticulously designed to empower you with the skills and artistry needed to excel as a key member of the Holmen dance team. Join us today to embark on your journey towards becoming a standout performer.')
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
                        <img src="/images/holmen-dance-team.jpg" alt="dancers" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm">
                    <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">Holmen Dance Team</h3>
                    <p class="font-syne" style="font-size: 22px;">
                        Misty’s Dance Unlimited in Holmen is your ultimate destination for aspiring dancers seeking a place on the prestigious Holmen dance team. Our dance classes in Holmen are tailored to nurture your talents and provide you with the necessary expertise to thrive as a dancer on the Holmen dance team. Whether you're just starting or already have experience, our dedicated instructors are here to help you refine your skills and cultivate the grace, precision, and teamwork required to stand out on the Holmen dance team. Join us today, and let Misty’s Dance Unlimited be your stepping stone towards becoming a sought-after dancer on the Holmen dance team.
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
