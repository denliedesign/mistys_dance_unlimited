@extends('layouts.vanilla')

@section('title', 'Adult Classes | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <h2 class="text-center">Adult Classes</h2>
            <p class="text-center">
                Online Registration begins Sat. June 5th at 8 AM
                <br>Classes begin Wed., Aug. 18th
            </p>
            <div class="row" id="fall-select">
                <div class="col">
                    <a href="/images/classes/adults-summer.pdf" target="_blank">
                        <div class="box-one d-flex align-items-center justify-content-center">
                            Adult
                            <br>Summer Classes
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/images/classes/adults.pdf" target="_blank">
                        <div class="box-two d-flex align-items-center justify-content-center">
                            Adult
                            <br>Fall Classes
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection


