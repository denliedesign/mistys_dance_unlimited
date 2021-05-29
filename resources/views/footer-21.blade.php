<div class="bg-white">
    <div class="container">
        <div id="next-steps-copy" class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center bg-white pt-5 pb-3">
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-green">Ready To Leap In?</p>
                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div></a>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-blue">Want To Give It A Try?</p>
                <div>
                    <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>
                </div>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-pink">Still Have Questions?</p>
                <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div></a>
            </div>
        </div>
    </div>
</div>
<div class="bg-white pb-5">
    <div class="container" id="footer">
        <div class="pt-5">
            <div class="row m-0 p-0">
                <div class="col-sm-4 mt-3">
                    <p class="lead">CONTACT</p>
                    <ul class="list-group">
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="pin"></ion-icon>
                            923 12th Ave S, STE 103, Onalaska, WI 54650
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="call"></ion-icon>
                            608.779.4642
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="mail"></ion-icon>
                            info@mistysdance.com
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-3">
                    <p class="lead">SOCIAL</p>
                    <div class="d-flex d-inline">
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0" href="https://www.facebook.com/mistysdance/" target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0 mx-3" href="https://www.instagram.com/mistysdance/" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
                    <p class="lead">MORE LINKS</p>
                    <div class="row">
                        <div class="col-sm">
                            <ul class="list-group">
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="https://docs.google.com/forms/d/e/1FAIpQLSdWfWLOlYApj7IwSztFfUXLcR0qFVOJYg8YAFOu5gqbUAkQqg/viewform" target="_blank">Absence Reporting</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/events">Calendar of Events</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/birthday">Birthday Parties</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/pl">Private Lessons</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group">
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="https://docs.google.com/forms/d/e/1FAIpQLSfjtVvTMmhClJI2nwgxCXcj5ejBQSJUiFu6cBNf1KeB84uhAQ/viewform" target="_blank">Student Lockers</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="https://docs.google.com/forms/d/e/1FAIpQLSfzEyUJ7xwdSlv_IMNtLznZo1Lwk5jH0yfAKQZ32jGRpuWdCw/viewform?c=0&w=1" target="_blank">Performance Request</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/studio">Studio</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/employment">Employment</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group">
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/promotions">Promos</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/posts">Blog</a>
                                </li>
                                @guest
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @else
                                    <li class="list-group-item px-0 border-0 dropdown">
                                        <a class="text-decoration-none txt-blue" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="bottom" class="bg-dark text-white-50 text-center pt-3">
    © 2021 Misty's Dance Unlimited
</div>
<p id="credit" class="bg-dark text-center pb-3 m-0">
    <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
</p>
