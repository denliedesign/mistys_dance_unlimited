@extends('layouts.app')
@section('title', 'Third Option Learning Hub | Misty\'s Dance Unlimited')
@section('content')

    <div class="third-bg-wrap">
        <div class="third-bg">
            <div class="container ribbon-wrap">
                <img src="/images/third-option-learning-hub-ribbon.png" alt="third option learning hub logo" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1 class="txt-mdu-red">Supporting Families</h1>
                <h1 class="txt-mdu-red">Supporting Schools</h1>
                <p>
                    Introducing: Third Option™ Learning Hub!
                    <br><br>
                    Looking for another option to support your child’s virtual learning this fall? Trying to figure out how to balance work and home-learning?  Do you value quality instructors and enrichment activities for your child? Check out Third Option™ Learning Hub at MDU for support for your CRVA or 30-day virtual school start student!
                    <br><br>
                    Third Option™ was designed to support Coulee Region Virtual Academy and can also support 30-day virtual school start students! Classes will be held inside MDU’s bright and cheery studio spaces. Socialize safely in our full or part-time program.  Choose the right level of support for your learner.
                    <br><br>
                    Special educational needs may be supported with cooperation from the La Crosse Area Autism Foundation. Financial assistance is available. Enroll today!
                    <br><br>
                    “Transcend traditional solutions by forging a path toward a third option. A third alternative moves beyond this way or that way to a higher and better way—a far better place than either had envisioned.” - Stephen R. Covey                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <div class="row row-cols-2 row-cols-lg-2 text-center" id="third-option-icon-wrap">
                    <div class="col-sm">
                        <ion-icon name="time-outline"></ion-icon>
                        <p>
                            <strong>Schedule Options</strong>
                            <br>Half Day - $25/day ($8.33/hr)
                            <br>Full Day - $39/day ($6.50/hr)
                            <br>Financial Assistance Available
                        </p>
                    </div>
                    <div class="col-sm">
                        <ion-icon name="people-outline"></ion-icon>
                        <p>
                            <strong>Class Sizes & Ages</strong>
                            <br>Average Cohort
                            <br>Size of 10
                            <br>Ages 7+
                        </p>
                    </div>
                    <div class="col-sm">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                        <p>
                            <strong>Community & Socialization</strong>
                            <br>Minimize Risk, Maximize Joy
                            <br>CDC Cleaning Protocols
                        </p>
                    </div>
                    <div class="col-sm">
                        <ion-icon name="body-outline"></ion-icon>
                        <p>
                            <strong>Serving the Whole Child</strong>
                            <br>Academic Support
                            <br>Enrichment Activities
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mb-5">
        <p class="text-center bg-dark text-white py-5" style="font-size: 1.33em;">
            Enrollment will require a $45 non-refundable enrollment fee. Fees paid weekly. Cancel at any time with a one week notice. A sibling discount of 30% is available. Complimentary early drop off and late pick up are available for an hour on either side of programming. Additional surround care is offered at just $5/per hour.
            <br><br>
            Registration is now open for full-time and part-time students!
        </p>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h1 class="txt-mdu-red text-capitalize">Choose the right level of support for your learner</h1>
                    Now offering:
                    <br><br>
                    <ul id="thirdoption-list">
                        <li> ✔️Morning-only</li>

                        <li> ✔️Full-school-day</li>

                        <li> ✔️Choose 2, 3, or 5 days per week</li>

                        <li> ✔️CRVA or 30-Day virtual school start support</li>

                        <li> ✔️Enrichment activities</li>

                        <li> ✔️Sibling discounts</li>

                        <li> ✔️Complimentary surround care</li>

                        <li> ✔️No long term commitments - cancel at anytime</li>
                    </ul>
                    Our learning hub offers live, in-person support from our Instructional Guides for as little as $6.50/hour. Financial assistance is available. Enroll today!

                </div>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/thirdoption-arts.jpg" alt="kid coloring" class="img-fluid">
            </div>
        </div>
        <div class="text-center my-5">
            <a href="https://forms.gle/f4S91qDHkRNBjUwV8" target="_blank" class="mr-4"><button style="font-size: 1.5em;" class="font-weight-bold p-4 btn btn-green btn-lg">Financial & Special Educational Assistance</button></a>
            <a href="/thirdoption-faq" class="mr-4"><button style="font-size: 1.5em;" class="font-weight-bold p-4 btn btn-aqua btn-lg">FAQ</button></a>
            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button style="font-size: 1.5em;" class="font-weight-bold p-4 btn btn-danger btn-lg">REGISTER NOW!</button></a>
        </div>
    </div>

    @include('footer')
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
@endsection
