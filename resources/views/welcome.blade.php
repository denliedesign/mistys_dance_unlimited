@extends('layouts.2020-app')
@section('content')

    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header text-center bg-danger" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Update: COVID-19
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <strong><u>Studio Closed Wednesday, June 18 - Sunday, June 22</u></strong>
                    <br><br>
                    MDU has been working closely with La Crosse County Health Department leaders and adhering to their guidelines since the beginning of the COVID-19 situation. This week, I had another call with them to make sure our opening and operational plans were above and beyond community health expectations (which they were<3).
                    <br><br>
                    Today, Wednesday, June 17, the La Crosse County Health Department changed the status of our county on the Coulee COVID-19 Compass from “orange” to “red”.  While the associated changes are recommendations and NOT mandates, we would rather be “safe than sorry” as my dad always used to say.  To that end, the programming for summer classes that were set to start today and tomorrow <strong>will begin next week instead</strong> and be extended accordingly by one week.
                    <br><br>
                    Our website and social media will be updated regarding the status of classes on Monday, June 22nd at 12pm.  If our county is still “red” according to the Compass, we will host our classes via online distance learning until we return to “orange”.
                    <br><br>
                    My appreciation goes to our management team who built a flexible schedule to adapt to any circumstance. Our hope is that our community will work together over the rest of the week and weekend to stay home when possible and help our county to “return to orange” so our kids can return to in-person classes next week. They’ve waited so long, please help by staying home when possible. <3
                    <br><br>
                    Thank you AGAIN for your support.  Our staff, our students, and families thank you!
                    <br><br>
                    Sincerely,
                    <br><br>
                    Misty Lown
                    <hr>
                    <br><br>
                    COVID-19 Message Archive
                    <ul>
{{--                        <li><a href="/covid-19/6-17-20">6-17-20</a></li>--}}
                        <li><a href="/covid-19/6-10-20">6-10-20</a></li>
                        <li><a href="/covid-19/5-15-20">5-15-20</a></li>
                        <li><a href="/covid-19/4-28-20">4-28-20</a></li>
                        <li><a href="/covid-19/4-15-20">4-15-20</a></li>
                        <li><a href="/covid-19/4-8-20">4-8-20</a></li>
                        <li><a href="/covid-19/3-20-20">3-20-20</a></li>
                        <li><a href="/covid-19/3-16-20">3-16-20</a></li>
                        <li><a href="/covid-19/3-13-20">3-13-20</a></li>
                        <li><a href="/covid-19/3-12-20">3-12-20</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('mobile')

    <div class="d-none d-md-block" id="contact-nav">
        <ul class="nav d-flex justify-content-center" id="top-nav" style="width: 100%;">
            <li class="nav-item">
                <a class="nav-link"><ion-icon name="location-outline"></ion-icon> 923 12th Ave S, STE 103, Onalaska, WI 54650</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><ion-icon name="call-outline"></ion-icon> 608.779.4642</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><ion-icon name="mail-outline"></ion-icon> info@mistysdance.com</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/mistysdance/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/mistysdance/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
            </li>
        </ul>
    </div>

    <div id="head-section" class="d-none d-md-block">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><img src="images/mdu-logo.png" alt="" id="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="main-navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/summer">Summer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fall">Fall</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/promotions">Tutu Fun Run</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="head-title" class="pt-5 mt-5">
                <h2 class="text-uppercase text-center">Take the First Step</h2>
                <h1 class="text-uppercase text-center">To Dance With Us</h1>
                <div class="d-flex justify-content-center mt-4">
                    <a href="/summer"><div class="btn btn-outline-primary">Ready to get Started?</div></a>
                </div>
            </div>
        </div>
        <div id="stoplight">
            <div class="row">
                <div class="col stoplight-col d-flex align-items-center">
                    <div class="triangle-top-right"></div>
                </div>
                <div class="col stoplight-col">
                    <div class="stop-block"></div>
                    <div class="red-light light-circle"></div>
                </div>
                <div class="col stoplight-col d-flex align-items-center">
                    <div class="triangle-top-left"></div>
                </div>
            </div>
            <div class="row">
                <div class="col stoplight-col d-flex align-items-center">
                    <div class="triangle-top-right"></div>
                </div>
                <div class="col stoplight-col">
                    <div class="stop-block"></div>
                    <div class="yellow-light light-circle"></div>
                </div>
                <div class="col stoplight-col d-flex align-items-center">
                    <div class="triangle-top-left"></div>
                </div>
            </div>
            <div class="row">
                <div class="col stoplight-col d-flex align-items-center">
                    <div class="triangle-top-right"></div>
                </div>
                <div class="col stoplight-col">
                    <div class="stop-block"></div>
                    <div class="green-light light-circle"></div>
                </div>
                <div class="col stoplight-col d-flex align-items-center">
                    <div class="triangle-top-left"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-none d-md-block">
            <div id="colored-boxes" class="d-flex justify-content-between">
                <div id="box-one" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="box-one flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="person-outline"></ion-icon>
                                <p>Private Lessons</p>
                            </div>
                        </div>
                        <div class="box-one flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                One-to-one instruction
                                <br><u>Great for:</u>
                                <br>&middot; Rapid learning & advancement
                                <br>&middot; Coaching on specific skills
                                <br>&middot; Complex scheduling needs
                            </p>
                        </div>
                    </div>
                </div>
                <div id="box-two" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="box-two flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="people-outline"></ion-icon>
                                <p>Semi-Private Classes</p>
                            </div>
                        </div>
                        <div class="box-two flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                One instructor to a small group of students
                                <br><u>Great for:</u>
                                <br>&middot; Rapid learning & advancement
                                <br>&middot; Small group
                                <br>&middot; Learning challenges or health concerns
                            </p>
                        </div>
                    </div>
                </div>
                <div id="box-three" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="box-three flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="business-outline"></ion-icon>
                                <p>Traditional Studio Classes</p>
                            </div>
                        </div>
                        <div class="box-three flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                <u>Great for:</u>
                                <br>&middot; A traditional classroom learning environment
                                <br>&middot; Social-emotional learning
                                <br>&middot; Group dynamics and choreography
                            </p>
                        </div>
                    </div>
                </div>
                <div id="box-four" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="box-four flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="videocam-outline"></ion-icon>
                                <p>Online Classes</p>
                            </div>
                        </div>
                        <div class="box-four flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                One instructor to a small group of students
                                <br><u>Great for:</u>
                                <br>&middot; Learning from the convenience of your own home
                                <br>&middot; Makeup classes
                                <br>&middot; Preference Health concerns
                            </p>
                        </div>
                    </div>
                </div>
                <div id="box-five" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="box-five flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="play-circle-outline"></ion-icon>
                                <p>Prerecorded Classes</p>
                            </div>
                        </div>
                        <div class="box-five flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                One instructor to a small group of students
                                <br><u>Great for:</u>
                                <br>&middot; Learning at your own pace and at your own time
                                <br>&middot; Watching as many times as you like
                                <br>&middot; Health concerns
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center mt-3 mb-3">A dance class for every interest and learning preference!</h5>
        <div id="colored-dashes" class="d-flex justify-content-around">
            <div class="one-dash"></div>
            <div class="two-dash"></div>
            <div class="three-dash"></div>
            <div class="four-dash"></div>
            <div class="five-dash"></div>
        </div>
    </div>

    <div class="my-5 text-white d-none d-md-block">
        <div class="row m-0 c-0">
            <div class="col-5 bg-light-gray px-5 py-2">
                <h1 class="text-uppercase text-right">mdu is a safer</h1>
                <p>MDU focuses on a hierarchy of measures to create a Safer Studio&trade; environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleansing and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.</p>
                <div class="d-flex justify-content-center">
                    <img src="/images/safer-studio-logo.png" alt="" style="max-height: 250px;">
                </div>
            </div>
            <div class="col-7 bg-mdu-gray py-2">
                <h1 class="text-uppercase">studio&trade;</h1>
                <p class="font-weight-bold">MDU is Youth Protection Advocates in Dance&reg; Certified!</p>
                <p>
                    <ion-icon name="checkmark"></ion-icon> Background checked and CPR certified teachers
                    <br><ion-icon name="checkmark"></ion-icon> Safety Studio&trade; Policy
                    <br><ion-icon name="checkmark"></ion-icon> Teacher training & proven curriculum
                    <br><ion-icon name="checkmark"></ion-icon> A focus on safety & wellness for every student
                    <br><ion-icon name="checkmark"></ion-icon> Secured facilities
                    <br><ion-icon name="checkmark"></ion-icon> Viewing windows
                    <br><ion-icon name="checkmark"></ion-icon> Professional sprung floors
                    <br><ion-icon name="checkmark"></ion-icon> Social media safety practices
                </p>
                <div>
                    <img src="/images/ypad-logo-rotate.png" alt="" style="height: 150px;">
                </div>
            </div>
        </div>
    </div>

    <div class="my-5 p-2 text-white d-block d-md-none bg-mdu-gray text-white">
        <h2 class="text-uppercase">mdu is a safer studio&trade;</h2>
        <p>MDU focuses on a hierarchy of measures to create a Safer Studio&trade; environment beginning with requiring
            students and staff who are ill to stay home, followed by frequent hand cleansing and good hygiene practices,
            amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.</p>
        <div class="d-flex justify-content-center pb-2">
            <img src="/images/safer-studio-logo.png" alt="" style="max-height: 250px;">
        </div>
        <p class="font-weight-bold">MDU is Youth Protection Advocates in Dance&reg; Certified!</p>
        <p>
            <ion-icon name="checkmark"></ion-icon>
            Background checked and CPR certified teachers
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Safety Studio&trade; Policy
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Teacher training & proven curriculum
            <br>
            <ion-icon name="checkmark"></ion-icon>
            A focus on safety & wellness for every student
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Secured facilities
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Viewing windows
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Professional sprung floors
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Social media safety practices
        </p>
        <div class="d-flex justify-content-center">
            <img src="/images/ypad-logo-rotate.png" alt="" style="height: 150px;">
        </div>
    </div>

    <div class="container">
        <h2 class="my-5 font-weight-bold text-uppercase">Summer & Fall Classes</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-5">
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/littles.jpg" alt="" class="img-fluid">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Preschool Classes</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Tues 4:30-5:00</p>--}}
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="/summer" class="ml-2"><div class="btn btn-green btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><div class="btn btn-sm btn-aqua text-center text-uppercase">Register</div></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/k-1st.jpg" alt="" class="img-fluid">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Early Elementary School</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Fri 5:30-6:00</p>--}}
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="/summer" class="ml-2"><div class="btn btn-green btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><div class="btn btn-sm btn-aqua text-center text-uppercase">Register</div></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/big-kids.jpg" alt="" class="img-fluid">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Graded Technique</strong></p>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a ref="/summer" class="ml-2"><div class="btn btn-green btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><div class="btn btn-sm btn-aqua text-center text-uppercase">Register</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/boys.jpg" alt="" class="img-fluid">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Boys Only Classes</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Sat 1:00-5:00</p>--}}
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a ref="/summer" class="ml-2"><div class="btn btn-green btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><div class="btn btn-sm btn-aqua text-center text-uppercase">Register</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/pg.jpg" alt="" class="img-fluid">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Performing Groups</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Mon 4:00-9:00</p>--}}
                        <hr>
                        <div class="d-flex justify-content-center text-center">
                            for more information email:<br>mistysdance@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/prepro.jpg" alt="" class="img-fluid">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>PreProfessional</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Mon-Sat 3:30-5:30</p>--}}
                        <hr>
                        <div class="d-flex justify-content-center text-center">
                            for more information email:<br>mistysdance@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/BLC.jpg" alt="" class="img-fluid">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Ballet La Crosse</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Wed 5:00-5:30</p>--}}
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="https://www.balletlacrosse.com/" target="_blank"><div class="btn btn-aqua btn-sm text-center text-uppercase">More Info</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/adult.jpg" alt="" class="img-fluid">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Adult Classes</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Wed 8:00-9:00</p>--}}
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a ref="/summer" class="ml-2"><div class="btn btn-green btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><div class="btn btn-sm btn-aqua text-center text-uppercase">Register</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="achievements-section" class="d-flex align-items-center">
        <div id="achievements-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center text-white">
                    <ion-icon name="home-outline"></ion-icon>
                    <p class="achievement-number">2</p>
                    <p class="achievement-text">Locations - <br>Holmen & Onalaska</p>
                </div>
                <div class="col-sm-3 text-center text-white">
                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                    <p class="achievement-number">5</p>
                    <p class="achievement-text">Ways To Take Class</p>
                </div>
                <div class="col-sm-3 text-center text-white">
                    <ion-icon name="body-outline"></ion-icon>
                    <p class="achievement-number">24</p>
                    <p class="achievement-text">YPAD Certified Teachers</p>
                </div>
                <div class="col-sm-3 text-center text-white">
                    <ion-icon name="musical-notes-outline"></ion-icon>
                    <p class="achievement-number">100+</p>
                    <p class="achievement-text">Classes Per Week</p>
                </div>
            </div>
        </div>
    </div>

    <div id="teacher-focus-section">
        <div class="container">
            <div class="row pt-5" id="top-teacher-focus">
                <div class="col-12 col-md-6">
                    <p class="text-uppercase my-5" id="focus-label">Teacher Feature</p>
                    <p id="focus-name" class="my-5">Mr. Dennis</p>
                    <p class="my-5">Mr. Dennis grew up studying ballet at Maple Conservatory of Dance in California. He graduated from Belhaven University with a BFA in dance and has danced professionally with Ballet Mississippi and Filter Dance Company. Additionally, he has four years of experience in Martial Arts. Mr. Dennis has taught at MDU since 2015.</p>
                    <p id="focus-list" class="text-uppercase font-weight-bold mt-5">teacher classes:</p>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="images/teacher-of-the-month.png" alt="" class="img-fluid d-none d-md-block">
                </div>
            </div>
            <div class="row pb-5" id="teacher-focus-classes">
                <div class="col-sm-3 mb-2">
                    <div class="class-card-wrap border border-muted bg-white">
                        <img src="/images/modern-dennis.jpg" alt="" class="img-fluid">
                        <div class="class-card-content my-3">
                            <p class="m-0 text-center"><strong>Modern</strong></p>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <a href="/summer" class="ml-2"><div class="btn btn-green btn-sm text-center text-uppercase">View Schedule</div></a>
                                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><div class="btn btn-sm btn-aqua text-center text-uppercase">Register</div></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="class-card-wrap border border-muted bg-white">
                        <img src="/images/boys.jpg" alt="" class="img-fluid">
                        <div class="class-card-content my-3">
                            <p class="m-0 text-center"><strong>Man in Motion</strong></p>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <a href="/summer" class="ml-2"><div class="btn btn-green btn-sm text-center text-uppercase">View Schedule</div></a>
                                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><div class="btn btn-sm btn-aqua text-center text-uppercase">Register</div></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="class-card-wrap border border-muted bg-white">
                        <img src="/images/BLC.jpg" alt="" class="img-fluid">
                        <div class="class-card-content my-3">
                            <p class="m-0 text-center"><strong>Ballet La Crosse</strong></p>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <a href="https://www.balletlacrosse.com/" target="_blank"><div class="btn btn-aqua btn-sm text-center text-uppercase">More Info</div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="class-card-wrap border border-muted bg-white">
                        <img src="/images/prepro.jpg" alt="" class="img-fluid">
                        <div class="class-card-content my-3">
                            <p class="m-0 text-center"><strong>Pre-Professional Ballet</strong></p>
                            <hr>
                            <div class="d-flex justify-content-center text-center">
                                for more information email:<br>mistysdance@gmail.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="trial-section" class="pb-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="mt-5 mb-4">We Have Built a Reputation for Excellence in Dance Instruction</h4>
                    <p class="mb-5">From your child’s first class to their graduation performance, MDU has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, MDU is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.</p>
                </div>
{{--                <div class="col-sm-4 d-flex justify-content-center align-items-center">--}}
{{--                    <div class="btn btn-aqua">Try Your First Class Free!</div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div id="blog-section" class="mb-5">
        <div class="container">
            <h2 class="my-5 font-weight-bold text-center text-uppercase">Dance Blog</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="blog-card col">
                    <a class="blog-link-img" href="/posts/3"><img src="images/insta1.png" alt="" class="img-fluid mb-4"></a>
                    <div class="row">
                        <div class="col-3">
                            <div class="gold-date-box">
                                <p class="my-0 py-0 text-center gold-number">04</p>
                                <p class="my-0 py-0 text-center gold-month">JUN</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <a class="blog-link text-dark" href="/posts/3"><h5 class="font-weight-bold">National Honor Society for Dance Arts</h5></a>
                            <p>We are excited to announce that once again, we will be recognizing those dancers who have gone above and beyond their regular dance class commitments, academic requirements and have qualified to achieve induction into the National Honor Society for Dance Arts!</p>
                            <div class="short-divide"></div>
                        </div>
                    </div>
                </div>
                <div class="blog-card col">
                    <a class="blog-link-img" href="/posts/10"><img src="images/insta4.png" alt="" class="img-fluid mb-4"></a>
                    <div class="row">
                        <div class="col-3">
                            <div class="gold-date-box">
                                <p class="my-0 py-0 text-center gold-number">19</p>
                                <p class="my-0 py-0 text-center gold-month">MAY</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <a class="blog-link text-dark" href="/posts/10"><h5 class="font-weight-bold">Navigating the Recital: A Guide for First-time Dance Parents</h5></a>
                            <p>The first dance recital can be full of nonstop surprises for the first-time dance parent. Dance has its own culture of expectations and traditions, and they all converge on recital night.</p>
                            <div class="short-divide"></div>
                        </div>
                    </div>
                </div>
                <div class="blog-card col">
                    <a class="blog-link-img" href="/posts/2"><img src="images/insta5.png" alt="" class="img-fluid mb-4"></a>
                    <div class="row">
                        <div class="col-3">
                            <div class="gold-date-box">
                                <p class="my-0 py-0 text-center gold-number">18</p>
                                <p class="my-0 py-0 text-center gold-month">APR</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <a class="blog-link text-dark" href="/posts/2"><h5 class="font-weight-bold">Why We Teach Dance</h5></a>
                            <p>At Misty’s Dance Unlimited, our teachers come from a variety of backgrounds.  Most of them grew up dancing and then chose to combine their passion for dance with their interest in education.</p>
                            <div class="short-divide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-gray jumbo-footer mb-0 pb-3">
        <div class="footer text-center d-flex align-items-center">
            <div class="footer-items">
                <div class="row">
                    <div class="mb-5 mb-md-0 col-md-1 d-flex justify-content-center">
                        <div class="copyright-items">
                            <img src="/images/mdu-logo-short.png" alt="">
                            <p class="pt-2"><small class="text-muted">&#169; 2020</small></p>
                        </div>
                    </div>
                    <div class="mb-5 mb-md-0 col-md-3">
                        <p class="text-white footer-title">NAV</p>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdWfWLOlYApj7IwSztFfUXLcR0qFVOJYg8YAFOu5gqbUAkQqg/viewform" target="_blank">Absence Reporting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/events">Calendar of Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">Register Now</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/birthday">Birthday Parties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pl">Private Lessons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfjtVvTMmhClJI2nwgxCXcj5ejBQSJUiFu6cBNf1KeB84uhAQ/viewform" target="_blank">Student Lockers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfzEyUJ7xwdSlv_IMNtLznZo1Lwk5jH0yfAKQZ32jGRpuWdCw/viewform?c=0&w=1" target="_blank">Performance Request Form</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bravo">Bravo! Community Partners</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/studio">Studio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/employment">Employment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://mistysdance.store/" target="_blank">Store</a>
                            </li>
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
                                </li>
                                {{--                    @if (Route::has('register'))--}}
                                {{--                        <li class="nav-item">--}}
                                {{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--                        </li>--}}
                                {{--                    @endif--}}
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        {{--                            <a class="dropdown-item" href="{{ url('admin') }}">Admin</a>--}}
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    <div class="mb-5 mb-md-0 col-md-3">
                        <p class="text-white footer-title">CONTACT</p>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <ion-icon name="location"></ion-icon>
                                923 12th Ave S, STE 103, Onalaska, WI 54650
                            </li>
                            <li class="nav-item">
                                <ion-icon name="call"></ion-icon>
                                608.779.4642
                            </li>
                            <li class="nav-item">
                                <ion-icon name="mail"></ion-icon>
                                info@mistysdance.com
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <div style="width: 100%"><iframe width="100%" height="275" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=923%2012th%20Ave%20S%2C%20STE%20103%2C%20Onalaska%2C%20WI%2054650+(Misty's%20Dance%20Unlimited)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                    </div>
                </div>
                <p class="pt-5" id="credit"><a href="https://denliedesign.com/" target="_blank"><small class="text-muted">Denlie Design</small></a></p>
            </div>
        </div>
    </div>

@endsection
