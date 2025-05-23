@extends('layouts.vanilla')
@section('content')

{{--    <div>--}}
{{--        <video autoplay loop muted controls style="height: auto; width: 100%;">--}}
{{--            <source src="images/mdu-video.mp4" type="video/mp4">--}}
{{--        </video>--}}
{{--    </div>--}}

<div id="great-bg">
{{--    <div class="color-filter-pink"></div>--}}
    <h2 id="great-txt" class="d-none d-md-block">
        You belong here <ion-icon name="heart"></ion-icon>
        <br>
        <span style="font-size: 0.5em; font-weight: normal;">Your child will fall in love with dance with our classes for ages 2-18!</span>
    </h2>
    <h2 id="great-txt-mobile" class="d-block d-md-none">
        you belong here <ion-icon name="heart"></ion-icon>
        <br>
        <span style="font-size: 0.5em; font-weight: normal;">Your child will fall in love with dance with our classes for ages 2-18!</span>
    </h2>
    <div style="position:absolute; bottom: 15px; left: 50%; transform: translate(-50%, -50%);">
        <a href="/fall" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">Find Your Class</div></a>
    </div>
</div>


    <!-- PINK ENROLLMENT WITH CTA

    <div id="primary-bg">
        <div class="color-filter-pink"></div>
        <h2 id="primary-txt-mobile" class="d-md-none">Take The First Step To Dance With Us</h2>
        <h2 id="primary-txt" class="d-none d-md-block">Take The First Step To Dance With Us</h2>
        <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="d-md-none btn-opacity"><div id="button-mobile" class="shadow btn btn-lg btn-turq primary-btn-pos btn-family">&#10097; Enroll today!</div></a>
        <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="d-none d-md-block btn-opacity"><div id="button-tablet" class="shadow btn btn-lg btn-turq primary-btn-pos btn-family">&#10097; Enroll today!</div></a>
    </div>

