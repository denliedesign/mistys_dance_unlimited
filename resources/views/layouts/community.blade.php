<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--    <script src="https://cdn.tiny.cloud/1/5kctqg5sa09fd8d1o32j7i9xpvwu1wzubt2thxu7k565blzw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/class-style.css">

    <title>@yield('title', 'Misty\'s Dance Unlimited Community Resources | Onalaska, WI')</title>

</head>
<body id="community-body">

<div class="container py-5 my-5" id="community-content">
    <h1 class="text-center mb-2" id="community-head"><a href="/community"><span id="red-mdu-span">MDU</span> ONLINE</a></h1>
    <div class="row">
        <div class="col-3" id="community-nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/community/fun-and-free-childrens-activities">Fun & FREE Children's Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community/dance-at-home">Dance at Home with our MDU Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community/live-stream-dance-classes">Live Stream Int & Adv. Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community/dance-videos">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community/family-events">Family Events & Participation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community/calendar">Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community/live-events">Join Us! Live Events!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community/adult-classes">Adults & Parents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community/community-partners">Our Community Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community/music-resources">Music</a>
                </li>
            </ul>
        </div>
        <div class="col-9" id="community-p">
            @yield('resources')
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="js/script.js"></script>
</body>
</html>
