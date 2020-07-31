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
            <br>Tap ½- 5:45-6:15pm
            <br>Jazz ½- 6:15-7:00pm
            <br>Mommy and Me - 6:30-7:00pm
            <br><br><strong>Wednesdays</strong>
            <br>Ballet ¾-  5:00-5:45pm
            <br>Tap ¾-  5:45-6:30pm
            <br>Jazz ¾-  6:30-7:30pm
            <br>Leaps and Turns- 6:45-7:15pm
            <br>Grown Up Grooves- <span id="red-mdu-span">FREE ADULT CLASS</span> 1st Wednesday of each Month @ 7pm
            <br><br><strong>Thursdays</strong>
            <br>Fairytale Ballet- 5:00-5:30pm
            <br>Tap Adventures- 5:30-6:00pm
            <br>Storybook Ballet- 6:00-6:30pm
            <br>Hippity Hop- 6:30-7:00pm
            <br>Beg/Building Ballet- 6:30-7:00pm
            <br>Beg/Building Tap- 7:00-7:30pm
            <br>Beg/Building Jazz- 7:30-8:00pm
            <br>Advanced Jazz- 7:00-7:45pm
            <br>Advanced Ballet 7:45-8:30pm
            <br><br><strong>Saturdays</strong>
            <br>Stretching and Conditioning- 9:00-9:30am
        </p>
        <div class="text-center">
            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">REGISTER NOW!</button></a>
        </div>
    </div>

@include('footer')

@endsection
