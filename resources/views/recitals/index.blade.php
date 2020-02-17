@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="recital-banner-wrap">
        <div class="recital-banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue p-0">
        <img src="/images/EverythingRecitalWebBanner.jpg" alt="Everything Recital" style="width: 100%;">
        <div class="container" id="everythingrecital">
{{--            <h3 class="text-center py-5">Everything Recital</h3>--}}
{{--            <p class="lead font-weight-bold">Birthday parties are fun and easy at Misty’s Dance Unlimited!</p>--}}

            <div class="recital-wrap pb-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                    <a class="recital-box col" href="/recitals/generals"><div><p class="recital-txt">Recital Dates & Venue</p></div></a>
                    <a class="recital-box col" href="/recitals/rehearsals"><div><p class="recital-txt">Dress Rehearsal</p></div></a>
                    <a class="recital-box col" href="/recitals/performances"><div><p class="recital-txt">Show Assignments</p></div></a>
                    <a class="recital-box col" href="/recitals/memories"><div><p class="recital-txt">Recital Packages & Memories</p></div></a>
                    <a class="recital-box col" href="/recitals/photos"><div><p class="recital-txt">Individual Photos from Design Photography</p></div></a>
                    <a class="recital-box col" href="/recitals/handbooks"><div><p class="recital-txt">Handbook</p></div></a>
                    <a class="recital-box col" href="/recitals/tickets"><div><p class="recital-txt">Ticket Info</p></div></a>
                    <a class="recital-box col" href="/recitals/ads"><div><p class="recital-txt">Business Program Ads</p></div></a>
                    <a class="recital-box col" href="/recitals/seniors"><div><p class="recital-txt">Daddy Daughter Dance</p></div></a>
                    <a class="recital-box col" href="/recitals/volunteers"><div><p class="recital-txt">Volunteer</p></div></a>
                </div>
            </div>

        </div>
    </div>

    @include('footer')
@endsection
