<div class="py-2"></div>
<div class="poppins" id="footer-mist">
    <div class="container" id="footer">
        <div class="pt-5">
            <div class="row m-0 p-0">
                <div class="col-md-4 mt-5">
                    <p class="text-muted mb-0" style="font-size: 20px;">Contact</p>
                    <ul class="list-group" id="footer-list">
                        <li class="list-group-item px-0 border-0">
                            <ion-icon style="font-size: 20px;" name="navigate"></ion-icon>
                            &nbsp;923 12th Ave S, STE 103, Onalaska, WI 54650
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon style="font-size: 20px;" name="call"></ion-icon>
                            &nbsp;608.779.4642
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon style="font-size: 20px;" name="mail"></ion-icon>
                            &nbsp;mistysdance@gmail.com
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon style="font-size: 20px;" name="logo-facebook"></ion-icon>
                            &nbsp;<a style="color: #008CC0;" class="text-decoration-none" href="https://www.facebook.com/mistysdance/" target="_blank">facebook</a>
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon style="font-size: 20px;" name="logo-instagram"></ion-icon>
                            &nbsp;<a style="color: #008CC0;" class="text-decoration-none" href="https://www.instagram.com/mistysdance/" target="_blank">instagram</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 mt-5">
                    <p class="text-muted mb-0" style="font-size: 20px;">More Links</p>
                    <div class="row">
                        <div class="col-md">
                            <ul class="list-group" id="footer-list">
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="https://forms.gle/mJvjSGHhSFBvvqV98" target="_blank">Absence Reporting</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="/events">Calendar of Events</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="/pl">Private Lessons</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="/community-first">Community</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md">
                            <ul class="list-group" id="footer-list">
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="https://forms.gle/F7wGR7uFH15jpRbx5" target="_blank">Student Lockers</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="https://docs.google.com/forms/d/e/1FAIpQLSfzEyUJ7xwdSlv_IMNtLznZo1Lwk5jH0yfAKQZ32jGRpuWdCw/viewform?c=0&w=1" target="_blank">Performance Request</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="/studio">Studio</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="/employment">Employment</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md">
                            <ul class="list-group" id="footer-list">
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="/pc">Audition</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" style="color: #008CC0;" href="/alumni">Alumni</a>
                                </li>

                                {{--                                <li class="list-group-item px-0 border-0">--}}
                                {{--                                    <a class="text-decoration-none" style=color: #008CC0; href="/blogs">Blog</a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="list-group-item px-0 border-0">--}}
                                {{--                                    <a class="text-decoration-none" style=color: #008CC0; href="https://mistysdance.store">Gift of Dance</a>--}}
                                {{--                                </li>--}}
                                @guest
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none" style="color: #008CC0;" href="{{ route('login') }}">{{ __('Login for Level Placements') }}</a>
                                    </li>
                                @else
                                    <li class="list-group-item px-0 border-0 dropdown">
                                        <a class="text-decoration-none" style="color: #008CC0;" href="{{ route('logout') }}"
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
<div class="text-center pt-3 poppins">
    © 2024 Misty's Dance Unlimited
</div>
<p id="credit" class=" text-center pb-3 m-0 poppins text-muted px-4">
    <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a><br>
    <a class="text-decoration-none" href="/dance-la-crosse"><small class="text-muted">Dance La Crosse</small></a>
    &nbsp; &middot; &nbsp; <a class="text-decoration-none" href="/dance-onalaska"><small class="text-muted">Dance Onalaska</small></a>
    &nbsp; &middot; &nbsp; <a class="text-decoration-none" href="/dance-holmen"><small class="text-muted">Dance Holmen</small></a>
    &nbsp; &middot; &nbsp; <a class="text-decoration-none" href="/dance-west-salem"><small class="text-muted">Dance West Salem</small></a>
    &nbsp; &middot; &nbsp; <a class="text-decoration-none" href="/dance-la-crescent"><small class="text-muted">Dance La Crescent</small></a>
    &nbsp; &middot; &nbsp; <a class="text-decoration-none" href="/dance-team"><small class="text-muted">Dance Team</small></a>
</p>
<div id="bottom"></div>
