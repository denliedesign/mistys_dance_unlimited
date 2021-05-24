@extends('layouts.vanilla')
@section('content')

    <div id="primary-bg">
        <div class="color-filter-pink"></div>
        <h2 id="primary-txt" class="d-none d-sm-block">Take The First Step To Dance With Us</h2>
        <h2 id="primary-txt" class="d-sm-none" style="font-size: 3em;">Take The First Step To Dance With Us</h2>
        <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-turq primary-btn-pos btn-family">&#10097; Enroll today!</div></a>
    </div>

    @include('trial-modal')

    <div id="next-steps" class="d-sm-flex justify-content-center">
        <div class="next-step mt-3 mt-md-0 shadow">
            <p class="txt-green">Ready To Leap In?</p>
            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div></a>
        </div>
        <div class="next-step mt-3 mt-md-0 shadow">
            <p class="txt-blue">Want To Give It A Try?</p>
            <div>
                <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>
            </div>
        </div>
        <div class="next-step mt-3 mt-md-0 shadow">
            <p class="txt-pink">Still Have Questions?</p>
            <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div></a>
        </div>
    </div>

    <div id="vision" class="text-center text-white pb-5">
        <div class="container">
            <h2>We Have Built a Reputation for Excellence in Dance Instruction</h2>
            <p>
                From your child’s first class to their graduation performance, MDU has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, MDU is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
            </p>
        </div>
    </div>

<div class="bg-white pb-5">
    <div class="container pb-5">
        <h2 class="text-center pt-5">Classes</h2>
        <div class="row">
            <div class="col-sm mt-4">
                <img src="/images/littles.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                <a href="/fall" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family mt-2" style="width: 100%;">Ages 1-4</div></a>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/ages5-9.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                <a href="/fall" class="btn-opacity"><div class="shadow btn btn-lg btn-turq btn-family mt-2" style="width: 100%;">Ages 5-9</div></a>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/big-kids.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                <a href="/fall" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family mt-2" style="width: 100%;">Ages 10+</div></a>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/boys.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                <a href="/fall" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family mt-2" style="width: 100%;">Boys Only Classes</div></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm mt-4">
                <img src="/images/pg.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                <a href="/fall" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family mt-2" style="width: 100%;">Performing Groups</div></a>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/prepro.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                <a href="/fall" class="btn-opacity"><div class="shadow btn btn-lg btn-turq btn-family mt-2" style="width: 100%;">PreProfessional</div></a>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/BLC.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                <a href="/fall" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family mt-2" style="width: 100%;">Ballet La Crosse</div></a>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/adult.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                <a href="/fall" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family mt-2" style="width: 100%;">Adult Classes</div></a>
            </div>
        </div>
    </div>
</div>

    <div id="checklist-bg">
        <div class="color-filter-green"></div>
        <h2 class="secondary-txt d-none d-md-block">Parents &#x2764; Misty's...</h2>
        <div class="row secondary-txt-pos text-white text-center">
            <div class="col-sm">
                <p>
                    &#x2764; Sprung Floors
                    <br>&#x2764; Secured Facility
                    <br>&#x2764; Study Areas
                </p>
            </div>
            <div class="col-sm">
                <p>
                    &#x2764; Written Curriculum
                    <br>&#x2764; Background Checked
                    <br>&#x2764; CPR Trained
                </p>
            </div>
            <div class="col-sm">
                <p>
                    &#x2764; Full-Time Admin
                    <br>&#x2764; YPAD Certified
                    <br>&#x2764; Community Service
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
        <h2 class="secondary-txt">We're About More Than Just Great Dancing™</h2>
        <div>
            <div class="row tertiary-txt-pos">
                <div class="col-sm my-4">
                    “We don’t teach kids to make great dancers, we teach dance to make great kids.”
                    <br>
                    <em>-Misty Lown</em>
                </div>
                <div class="col-sm">
                    <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="safer-youth" class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="filter: invert(1);">
                    </div>
                    <h2 class="text-center">MDU is a Safer Studio™</h2>
                    <p>
                        MDU focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="max-height: 354.04px;">
                    </div>
                    <h2 class="text-center">MDU is Youth Protection Advocates in Dance®  Certified!</h2>
                    <p>
                        <span class="txt-pink">&#x2764;</span> Background checked and CPR certified teachers
                        <br><span class="txt-pink">&#x2764;</span> Safer Studio™ Policy
                        <br><span class="txt-pink">&#x2764;</span> Teacher training & proven curriculum
                        <br><span class="txt-pink">&#x2764;</span> A focus on safety & wellness for every student
                        <br><span class="txt-pink">&#x2764;</span> Secured facilities
                        <br><span class="txt-pink">&#x2764;</span> Viewing windows
                        <br><span class="txt-pink">&#x2764;</span> Social media safety practices
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonials" class="bg-yellow py-5">
        <div class="container">
            <div class="row m-0 p-0 d-flex justify-content-center">
                <div class="col-sm m-4 p-4 shadow">
                    <div>
                        <ion-icon name="happy" style="font-size: 2.5em;" class="txt-green"></ion-icon>
                        <p class="lead text-center">
                            Heather Storbeck
                        </p>
                        <p>
                            I have been so impressed with Misty’s Dance Unlimited as they have navigated through this unprecedented time with COVID. The communication and professionalism has been so amazing!! My daughter has danced for many years, but this is her first year with MDU  and she has loved every minute. They teach dance, but stress the importance of being a kind, hard working individual...they care about each student  as a person, not just a dancer. My daughter has gained so much confidence and has found a real love for the art of dance.
                        </p>
                    </div>
                </div>
                <div class="col-sm m-4 p-4 shadow">
                    <div>
                        <ion-icon name="happy" style="font-size: 2.5em;" class="txt-pink"></ion-icon>
                        <p class="lead text-center">
                            Sarah Fecht
                        </p>
                        <p>
                            Some companies create catchy tag lines because they sound good, rhyme well, or are memorable.  MDU's - more than just great dance tag line speaks to the core of who they are.  This studio's focus is on building character, creating confidence, and improving the mental & physical strength in the lives that they touch.  I'm so thankful we found this studio and that my children are gaining life skills that will propel them into a successful adulthood.
                        </p>
                    </div>
                </div>
                <div class="col-sm m-4 p-4 shadow">
                    <div>
                        <ion-icon name="happy" style="font-size: 2.5em;" class="txt-blue"></ion-icon>
                        <p class="lead text-center">
                            Andrea Linder
                        </p>
                        <p>
                            Misty's Dance has been an amazing place for my daughter to not only make friends but to find confidence in herself. They value all who walk through there doors and always greet you with a smile. I couldn't ask for a better place for my little girl to grow and learn through dance. Misty's Dance is definitely More Than Just Great Dancing! ❤
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="call-to-action" class="bg-white pt-5">
        <div class="text-center py-5">
            <h2 class="txt-green mb-4">Ready To Get Started? Join The MDU Family Today!</h2>
            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Dance With Us Today!</div></a>
        </div>
    </div>


    @endsection
