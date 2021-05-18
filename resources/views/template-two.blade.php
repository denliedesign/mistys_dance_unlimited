@extends('layouts.vanilla')
@section('content')

{{--    <div id="nav-21" class="bg-white">--}}
{{--        <ul class="nav d-flex justify-content-center" style="width: 100%;">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link">--}}
{{--                    <ion-icon name="pin"></ion-icon>--}}
{{--                    923 12th Ave S, STE 103, Onalaska, WI 54650</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link">--}}
{{--                    <ion-icon name="call"></ion-icon>--}}
{{--                    608.779.4642</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link">--}}
{{--                    <ion-icon name="mail"></ion-icon>--}}
{{--                    info@mistysdance.com</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark" href="https://www.facebook.com/mistysdance/" target="_blank">--}}
{{--                    <ion-icon name="logo-facebook"></ion-icon>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark" href="https://www.instagram.com/mistysdance/" target="_blank">--}}
{{--                    <ion-icon name="logo-instagram"></ion-icon>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}

    <div class="d-flex justify-content-center pt-3 bg-white">
        <a class="navbar-brand" href="#"><img src="images/mdu-logo.png" alt="" style="max-width: 257px;"></a>
    </div>
{{--    <div id="nav-21" class="text-center mt-3">--}}
{{--        <ion-icon name="pin"></ion-icon>--}}
{{--        <ion-icon name="call"></ion-icon>--}}
{{--        <ion-icon name="mail"></ion-icon>--}}
{{--        <a class="text-dark" href="https://www.facebook.com/mistysdance/" target="_blank">--}}
{{--            <ion-icon name="logo-facebook"></ion-icon>--}}
{{--        </a>--}}
{{--        <a class="text-dark" href="https://www.instagram.com/mistysdance/" target="_blank">--}}
{{--            <ion-icon name="logo-instagram"></ion-icon>--}}
{{--        </a>--}}
{{--    </div>--}}
    <nav class="navbar navbar-expand-lg bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center text-uppercase" id="nav-list-21">
            @include('nav-list')
        </div>
    </nav>

    <div id="primary-bg">
        <div class="color-filter-pink"></div>
        <h2 id="primary-txt">Take The First Step To Dance With Us</h2>
        <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-turq primary-btn-pos btn-family">&#10097; Enroll today!</div></a>
    </div>

    <div id="next-steps" class="d-flex justify-content-center">
        <div class="next-step shadow">
            <p class="txt-green">Ready To Leap In?</p>
            <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div></a>
        </div>
        <div class="next-step shadow">
            <p class="txt-blue">Want To Give It A Try?</p>
            <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family">&#10097; Schedule A Trial!</div></a>
        </div>
        <div class="next-step shadow">
            <p class="txt-pink">Still Have Questions?</p>
            <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div></a>
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

    <div id="checklist-bg">
        <div class="color-filter-green"></div>
        <h2 class="secondary-txt">Parents &#x2764; Misty's...</h2>
        <div class="row secondary-txt-pos text-white text-center">
            <div class="col-sm">
                &#x2764; Sprung Floors
                <br>&#x2764; Secured Facility
                <br>&#x2764; Study Areas
            </div>
            <div class="col-sm">
                &#x2764; Written Curriculum
                <br>&#x2764; Background Checked
                <br>&#x2764; CPR Trained
            </div>
            <div class="col-sm">
                &#x2764; Full-Time Admin
                <br>&#x2764; YPAD Certified
                <br>&#x2764; Community Service
            </div>
        </div>
    </div>

    <div class="bg-white pb-5">
        <div class="container pb-5">
            <h2 class="text-center py-5">Classes</h2>
            <div class="row">
                <div class="col-sm">
                    <img src="/images/littles.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                    <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family mt-2" style="width: 100%;">Ages 1-4</div></a>
                </div>
                <div class="col-sm">
                    <img src="/images/k-1st.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                    <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-turq btn-family mt-2" style="width: 100%;">Ages 5-9</div></a>
                </div>
                <div class="col-sm">
                    <img src="/images/big-kids.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                    <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family mt-2" style="width: 100%;">Ages 10+</div></a>
                </div>
                <div class="col-sm">
                    <img src="/images/boys.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                    <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family mt-2" style="width: 100%;">Boys Only Classes</div></a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm">
                    <img src="/images/pg.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                    <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family mt-2" style="width: 100%;">Performing Groups</div></a>
                </div>
                <div class="col-sm">
                    <img src="/images/prepro.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                    <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-turq btn-family mt-2" style="width: 100%;">PreProfessional</div></a>
                </div>
                <div class="col-sm">
                    <img src="/images/BLC.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                    <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family mt-2" style="width: 100%;">Ballet La Crosse</div></a>
                </div>
                <div class="col-sm">
                    <img src="/images/adult.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded">
                    <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family mt-2" style="width: 100%;">Adult Classes</div></a>
                </div>
            </div>
        </div>
    </div>

    <div id="mtjgd-bg" class="text-white">
        <div class="color-filter-blue"></div>
        <h2 class="secondary-txt">We're About More Than Just Great Dancing™</h2>
        <div class="">
            <div class="row tertiary-txt-pos">
                <div class="col-sm">
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

    <div id="testimonials" class="bg-yellow py-5">
        <div class="container">
            <div class="row m-0 p-0">
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

    <div id="call-to-action" class="bg-white py-5">
        <div class="text-center py-5">
            <h2 class="txt-green mb-4">Ready To Get Started? Join The MDU Family Today!</h2>
            <a href="#" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Dance With Us Today!</div></a>
        </div>

        <div class="container" id="footer">
            <div class="pt-5 mt-5">
                <div class="row m-0 p-0">
                    <div class="col-sm">
                        <p class="lead">CONTACT</p>
                        <ul class="list-group">
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="pin"></ion-icon>
                                923 12th Ave S, STE 103, Onalaska, WI 54650
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="call"></ion-icon>
                                608.779.4642
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="mail"></ion-icon>
                                info@mistysdance.com
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <p class="lead">SOCIAL</p>
                        <div class="d-flex d-inline">
                            <div class="d-inline">
                                <a class="nav-link text-dark p-0" href="https://www.facebook.com/mistysdance/" target="_blank">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </div>
                            <div class="d-inline">
                                <a class="nav-link text-dark p-0 mx-3" href="https://www.instagram.com/mistysdance/" target="_blank">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <p class="lead">MORE LINKS</p>
                        <div class="row">
                            <div class="col-sm">
                                <ul class="list-group">
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="https://docs.google.com/forms/d/e/1FAIpQLSdWfWLOlYApj7IwSztFfUXLcR0qFVOJYg8YAFOu5gqbUAkQqg/viewform" target="_blank">Absence Reporting</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/events">Calendar of Events</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/birthday">Birthday Parties</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/pl">Private Lessons</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul class="list-group">
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="https://docs.google.com/forms/d/e/1FAIpQLSfjtVvTMmhClJI2nwgxCXcj5ejBQSJUiFu6cBNf1KeB84uhAQ/viewform" target="_blank">Student Lockers</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="https://docs.google.com/forms/d/e/1FAIpQLSfzEyUJ7xwdSlv_IMNtLznZo1Lwk5jH0yfAKQZ32jGRpuWdCw/viewform?c=0&w=1" target="_blank">Performance Request</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/studio">Studio</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/employment">Employment</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="bottom" class="bg-dark text-white-50 text-center py-3">
        © 2021 Misty's Dance Unlimited
    </div>


    @endsection
