@extends('layouts.quiz-app')

@section('content')

<div id="page-wrap">
    <h1 class="text-center mt-5">Here’s What Teacher You're Most Like</h1>
    <div class="container">
        <div class="">


            <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
            $answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
            $answer16 = $_POST['question-16-answers'];
            $answer17 = $_POST['question-17-answers'];
            $answer18 = $_POST['question-18-answers'];

            $totalDenise = 0;
            $totalTiffany = 0;
            $totalMisty = 0;
            $totalKrisa = 0;
            $totalAlex = 0;
            $totalKeagan = 0;
            $totalShayna = 0;
            $totalKylie = 0;
            $totalBeth = 0;
            $totalDennis = 0;
            $totalSandy = 0;
            $totalLarissa = 0;
            $totalKris = 0;


            if ($answer1 == "canine") {
                $totalDenise = $totalDenise + 1.01;
                $totalTiffany = $totalTiffany + 1.01;
                $totalMisty = $totalMisty + 1.01;
                $totalKrisa = $totalKrisa + 1.01;
                $totalAlex = $totalAlex + 1.01;
                $totalKeagan = $totalKeagan + 1.01;
                $totalShayna = $totalShayna + 1.01;
                $totalKylie = $totalKylie + 1.01;
                $totalDennis = $totalDennis + 1.01;
                $totalKris = $totalKris + 1.01;
            }
            if ($answer1 == "feline") {
                $totalBeth = $totalBeth + 1.01;
                $totalSandy = $totalSandy + 1.01;
                $totalLarissa = $totalLarissa + 1.01;
            }

            if ($answer2 == "sweet") {
                $totalDenise = $totalDenise + 1.02;
                $totalKrisa = $totalKrisa + 1.02;
                $totalKeagan = $totalKeagan + 1.02;
                $totalShayna = $totalShayna + 1.02;
                $totalKylie = $totalKylie + 1.02;
                $totalDennis = $totalDennis + 1.02;
                $totalSandy = $totalSandy + 1.02;
                $totalKris = $totalKris + 1.02;
            }
            if ($answer2 == "salty") {
                $totalTiffany = $totalTiffany + 1.02;
                $totalMisty = $totalMisty + 1.02;
                $totalAlex = $totalAlex + 1.02;
                $totalBeth = $totalBeth + 1.02;
                $totalLarissa = $totalLarissa + 1.02;
            }

            if ($answer3 == "ballet") {
                $totalDenise = $totalDenise + 1.03;
                $totalAlex = $totalAlex + 1.03;
                $totalLarissa = $totalLarissa + 1.03;
            }
            if ($answer3 == "lyrical") {
                $totalTiffany = $totalTiffany + 1.03;
                $totalShayna = $totalShayna + 1.03;
            }
            if ($answer3 == "contemporary") {
                $totalMisty = $totalMisty + 1.03;

            }
            if ($answer3 == "jazz") {
                $totalKrisa = $totalKrisa + 1.03;
                $totalKylie = $totalKylie + 1.03;

            }
            if ($answer3 == "hiphop") {
                $totalKeagan = $totalKeagan + 1.03;
                $totalKris = $totalKris + 1.03;

            }
            if ($answer3 == "tap") {
                $totalBeth = $totalBeth + 1.03;
                $totalSandy = $totalSandy + 1.03;

            }
            if ($answer3 == "modern") {
                $totalDennis = $totalDennis + 1.03;
            }

            if ($answer4 == "indian") {
                $totalDenise = $totalDenise + 1.04;
            }
            if ($answer4 == "pizza") {
                $totalTiffany = $totalTiffany + 1.04;
                $totalKrisa = $totalKrisa + 1.04;
                $totalSandy = $totalSandy + 1.04;
                $totalKris = $totalKris + 1.04;
            }
            if ($answer4 == "pasta") {
                $totalMisty = $totalMisty + 1.04;
                $totalKeagan = $totalKeagan + 1.04;
                $totalShayna = $totalShayna + 1.04;
                $totalDennis = $totalDennis + 1.04;
            }
            if ($answer4 == "coffee") {
                $totalAlex = $totalAlex + 1.04;
            }
            if ($answer4 == "chocolate") {
                $totalKylie = $totalKylie + 1.04;
            }
            if ($answer4 == "grilledcheese") {
                $totalBeth = $totalBeth + 1.04;
            }
            if ($answer4 == "asian") {
                $totalLarissa = $totalLarissa + 1.04;
            }

            if ($answer5 == "anna") {
                $totalDenise = $totalDenise + 1.05;
            }
            if ($answer5 == "belle") {
                $totalTiffany = $totalTiffany + 1.05;
            }
            if ($answer5 == "marypoppins") {
                $totalMisty = $totalMisty + 1.05;
            }
            if ($answer5 == "mulan") {
                $totalKrisa = $totalKrisa + 1.05;
                $totalAlex = $totalAlex + 1.05;
            }
            if ($answer5 == "simba") {
                $totalKeagan = $totalKeagan + 1.05;
            }
            if ($answer5 == "cinderella") {
                $totalShayna = $totalShayna + 1.05;
                $totalLarissa = $totalLarissa + 1.05;
            }
            if ($answer5 == "pocahontas") {
                $totalKylie = $totalKylie + 1.05;
            }
            if ($answer5 == "mushu") {
                $totalBeth = $totalBeth + 1.05;
            }
            if ($answer5 == "tarzan") {
                $totalDennis = $totalDennis + 1.05;
            }
            if ($answer5 == "tinkerbell") {
                $totalSandy = $totalSandy + 1.05;
            }
            if ($answer5 == "dumbo") {
                $totalKris = $totalKris + 1.05;
            }

            if ($answer6 == "english") {
                $totalDenise = $totalDenise + 1.06;
                $totalTiffany = $totalTiffany + 1.06;
                $totalKrisa = $totalKrisa + 1.06;
            }
            if ($answer6 == "art") {
                $totalMisty = $totalMisty + 1.06;
                $totalShayna = $totalShayna + 1.06;
                $totalLarissa = $totalLarissa + 1.06;
            }
            if ($answer6 == "math") {
                $totalAlex = $totalAlex + 1.06;
                $totalKeagan = $totalKeagan + 1.06;
                $totalKylie = $totalKylie + 1.06;
            }
            if ($answer6 == "music") {
                $totalBeth = $totalBeth + 1.06;
            }
            if ($answer6 == "history") {
                $totalDennis = $totalDennis + 1.06;
                $totalSandy = $totalSandy + 1.06;
            }
            if ($answer6 == "geography") {
                $totalKris = $totalKris + 1.06;
            }

            if ($answer7 == "scrabble") {
                $totalDenise = $totalDenise + 1.07;
            }
            if ($answer7 == "clue") {
                $totalTiffany = $totalTiffany + 1.07;
                $totalKylie = $totalKylie + 1.07;
            }
            if ($answer7 == "monopoly") {
                $totalMisty = $totalMisty + 1.07;
                $totalSandy = $totalSandy + 1.07;
                $totalKris = $totalKris + 1.07;
            }
            if ($answer7 == "life") {
                $totalKrisa = $totalKrisa + 1.07;
                $totalBeth = $totalBeth + 1.07;
            }
            if ($answer7 == "trouble") {
                $totalAlex = $totalAlex + 1.07;
            }
            if ($answer7 == "risk") {
                $totalKeagan = $totalKeagan + 1.07;
            }
            if ($answer7 == "triviapursuit") {
                $totalShayna = $totalShayna + 1.07;
            }
            if ($answer7 == "catan") {
                $totalDennis = $totalDennis + 1.07;
            }
            if ($answer7 == "chess") {
                $totalLarissa = $totalLarissa + 1.07;
            }

            if ($answer8 == "bali") {
                $totalDenise = $totalDenise + 1.08;
            }
            if ($answer8 == "greece") {
                $totalTiffany = $totalTiffany + 1.08;
                $totalKylie = $totalKylie + 1.08;
            }
            if ($answer8 == "hiking") {
                $totalMisty = $totalMisty + 1.08;
            }
            if ($answer8 == "hawaii") {
                $totalKrisa = $totalKrisa + 1.08;
                $totalKeagan = $totalKeagan + 1.08;
                $totalShayna = $totalShayna + 1.08;
                $totalBeth = $totalBeth + 1.08;
                $totalSandy = $totalSandy + 1.08;
            }
            if ($answer8 == "switzerland") {
                $totalAlex = $totalAlex + 1.08;
            }
            if ($answer8 == "japan") {
                $totalDennis = $totalDennis + 1.08;
            }
            if ($answer8 == "italy") {
                $totalLarissa = $totalLarissa + 1.08;
            }
            if ($answer8 == "safari") {
                $totalKris = $totalKris + 1.08;
            }

            if ($answer9 == "panda") {
                $totalDenise = $totalDenise + 1.09;
            }
            if ($answer9 == "chameleon") {
                $totalTiffany = $totalTiffany + 1.09;
            }
            if ($answer9 == "dog") {
                $totalMisty = $totalMisty + 1.09;
                $totalKeagan = $totalKeagan + 1.09;
            }
            if ($answer9 == "zebra") {
                $totalKrisa = $totalKrisa + 1.09;
            }
            if ($answer9 == "platypus") {
                $totalAlex = $totalAlex + 1.09;
            }
            if ($answer9 == "fox") {
                $totalShayna = $totalShayna + 1.09;
            }
            if ($answer9 == "duck") {
                $totalKylie = $totalKylie + 1.09;
            }
            if ($answer9 == "giraffe") {
                $totalBeth = $totalBeth + 1.09;
            }
            if ($answer9 == "monkey") {
                $totalDennis = $totalDennis + 1.09;
            }
            if ($answer9 == "cat") {
                $totalSandy = $totalSandy + 1.09;
                $totalLarissa = $totalLarissa + 1.09;
            }
            if ($answer9 == "elephant") {
                $totalKris = $totalKris + 1.09;
            }

            if ($answer10 == "turns") {
                $totalDenise = $totalDenise + 1.10;
                $totalTiffany = $totalTiffany + 1.10;
                $totalKeagan = $totalKeagan + 1.10;
                $totalShayna = $totalShayna + 1.10;
                $totalKylie = $totalKylie + 1.10;
                $totalBeth = $totalBeth + 1.10;
            }
            if ($answer10 == "legs") {
                $totalMisty = $totalMisty + 1.10;
                $totalLarissa = $totalLarissa + 1.10;
            }
            if ($answer10 == "leaps") {
                $totalKrisa = $totalKrisa + 1.10;
                $totalAlex = $totalAlex + 1.10;
                $totalDennis = $totalDennis + 1.10;
            }
            if ($answer10 == "none") {
                $totalSandy = $totalSandy + 1.10;
                $totalKris = $totalKris + 1.10;
            }


            if ($answer11 == "family") {
                $totalDenise = $totalDenise + 1.11;
            }
            if ($answer11 == "bake") {
                $totalTiffany = $totalTiffany + 1.11;
            }
            if ($answer11 == "hike") {
                $totalMisty = $totalMisty + 1.11;
                $totalAlex = $totalAlex + 1.11;
            }
            if ($answer11 == "boat") {
                $totalKrisa = $totalKrisa + 1.11;
            }
            if ($answer11 == "travel") {
                $totalKeagan = $totalKeagan + 1.11;
            }
            if ($answer11 == "crafts") {
                $totalShayna = $totalShayna + 1.11;
            }
            if ($answer11 == "puzzles") {
                $totalKylie = $totalKylie + 1.11;
            }
            if ($answer11 == "sing") {
                $totalBeth = $totalBeth + 1.11;
            }
            if ($answer11 == "videogames") {
                $totalDennis = $totalDennis + 1.11;
            }
            if ($answer11 == "shop") {
                $totalSandy = $totalSandy + 1.11;
            }
            if ($answer11 == "read") {
                $totalLarissa = $totalLarissa + 1.11;
            }
            if ($answer11 == "eat") {
                $totalKris = $totalKris + 1.11;
            }

            if ($answer12 == "invisibility") {
                $totalDenise = $totalDenise + 1.12;
                $totalBeth = $totalBeth + 1.12;
            }
            if ($answer12 == "time") {
                $totalTiffany = $totalTiffany + 1.12;
                $totalMisty = $totalMisty + 1.12;
                $totalShayna = $totalShayna + 1.12;
                $totalDennis = $totalDennis + 1.12;
            }
            if ($answer12 == "animals") {
                $totalKrisa = $totalKrisa + 1.12;
            }
            if ($answer12 == "teleportation") {
                $totalAlex = $totalAlex + 1.12;
            }
            if ($answer12 == "flight") {
                $totalKeagan = $totalKeagan + 1.12;
            }
            if ($answer12 == "mindreader") {
                $totalKylie = $totalKylie + 1.12;
                $totalKris = $totalKris + 1.12;
            }
            if ($answer12 == "love") {
                $totalSandy = $totalSandy + 1.12;
                $totalLarissa = $totalLarissa + 1.12;
            }

            if ($answer13 == "summer") {
                $totalDenise = $totalDenise + 1.13;
                $totalMisty = $totalMisty + 1.13;
                $totalKrisa = $totalKrisa + 1.13;
                $totalShayna = $totalShayna + 1.13;
                $totalKris = $totalKris + 1.13;
            }
            if ($answer13 == "fall") {
                $totalTiffany = $totalTiffany + 1.13;
                $totalAlex = $totalAlex + 1.13;
                $totalKeagan = $totalKeagan + 1.13;
                $totalBeth = $totalBeth + 1.13;
            }
            if ($answer13 == "spring") {
                $totalKylie = $totalKylie + 1.13;
                $totalSandy = $totalSandy + 1.13;
                $totalLarissa = $totalLarissa + 1.13;
            }
            if ($answer13 == "winter") {
                $totalDennis = $totalDennis + 1.13;
            }

            if ($answer14 == "underwear") {
                $totalDenise = $totalDenise + 1.14;
            }
            if ($answer14 == "cardigan") {
                $totalTiffany = $totalTiffany + 1.14;
            }
            if ($answer14 == "leggings") {
                $totalMisty = $totalMisty + 1.14;
                $totalAlex = $totalAlex + 1.14;
            }
            if ($answer14 == "jacket") {
                $totalKrisa = $totalKrisa + 1.14;
            }
            if ($answer14 == "shoes") {
                $totalKeagan = $totalKeagan + 1.14;
                $totalBeth = $totalBeth + 1.14;
            }
            if ($answer14 == "pajamas") {
                $totalShayna = $totalShayna + 1.14;
            }
            if ($answer14 == "sweatshirts") {
                $totalKylie = $totalKylie + 1.14;
                $totalLarissa = $totalLarissa + 1.14;
            }
            if ($answer14 == "socks") {
                $totalDennis = $totalDennis + 1.14;
            }
            if ($answer14 == "slippers") {
                $totalSandy = $totalSandy + 1.14;
            }
            if ($answer14 == "jeans") {
                $totalKris = $totalKris + 1.14;
            }

            if ($answer15 == "practice") {
                $totalDenise = $totalDenise + 1.15;
                $totalShayna = $totalShayna + 1.15;
            }
            if ($answer15 == "full") {
                $totalTiffany = $totalTiffany + 1.15;
                $totalKeagan = $totalKeagan + 1.15;
                $totalKylie = $totalKylie + 1.15;
                $totalLarissa = $totalLarissa + 1.15;
            }
            if ($answer15 == "hand") {
                $totalMisty = $totalMisty + 1.15;
            }
            if ($answer15 == "left") {
                $totalKrisa = $totalKrisa + 1.15;
                $totalDennis = $totalDennis + 1.15;
            }
            if ($answer15 == "smiling") {
                $totalAlex = $totalAlex + 1.15;
                $totalSandy = $totalSandy + 1.15;
                $totalKris = $totalKris + 1.15;
            }
            if ($answer15 == "talking") {
                $totalBeth = $totalBeth + 1.15;
            }

            if ($answer16 == "adventuring") {
                $totalDenise = $totalDenise + 1.16;
                $totalTiffany = $totalTiffany + 1.16;
                $totalAlex = $totalAlex + 1.16;
                $totalLarissa = $totalLarissa + 1.16;
            }
            if ($answer16 == "learning") {
                $totalMisty = $totalMisty + 1.16;
                $totalDennis = $totalDennis + 1.16;
            }
            if ($answer16 == "bingeing") {
                $totalKrisa = $totalKrisa + 1.16;
                $totalShayna = $totalShayna + 1.16;
                $totalBeth = $totalBeth + 1.16;
            }
            if ($answer16 == "hanging") {
                $totalKeagan = $totalKeagan + 1.16;
                $totalSandy = $totalSandy + 1.16;
                $totalKris = $totalKris + 1.16;
            }
            if ($answer16 == "napping") {
                $totalKylie = $totalKylie + 1.16;
            }


            if ($answer17 == "enthusiastic") {
                $totalDenise = $totalDenise + 1.17;
                $totalKrisa = $totalKrisa + 1.17;
                $totalKeagan = $totalKeagan + 1.17;
                $totalBeth = $totalBeth + 1.17;
            }
            if ($answer17 == "hardworking") {
                $totalTiffany = $totalTiffany + 1.17;
                $totalMisty = $totalMisty + 1.17;
                $totalAlex = $totalAlex + 1.17;
                $totalShayna = $totalShayna + 1.17;
                $totalKylie = $totalKylie + 1.17;
                $totalLarissa = $totalLarissa + 1.17;
            }
            if ($answer17 == "introverted") {
                $totalDennis = $totalDennis + 1.17;
            }
            if ($answer17 == "outgoing") {
                $totalSandy = $totalSandy + 1.17;
                $totalKris = $totalKris + 1.17;
            }


            if ($answer18 == "again") {
                $totalDenise = $totalDenise + 1.18;
            }
            if ($answer18 == "lied") {
                $totalTiffany = $totalTiffany + 1.18;
            }
            if ($answer18 == "ready") {
                $totalMisty = $totalMisty + 1.18;
            }
            if ($answer18 == "yeah") {
                $totalKrisa = $totalKrisa + 1.18;
            }
            if ($answer18 == "fine") {
                $totalAlex = $totalAlex + 1.18;
            }
            if ($answer18 == "alive") {
                $totalKeagan = $totalKeagan + 1.18;
            }
            if ($answer18 == "dancing") {
                $totalShayna = $totalShayna + 1.18;
            }
            if ($answer18 == "remembers") {
                $totalKylie = $totalKylie + 1.18;
            }
            if ($answer18 == "question") {
                $totalBeth = $totalBeth + 1.18;
            }
            if ($answer18 == "shot") {
                $totalDennis = $totalDennis + 1.18;
            }
            if ($answer18 == "love") {
                $totalSandy = $totalSandy + 1.18;
            }
            if ($answer18 == "cheer") {
                $totalLarissa = $totalLarissa + 1.18;
            }
            if ($answer18 == "on") {
                $totalKris = $totalKris + 1.18;
            }

            ?>

            <div class="d-flex justify-content-center align-items-center">


                @if (
                    $totalDenise > $totalTiffany &&
                    $totalDenise > $totalMisty &&
                    $totalDenise > $totalKrisa &&
                    $totalDenise > $totalAlex &&
                    $totalDenise > $totalKeagan &&
                    $totalDenise > $totalShayna &&
                    $totalDenise > $totalKylie &&
                    $totalDenise > $totalBeth &&
                    $totalDenise > $totalDennis &&
                    $totalDenise > $totalSandy &&
                    $totalDenise > $totalLarissa &&
                    $totalDenise > $totalKris)
                    <img src="/images/result-denise.jpg" alt="you are most like Miss Denise!" class="mx-5 img-fluid">
                    <div>
                        <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fmistysdance.com%2Fquiz%2Fdenise&layout=button_count&size=large&appId=460035168057180&width=88&height=28" width="88" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>

                @elseif (
                    $totalTiffany > $totalDenise &&
                    $totalTiffany > $totalMisty &&
                    $totalTiffany > $totalKrisa &&
                    $totalTiffany > $totalAlex &&
                    $totalTiffany > $totalKeagan &&
                    $totalTiffany > $totalShayna &&
                    $totalTiffany > $totalKylie &&
                    $totalTiffany > $totalBeth &&
                    $totalTiffany > $totalDennis &&
                    $totalTiffany > $totalSandy &&
                    $totalTiffany > $totalLarissa &&
                    $totalTiffany > $totalKris)
                        <img src="/images/result-tiffany.jpg" alt="you are most like Miss Tiffany!" class="mx-5 img-fluid">';

                @elseif (
                    $totalMisty > $totalDenise &&
                    $totalMisty > $totalTiffany &&
                    $totalMisty > $totalKrisa &&
                    $totalMisty > $totalAlex &&
                    $totalMisty > $totalKeagan &&
                    $totalMisty > $totalShayna &&
                    $totalMisty > $totalKylie &&
                    $totalMisty > $totalBeth &&
                    $totalMisty > $totalDennis &&
                    $totalMisty > $totalSandy &&
                    $totalMisty > $totalLarissa &&
                    $totalMisty > $totalKris)
                        <img src="/images/result-misty.jpg" alt="you are most like Miss Misty!" class="mx-5 img-fluid">';
                @elseif (
                    $totalKrisa > $totalDenise &&
                    $totalKrisa > $totalMisty &&
                    $totalKrisa > $totalTiffany &&
                    $totalKrisa > $totalAlex &&
                    $totalKrisa > $totalKeagan &&
                    $totalKrisa > $totalShayna &&
                    $totalKrisa > $totalKylie &&
                    $totalKrisa > $totalBeth &&
                    $totalKrisa > $totalDennis &&
                    $totalKrisa > $totalSandy &&
                    $totalKrisa > $totalLarissa &&
                    $totalKrisa > $totalKris)
                        <img src="/images/result-krisa.jpg" alt="you are most like Miss Krisa!" class="mx-5 img-fluid">';

                @elseif (
                    $totalAlex > $totalDenise &&
                    $totalAlex > $totalMisty &&
                    $totalAlex > $totalKrisa &&
                    $totalAlex > $totalTiffany &&
                    $totalAlex > $totalKeagan &&
                    $totalAlex > $totalShayna &&
                    $totalAlex > $totalKylie &&
                    $totalAlex > $totalBeth &&
                    $totalAlex > $totalDennis &&
                    $totalAlex > $totalSandy &&
                    $totalAlex > $totalLarissa &&
                    $totalAlex > $totalKris)
                        <img src="/images/result-alex.jpg" alt="you are most like Miss Alex!" class="mx-5 img-fluid">';

                @elseif (
                    $totalKeagan > $totalDenise &&
                    $totalKeagan > $totalMisty &&
                    $totalKeagan > $totalKrisa &&
                    $totalKeagan > $totalAlex &&
                    $totalKeagan > $totalTiffany &&
                    $totalKeagan > $totalShayna &&
                    $totalKeagan > $totalKylie &&
                    $totalKeagan > $totalBeth &&
                    $totalKeagan > $totalDennis &&
                    $totalKeagan > $totalSandy &&
                    $totalKeagan > $totalLarissa &&
                    $totalKeagan > $totalKris)
                        <img src="/images/result-keagan.jpg" alt="you are most like Mr Keagan!" class="mx-5 img-fluid">';

                @elseif (
                    $totalShayna > $totalDenise &&
                    $totalShayna > $totalMisty &&
                    $totalShayna > $totalKrisa &&
                    $totalShayna > $totalAlex &&
                    $totalShayna > $totalKeagan &&
                    $totalShayna > $totalTiffany &&
                    $totalShayna > $totalKylie &&
                    $totalShayna > $totalBeth &&
                    $totalShayna > $totalDennis &&
                    $totalShayna > $totalSandy &&
                    $totalShayna > $totalLarissa &&
                    $totalShayna > $totalKris)
                        <img src="/images/result-shayna.jpg" alt="you are most like Miss Shayna!" class="mx-5 img-fluid">';

                @elseif (
                    $totalKylie > $totalDenise &&
                    $totalKylie > $totalMisty &&
                    $totalKylie > $totalKrisa &&
                    $totalKylie > $totalAlex &&
                    $totalKylie > $totalKeagan &&
                    $totalKylie > $totalShayna &&
                    $totalKylie > $totalTiffany &&
                    $totalKylie > $totalBeth &&
                    $totalKylie > $totalDennis &&
                    $totalKylie > $totalSandy &&
                    $totalKylie > $totalLarissa &&
                    $totalKylie > $totalKris)
                        <img src="/images/result-kylie.jpg" alt="you are most like Miss Kylie!" class="mx-5 img-fluid">';

                @elseif (
                    $totalBeth > $totalDenise &&
                    $totalBeth > $totalMisty &&
                    $totalBeth > $totalKrisa &&
                    $totalBeth > $totalAlex &&
                    $totalBeth > $totalKeagan &&
                    $totalBeth > $totalShayna &&
                    $totalBeth > $totalKylie &&
                    $totalBeth > $totalTiffany &&
                    $totalBeth > $totalDennis &&
                    $totalBeth > $totalSandy &&
                    $totalBeth > $totalLarissa &&
                    $totalBeth > $totalKris)
                        <img src="/images/result-beth.jpg" alt="you are most like Miss Beth!" class="mx-5 img-fluid">';

                @elseif (
                    $totalDennis > $totalDenise &&
                    $totalDennis > $totalMisty &&
                    $totalDennis > $totalKrisa &&
                    $totalDennis > $totalAlex &&
                    $totalDennis > $totalKeagan &&
                    $totalDennis > $totalShayna &&
                    $totalDennis > $totalKylie &&
                    $totalDennis > $totalBeth &&
                    $totalDennis > $totalTiffany &&
                    $totalDennis > $totalSandy &&
                    $totalDennis > $totalLarissa &&
                    $totalDennis > $totalKris)
                        <img src="/images/result-dennis.jpg" alt="you are most like Mr Dennis!" class="mx-5 img-fluid">';

                @elseif (
                    $totalSandy > $totalDenise &&
                    $totalSandy > $totalMisty &&
                    $totalSandy > $totalKrisa &&
                    $totalSandy > $totalAlex &&
                    $totalSandy > $totalKeagan &&
                    $totalSandy > $totalShayna &&
                    $totalSandy > $totalKylie &&
                    $totalSandy > $totalBeth &&
                    $totalSandy > $totalDennis &&
                    $totalSandy > $totalTiffany &&
                    $totalSandy > $totalLarissa &&
                    $totalSandy > $totalKris)
                        <img src="/images/result-sandy.jpg" alt="you are most like Miss Sandy!" class="mx-5 img-fluid">';

                @elseif (
                    $totalLarissa > $totalDenise &&
                    $totalLarissa > $totalMisty &&
                    $totalLarissa > $totalKrisa &&
                    $totalLarissa > $totalAlex &&
                    $totalLarissa > $totalKeagan &&
                    $totalLarissa > $totalShayna &&
                    $totalLarissa > $totalKylie &&
                    $totalLarissa > $totalBeth &&
                    $totalLarissa > $totalDennis &&
                    $totalLarissa > $totalSandy &&
                    $totalLarissa > $totalTiffany &&
                    $totalLarissa > $totalKris)
                        <img src="/images/result-larissa.jpg" alt="you are most like Miss Larissa!" class="mx-5 img-fluid">';

                @elseif (
                    $totalKris > $totalDenise &&
                    $totalKris > $totalMisty &&
                    $totalKris > $totalKrisa &&
                    $totalKris > $totalAlex &&
                    $totalKris > $totalKeagan &&
                    $totalKris > $totalShayna &&
                    $totalKris > $totalKylie &&
                    $totalKris > $totalBeth &&
                    $totalKris > $totalDennis &&
                    $totalKris > $totalSandy &&
                    $totalKris > $totalLarissa &&
                    $totalKris > $totalTiffany)
                        <img src="/images/result-kris.jpg" alt="you are most like Miss Kris!" class="mx-5 img-fluid">';

                @endif
            </div>
        </div>
    </div>
