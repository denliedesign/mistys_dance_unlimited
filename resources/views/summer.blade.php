@extends('layouts.vanilla')

@section('title', 'Summer 2021 | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

{{--    <div class="bg-white py-5">--}}
{{--        <div class="container" id="summer">--}}
{{--            <h3 class="text-center">Summer Calendar 2022</h3>--}}
{{--            <p class="text-center">--}}
{{--                Our Summer Schedule will be released soon.--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="bg-white py-5">
        <div class="container" id="summer">
            <h3 class="text-center">Summer Calendar 2022</h3>
            <div class="text-center d-flex d-inline justify-content-center">
                <div class="mx-2 px-2"><a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">ENROLL NOW!</button></a></div>
                <div class="mx-2 px-2"><a href="/images/mdu-summer-dress-code-2022.pdf" target="_blank"><button class="btn btn-danger btn-lg">Summer Dress Code</button></a></div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <a href="/images/22-summer.pdf"><img src="images/22-summer-2.jpg" alt="" class="img-thumbnail my-3"></a>
                <a href="/images/22-summer.pdf"><img src="images/22-summer-3.jpg" alt="" class="img-thumbnail my-3"></a>
                <a href="/images/22-summer.pdf"><img src="images/22-summer-4.jpg" alt="" class="img-thumbnail my-3"></a>
                <a href="/images/22-summer.pdf"><img src="images/22-summer-5.jpg" alt="" class="img-thumbnail my-3"></a>
                <a href="/images/22-summer.pdf"><img src="images/22-summer-6.jpg" alt="" class="img-thumbnail my-3"></a>
                <a href="/images/22-summer.pdf"><img src="images/22-summer-7.jpg" alt="" class="img-thumbnail my-3"></a>
            </div>
            <div class="text-center">
                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">ENROLL NOW!</button></a>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection


