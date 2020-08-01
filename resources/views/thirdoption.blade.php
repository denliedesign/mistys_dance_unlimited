@extends('layouts.app')
@section('title', 'Third Option Learning Hub | Misty\'s Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="d-flex justify-content-center">
        <img src="/images/third-option-learning-hub-2.jpg" alt="" class="img-fluid">
    </div>

    <div class="container my-5">
        <p class="text-center bg-dark text-white py-5" style="font-size: 1.33em;">
            Enrollment will require a $45 non-refundable enrollment fee. Weekly fees will be paid weekly on Mondays beginning the first week of school. Weekly payments allow families flexibility to re-enter school should that become an option or go back to learning from home if that becomes necessary.  Sibling discount available. Withdraw at any time with a one week notice.
            <br><br>
            Registration for families seeking full day, 5 days a week placement will begin Saturday, Aug. 1 at 8am.  Registration for part-time placements begins Monday, August 3 at noon pending availability.
        </p>
        <div class="text-center">
            <a href="https://forms.gle/f4S91qDHkRNBjUwV8" target="_blank" class="mr-3"><button class="btn btn-green btn-lg">Financial & Special Educational Assistance</button></a>
            <a href="/images/third-option-FAQ.pdf" target="_blank" class="mr-3"><button class="btn btn-aqua btn-lg">FAQ</button></a>
            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">REGISTER NOW!</button></a>
        </div>
    </div>

    @include('footer')
@endsection
