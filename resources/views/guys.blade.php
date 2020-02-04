@extends('layouts.app')
@section('title', 'Guys Only | Misty\'s Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <section class="container pb-5">
        <h3 class="text-center py-5">Guys Only</h3>
        <div class="class-card-grid-md">
            <div class="class-card mr-3">
                <img src="images/kid15.png" class="class-gfx" id="shrink-img" style="width: 90%;">
                <p>

                    Beginning level “combination class” of tap and jazz for boys only! No experience required. Dance is the musical sport!

                </p>
            </div>
            <div class="class-card mr-3">
                <img src="images/GUYS-ONLY-1.png" class="class-gfx" id="shrink-img" style="width: 90%;">
                <p>

                    A class built around Hip Hop. Explore other movement, dance mechanics and learn the tools of dance.

                </p>
            </div>
            <div class="class-card">
                <img src="images/guyscomp.png" class="class-gfx" id="shrink-img">
                <p>

                    Auditions for our award winning Guy’s Only Competition Team take place at the end of May each year.  Perform at local events as well as regional competitions in Minneapolis or Madison.  MDU has a younger Guy’s Only Competition Team and a team for more advanced dancers.  Take your dancing to the next level by joining a team!

                </p>
            </div>
        </div>
    </section>

    <section class="class-info">
        <div class="class-register">
            <div class="new-reg-btn"><a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">Register</a></div>
        </div>
        <div class="season-table">
            <div class="season-row">
                <div class="season-item"><span>GUYS</span></div>
                <div class="season-item">mon</div>
                <div class="season-item">thr</div>
            </div>
            <div class="season-row">
                <div class="season-item">man in motion</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">4:45-5:30</div>
            </div>
            <div class="season-row">
                <div class="season-item">guys only 1</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">6:30-7:00pm</div>
            </div>
            <div class="season-row">
                <div class="season-item">guys competition team</div>
                <div class="season-item">6:30-8:30</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
{{--            <div class="season-row">--}}
{{--                <div class="season-item" id="season-tuition">$39/mo per class</div>--}}
{{--            </div>--}}
        </div>
    </section>

    <br><br><br><br>

    @include('footer')
@endsection
