@extends('layouts.app-lava')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white" id="day">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Community Programming</h3>
            <p class="font-syne" style="font-size: 22px;">
                At Misty's Dance Unlimited, we built our facility to be more than just a dance studio! We regularly host guests and special programs and partner with local non-profits to help make our community a better place. Our goal is to be a blessing and connector in our community. Our current community programs are listed below. Please note that some will take you off this page if the group manages their own registration. Interested in space for your group or community event? You'll find a helpful link at the bottom of the page.
            </p>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="" target="_blank"><img src="/images/logo-bumble-and-tumble.png" alt="logo"></a></div></div>
                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="" target="_blank"><img src="/images/logo-varc.png" alt="logo" style="filter: contrast(0%);"></a></div></div>
                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="" target="_blank"><img src="/images/logo-sister-circle.png" alt="logo"></a></div></div>
{{--                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="" target="_blank"><img src="/images/" alt="logo"></a></div></div>--}}
{{--                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="" target="_blank"><img src="/images/" alt="logo"></a></div></div>--}}
{{--                <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="" target="_blank"><img src="/images/" alt="logo"></a></div></div>--}}
            </div>
        </div>
    </div>

    <section id="day-calendar">
        <div class="bg-red text-white py-5" style="position: relative;">
            <div class="container my-5">
                <h3 class="font-staat text-center mb-4" style="font-size: 50px;">Calendar of Events</h3>
                <div class="row">
                    <div class="col-sm">
                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">March</h3>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">1</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit.<br>Lorem ipsum dolor.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">7</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">12</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">15</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit.<br>Lorem ipsum dolor.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">19</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">23</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                    </div>
                    <div class="col-sm">
                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">April</h3>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">2</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit.<br>Lorem ipsum dolor.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">5</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">8</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">13</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit.<br>Lorem ipsum dolor.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">17</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">22</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                    </div>
                    <div class="col-sm">
                        <h3 style="font-family: 'Pacifico', cursive; font-size: 50px;">May</h3>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">1</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit.<br>Lorem ipsum dolor.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">6</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">11</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">14</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit.<br>Lorem ipsum dolor.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">20</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor.</div></div>
                        <hr>
                        <div class="row"><div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">29</div><div class="col-10 d-flex align-items-end">Lorem ipsum dolor<br>Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit amet.</div></div>
                        <hr>
                    </div>
                </div>
            </div>
{{--            <div style="height: 67px;"></div>--}}
{{--            <div class="custom-shape-divider-bottom-1663853988">--}}
{{--                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
{{--                    <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}
        </div>
    </section>

@endsection