@extends('layouts.app')

@section('title', '2020-2021 Fall Schedule | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Online Schedule</h1>
        <p>
            <strong>Mondays</strong>
            <br>Ballet ½- 5:00-5:45pm
            <br>Jazz ½- 5:45-6:30pm
            <br><br><strong>Wednesdays</strong>
            <br>Ballet ¾-  5:00-5:45pm
            <br>Tap ¾-  5:45-6:30pm
            <br>Grown Up Grooves- <span id="red-mdu-span">FREE ADULT CLASS</span> 1st Wednesday of each Month @ 7pm
            <br><br><strong>Thursdays</strong>
            <br>Storybook Ballet (4-5 year olds)- 6:00-6:30pm
            <br>Beg/Building Ballet (2nd and 3rd Graders)- 6:30-7:00pm
            <br>Beg/Building Tap (2nd and 3rd Graders)- 7:00-7:30pm
        </p>
        <div class="text-center">
            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">REGISTER NOW!</button></a>
        </div>
    </div>

@include('footer')

@endsection
