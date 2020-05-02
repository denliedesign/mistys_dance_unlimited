@extends('layouts.app')
@section('title', 'Performing Groups | Misty\'s Dance Unlimited')
@section('content')

<div class="banner-wrap">
    <div class="banner"></div>
</div>

<div class="jumbotron jumbotron-fluid bg-aliceblue">
    <div class="container" id="performinggroups">
        <img src="images/virtualauditions.jpg" alt="" class="img-fluid">
        <div class="text-center">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSd98lsJuan7kCwUL4WOiSiLIJg4Vm-YBTq-IDc57Jz3Yq1x1A/viewform?vc=0&c=0&w=1&usp=mail_form_link" target="_blank"><button class="btn btn-danger btn-lg">FILL OUT FORM</button></a>
        </div>
    </div>
</div>

{{--<section class="section-one container pb-5">--}}
{{--    <h3 class="text-center py-5">Performing Groups</h3>--}}
{{--    <div class="grid-cal-quote">--}}
{{--        <div class="cal-quote-col">--}}
{{--            <p>--}}
{{--                Misty’s Dance is a performing art!  If you love to perform, consider the benefits of becoming a member of one of MDU’s award winning Performance Groups.<br><br>--}}
{{--            </p>--}}
{{--            <!-- <h2>Mighty Minis</h2> -->--}}
{{--            <img src="images/DancinDinos.jpg" class="pc-logos pt-5" style="max-height: 200px; max-width: 400px;">--}}
{{--            <p>--}}
{{--                <strong>An introductory performing group for Kindergartners & 1st Graders.</strong><br><br>--}}
{{--                Have your children enjoyed watching the adventures of Poppy and her friends? Then this is the Performance Group for you! Join 5 & 6 year olds from around the Coulee Region as they perform to a fun mix of songs from the hit movie “Trolls”!<br><br>--}}
{{--                Our “Sparkle Squad” will perform 4-7 times in the community including the Christmas Social and Spring Recital. The “Sparkle Squad” Performance Group does not participate in competitions.<br><br>--}}
{{--                Auditions are open to students entering Kindergarten & 1st grade and take place each year at the end of May. To sign up complete the <a href="https://docs.google.com/forms/d/e/1FAIpQLSc6Ewo9u8ol4iKZyDvP8pOW-xBbCh1QtCoXl3UQ0t8WwCyu9Q/viewform" target="_blank">MDU Performing Groups Auditions Form.</a></p>--}}
{{--            <!-- <h2>Dancin' Kids</h2> -->--}}
{{--            <img src="images/dancinkids.png" class="pc-logos pt-5" style="max-height: 200px; max-width: 400px;">--}}
{{--            <p>--}}
{{--                <strong>An introductory performing group for 2nd and 3rd Graders.</strong><br><br>--}}
{{--                Dancin’ Kids! learn choreography and performance skills by performing 6-7 times in the community in addition to the Christmas Social and Spring Recital.<br><br>--}}
{{--                Auditions are open to students entering 2nd to 4th grades and take place each year at the end of May. To sign up complete the <a href="https://docs.google.com/forms/d/e/1FAIpQLSc6Ewo9u8ol4iKZyDvP8pOW-xBbCh1QtCoXl3UQ0t8WwCyu9Q/viewform" target="_blank">MDU Performing Groups Auditions Form.</a><br><br>--}}
{{--            </p>--}}
{{--            <!-- <h2>Performance Company</h2> -->--}}
{{--            <img src="images/perfcomp.png" class="pc-logos pt-5" style="max-height: 200px; max-width: 400px;">--}}
{{--            <p><strong>Performance Company</strong> is a company of dancers entering 4th grade & up who serve as ambassadors for MDU in expos, community showcases, and competitions. Performance Company performs 12-15 times in addition to the Christmas Social and Spring Recital.<br><br>--}}
{{--                <strong>Audition only.</strong> Auditions are open to students entering 4th grade & up and take place each year at the end of May. To sign up complete the <a href="https://docs.google.com/forms/d/e/1FAIpQLSc6Ewo9u8ol4iKZyDvP8pOW-xBbCh1QtCoXl3UQ0t8WwCyu9Q/viewform" target="_blank">MDU Performing Groups Auditions Form.</a><br><br>--}}
{{--                Dancers are placed in Performance Company at the discretion of the directors.<br>--}}
{{--                <em>Co-enrollment in Ballet, Tap, and Jazz Technique classes required.</em></p>--}}
{{--            <!-- <h2>Crew</h2> -->--}}
{{--            <img src="images/crew.png" class="pc-logos pt-5" style="max-height: 200px; max-width: 400px;">--}}
{{--            <p>--}}
{{--                <strong>If Hip Hop is your passion, this is the group you want to be with!<br>--}}
{{--                    All Hip Hop! All Day!</strong><br><br>--}}
{{--                CREW is the most elite hip hop dancers at MDU that combines girls and guys into one powerful group! Members will not only learn choreography, but will learn the art of freestyle. The group performs 7-8 times in the community including the Spring Recital.<br><br>--}}
{{--                Audition only. Auditions are open to all students entering 7th grade and up and take place each year at the end of May. To sign up complete the <a href="https://docs.google.com/forms/d/e/1FAIpQLSc6Ewo9u8ol4iKZyDvP8pOW-xBbCh1QtCoXl3UQ0t8WwCyu9Q/viewform" target="_blank">MDU Performing Groups Auditions Form.</a>--}}
{{--            </p>--}}
{{--            <!-- <h2>YAGP</h2> -->--}}
{{--            <img src="images/mduyagp.png" class="pc-logos pt-5" style="max-height: 200px; max-width: 400px;">--}}
{{--            <p>--}}
{{--                <strong>Many of today’s professional dancers in all major companies throughout the world have filtered through YAGP.</strong><br><br>--}}
{{--                The quality and level of the YAGP experience is very high. Team members will work with MDU Ballet faculty to put together a contemporary ballet solo and a classical ballet solo. Members may also participate in a group piece. The MDU YAGP Team opportunity provides optimal time for students to achieve their personal best, improve their technique and seriously develop their artistic experience.<br><br>--}}

{{--                <strong>Eligibility</strong>--}}
{{--                Completed Level 5 ballet and up<br>--}}
{{--                2 years of en pointe experience<br><br>--}}

{{--                Application information coming soon!--}}
{{--            </p>--}}
{{--            <!-- <h2>Foot Works</h2> -->--}}
{{--            <img src="images/footworks.jpg" class="pc-logos pt-5" style="max-height: 200px; max-width: 400px;">--}}
{{--            <p>--}}
{{--                <strong>If Tap is your passion, this is the group you want to be with!</strong><br><br>--}}
{{--                “Foot Works” is the most elite tap dancers at MDU that combines girls and guys into one powerful group! Members will not only learn choreography, but will learn the art of freestyle. The group performs 5-7 times in the community including the Spring Recital.<br><br>--}}
{{--                Audition only. Auditions are open to all students entering 7th grade and up and take place each year at the end of May. To sign up complete the <a href="https://docs.google.com/forms/d/e/1FAIpQLSc6Ewo9u8ol4iKZyDvP8pOW-xBbCh1QtCoXl3UQ0t8WwCyu9Q/viewform" target="_blank">MDU Performing Groups Auditions Form.</a>--}}
{{--            </p>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</section>--}}

@include('footer')
@endsection
