@extends('layouts.app')

@section('title', '2nd-3rd Grade | Misty\'s Dance Unlimited')

@section('content')

    <div class="head-wrap">
        <div class="thirdgrade"></div>
    </div>
    <section class="new-class-section">
        <h3 class="py-5 text-center">2nd-3rd Grade</h3>
        <div class="class-card-grid-lg">
            <div class="class-card">
                <img src="images/kid14.png" class="class-gfx">
                <p>
                    Sing, dance and act to Broadway’s favorite stories!
                </p>
            </div>
            <div class="class-card">
                <img src="images/kid11.png" class="class-gfx">
                <p>
                    An open level class to honor Jesus through dancing and share His love with others through performance. FREE!<br>
                    <strong>Fall Semester:</strong> Hip Hop <strong>Spring Semester:</strong> Lyrical
                </p>
            </div>
            <div class="class-card">
                <img src="images/building-technique.png" class="class-gfx">
                <p>
                    <strong>Ballet:</strong> Builds on Beginning Ballet with barre and center work.<br>
                    <strong>Tap:</strong> Builds on Beginning Tap with added difficulty and faster tempos.<br>
                    <strong>Jazz:</strong> Builds on Beginning Jazz with traveling exercises and turns.
                </p>
            </div>
            <div class="class-card">
                <img src="images/kid4.png" class="class-gfx">
                <p>
                    <strong>Lyrical:</strong> A beautiful blend of Ballet and Jazz set to contemporary music.<br>
                    <strong>Hip Hop:</strong> Great songs, great moves in this high energy class!<br>
                </p>
            </div>
            <div class="class-card">
                <img src="images/beginning-technique.png" class="class-gfx">
                <p>
                    Introduces the young dancer to Ballet, Tap, and Jazz technique & combinations.
                </p>
            </div>
            <div class="class-card">
                <img src="images/acro.png" class="class-gfx" alt="Acro">
                <p>
                    A tumbling class great for dancers looking to improve their overall coordination, strength, agility and flexibility. Students learn and master cartwheels, aerials, tumbling, chest stands, hand springs, and more!
                </p>
            </div>
            <div class="class-card">
                <img src="images/guys-only-1.png" class="class-gfx" alt="Guys Only I">
                <p>
                    A class built around Hip Hop. Explore other movement, dance mechanics and learn the tools of dance.
                </p>
            </div>
            <div class="class-card">
                <img src="images/kid15.png">
                <p>
                    “Combination class” of tap and jazz for boys only! No experience required. Dance is the musical sport!
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
                <div class="season-item"><span>2nd-3rd Grade</span></div>
                <div class="season-item">mon</div>
                <div class="season-item">tue</div>
                <div class="season-item">wed</div>
                <div class="season-item">thr</div>
                <div class="season-item">fri</div>
            </div>
            <div class="season-row">
                <div class="season-item">beginning ballet</div>
                <div class="season-item">6:00-6:30pm</div>
                <div class="season-item">5:30-6:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">6:00-6:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">beginning tap</div>
                <div class="season-item">7:00-7:30pm</div>
                <div class="season-item">5:00-5:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">5:00-5:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">beginning jazz</div>
                <div class="season-item">6:30-7:00pm</div>
                <div class="season-item">4:30-5:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">5:30-6:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">building ballet</div>
                <div class="season-item">6:00-6:30pm</div>
                <div class="season-item">4:30-5:00pm</div>
                <div class="season-item">4:30-5:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">building tap</div>
                <div class="season-item">7:00-7:30pm</div>
                <div class="season-item">5:00-5:30pm</div>
                <div class="season-item">4:30-5:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">building jazz</div>
                <div class="season-item">6:30-7:00pm</div>
                <div class="season-item">5:30-6:00pm</div>
                <div class="season-item">5:30-6:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">acro</div>
                <div class="season-item">4:00-4:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">musical theatre</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">4:00-4:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">5:30-6:00pm</div>
            </div>
            <div class="season-row">
                <div class="season-item">hip hop</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">4:00-4:30pm</div>
                <div class="season-item">6:00-6:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">lyrical</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">6:00-6:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">4:00-4:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">steps of praise</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">5:30-6:00pm</div>
            </div>
            <div class="season-row">
                <div class="season-item">guys only i</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">6:30-7:00pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>
            <div class="season-row">
                <div class="season-item">man in motion</div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item"><span class="nada"></span></div>
                <div class="season-item">4:45-5:30pm</div>
                <div class="season-item"><span class="nada"></span></div>
            </div>

            <div class="season-row">
                <div class="season-item" id="season-tuition">$39/mo per class</div>
            </div>
        </div>
    </section>
    <br><br><br><br>

    @include('footer')
@endsection
