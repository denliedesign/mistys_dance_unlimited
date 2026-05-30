@extends('layouts.app-side-mist')
@section('content')

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <p class="pb-0 mb-0 poppins text-muted" style="font-size: 30px;">MDU 2026-2027</p>
            <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">Class Schedule</h1>
            <div style="color: white; font-size: 20px; cursor: not-allowed; opacity: 72%;" class="btn btn-danger poppins fw-bold btn-interact me-3 mt-3"><a disabled class="text-white text-decoration-none" target="_blank">Enrollment Opens June 6 at 8am</a></div>
            <div style="background: #008CC0; color: white; font-size: 20px;" class="btn poppins fw-bold btn-interact me-3 mt-3"><a class="text-white text-decoration-none" href="/images/26-27-fall-sched-1.pdf" target="_blank">View Class Schedule PDF</a></div>
            <div style="background: #008CC0; color: white; font-size: 20px;" class="btn poppins fw-bold btn-interact me-3 mt-3"><a class="text-white text-decoration-none" href="/images/26-27-dress-code.pdf" target="_blank">Dress Code</a></div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 mt-4">
{{--                <img src="/images/26-27-fall-sched-1.jpg" alt="fall schedule" class="img-fluid p-1">--}}
                <img src="/images/26-27-fall-sched-2.jpg" alt="fall schedule" class="img-fluid p-1" id="ab">
                <img src="/images/26-27-fall-sched-3.jpg" alt="fall schedule" class="img-fluid p-1" id="c">
                <img src="/images/26-27-fall-sched-4.jpg" alt="fall schedule" class="img-fluid p-1" id="d">
                <img src="/images/26-27-fall-sched-5.jpg" alt="fall schedule" class="img-fluid p-1" id="e">
                <img src="/images/26-27-fall-sched-6.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images/26-27-fall-sched-7.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images/26-27-fall-sched-8.jpg" alt="fall schedule" class="img-fluid p-1" id="age-guys">
                <img src="/images/26-27-fall-sched-9.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images/26-27-fall-sched-10.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images/26-27-fall-sched-11.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images/26-27-fall-sched-12.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images/26-27-fall-sched-13.jpg" alt="fall schedule" class="img-fluid p-1">
            </div>
        </div>
    </div>

@endsection