{{--    @include('trial-modal')--}}

        <div class="container">
            <div id="next-steps">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center">
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-green">Ready To Leap In?</p>
                        <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div></a>
                </div>
{{--                <div class="next-step mt-3 mt-md-0 shadow">--}}
    {{--                    <p class="txt-blue">Want To Give It A Try?</p>--}}
    {{--                    <div>--}}
    {{--                        <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
        <div class="next-step mt-3 mt-md-0 shadow">
            <p class="txt-pink">Still Have Questions?</p>
            <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div></a>
                </div>
            </div>
        </div>
    </div>

     END PINK ENROLLMENT WITH CTA-->

{{--    <div id="vision" class="text-center text-white">--}}
    <div class="text-center text-white py-5">
        <div class="container my-5">
{{--            <h2>We Have Built a Reputation for Excellence in Dance Instruction</h2>--}}
{{--            <p>--}}
{{--                From your child’s first class to their graduation performance, MDU has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, MDU is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.--}}
{{--            </p>--}}
            <h2 style="font-size: 2.75em;" class="fw-bold">Dance makes GREAT kids!</h2>
            <p style="font-size: 1.75em;">
                From your child’s first class to their graduation performance, your child will thrive! At MDU dance classes are More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
            </p>
        </div>
    </div>

{{--<div class="bg-white pb-5" id="class-categories">--}}
{{--    <div class="container pb-5">--}}
{{--        <h2 class="text-center pt-5">Classes</h2>--}}
{{--        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">--}}
{{--            <div class="col-sm mt-4">--}}
{{--                <img src="/images/littles.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family mt-2" style="width: 100%;">Ages 1-4</div></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm mt-4">--}}
{{--                <img src="/images/ages5-9.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-turq btn-family mt-2" style="width: 100%;">Ages 5-8</div></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm mt-4">--}}
{{--                <img src="/images/big-kids.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family mt-2" style="width: 100%;">Ages 9+</div></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm mt-4">--}}
{{--                <img src="/images/boys.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                <a href="/classes/boys" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family mt-2" style="width: 100%;">Boys Only Classes</div></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm mt-4">--}}
{{--                <img src="/images/pg.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                <a href="/classes/performing-groups" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family mt-2" style="width: 100%;">Performing Groups</div></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm mt-4">--}}
{{--                <img src="/images/prepro.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                <a href="/classes/pre-pro" class="btn-opacity"><div class="shadow btn btn-lg btn-turq btn-family mt-2" style="width: 100%;">Pre-Professional</div></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm mt-4">--}}
{{--                <img src="/images/BLC.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                <a href="/classes/ballet-la-crosse" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family mt-2" style="width: 100%;">Ballet La Crosse</div></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm mt-4">--}}
{{--                <img src="/images/adult.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                <a class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family mt-2" style="width: 100%;">Adult Classes</div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

    <div id="checklist-bg">
        <div class="color-filter-green"></div>
{{--        <h2 class="secondary-txt d-none d-md-block"><span style="font-size: 1.75em;" class="fw-bold">Parents <ion-icon name="heart"></ion-icon> Misty's...</span></h2>--}}
        <h3 style="font-size: 2.75em; position: relative; z-index: 4;" class="fw-bold text-center text-white py-5 d-none d-md-block">Parents <ion-icon name="heart"></ion-icon> Misty's...</h3>
        <div class="row secondary-txt-pos text-white text-center">
            <div class="col-sm">
                <p>
                    <ion-icon name="heart"></ion-icon> Sprung Floors
                    <br><ion-icon name="heart"></ion-icon> Secured Facility
                    <br><ion-icon name="heart"></ion-icon> Study Areas
                </p>
            </div>
            <div class="col-sm">
                <p>
                    <ion-icon name="heart"></ion-icon> Written Curriculum
                    <br><ion-icon name="heart"></ion-icon> Background Checked
                    <br><ion-icon name="heart"></ion-icon> CPR Trained
                </p>
            </div>
            <div class="col-sm">
                <p>
                    <ion-icon name="heart"></ion-icon> Full-Time Admin
                    <br><ion-icon name="heart"></ion-icon> YPAD Certified
                    <br><ion-icon name="heart"></ion-icon> Community Service
                </p>
            </div>
        </div>
    </div>

<div class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <div class="d-flex justify-content-center mb-0">
                        <img src="/images/darbys-dancers-logo.jpeg" alt="darbys dancers logo" class="img-fluid">
                    </div>
                    <h2 class="text-center mt-0 mb-3">Featured Program</h2>
                    <p class="mb-5">
                        Misty’s Dance Unlimited (MDU) is proud to offer through a chapter of the national non-profit organization <strong>Darby’s Dancers</strong>! Darby's Dancers is an opportunity for children with special needs to participate in the performing arts through dance education.
                        <br><br>
                        Dancers in the program gain confidence, coordination, strength and lifelong friends, all while feeling like a star.  Our youth volunteers learn important lessons in responsibility and friendship by providing one-on-one assistance their dancer.
                        <br><br>
                        The charitable contributions of youth volunteers, dance instructors, and MDU provide dance classes, supplies and costumes to dancers with special needs at no cost to their parents.
                    </p>
                </div>
            </div>
            <div class="col-sm d-flex align-items-center justify-content-center">
                <div class="">
                    <img src="/images/darbys-1.jpg" alt="darbys dancer on stage" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="mtjgd-bg" class="text-white">
        <div class="color-filter-blue"></div>
{{--        <h2 class="secondary-txt">We're About More Than Just Great Dancing™</h2>--}}
        <div class="container">
            <div style="position: relative; z-index: 4;" class="pt-5">
                <h3 style="font-size: 2.75em;" class="fw-bold text-center text-white py-5 d-none d-md-block">We're About More Than Just Great Dancing™</h3>
                <div class="row">
                    <div class="col-sm" style="font-size: 1.75em;">
                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                            <p class="text-center">
                                “We don’t teach kids to make great dancers, we teach dance to make great kids.”
                                <br>
                                <em>-Misty Lown</em>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                            <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid" style="width: auto; height: 250px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="safer-youth" class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: auto; height: 250px; filter: invert(1);">
                    </div>
                    <h2 class="text-center">MDU is a Safer Studio™</h2>
                    <p>
                        MDU focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="width: auto; height: 250px;">
                    </div>
                    <h2 class="text-center">MDU is Youth Protection Advocates in Dance®  Certified!</h2>
                    <p>
                        <span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Background checked and CPR certified teachers
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Safer Studio™ Policy
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Secured facilities
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Viewing windows
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Social media safety practices
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('testimonials')

    <div class="bg-white py-5">
        <div class="container">
            <div class="d-flex align-items-center">
                <div>
                    <h3 class="text-center pb-5">Proudly Partnering With These Outstanding Organizations</h3>
                    <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 px-3">
                        <div class="partner-div p-3 d-flex justify-content-center">
                            <img src="images/partner1.jpeg" class="img-fluid" style="width: auto; max-height: 75%;" alt="...">
                        </div>
                        <div class="partner-div p-3 d-flex justify-content-center">
                            <img src="images/partner4.png" class="img-fluid" style="width: auto; max-height: 75%;" alt="...">
                        </div>
{{--                        <div class="partner-div p-3">-- d-flex justify-content-center}}
{{--                            <img src="images/partner12.jpg" class="img-fluid" style="width: auto; max-height: 75%;" alt="...">--}}
{{--                        </div>--}}
{{--                        <div class="partner-div p-3">-- d-flex justify-content-center}}
{{--                            <img src="images/partner10.png" class="img-fluid" style="width: auto; max-height: 75%;" alt="...">--}}
{{--                        </div>--}}
                        <div class="partner-div p-3 d-flex align-items-center">
                            <img src="images/partner2.png" class="img-fluid" alt="...">
                        </div>
                        <div class="partner-div p-3 d-flex justify-content-center">
                            <img src="images/partner3.png" class="img-fluid" alt="...">
                        </div>
                        <div class="partner-div p-3 d-flex justify-content-center">
                            <img src="images/partner5.png" class="img-fluid" alt="...">
                        </div>
                        <div class="partner-div p-3 d-flex justify-content-center">
                            <img src="images/partner6.png" class="img-fluid" alt="...">
                        </div>
{{--                        <div class="partner-div p-3">-- d-flex justify-content-center}}
{{--                            <img src="images/partner7.png" class="img-fluid" alt="...">--}}
{{--                        </div>--}}
                        <div class="partner-div p-3 d-flex justify-content-center">
                            <img src="images/partner8.png" class="img-fluid" alt="...">
                        </div>
                        <div class="partner-div p-3 d-flex justify-content-center">
                            <img src="images/partner9.png" class="img-fluid" alt="...">
                        </div>
                        <div class="partner-div p-3 d-flex justify-content-center">
                            <img src="images/logo-willow-and-grace.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="call-to-action" class="bg-white pt-5 pb-1">
        <div class="text-center pt-2">
            <h2 class="txt-green">See what dance can do for your child!</h2>
{{--            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Dance With Us Today!</div></a>--}}
        </div>
    </div>

    @endsection
