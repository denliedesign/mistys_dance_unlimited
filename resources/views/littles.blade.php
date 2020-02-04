@extends('layouts.app')

@section('title', 'For the Littles | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <section id="littles">
        <h3 class="py-5 m-0 text-center bg-aliceblue">For the Littles</h3>

        <div class="jumbotron jumbotron-fluid bg-aliceblue">
            <div class="container little-blue-box">
                <p class="lead font-weight-bold text-center pb-3">Weekly Classes & Recital Performance</p>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col-sm school-container">
                        <img src="images/2-4yr.jpg" alt="" style="width: 100%;">
                        <a href="2-4yr">
                            <div class="school-overlay">
                                <div class="school-txt">2-4 Years Old</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm school-container">
                        <img src="images/k-1st.jpg" alt="" style="width: 100%;">
                        <a href="k-1st">
                            <div class="school-overlay">
                                <div class="school-txt">Kindergarten - 1st Grade</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm school-container">
                        <img src="images/2nd-3rd.jpg" alt="" style="width: 100%;">
                        <a href="2nd-3rd">
                            <div class="school-overlay">
                                <div class="school-txt">2nd - 3rd Grade</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid bg-aliceblue">
{{--                <p class="lead font-weight-bold text-center text-white pb-3">Seasonal Classes</p>--}}
                <div class="row d-flex justify-content-center">
                    <div class="col-sm school-container">
                        <img src="images/littles-promo.jpg" alt="" style="max-width: 100%;">
                        <a href="promotions">
                            <div class="school-overlay">
                                <div class="school-txt"><strong>Seasonal Classes:</strong> <small>See What We Have Going On!</small></div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>

        <div class="jumbotron jumbotron-fluid bg-aliceblue">
            <div class="container little-yellow-box">
                <p class="lead font-weight-bold text-center pb-3">More Dance Opportunities</p>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 d-flex justify-content-center">
                    <div class="col-sm school-container">
                        <img src="images/littles-pg.jpg" alt="" style="width: 100%;">
                        <a href="pc">
                            <div class="school-overlay">
                                <div class="school-txt">Performing Groups</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm school-container">
                        <img src="images/BLC-littles.jpg" alt="" style="width: 100%;">
                        <a href="https://balletlacrosse.com" target="_blank">
                            <div class="school-overlay">
                                <div class="school-txt">Ballet La Crosse</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@include('footer')
@endsection
