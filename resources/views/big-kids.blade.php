@extends('layouts.app')

@section('title', 'For the Big Kids | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <section id="littles">
        <h3 class="py-5 m-0 text-center bg-aliceblue">For the Big Kids</h3>

        <div class="jumbotron jumbotron-fluid bg-aliceblue">
            <div class="container little-blue-box">
                <p class="lead font-weight-bold text-center pb-3">Weekly Classes & Recital Performance</p>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                    <div class="col-sm school-container">
                        <img src="images/level1-2.jpg" alt="" style="width: 100%;">
                        <a href="level1-2">
                            <div class="school-overlay">
                                <div class="school-txt">Levels 1-2</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm school-container">
                        <img src="images/level3-4.jpg" alt="" style="width: 100%;">
                        <a href="level3-4">
                            <div class="school-overlay">
                                <div class="school-txt">Levels 3-4</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm school-container">
                        <img src="images/level5-7.jpg" alt="" style="width: 100%;">
                        <a href="level5-7">
                            <div class="school-overlay">
                                <div class="school-txt">Levels 5-7</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm school-container">
                        <img src="images/recreational.jpg" alt="" style="width: 100%;">
                        <a href="recreational">
                            <div class="school-overlay">
                                <div class="school-txt">Recreational Program</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid bg-ivory">
            <div class="container little-red-box">
                <p class="lead font-weight-bold text-center text-white pb-3">Seasonal Classes</p>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 d-flex justify-content-center">
                    <div class="col-sm school-container">
                        <img src="images/big-kids-promo.jpg" alt="" style="width: 100%;">
                        <a href="promotions">
                            <div class="school-overlay">
                                <div class="school-txt">See What We Have Going On!</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid bg-aliceblue">
            <div class="container little-yellow-box">
                <p class="lead font-weight-bold text-center pb-3">More Dance Opportunities</p>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 d-flex justify-content-center">
                    <div class="col-sm school-container">
                        <img src="images/big-kids-pg.jpg" alt="" style="width: 100%;">
                        <a href="pc">
                            <div class="school-overlay">
                                <div class="school-txt">Performing Groups</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm school-container">
                        <img src="images/BLC-big-kids.jpg" alt="" style="width: 100%;">
                        <a href="https://balletlacrosse.com" target="_blank">
                            <div class="school-overlay">
                                <div class="school-txt">Ballet La Crosse</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm school-container">
                        <img src="images/prepro.jpg" alt="" style="width: 100%;">
                        <a href="prepro">
                            <div class="school-overlay">
                                <div class="school-txt">Pre-Professional Ballet</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('footer')
@endsection
