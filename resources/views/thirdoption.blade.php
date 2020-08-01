@extends('layouts.app')
@section('title', 'Third Option Learning Hub | Misty\'s Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <img src="/images/third-option-learning-hub.jpg" alt="" class="img-fluid">

    <div class="container my-5">
        <p class="text-center">
            <br><br>Enrollment will require a $45 non-refundable enrollment fee.  Tuition will be paid weekly beginning the first week of school to allow families flexibility to re-enter school should that become an option or go back to learning from home if that becomes necessary.  We have had twice as many inquiries as space available so spaces will be available on a first-come-first-serve basis.
            Thank you for your support!
        </p>
        <div class="text-center">
            <a href="https://forms.gle/f4S91qDHkRNBjUwV8" target="_blank" class="mr-3"><button class="btn btn-green btn-lg">Financial & Special Educational Assistance</button></a>
            <a href="/images/third-option-FAQ.pdf" target="_blank" class="mr-3"><button class="btn btn-aqua btn-lg">FAQ</button></a>
            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">REGISTER NOW!</button></a>
        </div>
    </div>

    @include('footer')
@endsection
