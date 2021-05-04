@include('saferstudiobanner')

<div id="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 d-none d-md-block">
                <ul id="top-contact-bar" class="list-group list-group-horizontal">
                    <li class="list-group-item border-0"><small><ion-icon name="pin"></ion-icon> 923 12th Ave S, STE 103, Onalaska, WI 54650</small></li>
                    <li class="list-group-item border-0"><small><ion-icon name="call"></ion-icon> 608.779.4642</small></li>
                    <li class="list-group-item border-0"><small><ion-icon name="mail"></ion-icon> info@mistysdance.com</small></li>
                </ul>
            </div>
            <div class="col-sm-10 d-block d-md-none">
                <ul id="top-contact-bar" class="list-group">
                    <li class="list-group-item border-0 py-1"><small><ion-icon name="pin"></ion-icon> 923 12th Ave S, STE 103, Onalaska, WI 54650</small></li>
                    <li class="list-group-item border-0 py-1"><small><ion-icon name="call"></ion-icon> 608.779.4642</small></li>
                    <li class="list-group-item border-0 py-1"><small><ion-icon name="mail"></ion-icon> info@mistysdance.com</small></li>
                </ul>
            </div>
            <div class="col-sm-2 d-none d-md-block">
                <ul id="top-social-bar" class="list-group list-group-horizontal justify-content-end">
                    <li class="list-group-item border-0">
                        <a href="https://www.facebook.com/mistysdance/" target="_blank" class="text-white">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                    <li class="list-group-item border-0">
                        <a href="https://www.instagram.com/mistysdance/" target="_blank" class="text-white">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2 d-block d-md-none">
                <ul id="top-social-bar" class="list-group list-group-horizontal">
                    <li class="list-group-item border-0 py-1">
                        <a href="https://www.facebook.com/mistysdance/" target="_blank" class="text-white">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                    <li class="list-group-item border-0 py-1">
                        <a href="https://www.instagram.com/mistysdance/" target="_blank" class="text-white">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="d-flex justify-content-center">
        <a class="navbar-brand mt-3" href="/">
            <img src="/images/mdu-logo.png" height="80" alt="">
        </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-lg-end" id="main-navigation">
            @include('nav-list')
        </div>
    </nav>
</div>

