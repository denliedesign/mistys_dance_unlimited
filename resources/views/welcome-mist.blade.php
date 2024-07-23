@extends('layouts.app-mist')
@section('content')
    {{--    background: RGBA(237, 23, 77, 0.1); red--}}
    {{--background: RGBA(235, 232, 46, 0.1); yellow--}}
    {{--background: RGBA(0, 140, 192, 0.1); blue--}}

{{--    <div class="" style="height: 125px;"></div>--}}

    <div class="d-block d-lg-none mx-4">
        <h1 class="born-1 poppins fw-bold p-0 m-0" style="font-size: 45px; transform: translateY(45px); opacity: 0;">You belong here <span style="color: #ED174D;"><ion-icon name="heart"></ion-icon></span></h1>
        <div class="born-2" style="transform: translateY(45px); opacity: 0;">
            <h2 class="poppins p-0 m-0 text-muted my-3" style="font-size: 20px;">Your child will fall in love with dance with our classes for ages 2-18!</h2>
            <div style="background: #008CC0; color: white; font-size: 20px;" class="btn poppins fw-bold btn-interact"><a class="text-white text-decoration-none" href="/fall">Find your class</a></div>
        </div>
    </div>
    @include('/desktop/home/_cta')

{{--    <div class="" style="height: 125px;"></div>--}}

    <img src="/images-mist/header.jpg" alt="all ages of dancers in a row" class="img-fluid">

    <div class="" style="height: 125px;"></div>

    <div class="d-block d-lg-none mx-4">
        <h1 class="born-3 poppins fw-bold p-0 m-0" style="font-size: 45px; transform: translateY(45px); opacity: 0;">Dance makes great kids! <ion-icon name="happy-outline"></ion-icon></h1>
        <h2 class="born-4 poppins p-0 m-0 text-muted my-3" style="font-size: 20px; transform: translateY(45px); opacity: 0;">From your child’s first class to their graduation performance, your child will thrive at MDU! At MDU, dance classes are More Than Just Great Dancing!®. Our dancers go beyond technique to develop important life skills, learning to be respectful, confident, and conscientious young people who share their gifts and talents with the community.</h2>
    </div>
    @include('/desktop/home/_vision')

    <div class="" style="height: 125px;"></div>

    <div class="mx-4 d-block d-lg-none">
        <h1 class="born-5 poppins fw-bold p-0 m-0" style="font-size: 45px; transform: translateY(45px); opacity: 0;">Did you know... <ion-icon name="bulb-outline"></ion-icon></h1>
        <h2 class="born-6 poppins p-0 m-0 text-muted" style="font-size: 20px; transform: translateY(45px); opacity: 0;">Students who regularly participate in dance:</h2>
        <div class="mx-4">
            <div class="my-4" style="display: grid; grid-template-columns: auto 1fr; align-items: center;">
                <div style="position: relative;">
                    <div class="poppins fw-bold boop-5" style="height: 0px; width: 0px; background: #ED174D; color: white; border-radius: 50%; font-size: 20px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><div style="height: 100%; width: 100%;" class="d-flex justify-content-center align-items-center">1</div></div>
                    {{--                <img src="/images/Color_5.png" alt="dancer illustration" class="img-fluid" style="width: 50px; height: auto;">--}}
                </div>
                {{--            <div class="boop-5" style="height: 0px; width: 0px; border-radius: 50%; position: relative; background: #ED174D;"><div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" class="poppins fw-bold text-white">1</div></div>--}}
                <div class="poppins text-muted ms-3 ps-3" style="font-size: 20px;">Earn higher GPAs</div>
            </div>
            <div class="my-4" style="display: grid; grid-template-columns: auto 1fr; align-items: center;">
                <div style="position: relative;">
                    <div class="poppins fw-bold boop-6" style="height: 0px; width: 0px; background: #ED174D; color: white; border-radius: 50%; font-size: 20px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><div style="height: 100%; width: 100%;" class="d-flex justify-content-center align-items-center">2</div></div>
                    {{--                <img src="/images/Color_6.png" alt="dancer illustration" class="img-fluid" style="width: 50px; height: auto;">--}}
                </div>
                {{--            <div class="boop-6" style="height: 0px; width: 0px; border-radius: 50%; position: relative; background: #ED174D;"><div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" class="poppins fw-bold text-white">2</div></div>--}}
                <div class="poppins text-muted ms-3 ps-3" style="font-size: 20px;">Perform better in science, math, and writing</div>
            </div>
            <div class="my-4" style="display: grid; grid-template-columns: auto 1fr; align-items: center;">
                <div style="position: relative;">
                    <div class="poppins fw-bold boop-7" style="height: 0px; width: 0px; background: #ED174D; color: white; border-radius: 50%; font-size: 20px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><div style="height: 100%; width: 100%;" class="d-flex justify-content-center align-items-center">3</div></div>
                    {{--                <img src="/images/Color_7.png" alt="dancer illustration" class="img-fluid" style="width: 50px; height: auto;">--}}
                </div>
                {{--            <div class="boop-7" style="height: 0px; width: 0px; border-radius: 50%; position: relative; background: #ED174D;"><div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" class="poppins fw-bold text-white">3</div></div>--}}
                <div class="poppins text-muted ms-3 ps-3" style="font-size: 20px;">Earn higher test scores on SATs</div>
            </div>
            <div class="my-4" style="display: grid; grid-template-columns: auto 1fr; align-items: center;">
                <div style="position: relative;">
                    <div class="poppins fw-bold boop-8" style="height: 0px; width: 0px; background: #ED174D; color: white; border-radius: 50%; font-size: 20px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><div style="height: 100%; width: 100%;" class="d-flex justify-content-center align-items-center">4</div></div>
                    {{--                <img src="/images/Color_10.png" alt="dancer illustration" class="img-fluid" style="width: 50px; height: auto;">--}}
                </div>
                {{--            <div class="boop-8" style="height: 0px; width: 0px; border-radius: 50%; position: relative; background: #ED174D;"><div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" class="poppins fw-bold text-white">4</div></div>--}}
                <div class="poppins text-muted ms-3 ps-3" style="font-size: 20px;">Enroll in 4-year colleges and earn mostly As</div>
            </div>
        </div>
        <small class="text-muted p-0 mx-1 poppins">Source: National Endowment for the Arts</small>
    </div>
    @include('/desktop/home/_know')

    <div class="" style="height: 125px;"></div>

    <section class="mx-4 d-block d-lg-none" style="position: relative;">
{{--        <div class="rounded list-overlay gradient-background" style="height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: 0;"></div>--}}
        {{--    <div class="fw-bold poppins p-0" style="font-size: 20px; line-height: 0.9;">Parents <ion-icon name="heart"></ion-icon><br><span style="color: #ED174D;">Misty's Dance Unlimited...</span></div>--}}
        <div class="fw-bold poppins p-0 m-4" style="font-size: 30px;">
            Additionally, dance boosts
            <span class="hover-unred">confidence</span>,
            <span class="hover-unblue">coordination</span>, and
            <span class="hover-unyellow">compassion</span> for others. Dancers learn
            <span class="hover-unred">hard work</span>,
            <span class="hover-unblue">perseverance</span>, and
            <span class="hover-unyellow">team work</span>. Or as we like to say around here...
            <span class="hover-unred">Dance makes great kids!</span>
        </div>
    </section>
    @include('/desktop/home/_additionally')

    <div class="" style="height: 125px;"></div>

    <div class="d-block d-md-none">
        <h1 class="poppins fw-bold p-0 mx-4 my-0" style="font-size: 45px;">Check Out Our Convenient Classes & Camps</h1>
        <div class="ages-wrapper">
            <div class="ages-container">
                <div class="age">
                    <img src="/images-mist/age-1.jpg" alt="child dancer" class="img-fluid" style="border: 3px solid #008CC0;">
                    <div class="age-title"><a class="d-flex align-items-center text-decoration-none text-dark" style="width: max-content;" href="/fall#ab">Age 1-2 <ion-icon class="ms-1" style="color: #008CC0;" name="arrow-forward-outline"></ion-icon></a></div>
                </div>
                <div class="age">
                    <img src="/images-mist/age-2.jpg" alt="child dancer" class="img-fluid" style="border: 3px solid #008CC0;">
                    <div class="age-title"><a class="d-flex align-items-center text-decoration-none text-dark" style="width: max-content;" href="/fall#ab">Age 3-4 <ion-icon class="ms-1" style="color: #008CC0;" name="arrow-forward-outline"></ion-icon></a></div>
                </div>
                <div class="age">
                    <img src="/images-mist/age-3.jpg" alt="child dancer" class="img-fluid" style="border: 3px solid #008CC0;">
                    <div class="age-title"><a class="d-flex align-items-center text-decoration-none text-dark" style="width: max-content;" href="/fall#c">Age 5-6 <ion-icon class="ms-1" style="color: #008CC0;" name="arrow-forward-outline"></ion-icon></a></div>
                </div>
                <div class="age">
                    <img src="/images-mist/age-4.jpg" alt="child dancer" class="img-fluid" style="border: 3px solid #008CC0;">
                    <div class="age-title"><a class="d-flex align-items-center text-decoration-none text-dark" style="width: max-content;" href="/fall#d">Age 7-8 <ion-icon class="ms-1" style="color: #008CC0;" name="arrow-forward-outline"></ion-icon></a></div>
                </div>
                <div class="age">
                    <img src="/images-mist/age-5.jpg" alt="child dancer" class="img-fluid" style="border: 3px solid #008CC0;">
                    <div class="age-title"><a class="d-flex align-items-center text-decoration-none text-dark" style="width: max-content;" href="/fall#e">Age 9-12 <ion-icon class="ms-1" style="color: #008CC0;" name="arrow-forward-outline"></ion-icon></a></div>
                </div>
                <div class="age">
                    <img src="/images-mist/age-6.jpg" alt="child dancer" class="img-fluid" style="border: 3px solid #008CC0;">
                    <div class="age-title"><a class="d-flex align-items-center text-decoration-none text-dark" style="width: max-content;" href="/fall#e">Teens <ion-icon class="ms-1" style="color: #008CC0;" name="arrow-forward-outline"></ion-icon></a></div>
                </div>
                <div class="age">
                    <img src="/images-mist/age-7.jpg" alt="child dancer" class="img-fluid" style="border: 3px solid #008CC0;">
                    <div class="age-title"><a class="d-flex align-items-center text-decoration-none text-dark" style="width: max-content;" href="/fall#age-guys">Guys Only <ion-icon class="ms-1" style="color: #008CC0;" name="arrow-forward-outline"></ion-icon></a></div>
                </div>
                <div class="age">
                    <div style="position: relative;">
                        <div style="position: absolute; height: 100%; width: 100%; background: #ED174D; border-radius: 30px; z-index: 4;">
                            <div class="d-flex justify-content-center align-items-center poppins text-white" style="height: 100%;">
                                <div class="mx-2 text-center">
                                    <h2 class="text-uppercase my-0 py-0" style="font-size: 20px;">Program Feature <ion-icon name="heart" style=""></ion-icon></h2>
                                    <p class="fw-bold my-0 py-0" style="font-size: 30px;">Darby's Dancers</p>
                                    <p style="font-size: 16px;" class="my-0 py-0">
                                        MDU is proud to offer through a chapter of the national non-profit organization Darby’s Dancers, an opportunity for children with special needs to participate in the performing arts through dance education at no cost to their families. MDU's chapter of Darby's Dancers is supported by the
                                        <a href="https://www.chancetodancefoundation.org" target="_blank" class="text-white">Chance to Dance Foundation</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <img src="/images-mist/age-7.jpg" alt="child dancer" class="img-fluid" style="opacity: 0;">
                    </div>
                    <div class="age-title"><a class="d-flex align-items-center text-decoration-none text-dark" style="width: max-content; opacity: 0;">Guys Only <ion-icon class="ms-1" style="color: #008CC0;" name="arrow-forward-outline"></ion-icon></a></div>
                </div>
            </div>
        </div>
    </div>
    @include('/desktop/home/_ages')

    <div class="" style="height: 125px;"></div>


    <section class="d-block d-lg-none mx-4">
        <h1 class="poppins fw-bold p-0 my-0" style="font-size: 45px;">Misty's Dance Unlimited has MORE to love!</h1>
        <div class="row row-cols-2 my-5 py-2">
            <div class="col-3" style="position: relative;">
                <div class="poppins fw-bold boop-1" style="height: 0px; width: 0px; background: #ED174D; color: white; border-radius: 50%; font-size: 30px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><div style="height: 100%; width: 100%;" class="d-flex justify-content-center align-items-center">2</div></div>
                {{--                <img src="/images/Color_9.png" alt="dancer illustration" class="img-fluid">--}}
            </div>
            <div class="col-9 d-flex align-items-center">
                <h1 class="poppins text-muted p-0 m-0" style="font-size: 20px;">Convenient locations in Holmen & Onalaska</h1>
            </div>
        </div>

        <div class="row row-cols-2 my-5 py-2">
            <div class="col-3" style="position: relative;">
                <div class="poppins fw-bold boop-3" style="height: 0px; width: 0px; background: #ED174D; color: white; border-radius: 50%; font-size: 30px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><div style="height: 100%; width: 100%;" class="d-flex justify-content-center align-items-center">27</div></div>
                {{--                <img src="/images/Color_3.png" alt="dancer illustration" class="img-fluid">--}}
            </div>
            <div class="col-9 d-flex align-items-center">
                <h1 class="poppins text-muted p-0 m-0" style="font-size: 20px;">Years of serving the Coulee region</h1>
            </div>
        </div>
        <div class="row row-cols-2 my-5 py-2">
            <div class="col-3" style="position: relative;">
                <div class="poppins fw-bold boop-2" style="height: 0px; width: 0px; background: #ED174D; color: white; border-radius: 50%; font-size: 30px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><div style="height: 100%; width: 100%;" class="d-flex justify-content-center align-items-center">35+</div></div>
                {{--                <img src="/images/Color_2.png" alt="dancer illustration" class="img-fluid">--}}
            </div>
            <div class="col-9 d-flex align-items-center">
                <h1 class="poppins text-muted p-0 m-0" style="font-size: 20px;">Youth Protection Association for Dance™ trained educators and staff</h1>
            </div>
        </div>
        <div class="row row-cols-2 my-5 py-2">
            <div class="col-3" style="position: relative;">
                <div class="poppins fw-bold boop-4" style="height: 0px; width: 0px; background: #ED174D; color: white; border-radius: 50%; font-size: 30px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><div style="height: 100%; width: 100%;" class="d-flex justify-content-center align-items-center">100+</div></div>
                {{--                <img src="/images/Color_4.png" alt="dancer illustration" class="img-fluid">--}}
            </div>
            <div class="col-9 d-flex align-items-center">
                <h1 class="poppins text-muted p-0 m-0" style="font-size: 20px;">Classes per week to choose from</h1>
            </div>
        </div>
    </section>
    @include('/desktop/home/_numbers')

    <div class="" style="height: 125px;"></div>

    <section class="d-block d-lg-none mx-4" style="position: relative;">
{{--        <div class="rounded list-overlay gradient-background" style="height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: 0;"></div>--}}
        <div class="fw-bold poppins p-0" style="font-size: 45px; line-height: 0.9;">Parents <ion-icon name="heart"></ion-icon><br><span style="color: #ED174D;">Misty's Dance Unlimited...</span></div>
        <div class="fw-bold poppins hover-red p-0 my-2" style="font-size: 20px;"><ion-icon name="heart"></ion-icon> Background checked staff</div>
        <div class="fw-bold poppins hover-blue p-0 my-2" style="font-size: 20px;"><ion-icon name="heart"></ion-icon> CPR and First Aid Certified</div>
        <div class="fw-bold poppins hover-yellow p-0 my-2" style="font-size: 20px;"><ion-icon name="heart"></ion-icon> Written Curriculum</div>
        <div class="fw-bold poppins hover-red p-0 my-2" style="font-size: 20px;"><ion-icon name="heart"></ion-icon> Secured Facility</div>
        <div class="fw-bold poppins hover-blue p-0 my-2" style="font-size: 20px;"><ion-icon name="heart"></ion-icon> Full-time admin team</div>
        <div class="fw-bold poppins hover-yellow p-0 my-2" style="font-size: 20px;"><ion-icon name="heart"></ion-icon> Study areas for students</div>
        <div class="fw-bold poppins hover-red p-0 my-2" style="font-size: 20px;"><ion-icon name="heart"></ion-icon> Sprung floors for safety</div>
        <div class="fw-bold poppins hover-blue p-0 my-2" style="font-size: 20px;"><ion-icon name="heart"></ion-icon> Community service opportunities</div>
{{--        <div class="fw-bold poppins hover-yellow p-0 my-4" style="font-size: 20px;">Youth Protection Association for Dance™ trained educators</div>--}}
    </section>
    @include('/desktop/home/_parents')

    <div class="" style="height: 125px;"></div>

    <section class="d-block d-lg-none mx-4">
        <h1 class="poppins fw-bold p-0 m-0 text-center" style="font-size: 45px;">Thank you parents for making MDU<br> "Best of La Crosse" in 2024!</h1>
        <div class="bloom-1 my-4" style="position: relative; transform: scale(0.95) translateY(10px);">
            <div class="rounded p-3" style="background: #FFE9ED;">
                <div class="d-flex align-items-center">
                    <img src="/images-mist/review-jamie-dahl.png" alt="headshot" class="img-fluid">
                    <div class="fw-bold poppins ms-3">Jamie Dahl</div>
                </div>
                <p class="text-muted poppins mt-3">
                    MDU is a wonderful environment that not only teaches great dancing, but also leadership growth and character. It’s been a place of fun and new friendships for our daughters!
                </p>
            </div>
        </div>
        <div class="bloom-2 my-4" style="position: relative; transform: scale(0.95) translateY(10px);">
            <div class="rounded p-3" style="background: #FEFDEC;">
                <div class="d-flex align-items-center">
                    <img src="/images-mist/review-mindy-cadd.png" alt="headshot" class="img-fluid">
                    <div class="fw-bold poppins ms-3">Mindy Cadd</div>
                </div>
                <p class="text-muted poppins mt-3">
                    Misty’s is excellent at the number of offerings they provide and excellent communication skills all around. The teachers are happy to be there & caring towards the kids. Highly recommend!
                </p>
            </div>
        </div>
        <div class="bloom-3 my-4" style="position: relative; transform: scale(0.95) translateY(10px);">
            <div class="rounded p-3" style="background: #EAF3F9;">
                <div class="d-flex align-items-center">
                    <img src="/images-mist/review-alex-leuck.png" alt="headshot" class="img-fluid">
                    <div class="fw-bold poppins ms-3">Alexandra Leuck</div>
                </div>
                <p class="text-muted poppins mt-3">
                    Thank you Miss Denise for having such a beautiful soul, and a desire to help these girls who love to dance. We are so incredibly grateful for the opportunity to participate in Darby’s Dancers. Alli absolutely ADORES YOU, as do all the girls in class.
                </p>
            </div>
        </div>
        <div class="bloom-4 my-4" style="position: relative; transform: scale(0.95) translateY(10px);">
{{--            <div class="rounded gradient-background" style="height: 100%; width: 100%; position: absolute;"></div>--}}
            <div class="rounded p-3" style="background: #ffe9ed;">
                <div class="d-flex align-items-center">
                    <img src="/images-mist/review-latesha.png" alt="headshot" class="img-fluid">
                    <div class="fw-bold poppins ms-3">Latesha Berrong</div>
                </div>
                <p class="text-muted poppins mt-3">
                    Miss Shayna has been such a joy to work with! She has made dance so joyful for our family! Her positive attitude and smile lights up the room!
                </p>
            </div>
        </div>
    </section>
    @include('/desktop/home/_testimonials')

    <div class="" style="height: 125px;"></div>

    <div class="mx-4 d-block d-lg-none">
        <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px; transform: translateY(45px); opacity: 0;">See what dance can do for your child!</h1>
        <div class="born-8" style="transform: translateY(45px); opacity: 0;">
            <h2 class="poppins p-0 m-0 text-muted my-3" style="font-size: 20px;">"At Misty's Dance Unlimited, we don't teach kids to make great dancers. We teach dance to make great kids!" <small><em>-Misty Lown</em></small></h2>
            <div style="background: #008CC0; color: white; font-size: 20px;" class="btn poppins fw-bold btn-interact"><a class="text-white text-decoration-none" href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">Enroll today</a></div>
{{--            <div style="background: #ED174D; color: white; font-size: 20px;" class="btn poppins fw-bold btn-interact mx-3"><a class="text-white text-decoration-none" href="#footer-mist">Contact us</a></div>--}}
        </div>
    </div>
    @include('/desktop/home/_cta-bottom')

    <div class="" style="height: 125px;"></div>

    <section class="d-block d-md-none">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item mb-3 active">
                    <div class="shrinky-5 overflow-hidden" style="padding: 3rem;">
                        <div class="pill pill-red px-0 poppins row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                            <div class="col p-0 m-0" style="height: 43vh; background: #FFE9ED; border-radius: 30px 30px 0 0; position: relative;">
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 45px; line-height: 1;" class="fw-bold">
                                    You'll <span style="color: #ED174D;">love</span> your experience
                                    <div style="font-size: 20px; line-height: 1.5;" class="mt-3">or we'll work with you to make it right!</div>
                                </div>
                            </div>
                            <div class="col p-0 m-0" style="height: 43vh; background: RGBA(237, 23, 77, 1); border-radius: 0 0 30px 30px; position: relative;">
                                <div>
                                    <img src="/images-mist/logo-guarantee.png" alt="" class="img-fluid" style="height: 200px; width: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-3">
                    <div class="shrinky-4 overflow-hidden" style="padding: 3rem;">
                        <div class="pill pill-blue px-0 poppins row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                            <div class="col p-0 m-0" style="height: 43vh; background: RGBA(15, 14, 12, 0.1); border-radius: 30px 30px 0 0; position: relative;">
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 45px; line-height: 1;" class="fw-bold">
                                    If you let me <span style="color: #ED174D;">dance...</span>
                                </div>
                            </div>
                            <div style="height: 43vh; background: #0F0E0C; border-radius: 0 0 30px 30px; position: relative;">
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
                                    <video poster="/images-mist/if-you-let-me-dance-poster.png" src="/images-lava/if-you-let-me-dance.mp4" type="video/mp4" controls="" class="shadow rounded" style="max-width: 950px; width: 100%; height: auto;"></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-3">
                    <div class="overflow-hidden shrinky-1" style="padding: 3rem;">
                        <div class="pill pill-red px-0 poppins row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                            <div class="col p-0 m-0" style="height: 43vh; background: #FFE9ED; border-radius: 30px 30px 0 0; position: relative;">
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 45px; line-height: 1;" class="fw-bold">
                                    Keeping your dancer <span style="color: #ED174D;">happy</span>
                                </div>
                            </div>
                            <div class="col p-0 m-0" style="height: 43vh; background: RGBA(237, 23, 77, 1); border-radius: 0 0 30px 30px; position: relative;">
                                <div>
                                    <img src="/images-mist/logo-mtjgd.png" alt="" class="img-fluid" style="height: 200px; width: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-3">
                    <div class="overflow-hidden shrinky-2" style="padding: 3rem;">
                        <div class="pill pill-yellow px-0 poppins row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                            <div class="col p-0 m-0" style="height: 43vh; background: #FEFDEC; border-radius: 30px 30px 0 0; position: relative;">
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 45px; line-height: 1;" class="fw-bold">
                                    Keeping your dancer <span style="color: #ED174D;">healthy</span>
                                </div>
                            </div>
                            <div style="height: 43vh; background: RGBA(235, 232, 46, 1); border-radius: 0 0 30px 30px; position: relative;">
                                <div>
                                    <img src="/images-mist/logo-ypad.png" alt="" class="img-fluid" style="height: 100px; width: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-3">
                    <div class="overflow-hidden shrinky-3" style="padding: 3rem;">
                        <div class="pill pill-blue px-0 poppins row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                            <div class="col p-0 m-0" style="height: 43vh; background: #EAF3F9; border-radius: 30px 30px 0 0; position: relative;">
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 45px; line-height: 1;" class="fw-bold">
                                    Keeping your dancer <span style="color: #ED174D;">safe</span>
                                </div>
                            </div>
                            <div style="height: 43vh; background: RGBA(0, 140, 192, 1); border-radius: 0 0 30px 30px; position: relative;">
                                <div>
                                    <img src="/images-mist/logo-safe.png" alt="" class="img-fluid" style="height: 175px; width: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--@include('/desktop/home/_pills-2')--}}
    @include('/desktop/home/_pills')

    <div class="" style="height: 125px;"></div>


    <div class="mx-4 d-block d-lg-none" id="brand">
        <p class="text-muted mb-0 poppins" style="font-size: 20px;">Proudly partnering with these outstanding organizations</p>
        {{--    <div class="fw-bold poppins p-0" style="font-size: 20px; line-height: 0.9;">Proudly partnering with these outstanding organizations</div>--}}
        <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
            <div class="col p-0 d-flex align-items-center justify-content-center"><img src="/images-mist/partner1.jpeg" alt="partner logo"></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><img src="/images-mist/partner2.png" alt="partner logo"></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><img src="/images-mist/partner3.png" alt="partner logo"></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><img src="/images-mist/partner4.png" alt="partner logo"></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><img src="/images-mist/partner5.png" alt="partner logo"></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><img src="/images-mist/partner6.jpg" alt="partner logo"></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><img src="/images-mist/partner7.png" alt="partner logo"></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><img src="/images-mist/partner8.jpg" alt="partner logo"></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><img src="/images-mist/partner9.png" alt="partner logo"></div>
        </div>
    </div>
    @include('/desktop/home/_partners')

@endsection
