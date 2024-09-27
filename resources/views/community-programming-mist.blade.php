@extends('layouts.app-side-mist')
@section('content')


    <div class="bg-white" id="day">
        <div class="mx-4 pb-1 pt-3">
            <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">Community Programming</h1>

            <p class="poppins" style="font-size: 20px;">
                At Misty's Dance Unlimited, we built our facility to be more than just a dance studio! We regularly host guests and special programs and partner with local non-profits to help make our community a better place. Our goal is to be a blessing and connector in our community. Our current community programs are listed below. Please note that some will take you off this page if the group manages their own registration. Interested in space for your group or community event? You'll find a helpful link at the bottom of the page.
            </p>
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
{{--                    <div class="col-sm">--}}
{{--                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">March</h3>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">8</div><div class="col-10 d-flex align-items-end"><p>St. Pauls Art Show<br>4:00 PM - 5:00 PM</p></div></div>--}}
{{--                        --}}{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">12</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br>ahttps://app.thestudiodirector.com/mistysdance/portal.sd?page=Login</Register Nowdiv></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">13</div><div class="col-10 d-flex align-items-end"><p>Bumble & Tumble<br>9:00 AM - 11:00 AM<br><a--}}
{{--                                        href="https://www.honeybeeoccupationaltherapy.com/enrichment-classes">Reserve Your Spot</a></p></div></div>--}}
{{--                        --}}{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">19</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br>ahttps://app.thestudiodirector.com/mistysdance/portal.sd?page=Login</Register Nowdiv></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">20</div><div class="col-10 d-flex align-items-end"><p>Bumble & Tumble<br>9:00 AM - 11:00 AM<br><a--}}
{{--                                        href="https://www.honeybeeoccupationaltherapy.com/enrichment-classes">Reserve Your Spot</a></p></div></div>--}}

{{--                        <hr>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">April</h3>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">2</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br><a--}}
{{--                                        href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login">Register Now</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">4</div><div class="col-10 d-flex align-items-end"><p>Sister Circle<br>10:00 AM - 12:00 PM<br><a--}}
{{--                                        href="https://sistercircle.co/home/" target="_blank">Learn More</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">6</div><div class="col-10 d-flex align-items-end"><p>Rummage Sale<br>9:00 AM<br><a--}}
{{--                                        href="https://forms.gle/shZpmwv9cCih8cbA9">Sign Up</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">9</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br><a--}}
{{--                                        href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login">Register Now</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">10</div><div class="col-10 d-flex align-items-end"><p>Bumble & Tumble<br>9:00 AM - 11:00 AM<br><a--}}
{{--                                        href="https://www.honeybeeoccupationaltherapy.com/enrichment-classes">Reserve Your Spot</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">16</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br><a--}}
{{--                                        href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login">Register Now</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">23</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br><a--}}
{{--                                        href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login">Register Now</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">24</div><div class="col-10 d-flex align-items-end"><p>Bumble & Tumble<br>9:00 AM - 11:00 AM<br><a--}}
{{--                                        href="https://www.honeybeeoccupationaltherapy.com/enrichment-classes">Reserve Your Spot</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">30</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br><a--}}
{{--                                        href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login">Register Now</a></p></div></div>--}}

{{--                        <hr>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">May</h3>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">2</div><div class="col-10 d-flex align-items-end"><p>Sister Circle<br>10:00 AM - 12:00 PM<br><a--}}
{{--                                        href="https://sistercircle.co/home/" target="_blank">Learn More</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">7</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br><a--}}
{{--                                        href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login">Register Now</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">8</div><div class="col-10 d-flex align-items-end"><p>Bumble & Tumble<br>9:00 AM - 11:00 AM<br><a--}}
{{--                                        href="https://www.honeybeeoccupationaltherapy.com/enrichment-classes">Reserve Your Spot</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">14</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br><a--}}
{{--                                        href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login">Register Now</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">21</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br><a--}}
{{--                                        href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login">Register Now</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">28</div><div class="col-10 d-flex align-items-end"><p>Homeschool Dance Classes<br>9:00 AM - 9:45 AM (Ages 4-6)<br>10:00 AM - 11:00 AM (Ages 7-10)<br><a--}}
{{--                                        href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login">Register Now</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">29</div><div class="col-10 d-flex align-items-end"><p>Bumble & Tumble<br>9:00 AM - 11:00 AM<br><a--}}
{{--                                        href="https://www.honeybeeoccupationaltherapy.com/enrichment-classes">Reserve Your Spot</a></p></div></div>--}}

{{--                        <hr>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">July</h3>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">15</div><div class="col-10 d-flex align-items-end"><p>Community art show with The Art Room<br>3:00 PM - 5:00 PM--}}
{{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">17</div><div class="col-10 d-flex align-items-end"><p>Children's Museum movement classes<br>2:00 PM - 2:30 PM--}}
{{--                                    <br><a href="https://www.funmuseum.org/events/mistys-dance-class" target="_blank">Learn More</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">31</div><div class="col-10 d-flex align-items-end"><p>Children's Museum movement classes<br>10:30 AM - 11:00 AM--}}
{{--                                    <br><a href="https://www.funmuseum.org/events/mistys-dance-class2" target="_blank">Learn More</a></p></div></div>--}}
{{--                        <hr>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">August</h3>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">13</div><div class="col-10 d-flex align-items-end"><p>Children's Museum movement classes<br>10:30 AM - 11:00 AM--}}
{{--                                    <br><a href="https://www.funmuseum.org" target="_blank">Learn More</a></p></div></div>--}}
{{--                        <hr><div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">28</div><div class="col-10 d-flex align-items-end"><p>Children's Museum movement classes<br>10:30 AM - 11:00 AM--}}
{{--                                    <br><a href="https://www.funmuseum.org" target="_blank">Learn More</a></p></div></div>--}}
{{--                        <hr>--}}
{{--                    </div>--}}
                    <div class="col-sm mt-4">
                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">October</h3>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">1</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Discover Dance Days
                                    <br>5:30 PM - 6:00 PM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">2</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Wiggle Wednesday
                                    <br>9:30 AM - 10:30 AM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">3</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Misty's Dance Class at The Museum
                                    <br>11:00 AM - 11:30 AM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">10</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Misty's Dance Class at The Museum
                                    <br>11:00 AM - 11:30 AM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">15</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Discover Dance Days
                                    <br>6:00 PM - 6:30 PM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">17</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Discover Dance Days
                                    <br>6:00 PM - 6:30 PM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">18</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Halloween Costume Carnival
                                    <br>4:30 PM - 6:30 PM
{{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">24</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Misty's Dance Class at The Museum
                                    <br>11:00 AM - 11:30 AM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">24</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Discover Dance Days
                                    <br>5:30 PM - 6:00 PM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">31</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Misty's Dance Class at The Museum
                                    <br>11:00 AM - 11:30 AM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm mt-4">
                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">November</h3>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">6</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Wiggle Wednesday
                                                                        <br>9:30 AM - 10:30 AM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">7</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Misty's Dance Class at The Museum
                                    <br>11:00 AM - 11:30 AM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">14</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Misty's Dance Class at The Museum
                                    <br>11:00 AM - 11:30 AM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">21</div>
                            <div class="col-10 d-flex align-items-end">
                                <p>Misty's Dance Class at The Museum
                                    <br>11:00 AM - 11:30 AM
                                    {{--                                    <br><a href="https://www.theartroombangor.com" target="_blank">Learn More</a>--}}
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
