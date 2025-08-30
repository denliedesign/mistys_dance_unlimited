@extends('layouts.app-side-mist')
@section('content')


    <div class="bg-white" id="day">
        <div class="mx-4 pb-1 pt-3">
            <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">Community Programming</h1>

            <p class="poppins" style="font-size: 20px;">
                At Misty's Dance Unlimited, we built our facility to be more than just a dance studio! We regularly host guests and special programs and partner with local non-profits to help make our community a better place. Our goal is to be a blessing and connector in our community. Our current community programs are listed below. Please note that some will take you off this page if the group manages their own registration. Interested in space for your group or community event? You'll find a helpful link at the bottom of the page.
            </p>
            @can('update', \App\Community::class)
                <p class="text-center"><a class="text-dark" href="/communities/create">Add New Community Program</a></p>
            @endcan
            {{--            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-4">--}}
            {{--                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.honeybeeoccupationaltherapy.com" target="_blank"><img src="/images/logo-bumble-and-tumble.png" alt="logo"></a></div></div>--}}
            {{--                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.varcinc.com" target="_blank"><img src="/images/logo-varc.png" alt="logo" style="filter: contrast(0%);"></a></div></div>--}}
            {{--                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://sistercircle.co/home/" target="_blank"><img src="/images/logo-sister-circle.png" alt="logo"></a></div></div>--}}
            {{--                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a><img src="/images/logo-homeschool.png" alt="logo"></a></div></div>--}}
            {{--                --}}{{--                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="" target="_blank"><img src="/images/" alt="logo"></a></div></div>--}}
            {{--                --}}{{--                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="" target="_blank"><img src="/images/" alt="logo"></a></div></div>--}}
            {{--            </div>--}}
        </div>
    </div>

    <section id="day-calendar">
        <div class="pb-5" style="position: relative;">
            <div class="mx-4 my-5">
                {{--                <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">Calendar of Events</h1>--}}

                {{--                <div class="d-flex justify-content-center mb-4">--}}
                {{--                    <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">--}}
                {{--                        <div class="btn btn-blue shadow">Register Now</div>--}}
                {{--                    </a>--}}
                {{--                </div>--}}

                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3" id="community-calendar">
                        <div class="col-sm mt-4">
                            <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">September</h3>
                            <hr>
                            @foreach($communities as $community)
                                @if($community->month == 'September')@include('_community-program')@endif
                            @endforeach
                        </div>
                    <div class="col-sm mt-4">
                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">October</h3>
                        <hr>
                        @foreach($communities as $community)
                            @if($community->month == 'October')@include('_community-program')@endif
                        @endforeach
                    </div>
                    <div class="col-sm mt-4">
                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">November</h3>
                        <hr>
                        @foreach($communities as $community)
                            @if($community->month == 'November')@include('_community-program')@endif
                        @endforeach
                    </div>
                    <div class="col-sm mt-4">
                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">December</h3>
                        <hr>
                        @foreach($communities as $community)
                            @if($community->month == 'December')@include('_community-program')@endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
