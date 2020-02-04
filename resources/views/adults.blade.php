@extends('layouts.app')

@section('title', 'For Adults | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container" id="adult">
            <h3 class="py-5 text-center">For Adults</h3>

            <div class="row">
                <div class="col-sm pb-5 bg-ivory text-white" id="adult-box-hh">
                    <img src="images/adulthiphop.jpg" alt="">
                    <p class="text-white">
                        <strong>Adult Hip Hop for Beginners</strong>
                        <br>This is a high-energy class for adults 18+ who want to learn the latest Hip Hop moves and simple choreography.
                        <br>You'll have a ball and get fit with Mr. Keagan!
                        <br>6 week session begins January 6th
                        <br>Mondays 5:30-6:00 PM
                        <br>Tuition $69
                    </p>
                    <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger text-uppercase">Enroll Today!</button></a>
                    <p class="text-white">
                        <br><br><strong>Adult Hip Hop for Intermediate / Advanced dancers</strong>
                        <br>Join Miss Michelle for these Drop In Adult Hip Hop Classes!
                        <br>Wednesdays 8:30-9:30PM
                        <br>$15 per class.  Sign up online or pay in person.
                        <br>Jan 22
                        <br>Feb 19
                        <br>March 18
                        <br>April 22
                    </p>
                    <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger mb-3 text-uppercase">Enroll Today!</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm pb-5 bg-white" id="adult-box-tap">
                    <img src="images/adulttap.jpg" alt="">
                    <p>
                        Ready to step out of your comfort zone?  Tap classes are sure to make your heart smile!

                        <br><br>Join us on Monday evening for our 6 week Adult Tap Sessions. Each session is $69.

                        <br><br>Feb 17 - March 23, 2020

                        <br><br>Mondays
                        <br>Beginning Level 6:30-7:00PM
                        <br>Intermediate 7:00-7:30PM
                    </p>
                    <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger text-uppercase">Enroll Today!</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm pb-5 bg-ivory text-white" id="adult-box-wed">
                    <img src="images/weddingpageant.png" alt="">
                    <p>
                        We’d love to help make your special day GREAT!

                        <br><br>Our Wedding choreography fee is $149 which includes 90 minutes of teaching time.
                        <br>Additional teaching time is $70.00 per hour.

                        <br><br>If you are interested in learning more or to schedule a lesson, please email Miss Kylie directly at: Kylie.MistysDance@gmail.com

                        <br><br>Please include your specific availability and what you would like to learn.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm pb-5 bg-white" id="adult-box-ballet">
                    <img src="images/adultballet.png" alt="">
                    <p>
                        The Year of YOU continues at Misty's Dance Unlimited!
                        <br>Step out of your comfort zone and join us for our next 6 week Adult Ballet session beginning on Thursday, January 30th.
                        <br><br>
                        Ballet is great for developing flexibility, muscle tone and a stable core to improve posture.
                        <br><br>
                        Dates: Thursdays: Jan. 30 - March 5
                        <br>Time: 7:30-8:15PM
                        <br>Cost: $69
                        <br>Teacher: Mr. Dennis
                        <br>Notes: Ballet shoes are required. You are welcome to shop in our Everything Dance Boutique.
                    </p>
                    <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger text-uppercase mb-3">Enroll Today!</button></a>
                </div>
            </div>

        </div>
    </div>



    @include('footer')
@endsection
