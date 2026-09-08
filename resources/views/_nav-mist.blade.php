@include('/desktop/home/_navigation')
<div class="d-block d-lg-none">
    <div class="d-flex justify-content-between my-3">
        <div class="mx-4">
            <a href="/"><x-site-image src="/images-mist/logo-mdu.png" alt="mdu logo" class="img-fluid" style="height: 50px; width: auto;" width="1275" height="397" loading="eager" sizes="100vw" /></a>
        </div>
        <div class="d-flex align-items-center">
            <button type="button" style="font-size: 30px; border: 0; background: transparent;" class="mx-4 menu-icon" aria-label="Open navigation" aria-expanded="false" aria-controls="mobile-navigation"><ion-icon name="menu-outline" data-icon="menu" aria-hidden="true"></ion-icon></button>
        </div>
    </div>

    <nav class="full-screen-nav poppins" id="mobile-navigation" aria-label="Mobile navigation">
        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center" style="font-size: 20px;">
            <li class="nav-item mx-2">
                <a class="nav-link" href="/">
                    <x-site-image src="/images-mist/logo-mdu.png" alt="mdu logo" class="img-fluid" style="height: 50px; width: auto;" width="1275" height="397" loading="eager" sizes="100vw" />
                </a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="/aboutus">About</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="/parent-responses">FAQ</a>
            </li>
{{--            <li class="nav-item mx-2">--}}
{{--                <a class="nav-link" href="/MyFirstDanceClass">My First Dance Class</a>--}}
{{--            </li>--}}
            <li class="nav-item mx-2">
                <a class="nav-link" href="/TrialClass">Trial</a>
            </li>
            <li class="nav-item mx-2">
{{--                <a class="nav-link" href="/promotions">Winter/Spring</a>--}}
                <a class="nav-link" href="/promotions">Upcoming</a>
            </li>
{{--            <li class="nav-item mx-2">--}}
{{--                <a class="nav-link" href="/summer">Summer</a>--}}
{{--            </li>--}}
            <li class="nav-item mx-2">
                <a class="nav-link" href="/fall">Fall</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="/community-programming">Community Programs</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="/parties">Parties</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="/articles">News</a>
            </li>
{{--            <li class="nav-item mx-2">--}}
{{--                <a class="nav-link" href="/recital">Recital</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item mx-2">--}}
{{--                <a class="nav-link" href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">Register</a>--}}
{{--            </li>--}}

{{--            <li class="nav-item mx-2">--}}
{{--                <a class="nav-link" href="https://www.thewillowandgrace.com/" target="_blank">Boutique</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item mx-2">--}}
{{--                <a class="nav-link" href="https://360-dance-festival.myshopify.com" target="_blank">Gift of Dance</a>--}}
{{--            </li>--}}
            <li class="nav-item mx-2">
                <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" class="nav-link">
                    <div class="btn btn-danger shadow">Enroll Now!</div>
                </a>
            </li>
        </ul>
    </nav>
</div>
