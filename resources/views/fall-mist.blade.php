@extends('layouts.app-side-mist')
@section('content')

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <p class="pb-0 mb-0 poppins text-muted" style="font-size: 30px;">MDU 2024-2025</p>
            <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">Class Schedule</h1>
            <div style="background: #008CC0; color: white; font-size: 20px;" class="btn poppins fw-bold btn-interact"><a class="text-white text-decoration-none" href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">Enroll Now!</a></div>
            <div style="background: #008CC0; color: white; font-size: 20px;" class="btn poppins fw-bold btn-interact ms-3"><a class="text-white text-decoration-none" href="/images/24-25-fall-b.pdf" target="_blank">View Class Schedule PDF</a></div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 mt-4">
                <img src="/images/24-25-fall-b1.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images/24-25-fall-b2.jpg" alt="fall schedule" class="img-fluid p-1" id="ab">
                <img src="/images/24-25-fall-b3.jpg" alt="fall schedule" class="img-fluid p-1" id="c">
                <img src="/images/24-25-fall-b4.jpg" alt="fall schedule" class="img-fluid p-1" id="d">
                <img src="/images/24-25-fall-b5.jpg" alt="fall schedule" class="img-fluid p-1" id="e">
                <img src="/images/24-25-fall-b6.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images/24-25-fall-b7.jpg" alt="fall schedule" class="img-fluid p-1">
                <img src="/images/24-25-fall-b8.jpg" alt="fall schedule" class="img-fluid p-1" id="age-guys">
                <img src="/images/24-25-fall-b9.jpg" alt="fall schedule" class="img-fluid p-1">
                {{--                <img src="/images/24-25-fall-schedule_page-0010.jpg" alt="fall schedule" class="img-fluid p-1">--}}
                {{--                <img src="/images/24-25-fall-schedule_page-0011.jpg" alt="fall schedule" class="img-fluid p-1">--}}
                {{--                <img src="/images/24-25-fall-schedule_page-0012.jpg" alt="fall schedule" class="img-fluid p-1">--}}
            </div>
        </div>
    </div>

@endsection
