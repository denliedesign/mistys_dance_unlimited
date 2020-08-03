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
                    According to Stephen R. Covey, it's possible to “transcend traditional solutions by forging a path toward a third option. A third alternative moves beyond this way or that way to a higher and better way—a far better place than either had envisioned.”
                    <br><br>
                    Third Option™ Learning Hub is a way we can support local schools by keeping enrollments in local districts via Coulee Region Virtual Academy. It's also a way to offer support for parents who may be  looking for more help and socialization than may be available at home.
                    <br><br>
                    Special educational needs may be supported with cooperation from the La Crosse area Autism Foundation. Needs based financial assistance available.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <div class="row row-cols-2 row-cols-lg-2 text-center" id="third-option-icon-wrap">
                    <div class="col-sm">
                        <ion-icon name="time-outline"></ion-icon>
                        <p>
                            <strong>Schedule Options</strong>
                            <br>Half Day - $25/day
                            <br>Full Day - $39/day
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
            Enrollment will require a $45 non-refundable enrollment fee. Weekly fees will be paid weekly on Mondays beginning the first week of school. Weekly payments allow families flexibility to re-enter school should that become an option or go back to learning from home if that becomes necessary.  Sibling discount available. Withdraw at any time with a one week notice.
            <br><br>
            Registration for families seeking full day, 5 days a week placement will begin Saturday, Aug. 1 at 8am.  Registration for part-time placements begins Monday, August 3 at noon pending availability.
        </p>
        <div class="text-center">
            <a href="https://forms.gle/f4S91qDHkRNBjUwV8" target="_blank" class="mr-4"><button style="font-size: 1.5em;" class="font-weight-bold p-4 btn btn-green btn-lg">Financial & Special Educational Assistance</button></a>
            <a href="/thirdoption-faq" class="mr-4"><button style="font-size: 1.5em;" class="font-weight-bold p-4 btn btn-aqua btn-lg">FAQ</button></a>
            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button style="font-size: 1.5em;" class="font-weight-bold p-4 btn btn-danger btn-lg">REGISTER NOW!</button></a>
        </div>
    </div>

    @include('footer')
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
@endsection