</div>

<h2 class="text-center mt-5">Other Teachers You Are Similar To:</h2>
<div class="d-flex justify-content-center align-items-center mb-5">

    <?php

    if ($totalDenise > 4) echo 'Miss Denise ', round($totalDenise / 19.71 * 100), '%<br>';
    if ($totalTiffany > 4) echo 'Miss Tiffany ', round($totalTiffany / 19.71 * 100), '%<br>';
    if ($totalMisty > 4) echo 'Miss Misty ', round($totalMisty / 19.71 * 100), '%<br>';
    if ($totalKrisa > 4) echo 'Miss Krisa ', round($totalKrisa / 19.71 * 100), '%<br>';
    if ($totalAlex > 4) echo 'Miss Alex ', round($totalAlex / 19.71 * 100), '%<br>';
    if ($totalKeagan > 4) echo 'Mr Keagan ', round($totalKeagan / 19.71 * 100), '%<br>';
    if ($totalShayna > 4) echo 'Miss Shayna ', round($totalShayna / 19.71 * 100), '%<br>';
    if ($totalKylie > 4) echo 'Miss Kylie ', round($totalKylie / 19.71 * 100), '%<br>';
    if ($totalBeth > 4) echo 'Miss Beth ', round($totalBeth / 19.71 * 100), '%<br>';
    if ($totalDennis > 4) echo 'Mr Dennis ', round($totalDennis / 19.71 * 100), '%<br>';
    if ($totalSandy > 4) echo 'Miss Sandy ', round($totalSandy / 19.71 * 100), '%<br>';
    if ($totalLarissa > 4) echo 'Miss Larissa ', round($totalLarissa / 19.71 * 100), '%<br>';
    if ($totalKris > 4) echo 'Miss Kris ', round($totalKris / 19.71 * 100), '%';

    ?>
</div>


@endsection
