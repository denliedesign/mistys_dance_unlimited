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
                $totalDenise = $totalDenise + 1;
                $totalTiffany = $totalTiffany + 1;
                $totalMisty = $totalMisty + 1;
                $totalKrisa = $totalKrisa + 1;
                $totalAlex = $totalAlex + 1;
                $totalKeagan = $totalKeagan + 1;
                $totalShayna = $totalShayna + 1;
                $totalKylie = $totalKylie + 1;
                $totalDennis = $totalDennis + 1;
                $totalKris = $totalKris + 1;
            }
            if ($answer1 == "feline") {
                $totalBeth = $totalBeth + 1;
                $totalSandy = $totalSandy + 1;
                $totalLarissa = $totalLarissa + 1;
            }

            if ($answer2 == "sweet") {
                $totalDenise = $totalDenise + 1;
                $totalKrisa = $totalKrisa + 1;
                $totalKeagan = $totalKeagan + 1;
                $totalShayna = $totalShayna + 1;
                $totalKylie = $totalKylie + 1;
                $totalDennis = $totalDennis + 1;
                $totalSandy = $totalSandy + 1;
                $totalKris = $totalKris + 1;
            }
            if ($answer2 == "salty") {
                $totalTiffany = $totalTiffany + 1;
                $totalMisty = $totalMisty + 1;
                $totalAlex = $totalAlex + 1;
                $totalBeth = $totalBeth + 1;
                $totalLarissa = $totalLarissa + 1;
            }

            if ($answer3 == "ballet") {
                $totalDenise = $totalDenise + 1;
                $totalAlex = $totalAlex + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer3 == "lyrical") {
                $totalTiffany = $totalTiffany + 1;
                $totalShayna = $totalShayna + 1;
            }
            if ($answer3 == "contemporary") {
                $totalMisty = $totalMisty + 1;

            }
            if ($answer3 == "jazz") {
                $totalKrisa = $totalKrisa + 1;
                $totalKylie = $totalKylie + 1;

            }
            if ($answer3 == "hiphop") {
                $totalKeagan = $totalKeagan + 1;
                $totalKris = $totalKris + 1;

            }
            if ($answer3 == "tap") {
                $totalBeth = $totalBeth + 1;
                $totalSandy = $totalSandy + 1;

            }
            if ($answer3 == "modern") {
                $totalDennis = $totalDennis + 1;
            }

            if ($answer4 == "indian") {
                $totalDenise = $totalDenise + 1;
            }
            if ($answer4 == "pizza") {
                $totalTiffany = $totalTiffany + 1;
                $totalKrisa = $totalKrisa + 1;
                $totalSandy = $totalSandy + 1;
                $totalKris = $totalKris + 1;
            }
            if ($answer4 == "pasta") {
                $totalMisty = $totalMisty + 1;
                $totalKeagan = $totalKeagan + 1;
                $totalShayna = $totalShayna + 1;
                $totalDennis = $totalDennis + 1;
            }
            if ($answer4 == "coffee") {
                $totalAlex = $totalAlex + 1;
            }
            if ($answer4 == "chocolate") {
                $totalKylie = $totalKylie + 1;
            }
            if ($answer4 == "grilledcheese") {
                $totalBeth = $totalBeth + 1;
            }
            if ($answer4 == "asian") {
                $totalLarissa = $totalLarissa + 1;
            }

            if ($answer5 == "anna") {
                $totalDenise = $totalDenise + 1;
            }
            if ($answer5 == "belle") {
                $totalTiffany = $totalTiffany + 1;
            }
            if ($answer5 == "marypoppins") {
                $totalMisty = $totalMisty + 1;
            }
            if ($answer5 == "mulan") {
                $totalKrisa = $totalKrisa + 1;
                $totalAlex = $totalAlex + 1;
            }
            if ($answer5 == "simba") {
                $totalKeagan = $totalKeagan + 1;
            }
            if ($answer5 == "cinderella") {
                $totalShayna = $totalShayna + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer5 == "pocahontas") {
                $totalKylie = $totalKylie + 1;
            }
            if ($answer5 == "mushu") {
                $totalBeth = $totalBeth + 1;
            }
            if ($answer5 == "tarzan") {
                $totalDennis = $totalDennis + 1;
            }
            if ($answer5 == "tinkerbell") {
                $totalSandy = $totalSandy + 1;
            }
            if ($answer5 == "dumbo") {
                $totalKris = $totalKris + 1;
            }

            if ($answer6 == "english") {
                $totalDenise = $totalDenise + 1;
                $totalTiffany = $totalTiffany + 1;
                $totalKrisa = $totalKrisa + 1;
            }
            if ($answer6 == "art") {
                $totalMisty = $totalMisty + 1;
                $totalShayna = $totalShayna + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer6 == "math") {
                $totalAlex = $totalAlex + 1;
                $totalKeagan = $totalKeagan + 1;
                $totalKylie = $totalKylie + 1;
            }
            if ($answer6 == "music") {
                $totalBeth = $totalBeth + 1;
            }
            if ($answer6 == "history") {
                $totalDennis = $totalDennis + 1;
                $totalSandy = $totalSandy + 1;
            }
            if ($answer6 == "geography") {
                $totalKris = $totalKris + 1;
            }

            if ($answer7 == "scrabble") {
                $totalDenise = $totalDenise + 1;
            }
            if ($answer7 == "clue") {
                $totalTiffany = $totalTiffany + 1;
                $totalKylie = $totalKylie + 1;
            }
            if ($answer7 == "monopoly") {
                $totalMisty = $totalMisty + 1;
                $totalSandy = $totalSandy + 1;
                $totalKris = $totalKris + 1;
            }
            if ($answer7 == "life") {
                $totalKrisa = $totalKrisa + 1;
                $totalBeth = $totalBeth + 1;
            }
            if ($answer7 == "trouble") {
                $totalAlex = $totalAlex + 1;
            }
            if ($answer7 == "risk") {
                $totalKeagan = $totalKeagan + 1;
            }
            if ($answer7 == "triviapursuit") {
                $totalShayna = $totalShayna + 1;
            }
            if ($answer7 == "catan") {
                $totalDennis = $totalDennis + 1;
            }
            if ($answer7 == "chess") {
                $totalLarissa = $totalLarissa + 1;
            }

            if ($answer8 == "bali") {
                $totalDenise = $totalDenise + 1;
            }
            if ($answer8 == "greece") {
                $totalTiffany = $totalTiffany + 1;
                $totalKylie = $totalKylie + 1;
            }
            if ($answer8 == "hiking") {
                $totalMisty = $totalMisty + 1;
            }
            if ($answer8 == "hawaii") {
                $totalKrisa = $totalKrisa + 1;
                $totalKeagan = $totalKeagan + 1;
                $totalShayna = $totalShayna + 1;
                $totalBeth = $totalBeth + 1;
                $totalSandy = $totalSandy + 1;
            }
            if ($answer8 == "switzerland") {
                $totalAlex = $totalAlex + 1;
            }
            if ($answer8 == "japan") {
                $totalDennis = $totalDennis + 1;
            }
            if ($answer8 == "italy") {
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer8 == "safari") {
                $totalKris = $totalKris + 1;
            }

            if ($answer9 == "panda") {
                $totalDenise = $totalDenise + 1;
            }
            if ($answer9 == "chameleon") {
                $totalTiffany = $totalTiffany + 1;
            }
            if ($answer9 == "dog") {
                $totalMisty = $totalMisty + 1;
                $totalKeagan = $totalKeagan + 1;
            }
            if ($answer9 == "zebra") {
                $totalKrisa = $totalKrisa + 1;
            }
            if ($answer9 == "platypus") {
                $totalAlex = $totalAlex + 1;
            }
            if ($answer9 == "fox") {
                $totalShayna = $totalShayna + 1;
            }
            if ($answer9 == "duck") {
                $totalKylie = $totalKylie + 1;
            }
            if ($answer9 == "giraffe") {
                $totalBeth = $totalBeth + 1;
            }
            if ($answer9 == "monkey") {
                $totalDennis = $totalDennis + 1;
            }
            if ($answer9 == "cat") {
                $totalSandy = $totalSandy + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer9 == "elephant") {
                $totalKris = $totalKris + 1;
            }

            if ($answer10 == "turns") {
                $totalDenise = $totalDenise + 1;
                $totalTiffany = $totalTiffany + 1;
                $totalKeagan = $totalKeagan + 1;
                $totalShayna = $totalShayna + 1;
                $totalKylie = $totalKylie + 1;
                $totalBeth = $totalBeth + 1;
            }
            if ($answer10 == "legs") {
                $totalMisty = $totalMisty + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer10 == "leaps") {
                $totalKrisa = $totalKrisa + 1;
                $totalAlex = $totalAlex + 1;
                $totalDennis = $totalDennis + 1;
            }
            if ($answer10 == "none") {
                $totalSandy = $totalSandy + 1;
                $totalKris = $totalKris + 1;
            }


            if ($answer11 == "family") {
                $totalDenise = $totalDenise + 1;
            }
            if ($answer11 == "bake") {
                $totalTiffany = $totalTiffany + 1;
            }
            if ($answer11 == "hike") {
                $totalMisty = $totalMisty + 1;
                $totalAlex = $totalAlex + 1;
            }
            if ($answer11 == "boat") {
                $totalKrisa = $totalKrisa + 1;
            }
            if ($answer11 == "travel") {
                $totalKeagan = $totalKeagan + 1;
            }
            if ($answer11 == "crafts") {
                $totalShayna = $totalShayna + 1;
            }
            if ($answer11 == "puzzles") {
                $totalKylie = $totalKylie + 1;
            }
            if ($answer11 == "sing") {
                $totalBeth = $totalBeth + 1;
            }
            if ($answer11 == "videogames") {
                $totalDennis = $totalDennis + 1;
            }
            if ($answer11 == "shop") {
                $totalSandy = $totalSandy + 1;
            }
            if ($answer11 == "read") {
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer11 == "eat") {
                $totalKris = $totalKris + 1;
            }

            if ($answer12 == "invisibility") {
                $totalDenise = $totalDenise + 1;
                $totalBeth = $totalBeth + 1;
            }
            if ($answer12 == "time") {
                $totalTiffany = $totalTiffany + 1;
                $totalMisty = $totalMisty + 1;
                $totalShayna = $totalShayna + 1;
                $totalDennis = $totalDennis + 1;
            }
            if ($answer12 == "animals") {
                $totalKrisa = $totalKrisa + 1;
            }
            if ($answer12 == "teleportation") {
                $totalAlex = $totalAlex + 1;
            }
            if ($answer12 == "flight") {
                $totalKeagan = $totalKeagan + 1;
            }
            if ($answer12 == "mindreader") {
                $totalKylie = $totalKylie + 1;
                $totalKris = $totalKris + 1;
            }
            if ($answer12 == "love") {
                $totalSandy = $totalSandy + 1;
                $totalLarissa = $totalLarissa + 1;
            }

            if ($answer13 == "summer") {
                $totalDenise = $totalDenise + 1;
                $totalMisty = $totalMisty + 1;
                $totalKrisa = $totalKrisa + 1;
                $totalShayna = $totalShayna + 1;
                $totalKris = $totalKris + 1;
            }
            if ($answer13 == "fall") {
                $totalTiffany = $totalTiffany + 1;
                $totalAlex = $totalAlex + 1;
                $totalKeagan = $totalKeagan + 1;
                $totalBeth = $totalBeth + 1;
            }
            if ($answer13 == "spring") {
                $totalKylie = $totalKylie + 1;
                $totalSandy = $totalSandy + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer13 == "winter") {
                $totalDennis = $totalDennis + 1;
            }

            if ($answer14 == "underwear") {
                $totalDenise = $totalDenise + 1;
            }
            if ($answer14 == "cardigan") {
                $totalTiffany = $totalTiffany + 1;
            }
            if ($answer14 == "leggings") {
                $totalMisty = $totalMisty + 1;
                $totalAlex = $totalAlex + 1;
            }
            if ($answer14 == "jacket") {
                $totalKrisa = $totalKrisa + 1;
            }
            if ($answer14 == "shoes") {
                $totalKeagan = $totalKeagan + 1;
                $totalBeth = $totalBeth + 1;
            }
            if ($answer14 == "pajamas") {
                $totalShayna = $totalShayna + 1;
            }
            if ($answer14 == "sweatshirts") {
                $totalKylie = $totalKylie + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer14 == "socks") {
                $totalDennis = $totalDennis + 1;
            }
            if ($answer14 == "slippers") {
                $totalSandy = $totalSandy + 1;
            }
            if ($answer14 == "jeans") {
                $totalKris = $totalKris + 1;
            }

            if ($answer15 == "practice") {
                $totalDenise = $totalDenise + 1;
                $totalShayna = $totalShayna + 1;
            }
            if ($answer15 == "full") {
                $totalTiffany = $totalTiffany + 1;
                $totalKeagan = $totalKeagan + 1;
                $totalKylie = $totalKylie + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer15 == "hand") {
                $totalMisty = $totalMisty + 1;
            }
            if ($answer15 == "left") {
                $totalKrisa = $totalKrisa + 1;
                $totalDennis = $totalDennis + 1;
            }
            if ($answer15 == "smiling") {
                $totalAlex = $totalAlex + 1;
                $totalSandy = $totalSandy + 1;
                $totalKris = $totalKris + 1;
            }
            if ($answer15 == "talking") {
                $totalBeth = $totalBeth + 1;
            }

            if ($answer16 == "adventuring") {
                $totalDenise = $totalDenise + 1;
                $totalTiffany = $totalTiffany + 1;
                $totalAlex = $totalAlex + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer16 == "learning") {
                $totalMisty = $totalMisty + 1;
                $totalDennis = $totalDennis + 1;
            }
            if ($answer16 == "bingeing") {
                $totalKrisa = $totalKrisa + 1;
                $totalShayna = $totalShayna + 1;
                $totalBeth = $totalBeth + 1;
            }
            if ($answer16 == "hanging") {
                $totalKeagan = $totalKeagan + 1;
                $totalSandy = $totalSandy + 1;
                $totalKris = $totalKris + 1;
            }
            if ($answer16 == "napping") {
                $totalKylie = $totalKylie + 1;
            }


            if ($answer17 == "enthusiastic") {
                $totalDenise = $totalDenise + 1;
                $totalKrisa = $totalKrisa + 1;
                $totalKeagan = $totalKeagan + 1;
                $totalBeth = $totalBeth + 1;
            }
            if ($answer17 == "hardworking") {
                $totalTiffany = $totalTiffany + 1;
                $totalMisty = $totalMisty + 1;
                $totalAlex = $totalAlex + 1;
                $totalShayna = $totalShayna + 1;
                $totalKylie = $totalKylie + 1;
                $totalLarissa = $totalLarissa + 1;
            }
            if ($answer17 == "introverted") {
                $totalDennis = $totalDennis + 1;
            }
            if ($answer17 == "outgoing") {
                $totalSandy = $totalSandy + 1;
                $totalKris = $totalKris + 1;
            }


            if ($answer18 == "again") {
                $totalDenise = $totalDenise + 1.1;
            }
            if ($answer18 == "lied") {
                $totalTiffany = $totalTiffany + 1.1;
            }
            if ($answer18 == "ready") {
                $totalMisty = $totalMisty + 1.1;
            }
            if ($answer18 == "yeah") {
                $totalKrisa = $totalKrisa + 1.1;
            }
            if ($answer18 == "fine") {
                $totalAlex = $totalAlex + 1.1;
            }
            if ($answer18 == "alive") {
                $totalKeagan = $totalKeagan + 1.1;
            }
            if ($answer18 == "dancing") {
                $totalShayna = $totalShayna + 1.1;
            }
            if ($answer18 == "remembers") {
                $totalKylie = $totalKylie + 1.1;
            }
            if ($answer18 == "question") {
                $totalBeth = $totalBeth + 1.1;
            }
            if ($answer18 == "shot") {
                $totalDennis = $totalDennis + 1.1;
            }
            if ($answer18 == "love") {
                $totalSandy = $totalSandy + 1.1;
            }
            if ($answer18 == "cheer") {
                $totalLarissa = $totalLarissa + 1.1;
            }
            if ($answer18 == "on") {
                $totalKris = $totalKris + 1.1;
            }

            ?>

            <div class="d-flex justify-content-center align-items-center">

                <?php
                if (
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
                    $totalDenise > $totalKris) {
                    echo '<img src="/images/result-denise.jpg" alt="you are most like Miss Denise!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalTiffany > $totalKris) {
                    echo '<img src="/images/result-tiffany.jpg" alt="you are most like Miss Tiffany!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalMisty > $totalKris) {
                    echo '<img src="/images/result-misty.jpg" alt="you are most like Miss Misty!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalKrisa > $totalKris) {
                    echo '<img src="/images/result-krisa.jpg" alt="you are most like Miss Krisa!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalAlex > $totalKris) {
                    echo '<img src="/images/result-alex.jpg" alt="you are most like Miss Alex!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalKeagan > $totalKris) {
                    echo '<img src="/images/result-keagan.jpg" alt="you are most like Mr Keagan!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalShayna > $totalKris) {
                    echo '<img src="/images/result-shayna.jpg" alt="you are most like Miss Shayna!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalKylie > $totalKris) {
                    echo '<img src="/images/result-kylie.jpg" alt="you are most like Miss Kylie!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalBeth > $totalKris) {
                    echo '<img src="/images/result-beth.jpg" alt="you are most like Miss Beth!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalDennis > $totalKris) {
                    echo '<img src="/images/result-dennis.jpg" alt="you are most like Mr Dennis!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalSandy > $totalKris) {
                    echo '<img src="/images/result-sandy.jpg" alt="you are most like Miss Sandy!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalLarissa > $totalKris) {
                    echo '<img src="/images/result-larissa.jpg" alt="you are most like Miss Larissa!" class="mx-5 img-fluid">';
                }
                elseif (
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
                    $totalKris > $totalTiffany) {
                    echo '<img src="/images/result-kris.jpg" alt="you are most like Miss Kris!" class="mx-5 img-fluid">';
                }

                ?>
            </div>
        </div>
    </div>
