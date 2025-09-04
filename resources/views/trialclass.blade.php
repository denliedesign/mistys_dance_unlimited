@extends('layouts.app-side-mist')
@section('content')

    <section id="header">
        <div class="container">
            <div class="row">
                <div class="col-md px-0 d-flex align-items-center">
                    <div>
                        <div style="font-size: 75px; font-weight: bold; line-height: 1.1;">
                            Dance Classes That
                            Make Happy Kids
                        </div>
                        <div class="mt-4" style="font-size: 35px;">
                            A caring community where kids build confidence,
                            compassion and life long friendships.
                        </div>
                        <div class="mt-4">
                            <a href="/TrialClass#form"><div class="btn btn-lg" style="background: #ED174D; color: white;">Book a Trial Class!</div></a>
                        </div>
                    </div>
                </div>
                <div class="col-md px-0">
                    <img src="/images-mist/lyla.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="stats" style="background: #64C6FF; color: white; font-weight: bold; font-size: 35px;" class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                <div>Serving the Coulee <br>Region since 1998</div>
                <hr class="d-block d-md-none my-2" style="width: 80%;">
                <div>Voted “Best of <br>La Crosse 2025</div>
                <hr class="d-block d-md-none my-2" style="width: 80%;">
                <div>CPR & YPAD<br>Certified Instructors</div>
            </div>
        </div>
    </section>

    <section id="form" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md rounded" style="background: #F5F5F5; font-size: 35px; ">
                    <div class="p-4">
                        <div style="font-weight: bold;">
                            Ready to Twirl Into a Trial?
                        </div>
                        <div class="p-4 mt-4 rounded" style="font-size: 20px;">
                            <form action="{{ route('trial.store') }}" method="POST">
                                <div class="form-group">
                                    <label for="parentName">Parent Name</label>
                                    <input id="parentName" type="text" class="form-control" name="parentName" value="{{ old('parentName') }}">
                                    <div>{{ $errors->first('parentName') }}</div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <div>{{ $errors->first('email') }}</div>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                                    <div>{{ $errors->first('phone') }}</div>
                                </div>

                                <div class="form-group">
                                    <label for="studentName">Student Name</label>
                                    <input id="studentName" type="text" class="form-control" name="studentName" value="{{ old('studentName') }}">
                                    <div>{{ $errors->first('studentName') }}</div>
                                </div>

                                <div class="form-group">
                                    <label for="birthdate">Birthdate</label>
                                    <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                                    <div>{{ $errors->first('birthdate') }}</div>
                                </div>

                                <!-- Preferred Day (checkboxes) -->
                                <div class="form-group" id="day">
                                    <label class="d-block">Preferred Day</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="day_m" name="day[]" value="M" {{ in_array('M', old('day', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="day_m">M</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="day_t" name="day[]" value="T" {{ in_array('T', old('day', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="day_t">T</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="day_w" name="day[]" value="W" {{ in_array('W', old('day', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="day_w">W</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="day_th" name="day[]" value="TH" {{ in_array('TH', old('day', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="day_th">TH</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="day_f" name="day[]" value="F" {{ in_array('F', old('day', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="day_f">F</label>
                                    </div>

                                    <div class="mt-1">{{ $errors->first('day') }}</div>
                                </div>

                                <!-- SMS consent -->
                                <div class="form-group form-check mt-3">
                                    <input class="form-check-input" type="checkbox" id="sms_consent" name="sms_consent" value="1" {{ old('sms_consent') ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="sms_consent">
                                        By submitting this form, you agree to receive text
                                        messages from Mistys Dance Unlimited.
                                    </label>
                                    <div>{{ $errors->first('sms_consent') }}</div>
                                </div>

                                @csrf
                                <button type="submit" class="btn btn-lg my-4" style="background: #ED174D; width: 100%; color: white;">Claim Your Trial Class</button>
                            </form>

                        </div>
                    </div>
{{--                    <div class="mx-4">--}}
{{--                        <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><div class="btn btn-lg mb-4" style="background: #ED174D; width: 100%; color: white;">Claim Your Trial Class</div></a>--}}
{{--                    </div>--}}
                </div>
                <div class="col-md">
                    <img src="/images-mist/know-crop.png" class="img-fluid d-none d-md-block" style="" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="why" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md d-flex align-items-center">
                    <img src="/images-mist/parents-love-mistys.png" class="img-fluid" alt="">
                </div>
                <div class="col-md">
                    <div style="font-size: 45px; font-weight: bold; line-height: 1.2;">Why Misty’s Dance?</div>
                    <div class="mt-4" style="font-size: 25px;">
                        Looking for a children’s activity that teaches structure,
                        team work, and confidence without overwhelming your
                        family’s schedule?
                        <br><br>
                        <strong>2 Convenient Locations</strong>
                        Serving families in both Holmen and Onalaska, making
                        after-school drop-off easy and accessible.
                        <br><br>
                        <strong>28 Years of Trusted Experience</strong>
                        A legacy of helping Coulee Region families find
                        confidence, connection, and joy through dance.
                        <br><br>
                        <strong>35+ Certified & Caring Staff</strong>
                        MDU was the first dance studio in the nation to earn
                        the designation of Youth Protection Association for
                        DanceTM (YPAD) certified.
                        <br><br>
                        <strong>100+ Weekly Class Options</strong>
                        There’s something for every child, every schedule, and
                        every skill level.

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="included" class="mt-5 py-5" style="background: #FFE8ED;">
        <div class="container">
            <div class="row">
                <div class="col-md mx-0 px-0">
                    <div class="d-flex justify-content-center align-items-center mb-4 mt-4">
                        <div style="height: 28px; width: 28px; border-radius: 50%; background: #ED174D;"></div>
                        <div style="height: 3px; width: 100%; background: #ED174D;"></div>
                    </div>
                    <div style="width: 85%;">
                        <div style="font-size: 35px; color: #ED174D; line-height: 1.2;">
                            <strong>Submit the
                                Form</strong>
                            <br>
                            <span style="font-size: 25px;">
                            Claim your trial by
filling out a quick form,
it only takes a minute.
                        </span>
                        </div>
                    </div>
                </div>
                <div class="col-md mx-0 px-0">
                    <div class="d-flex justify-content-center align-items-center mb-4 mt-4">
                        <div style="height: 28px; width: 28px; border-radius: 50%; background: #ED174D;"></div>
                        <div style="height: 3px; width: 100%; background: #ED174D;"></div>
                    </div>
                    <div style="width: 85%;">
                        <div style="font-size: 35px; color: #ed174d; line-height: 1.2;">
                            <strong>We'll Match You
                                to the Right Class</strong>
                            <br>
                            <span style="font-size: 25px;">
Our team will contact you
to recommend the best
class based on your
child’s age, interests, and
your availability.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md mx-0 px-0">
                    <div class="d-flex justify-content-center align-items-center mb-4 mt-4">
                        <div style="height: 28px; width: 28px; border-radius: 50%; background: #ED174D;"></div>
                        <div style="height: 3px; width: 100%; background: #ED174D;"></div>
                    </div>
                    <div style="width: 85%;">
                        <div style="font-size: 35px; color: #ed174d; line-height: 1.2;">
                            <strong>Enjoy the Class,
                                Explore MDU</strong>
                            <br>
                            <span style="font-size: 25px;">
Your child attends the
class and gets a feel for
the studio, the
instructor, and the fun!
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md mx-0 px-0">
                    <div class="d-flex justify-content-center align-items-center mb-4 mt-4">
                        <div style="height: 28px; width: 28px; border-radius: 50%; background: #ED174D;"></div>
                        <div style="height: 3px; width: 100%; background: #ED174D;"></div>
                    </div>
                    <div style="width: 85%;">
                        <div style="font-size: 35px; color: #ed174d; line-height: 1.2;">
                            <strong>No Pressure,
                                Just Possibility</strong>
                            <br>
                            <span style="font-size: 25px;">
You decide if it’s a fit.
There’s no obligation just
a chance to discover
something new.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md d-flex align-items-center">
                    <div>
                        <div class="mb-4" style="font-size: 50px; font-weight: bold;">New to Dance? Helpful FAQs</div>
                        <div>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            What should my dancer wear to the trial?
                                        </button>
                                    </div>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted">No need to buy anything special! Just have your dancer wear comfy clothes they can move in. Depending on the class, they can dance barefoot, in socks, or in tennis shoes.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            What if my child is nervous?
                                        </button>
                                    </div>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted">Totally normal—and we get it! Trying something new can feel big. Dance is a great way to build confidence and learn how to work through challenges. We pride ourselves on a super positive and supportive culture that helps every dancer feel welcome.

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Can siblings watch or wait?
                                        </button>
                                    </div>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted">Absolutely! All our studios have viewing windows so you can watch the class. Our lobby is comfy and family-friendly—with a play area for little ones, free Wi-Fi, and plenty of space to relax, eat, socialize, or get some work done. There are outlets for your devices, plus a kitchen with a sink and microwave if you're here during mealtime.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            What happens after the trial?
                                        </button>
                                    </div>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted">We'll follow up to see how the trial went and share all your options for enrolling. No pressure—just info to help you decide what works best for your family!

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            What type of classes do you offer?
                                        </button>
                                    </div>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted">So many! We offer dance classes for ages 2 through adult. You'll find summer classes, camps, intensives, regular school-year sessions, and mini sessions. Styles include jazz, tap, hip hop, musical theater, ballet, pointe, lyrical, modern, contemporary, and dance team.
                                            <br><br> We also offer inclusive classes for dancers with disabilities, a pre-professional ballet program, and more. There's truly something for everyone!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <img src="/images-mist/numbers.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="book" style="background: #FEFDEB;" class="mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="font-size: 50px; font-weight: bold;">See What Dance Can Do
                    For Your Child. Take a Leap!</div>
                <div class="col-md-4 d-flex align-items-center justify-content-end">
                    <div><a href="/TrialClass#form"><div class="btn btn-lg" style="background: #EBE834; font-weight: bold;">Book Trial</div></a></div>
                    <div class="ms-4"><a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><div class="btn btn-lg" style="background: #D8D8D8; font-weight: bold;">Enroll Now</div></a></div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="mt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card h-100 rounded border-3" style="border-color:#008CBF;">
                        <div class="card-body p-4 d-flex">
                            <h5 class="card-title fs-5 lh-sm m-0">
                                “MDU is a wonderful environment that not only teaches great dancing, but also leadership growth and character. It’s been a place of fun and new friendships for our daughters!”
                            </h5>
                        </div>
                        <div class="card-footer bg-white border-0 mt-auto">
                            <div class="d-flex align-items-center">
                                <img src="/images-mist/review-jamie-dahl.png" alt="Photo of Jamie Dahl"
                                     class="img-fluid rounded-circle" style="height:45px;width:45px;object-fit:cover;">
                                <p class="card-text ms-3 fw-bold mb-0">Jamie Dahl</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="card h-100 rounded border-3" style="border-color:#008CBF;">
                        <div class="card-body p-4 d-flex">
                            <h5 class="card-title fs-5 lh-sm m-0">
                                “Misty’s is excellent at the number of offerings they provide and excellent communication skills all around. The teachers are happy to be there &amp; caring towards the kids. Highly recommend!”
                            </h5>
                        </div>
                        <div class="card-footer bg-white border-0 mt-auto">
                            <div class="d-flex align-items-center">
                                <img src="/images-mist/review-mindy-cadd.png" alt="Photo of Mindy Cadd"
                                     class="img-fluid rounded-circle" style="height:45px;width:45px;object-fit:cover;">
                                <p class="card-text ms-3 fw-bold mb-0">Mindy Cadd</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="card h-100 rounded border-3" style="border-color:#008CBF;">
                        <div class="card-body p-4 d-flex">
                            <h5 class="card-title fs-5 lh-sm m-0">
                                “Miss Shayna has been such a joy to work with! She has made dance so joyful for our family! Her positive attitude and smile lights up the room!”
                            </h5>
                        </div>
                        <div class="card-footer bg-white border-0 mt-auto">
                            <div class="d-flex align-items-center">
                                <img src="/images-mist/review-latesha.png" alt="Photo of Latesha Berrong"
                                     class="img-fluid rounded-circle" style="height:45px;width:45px;object-fit:cover;">
                                <p class="card-text ms-3 fw-bold mb-0">Latesha Berrong</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="about" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md d-flex align-items-center">
                    <div>
                        <div style="font-size: 50px; font-weight: bold;">About Misty's Dance</div>
                        <div class="mt-4" style="font-size: 25px;">
                            MDU is a community where children grow, friendships
                            blossom, and leadership is fostered. Our classes are
                            designed to challenge without overwhelming,
                            encouraging dancers to raise the bar both in the studio
                            and in life.
                            <br><br>

                            Whether your child is just starting out or looking to
                            refine their skills, our curriculum focuses on social,
                            emotional, physical, and mental growth.

                            <br><br>
                            We pride ourselves on offering a clean, well-organized
                            facility, complete with everything families need for
                            comfort and convenience. Our staff know each child
                            by name. ♡
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-items-center">
                    <div>
                        <video width="100%" height="350" controls>
                            <source src="/images/if-you-let-me-dance.mp4" type="video/mp4">
                        </video>
                        <div class="mt-4" style="font-weight: bold; font-size: 35px;">
                            Fun for Kids. Easy for the Parents.
                            Give the Gift of Dance!
                        </div>
                        <div class="mt-4">
                            <a href="/TrialClass#form"><div class="btn btn-lg" style="background: #ED174D; color: white; width: 100%;">Secure My Class!</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
