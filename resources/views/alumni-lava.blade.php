@extends('layouts.app-lava')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images-lava/alumni-thumb.png" alt="alumni logo" class="img-fluid" style="max-height: 350px;">
                    </div>
                </div>
                <div class="col-sm">
                    <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">Alumni</h3>
                    <p class="font-syne" style="font-size: 22px;">
{{--                        Calling all MDU Alumni!--}}
{{--                        <br>--}}
{{--                        We are celebrating 25 years at MDU and we want YOU to be a part of it! We are looking for all dancers who have danced at MDU in years past whether you graduated with us or just joined us for a short time.  Please fill out this form to join our mailing list and be in the know about our upcoming celebrations.--}}
                        Calling all MDU Alumni! We are looking for all dancers who have danced at MDU in years past whether you graduated with us or just joined us for a short time.
                        <br><br>
                        For current details on our 25th Anniversary Recital Alumni Dance please head over to the "<a
                            href="/recital">Recital</a>" tab and click on Alumni Dance! Can't join us this year? Please fill out the form on this page to join our mailing list and be in the know about all future things MDU Alumni!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center mt-4">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfsWTgIHjBVP6vrvBcBr1Xtp2sMtQfuOD0LOG6HKCLGrzOPrw/viewform?embedded=true" width="640" height="1034" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="/images-lava/big-kids.jpg" alt="advanced dancers" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

@endsection
