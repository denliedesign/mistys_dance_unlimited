        @extends('layouts.app')

        @section('content')

        <div class="video-container d-none d-md-block">
            <video id="myVideo" autoplay="autoplay" controls="">
                <source src="images/if-you-let-me-dance.mp4" type="video/mp4">
            </video>
        </div>

        <div class="jumbotron jumbotron-fluid bg-aliceblue">
            <div class="container">
                <div class="vision text-center area-full d-flex align-items-center">
                    <div class="vision-items">
                        <h3 class="pb-5">We Have Built a Reputation for Excellence in Dance Instruction</h3>
                        <p class="lead">
                            From your child’s first class to their graduation performance, MDU has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, MDU is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
                            <br><br><strong>Welcome to Misty’s Dance Unlimited!</strong>
                        </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#trymodal">
                            Try Your First Class Free!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="trymodal" tabindex="-1" role="dialog" aria-labelledby="trymodalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content bg-ivory text-white">
                                    <div>
                                        <img src="images/freetrialform.jpg" alt="" style="width: 100%;">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <h5 class="modal-title mt-2" id="trymodalLabel">Your First Class FREE</h5>
                                    <small class="text-muted">Limited availability. For a short time only.</small>
                                    <div class="modal-body text-left mx-2">
                                        <form action="{{ route('trial.store') }}" method="POST">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label" for="parentName">Parent Name</label>
                                                <div class="col-sm-8">
                                                    <input id="parentName" type="text" class="form-control" name="parentName" value="{{ old('parentName') }}">
                                                </div>
                                                <div>{{ $errors->first('parentName') }}</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label" for="email">Email</label>
                                                <div class="col-sm-8">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                                </div>
                                                <div>{{ $errors->first('email') }}</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label" for="phone">Phone Number</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                                                </div>
                                                <div>{{ $errors->first('phone') }}</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label" for="studentName">Student Name</label>
                                                <div class="col-sm-8">
                                                    <input id="studentName" type="text" class="form-control" name="studentName" value="{{ old('studentName') }}">
                                                </div>
                                                <div>{{ $errors->first('parentName') }}</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label" for="birthdate">Birthdate</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                                                </div>
                                            </div>
                                            @csrf
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-danger mt-2">Claim Offer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <div id="summer-classes">--}}
{{--            <img src="images/temp-summer.jpg" alt="" style="width: 100%;">--}}
{{--        </div>--}}

        <div id="schoolyr-classes">
            <div id="schoolyr-title" class="d-flex align-items-center justify-content-center pt-5"><h3 class="d-none d-md-block">2019-2020 School Year Classes</h3></div>
            <h3 class="d-block d-md-none text-center py-5">2019-2020 School Year Classes</h3>
            <div class="row row-top">
                <div class="col-sm school-container">
                    <img src="images/littles.jpg" alt="">
                    <a href="littles">
                        <div class="school-overlay">
                            <div class="school-txt">For the Littles</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm school-container">
                    <img src="images/big-kids.jpg" alt="">
                    <a href="big-kids">
                        <div class="school-overlay">
                            <div class="school-txt">For the Big Kids</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm school-container">
                    <img src="images/adult.jpg" alt="">
                    <a href="adults">
                        <div class="school-overlay">
                            <div class="school-txt">For Adults</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm school-container">
                    <img src="images/pg.jpg" alt="">
                    <a href="pc">
                        <div class="school-overlay">
                            <div class="school-txt">Performing Groups</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm school-container">
                    <img src="images/prepro.jpg" alt="">
                    <a href="prepro">
                        <div class="school-overlay">
                            <div class="school-txt">Pre-Professional</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm school-container">
                    <img src="images/BLC.jpg" alt="">
                    <a href="https://balletlacrosse.com" target="_blank">
                        <div class="school-overlay">
                            <div class="school-txt">Ballet La Crosse</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm school-container">
                    <img src="images/boys.jpg" alt="">
                    <a href="guys">
                        <div class="school-overlay">
                            <div class="school-txt">Boys</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid bg-aliceblue" id="checklist">
            <div class="container">
                <div class="checklist area-full d-flex align-items-center justify-content-center">
                    <div class="checklist-items">
                        <h3 class="text-center pb-5">Parents <ion-icon name="heart-empty"></ion-icon> Misty's...</h3>
                        <p class="lead text-center">We’ve checked every box on our parent's "studio checklist".</p>
                        <div class="row">
                            <div class="col-md">
                                <ul class="list-group">
                                    <li class="list-group-item border-white"><ion-icon name="checkbox-outline"></ion-icon>&nbsp;Sprung Floors</li>
                                    <li class="list-group-item border-white"><ion-icon name="checkbox-outline"></ion-icon>&nbsp;Secured Facility</li>
                                    <li class="list-group-item border-white"><ion-icon name="checkbox-outline"></ion-icon>&nbsp;Study Areas</li>
                                </ul>
                            </div>
                            <div class="col-md">
                                <ul class="list-group">
                                    <li class="list-group-item border-white"><ion-icon name="checkbox-outline"></ion-icon>&nbsp;Written Curriculum</li>
                                    <li class="list-group-item border-white"><ion-icon name="checkbox-outline"></ion-icon>&nbsp;Background Checked</li>
                                    <li class="list-group-item border-white"><ion-icon name="checkbox-outline"></ion-icon>&nbsp;CPR Trained</li>
                                </ul>
                            </div>
                            <div class="col-md">
                                <ul class="list-group">
                                    <li class="list-group-item border-white"><ion-icon name="checkbox-outline"></ion-icon>&nbsp;Full-Time Admin</li>
                                    <li class="list-group-item border-white"><ion-icon name="checkbox-outline"></ion-icon>&nbsp;YPAD Certified</li>
                                    <li class="list-group-item border-white"><ion-icon name="checkbox-outline"></ion-icon>&nbsp;Community Service</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md d-flex align-items-center pb-4">
                                <div class="quote-items mx-5 py-4">
                                    <p class="lead text-uppercase text-center">Our students double up with dance!</p>
                                    <p class="text-center mx-5">
                                        “At MDU we aim to help our students achieve excellence in
                                        DANCE as well as ACADEMICS & LIFE.
                                        That's our More Than Just Great Dancing® philosophy.”
                                        <br><small><em>- Misty Lown</em></small>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/qgmtdLSSrs8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid d-flex align-items-center bg-ivory">
            <div id="photobanner-container">
                <div class="photobanner">
                    <img class="first" src="images/insta1.png" alt="" />
                    <img src="images/insta2.png" alt="" />
                    <img src="images/insta3.png" alt="" />
                    <img src="images/insta4.png" alt="" />
                    <img src="images/insta5.png" alt="" />
                    <img src="images/insta6.png" alt="" />
                    <img src="images/insta1.png" alt="" />
                    <img src="images/insta2.png" alt="" />
                    <img src="images/insta3.png" alt="" />
                    <img src="images/insta4.png" alt="" />
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid bg-aliceblue">
            <div class="container">
                <div class="area-full d-flex align-items-center">
                    <div class="partner-items">
                        <h3 class="text-center pb-5">Proudly Partnering With These Outstanding Organizations</h3>
                        <div class="card-columns">
                            <div class="card">
                                <img src="images/partner1.jpeg" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner2.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner3.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner4.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner5.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner6.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner7.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner8.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner9.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner10.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner11.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/partner12.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('footer')

        @endsection
