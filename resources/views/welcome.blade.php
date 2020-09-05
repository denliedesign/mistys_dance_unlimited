@extends('layouts.2020-app')
@section('content')

    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header text-center bg-danger" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Safer Studio™ Policy 9/1/2020
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="d-flex justify-content-center">
                    <img src="/images/safer-studio-logo.jpg" alt="" style="max-height: 175px;">
                </div>
                <div class="card-body">
                    {{-- start message here --}}

                    <strong>
                        At Misty’s Dance Unlimited, LLC (MDU) the health and safety of our members’ staff, students, guests, and communities have always been our highest priority;
                    </strong>
                    <br>a commitment that has only been heightened at this time in history.  That’s why we have used local and national guidelines to inform our best practices for service continuity and re-opening.
                    <br>
                    <br>Because dance meets imperative student needs for physical, social, and emotional well being, we are committed to helping our staff and students navigate reopening. We follow the Safer Studio™ standards put forth by our national association, More Than Just Great Dancing!® along with the utmost care and consultation of our local health departments and locally available information.
                    <br>
                    <br><strong>Governmental Regulations</strong>
                    <br>MDU follows the Governor’s Executive Order #82, which mandates the use of masks inside buildings and advocates the same for clients until Sept. 28.  We also adhere to the Governor’s Emergency Order #1, which allows for exceptions.
                    <br>
                    <br><strong>Education</strong>
                    <br>MDU staff, parents, and dancers are informed about the symptoms of COVID-19 including, fever, cough, shortness of breath, diarrhea (watery), sore throat/congestion, headache, chills, muscle and joint pain (multiple), nausea or vomiting and, loss of sense of smell.
                    <br>
                    <br>Dancers and staff should STAY HOME if they have any symptoms of COVID-19. They should also notify the studio owners/administrators and contact healthcare providers if they develop symptoms.  If in doubt, sit them out.
                    <br>
                    <br><strong>Return to Training</strong>
                    <ol>
                        <li>MDU follows a <strong>phased approach</strong> to reopening physical services.
                        </li>
                        <li>MDU’s reopening plan:
                        </li>
                            <ol type="a">
                                <li><strong>Reinforces an attendance policy</strong> that does not allow employees to work when sick or students to attend classes when sick.
                                </li>
                                <li><strong>Reinforces of proper hygiene and health standards</strong> with all staff members and students, including frequent handwashing and/or sanitizing, not touching the face, and sneezing and/or coughing into elbows.
                                </li>
                                <li><strong>Increases frequency of sanitation</strong> in high traffic areas and high touch surfaces of the studio such as barres, floors, counters, stereos, and bathrooms/locker areas.
                                </li>
                                <li><strong>Adjusts studio operations</strong> based on public health guidelines and recommendations regarding PPE, assembly/gathering/occupancy size, and social distancing where possible and practical.
                                </li>
                                <li><strong>Adjusts curriculum</strong> and teacher training to reduce or eliminate hand-holding, equipment-sharing, and mingling where possible and practical.
                                </li>
                                <li><strong>Communicates a clear policy for each phase of opening</strong> regarding student drop-off and pick-up, lobby availability, and amenity use.
                                </li>
                            </ol>
                        <li>MDU has a <strong>variety of service options</strong> available including private instruction, small group instruction, traditional classes, and online instruction where possible and practical, to meet the needs of students and staff as well as for the ability to maintain service continuity in any situation.
                        </li>
                        <li>MDU has a clear <strong>system of communicating</strong> the status of classes, such as a “green, yellow, red” protocol. Green indicates it is safe to attend face-to-face classes. Yellow indicates a cautionary change to service delivery. Red indicates clients should stay home and attend class online.
                        </li>
                        <li>MDU understands that unlike older children and adults, young children cannot be expected to maintain social distancing at all times. Therefore, we focus on a <strong>hierarchy of measures</strong> beginning with avoiding contact with anyone with symptoms, frequent hand cleaning and good hygiene practices, amplified cleaning, and minimizing contact and mingling.
                        </li>
                        <li>If MDU receives a report of exposure risk, any affected classes will be notified, and exposure-risk level cleaning will be enacted.  There is <u>absolutely no penalty for absence</u> and classes may be made up in-person (space permitting) or online (anytime).
                        </li>
                    </ol>

                    <br><strong>Additional Considerations</strong>
                    <br>As MDU we are proud of the work our team has done since 1999 to create the highest quality experiences and environments for our staff, students, and guests.  Because of this groundwork, and the strength of our network, we believe our studio is in a strong position for a gradual and responsibly phased reopening. We are honored to continue to serve our community in this time.
                    <br>
                    <br>Sincerely,
                    <br>Misty Lown
                    {{-- end message here --}}
                    <hr>
                    <br><br>
                    Safer Studio Policy Archive
                    <ul>
{{--                        <li><a href="/saferstudiopolicy/9-1-20">9-1-20</a></li>--}}
                        <li><a href="/saferstudiopolicy/7-30-20">7-30-20</a></li>
                        <li><a href="/saferstudiopolicy/7-28-20">7-28-20</a></li>
                        <li><a href="/saferstudiopolicy/6-29-20">6-29-20</a></li>
                        <li><a href="/saferstudiopolicy/6-24-20">6-24-20</a></li>
                        <li><a href="/saferstudiopolicy/6-22-20">6-22-20</a></li>
                        <li><a href="/saferstudiopolicy/6-17-20">6-17-20</a></li>
                        <li><a href="/saferstudiopolicy/6-10-20">6-10-20</a></li>
                        <li><a href="/saferstudiopolicy/5-15-20">5-15-20</a></li>
                        <li><a href="/saferstudiopolicy/4-28-20">4-28-20</a></li>
                        <li><a href="/saferstudiopolicy/4-15-20">4-15-20</a></li>
                        <li><a href="/saferstudiopolicy/4-8-20">4-8-20</a></li>
                        <li><a href="/saferstudiopolicy/3-20-20">3-20-20</a></li>
                        <li><a href="/saferstudiopolicy/3-16-20">3-16-20</a></li>
                        <li><a href="/saferstudiopolicy/3-13-20">3-13-20</a></li>
                        <li><a href="/saferstudiopolicy/3-12-20">3-12-20</a></li>
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
                            <a class="nav-link" href="/fall">Fall</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/thirdoption">Third Option™ Learning Hub</a>
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
            <div id="colored-boxes" class="d-flex justify-content-center">
{{--                <div id="box-one" class="flip-card">--}}
{{--                    <div class="flip-card-inner">--}}
{{--                        <div class="box-one flip-card-front d-flex align-items-center justify-content-center text-center">--}}
{{--                            <div>--}}
{{--                                <ion-icon name="person-outline"></ion-icon>--}}
{{--                                <p>Private Lessons</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="box-one flip-card-back d-flex align-items-center justify-content-center text-center">--}}
{{--                            <p>--}}
{{--                                One-to-one instruction--}}
{{--                                <br><u>Great for:</u>--}}
{{--                                <br>&middot; Rapid learning & advancement--}}
{{--                                <br>&middot; Coaching on specific skills--}}
{{--                                <br>&middot; Complex scheduling needs--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div id="box-two" class="flip-card">--}}
{{--                    <div class="flip-card-inner">--}}
{{--                        <div class="box-two flip-card-front d-flex align-items-center justify-content-center text-center">--}}
{{--                            <div>--}}
{{--                                <ion-icon name="people-outline"></ion-icon>--}}
{{--                                <p>Semi-Private Classes</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="box-two flip-card-back d-flex align-items-center justify-content-center text-center">--}}
{{--                            <p>--}}
{{--                                One instructor to a small group of students--}}
{{--                                <br><u>Great for:</u>--}}
{{--                                <br>&middot; Rapid learning & advancement--}}
{{--                                <br>&middot; Small group--}}
{{--                                <br>&middot; Learning challenges or health concerns--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div id="box-one" class="flip-card mr-1">
                    <div class="flip-card-inner">
                        <div class="box-one flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="business-outline"></ion-icon>
                                <p>In-Studio Classes with Livestream Backup</p>
                            </div>
                        </div>
                        <div class="box-one flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                Dance in person with us confidently. We follow the Safer Studio Standards and all of our classes are backed up on livestream in case you have to stay home.
                            </p>
                        </div>
                    </div>
                </div>
{{--                <div id="box-four" class="flip-card">--}}
{{--                    <div class="flip-card-inner">--}}
{{--                        <div class="box-four flip-card-front d-flex align-items-center justify-content-center text-center">--}}
{{--                            <div>--}}
{{--                                <ion-icon name="videocam-outline"></ion-icon>--}}
{{--                                <p>Online Classes</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="box-four flip-card-back d-flex align-items-center justify-content-center text-center">--}}
{{--                            <p>--}}
{{--                                One instructor to a small group of students--}}
{{--                                <br><u>Great for:</u>--}}
{{--                                <br>&middot; Learning from the convenience of your own home--}}
{{--                                <br>&middot; Makeup classes--}}
{{--                                <br>&middot; Preference Health concerns--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div id="box-two" class="flip-card ml-1">
                    <div class="flip-card-inner">
                        <div class="box-two flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="play-circle-outline"></ion-icon>
                                <p>Online & Pre-Recorded Classes</p>
                            </div>
                        </div>
                        <div class="box-two flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                Not ready to dance in-studio yet? You can take an online class or purchase a pre-recorded class to watch as many times as you like.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center mt-3 mb-3">A dance class for every interest and learning preference!</h5>
        <div id="colored-dashes" class="d-flex justify-content-center">
            <div class="one-dash"></div>
            <div class="two-dash"></div>
{{--            <div class="three-dash"></div>--}}
{{--            <div class="four-dash"></div>--}}
{{--            <div class="five-dash"></div>--}}
        </div>
    </div>

    <div class="my-5 text-white d-none d-md-block">
        <div class="row m-0 c-0">
            <div class="col-6 bg-light-gray pl-5 py-2">
                <div class="container">
                    <h1 class="text-uppercase text-right">mdu is a safer</h1>
                    <p class="text-center">MDU focuses on a hierarchy of measures to create a Safer Studio&trade; environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleansing and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.</p>
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="" style="max-height: 200px;">
                    </div>
                </div>
            </div>
            <div class="col-6 bg-mdu-gray py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
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
                        </div>
                        <div class="col-sm d-flex align-items-center justify-content-center">
                            <img src="/images/ypad-logo-rotate.png" alt="" class="img-fluid">
                        </div>
                    </div>
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
        <h2 class="my-5 font-weight-bold text-uppercase">Fall Classes</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-5">
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/littles.jpg" alt="" class="img-fluid">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Preschool Classes</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Tues 4:30-5:00</p>--}}
                        <hr>
                        <div class="text-center">
                            <a href="/fall" class="ml-2"><div class="btn btn-pink btn-sm text-center text-uppercase">View Fall Schedule</div></a>
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
                        <div class="text-center">
                            <a href="/fall" class="ml-2"><div class="btn btn-pink btn-sm text-center text-uppercase">View Fall Schedule</div></a>
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
                        <div class="text-center">
                            <a href="/fall" class="ml-2"><div class="btn btn-pink btn-sm text-center text-uppercase">View Fall Schedule</div></a>
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
                        <div class="text-center">
                            <a href="/fall" class="ml-2"><div class="btn btn-pink btn-sm text-center text-uppercase">View Fall Schedule</div></a>
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
                        <div class="text-center">
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
                        <div class="text-center">
                            <a href="/fall" class="ml-2"><div class="btn btn-pink btn-sm text-center text-uppercase">View Fall Schedule</div></a>
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
                    <p class="achievement-number">2</p>
                    <p class="achievement-text">Ways To Take Class - <br>In-Studio & Online</p>
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
                            <div class="text-center">
                                <a href="/fall" class="ml-2"><div class="btn btn-pink btn-sm text-center text-uppercase">View Fall Schedule</div></a>
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
                            <div class="text-center">
                                <a href="/fall" class="ml-2"><div class="btn btn-pink btn-sm text-center text-uppercase">View Fall Schedule</div></a>
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
