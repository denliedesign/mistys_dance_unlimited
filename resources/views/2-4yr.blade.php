@extends('layouts.app')

@section('title', '2-4 Years Old | Misty\'s Dance Unlimited')

@section('content')

<div class="head-wrap">
    <div class="twoyr"></div>
</div>
<section class="new-class-section">
    <h3 class="py-5 text-center">2-4 Year Olds</h3>
    <div class="class-card-grid-md">
        <div class="class-card">
            <img src="images/kid1.png">
            <p>
                Designed for 2 year olds and caregivers to enhance gross motor coordination and listening skills through music, props, crafts, and dance.
            </p>
        </div>
        <div class="class-card">
            <img src="images/kid2.png">
            <p>
                A creative movement class for 3 year olds designed to enhance gross motor development, listening skills, musicality, and nurture the creative spirit.
            </p>
        </div>
        <div class="class-card">
            <img src="images/kid5b.png">
            <p>
                Introduces the 4 year old dancer to Ballet through the stories of the great ballets.
            </p>
        </div>
        <div class="class-card">
            <img src="images/kid6.png">
            <p>
                Introduces the 3 and 4 year old dancer to the fun of Tap.
            </p>
        </div>
        <div class="class-card">
            <img src="images/fairytale-ballet.png" alt="Fairytale Ballet">
            <p>
                A creative movement class young dancers designed to enhance gross motor development, listening skills, musicality, and nurture the creative spirit. Dancers are introduced to basic ballet through the stories of the great ballets. A different classical ballet theme is developed each quarter.
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
            <div class="season-item"><span>2-4 yr olds</span></div>
            <div class="season-item">mon</div>
            <div class="season-item">tue</div>
            <div class="season-item">wed</div>
            <div class="season-item">thr</div>
            <div class="season-item">sat</div>
        </div>
        <div class="season-row">
            <div class="season-item">mommy & me</div>
            <div class="season-item">6:00-6:30pm</div>
            <div class="season-item"><span class="nada"></span></div>
            <div class="season-item">5:00-5:30pm</div>
            <div class="season-item">10:00-10:30am</div>
            <div class="season-item">9:00-9:30am</div>
        </div>
        <div class="season-row">
            <div class="season-item">tiny tappers</div>
            <div class="season-item">5:30-6:00pm</div>
            <div class="season-item">6:00-6:30pm</div>
            <div class="season-item">FULL</div>
            <div class="season-item">11:00-11:30am</div>
            <div class="season-item">9:30-10:00am</div>
        </div>
        <div class="season-row">
            <div class="season-item">fairytale ballet</div>
            <div class="season-item"><span class="nada"></span></div>
            <div class="season-item"><span class="nada"></span></div>
            <div class="season-item"><span class="nada"></span></div>
            <div class="season-item"><span class="nada"></span></div>
            <div class="season-item">10:00-10:30am<br>11:30-12:00pm</div>
        </div>
        <div class="season-row">
            <div class="season-item">tippy toes</div>
            <div class="season-item">5:00-5:30pm<br>5:30-6:00pm</div>
            <div class="season-item">5:30-6:00pm</div>
            <div class="season-item">4:30-5:00pm<br>6:00-6:30pm</div>
            <div class="season-item">11:30-12:00pm<br>6:00-6:30pm</div>
            <div class="season-item"><span class="nada"></span></div>
        </div>
        <div class="season-row">
            <div class="season-item">tutus & bowties</div>
            <div class="season-item">6:00-6:30pm</div>
            <div class="season-item">6:30-7:00pm</div>
            <div class="season-item">4:30-5:00pm<br>5:00-5:30pm</div>
            <div class="season-item">10:30-11:00am<br>4:30-5:00pm<br>6:30-7:00pm</div>
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
