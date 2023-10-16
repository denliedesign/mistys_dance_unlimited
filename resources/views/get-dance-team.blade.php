@extends('layouts.app-lava')
@section('title', 'GET Dance Team | Misty\'s Dance Unlimited')
@section('description', 'Prepare to shine with Misty’s Dance Unlimited, your pathway to success with the G-E-T Dance Team at Gale-Ettrick-Trempealeau High School in Galesville, WI. Explore our specialized dance classes tailored to empower you with the skills and artistry required to excel as a valuable member of the G-E-T Dance Team. Join us today to embark on your journey towards becoming a standout performer on the G-E-T stage.')
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
                        <img src="/images/get-dance-team.jpg" alt="dancers" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm">
                    <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">G-E-T Dance Team at Gale-Ettrick-Trempealeau High School</h3>
                    <p class="font-syne" style="font-size: 22px;">
                        Misty’s Dance Unlimited is honored to support aspiring dancers looking to join the renowned G-E-T Dance Team at Gale-Ettrick-Trempealeau High School in Galesville, WI. Our specialized dance classes are designed to nurture your talents and provide you with the expertise needed to thrive as a dancer on the G-E-T Dance Team. Whether you're just starting your dance journey or already have experience, our dedicated instructors are here to help you refine your skills and develop the grace, precision, and teamwork required to shine on the G-E-T Dance Team stage. Join us today, and let Misty’s Dance Unlimited be your stepping stone toward becoming a sought-after dancer on the G-E-T Dance Team at Gale-Ettrick-Trempealeau High School. Your journey to dance team excellence begins here.
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
