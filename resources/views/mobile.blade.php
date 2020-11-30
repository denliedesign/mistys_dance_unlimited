<div class="d-block d-md-none" id="contact-nav">
    <ul class="nav flex-column" id="top-nav" style="width: 100%;">
        <li class="nav-item">
            <a class="nav-link" style="font-size: 0.75em;"><ion-icon name="location-outline"></ion-icon> 923 12th Ave S, STE 103, Onalaska, WI 54650</a>
        </li>
        <div class="d-flex d-inline">
            <li class="nav-item">
                <a class="nav-link" style="font-size: 0.75em;"><ion-icon name="call-outline"></ion-icon> 608.779.4642</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-size: 0.75em;"><ion-icon name="mail-outline"></ion-icon> info@mistysdance.com</a>
            </li>
        </div>
        <div class="d-flex d-inline">
            <li class="nav-item">
                <a class="nav-link" style="font-size: 0.75em;" href="https://www.facebook.com/mistysdance/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-size: 0.75em;" href="https://www.instagram.com/mistysdance/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
            </li>
        </div>
    </ul>
</div>

<div id="head-section" class="d-block d-md-none">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-center">
            <a class="navbar-brand" href="#"><img src="images/mdu-logo.png" alt="" id="logo"></a>
            <button style="background: black; border: 1px solid white;" class="navbar-toggler mt-3" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation" style="background: black;">
                @include('nav-list')
            </div>
        </nav>
        <div id="head-title" class="mt-5 pt-5">
            <h2 class="text-uppercase text-center">Take the First Step</h2>
            <h1 class="text-uppercase text-center">To Dance With Us</h1>
            <div class="d-flex justify-content-center mt-4">
                <a href="/summer"><div class="btn btn-outline-primary">Ready to get Started?</div></a>
            </div>
        </div>
    </div>
    <div id="stoplight">
        <div class="row">
            <div class="col stoplight-col">
                <div class="yellow-light light-circle"></div>
            </div>
        </div>
    </div>
</div>

<div id="mobile-class-types" class="text-white text-center d-block d-md-none">
    <div class="box-one py-2">
        <div>
            <ion-icon name="business-outline"></ion-icon>
            <p>In-Studio Classes with Livestream Backup</p>
        </div>
    </div>
    <div class="box-two py-2">
        <div>
            <ion-icon name="play-circle-outline"></ion-icon>
            <p>Online & Pre-Recorded Classes</p>
        </div>
    </div>
{{--    <div class="box-three py-2">--}}
{{--        <div>--}}
{{--            <ion-icon name="business-outline"></ion-icon>--}}
{{--            <p>Traditional Studio Classes</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="box-four py-2">--}}
{{--        <div>--}}
{{--            <ion-icon name="videocam-outline"></ion-icon>--}}
{{--            <p>Online Classes</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="box-five py-2">--}}
{{--        <div>--}}
{{--            <ion-icon name="play-circle-outline"></ion-icon>--}}
{{--            <p>Prerecorded Classes</p>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
