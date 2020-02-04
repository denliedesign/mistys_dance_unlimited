@extends('layouts.app')

@section('title', 'Studio | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container" id="studio">

            <section class="section-one">
                <h3 class="text-center py-5">International Performing Arts Campus</h3>
                <p class="font-weight-bold">IPAC connects people near and far through community, culture and the arts. Attend a weekend event, grow through one of our weekly classes or join a professional training program. IPAC is the place to discover, learn, move and grow for your family, health and career.</p>
                <p>The International Performing Arts Campus provides the perfect location for movement classes, theater programs, and is a unique setting for your meetings, trainings, team building parties, banquets, or photography and video shoots. IPAC amenities include a large parking lot, a kitchen available to renters and an array of AV services.</p>
                <p class="lead font-weight-bold">AV and Event Equipment</p>
                <p>The International Performing Arts Campus has 7 available spaces that feature an array of AV and event equipment available to support your event including audiovisual equipment, easels, chairs, tables and more. We can accommodate additional setup, equipment and AV requests for your specific event.</p>
                <p class="lead font-weight-bold">Schedule your personal studio tour today!</p>
            </section>
            <section class="studio-img-section">

                <div class="card-columns">
                    <div class="card">
                        <img src="images/studio1.jpg" alt="...">
                    </div>
                    <div class="card">
                        <img src="images/studio2.jpg" alt="...">
                    </div>
                    <div class="card">
                        <img src="images/studio3.jpg" alt="...">
                    </div>
                    <div class="card">
                        <img src="images/studio4.jpg" alt="...">
                    </div>
                    <div class="card">
                        <img src="images/studio5.jpg" alt="...">
                    </div>
                    <div class="card">
                        <img src="images/studio6.jpg" alt="...">
                    </div>
                    <div class="card">
                        <img src="images/studio7.jpg" alt="...">
                    </div>
                    <div class="card">
                        <img src="images/studio8.jpg" alt="...">
                    </div>
                </div>

            </section>

        </div>
    </div>

    @include('footer')

@endsection


