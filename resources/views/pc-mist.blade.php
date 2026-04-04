@extends('layouts.app-side-mist')
@section('title', 'Audition Info | Misty\'s Dance Unlimited')
@section('content')

    <div class="bg-white py-5">
        <div class="container" id="adult">
            <p class="text-muted pb-0 mb-0 poppins text-muted" style="font-size: 30px;">MDU 2026-27</p>
            <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">Performing Groups, Ballet La Crosse & Pre-Professional Ballet Auditions</h1>
            <p class="poppins" style="font-size: 20px;">Does your dancer LOVE to perform?</p>
            <div style="background: #008CC0; color: white; font-size: 20px;" class="btn poppins fw-bold btn-interact mb-3"><a class="text-white text-decoration-none" href="
            https://docs.google.com/forms/d/e/1FAIpQLSeuasXUaxHtuDdyAgNHtqEE_0-UoXUxOEK0df_5VKLKwbZkgQ/viewform
" target="_blank">Sign Up Now!</a></div>
            <div class="d-flex align-items-center my-3">
                <ion-icon name="calendar-outline" style="font-size: 40px;"></ion-icon>&nbsp;<p class="poppins mb-0" style="font-size: 20px;"><em>Join us for a Virtual Pre-Audition Meeting, Tuesday, April 14th at 7:00pm</em></p>
            </div>
{{--            <div style="background: #008CC0; color: white; font-size: 20px;" class="btn poppins fw-bold btn-interact mb-3 ms-3"><a class="text-white text-decoration-none" href="--}}
{{--            /images/performing-group-descriptions.pdf--}}
{{--" target="_blank">Descriptions</a></div>--}}
            <div>
                <img src="/images/26-marushka-auditions.jpg" alt="blc flyer" class="img-fluid mb-3">
                <img src="/images/26-pg-auditions.jpg" alt="pg flyer" class="img-fluid">
            </div>
        </div>
    </div>

@endsection
