@extends('layouts.app')

@section('title', 'Employment | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container" id="employment">

            <h3 class="text-center py-5">Employment</h3>
            <p class="lead font-weight-bold">MDU is growing!</p>
            <p class="font-weight-bold">Find employment opportunities with us</p>
            At Misty’s Dance Unlimited we are always looking for positive, enthusiastic, qualified instructors.
            <br><br>
            Employment for teaching positions available include:
            <br>
            <ul class="job-list">
                <li>Preschool & Beginning Level Classes</li>
                <li>Intermediate & Advanced Classes</li>
                <li>Ballet, Pointe, Tap & Jazz Classes</li>
                <li>Contemporary, Modern & Hip Hop Classes</li>
                <li>Specialty Classes</li>
                <li>Boy’s Only Classes</li>
                <li>Group Fitness</li>
                <li>Ballroom and Latin</li>
            </ul>
            <br>
            If you LOVE dance and working with children, please send your resume to Misty Lown: mistysdance@gmail.com

        </div>
    </div>

    @include('footer')

@endsection