</div>

<h2 class="text-center mt-5">Other Teachers You Are Similar To:</h2>
<div class="d-flex justify-content-center align-items-center mb-5">

    <?php

    if ($totalDenise > 4) echo 'Miss Denise ', round($totalDenise / 18 * 100), '%<br>';
    if ($totalTiffany > 4) echo 'Miss Tiffany ', round($totalTiffany / 18 * 100), '%<br>';
    if ($totalMisty > 4) echo 'Miss Misty ', round($totalMisty / 18 * 100), '%<br>';
    if ($totalKrisa > 4) echo 'Miss Krisa ', round($totalKrisa / 18 * 100), '%<br>';
    if ($totalAlex > 4) echo 'Miss Alex ', round($totalAlex / 18 * 100), '%<br>';
    if ($totalKeagan > 4) echo 'Mr Keagan ', round($totalKeagan / 18 * 100), '%<br>';
    if ($totalShayna > 4) echo 'Miss Shayna ', round($totalShayna / 18 * 100), '%<br>';
    if ($totalKylie > 4) echo 'Miss Kylie ', round($totalKylie / 18 * 100), '%<br>';
    if ($totalBeth > 4) echo 'Miss Beth ', round($totalBeth / 18 * 100), '%<br>';
    if ($totalDennis > 4) echo 'Mr Dennis ', round($totalDennis / 18 * 100), '%<br>';
    if ($totalSandy > 4) echo 'Miss Sandy ', round($totalSandy / 18 * 100), '%<br>';
    if ($totalLarissa > 4) echo 'Miss Larissa ', round($totalLarissa / 18 * 100), '%<br>';
    if ($totalKris > 4) echo 'Miss Kris ', round($totalKris / 18 * 100), '%';

    ?>
</div>


@endsection
