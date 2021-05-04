<div class="jumbotron jumbotron-fluid bg-ivory jumbo-footer">
    <div class="footer text-center d-flex align-items-center">
        <div class="footer-items">
            <div class="row">
                <div class="mb-5 mb-md-0 col-md-1 d-flex justify-content-center">
                    <div class="copyright-items">
                        <img src="/images/mdu-logo-short.png" alt="">
                        <p class="pt-2"><small class="text-muted">&#169; 2020</small></p>
                    </div>
                </div>
                <div class="mb-5 mb-md-0 col-md-3">
                    <p class="text-white footer-title">NAV</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdWfWLOlYApj7IwSztFfUXLcR0qFVOJYg8YAFOu5gqbUAkQqg/viewform" target="_blank">Absence Reporting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events">Calendar of Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">Register Now</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/birthday">Birthday Parties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pl">Private Lessons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfjtVvTMmhClJI2nwgxCXcj5ejBQSJUiFu6cBNf1KeB84uhAQ/viewform" target="_blank">Student Lockers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfzEyUJ7xwdSlv_IMNtLznZo1Lwk5jH0yfAKQZ32jGRpuWdCw/viewform?c=0&w=1" target="_blank">Performance Request Form</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="/bravo">Bravo! Community Partners</a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="/studio">Studio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/employment">Employment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/mdu-fest">MDU Fest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://mistysdance.store/" target="_blank">MDU Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.everythingdanceboutique.com/" target="_blank">Everything Dance Boutique</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
                            </li>
                            {{--                    @if (Route::has('register'))--}}
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--                        </li>--}}
                            {{--                    @endif--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{--                            <a class="dropdown-item" href="{{ url('admin') }}">Admin</a>--}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="mb-5 mb-md-0 col-md-3">
                    <p class="text-white footer-title">CONTACT</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <ion-icon name="pin"></ion-icon>
                            923 12th Ave S, STE 103, Onalaska, WI 54650
                        </li>
                        <li class="nav-item">
                            <ion-icon name="call"></ion-icon>
                            608.779.4642
                        </li>
                        <li class="nav-item">
                            <ion-icon name="mail"></ion-icon>
                            info@mistysdance.com
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <div style="width: 100%"><iframe width="100%" height="275" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=923%2012th%20Ave%20S%2C%20STE%20103%2C%20Onalaska%2C%20WI%2054650+(Misty's%20Dance%20Unlimited)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                </div>
            </div>
            <p class="pt-5" id="credit"><a href="https://denliedesign.com/" target="_blank"><small class="text-muted">Denlie Design</small></a></p>
        </div>
    </div>
</div>
