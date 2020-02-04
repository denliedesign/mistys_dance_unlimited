@extends('layouts.app')

@section('title', 'Level I & II | Misty\'s Dance Unlimited')

@section('content')

    <div class="head-wrap">
        <div class="levelone"></div>
    </div>
    <section class="new-class-section">
        <h3 class="text-center py-5">Levels I & II <span class="class-title-sub-txt">1st Intermediate</span></h3>
        <p>Graded Technique classes are for dancers age 9 and up who love to dance. Advancement is based on correct placement, skill mastery, and instructor recommendation-not by age-which means all classes have a variety of age levels. Students spend an average of two years at each level before mastering the skills to advance. Students receive annual skills tests. In addition to Graded Technique classes, extend your dancing experience with Specialty Classes.</p>
    </section>

    <section class="class-info">
        <div class="class-register">
            <div class="new-reg-btn"><a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">Register</a></div>
        </div>
        <div class="season-table">
            <div class="season-row">
                <div class="season-item"><span>LVL I-II &middot; 1st Int</span></div>
                <div class="season-item">tue</div>
                <div class="season-item">wed</div>
                <div class="season-item">thr</div>
                <div class="season-item">fri</div>
            </div>
            <div class="season-row">
                <div class="season-item">Ballet I</div>
                <div class="season-item">FULL</div>
                <div class="season-item">5:00-5:45pm</div>
                <div class="season-item">6:00-6:45pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">Jazz I</div>
                <div class="season-item">FULL</div>
                <div class="season-item">FULL</div>
                <div class="season-item">FULL</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">Tap I</div>
                <div class="season-item">7:15-7:45pm</div>
                <div class="season-item">5:45-6:15pm</div>
                <div class="season-item">5:30-6:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">Ballet II</div>
                <div class="season-item">7:15-8:15pm</div>
                <div class="season-item">7:30-8:15pm</div>
                <div class="season-item">4:30-5:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">Jazz II</div>
                <div class="season-item">6:30-7:15pm</div>
                <div class="season-item">6:45-7:30pm</div>
                <div class="season-item">6:00-6:45pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">Tap II</div>
                <div class="season-item">6:00-6:30pm</div>
                <div class="season-item">6:15-6:45pm</div>
                <div class="season-item">5:30-6:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">Lyrical</div>
                <div class="season-item">FULL</div>
                <div class="season-item">5:30-6:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">Modern</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">7:00-7:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">Hip Hop</div>
                <div class="season-item">FULL</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">5:00-5:30pm</div>
            </div>
            <div class="season-row">
                <div class="season-item">Leaps & Turns</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">4:30-5:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
            </div>

            <div class="season-row">
                <div class="season-item" id="season-tuition">$49/mo per class</div>
            </div>
        </div>
    </section>
    <br><br><br><br>

    @include('footer')
@endsection
