@extends('layouts.app-side-mist')
@section('content')

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images-lava/alumni-thumb.png" alt="alumni logo" class="img-fluid" style="max-height: 350px;">
                    </div>
                </div>
                <div class="col-sm">
                    <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">Alumni</h1>
                    <p class="poppins" style="font-size: 20px;">
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
