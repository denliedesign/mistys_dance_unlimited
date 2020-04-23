@extends('layouts.quiz-app')

@section('content')

<div id="page-wrap">
    <div class="container container-bg">
        <form action="grade" method="post" id="teacher-quiz">
            <ul class="list-group d-flex align-items-center" id="quiz-questions">
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item" style="width: 100%;">
                        <h3>Dog or Cat Person?</h3>
                        <div>
                            <input type="radio" name="question-1-answers" id="canine" value="canine" />
                            <label for="canine" class="fwrd">Dog</label>
                        </div>
                        <div>
                            <input type="radio" name="question-1-answers" id="feline" value="feline" />
                            <label for="feline" class="fwrd">Cat</label>
                        </div>
                        <p class="text-muted text-right"><small>1 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Sweet or Salty?</h3>
                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                            <label for="question-2-answers-A" class="fwrd">Sweet</label>
                        </div>
                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                            <label for="question-2-answers-B" class="fwrd">Salty</label>
                        </div>
                        <p class="text-muted text-right"><small>2 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Favorite Style of Dance?</h3>
                        <div>
                            <input type="radio" name="question-3-answers" id="ballet" value="ballet" />
                            <label for="ballet" class="fwrd">Ballet</label>
                        </div>
                        <div>
                            <input type="radio" name="question-3-answers" id="lyrical" value="lyrical" />
                            <label for="lyrical" class="fwrd">Lyrical</label>
                        </div>
                        <div>
                            <input type="radio" name="question-3-answers" id="contemporary" value="contemporary" />
                            <label for="contemporary" class="fwrd">Contemporary</label>
                        </div>
                        <div>
                            <input type="radio" name="question-3-answers" id="jazz" value="jazz" />
                            <label for="jazz" class="fwrd">Jazz</label>
                        </div>
                        <div>
                            <input type="radio" name="question-3-answers" id="hiphop" value="hiphop" />
                            <label for="hiphop" class="fwrd">Hip Hop</label>
                        </div>
                        <div>
                            <input type="radio" name="question-3-answers" id="tap" value="tap" />
                            <label for="tap" class="fwrd">Tap</label>
                        </div>
                        <div>
                            <input type="radio" name="question-3-answers" id="modern" value="modern" />
                            <label for="modern" class="fwrd">Modern</label>
                        </div>
                        <p class="text-muted text-right"><small>3 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Favorite Food?</h3>
                        <div>
                            <input type="radio" name="question-4-answers" id="indian" value="indian" />
                            <label for="indian" class="fwrd">Indian</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="pizza" value="pizza" />
                            <label for="pizza" class="fwrd">Pizza</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="pasta" value="pasta" />
                            <label for="pasta" class="fwrd">Pasta</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="coffee" value="coffee" />
                            <label for="coffee" class="fwrd">Coffee</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="chocolate" value="chocolate" />
                            <label for="chocolate" class="fwrd">Chocolate</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="grilledcheese" value="grilledcheese" />
                            <label for="grilledcheese" class="fwrd">Grilled Cheese</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="asian" value="asian" />
                            <label for="asian" class="fwrd">Asian</label>
                        </div>
                        <p class="text-muted text-right"><small>4 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Favorite Disney Character?</h3>
                        <div>
                            <input type="radio" name="question-5-answers" id="anna" value="anna" />
                            <label for="anna" class="fwrd">Princess Anna</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="belle" value="belle" />
                            <label for="belle" class="fwrd">Princess Belle</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="marypoppins" value="marypoppins" />
                            <label for="marypoppins" class="fwrd">Mary Poppins</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="mulan" value="mulan" />
                            <label for="mulan" class="fwrd">Mulan</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="simba" value="simba" />
                            <label for="simba" class="fwrd">Simba</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="cinderella" value="cinderella" />
                            <label for="cinderella" class="fwrd">Cinderella</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="pocahontas" value="pocahontas" />
                            <label for="pocahontas" class="fwrd">Pocahontas</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="mushu" value="mushu" />
                            <label for="mushu" class="fwrd">Mushu (from Mulan)</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="tarzan" value="tarzan" />
                            <label for="tarzan" class="fwrd">Tarzan</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="tinkerbell" value="tinkerbell" />
                            <label for="tinkerbell" class="fwrd">Tinkerbell</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="dumbo" value="dumbo" />
                            <label for="dumbo" class="fwrd">Dumbo</label>
                        </div>
                        <p class="text-muted text-right"><small>5 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Favorite Subject in School?</h3>
                        <div>
                            <input type="radio" name="question-6-answers" id="english" value="english" />
                            <label for="english" class="fwrd">English</label>
                        </div>
                        <div>
                            <input type="radio" name="question-6-answers" id="art" value="art" />
                            <label for="art" class="fwrd">Art</label>
                        </div>
                        <div>
                            <input type="radio" name="question-6-answers" id="math" value="math" />
                            <label for="math" class="fwrd">Math</label>
                        </div>
                        <div>
                            <input type="radio" name="question-6-answers" id="music" value="music" />
                            <label for="music" class="fwrd">Music</label>
                        </div>
                        <div>
                            <input type="radio" name="question-6-answers" id="history" value="history" />
                            <label for="history" class="fwrd">History</label>
                        </div>
                        <div>
                            <input type="radio" name="question-6-answers" id="geography" value="geography" />
                            <label for="geography" class="fwrd">Geography</label>
                        </div>
                        <p class="text-muted text-right"><small>6 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Favorite Board Game?</h3>
                        <div>
                            <input type="radio" name="question-7-answers" id="scrabble" value="scrabble" />
                            <label for="scrabble" class="fwrd">Scrabble</label>
                        </div>
                        <div>
                            <input type="radio" name="question-7-answers" id="clue" value="clue" />
                            <label for="clue" class="fwrd">Clue</label>
                        </div>
                        <div>
                            <input type="radio" name="question-7-answers" id="monopoly" value="monopoly" />
                            <label for="monopoly" class="fwrd">Monopoly</label>
                        </div>
                        <div>
                            <input type="radio" name="question-7-answers" id="life" value="life" />
                            <label for="life" class="fwrd">Life</label>
                        </div>
                        <div>
                            <input type="radio" name="question-7-answers" id="trouble" value="trouble" />
                            <label for="trouble" class="fwrd">Trouble</label>
                        </div>
                        <div>
                            <input type="radio" name="question-7-answers" id="risk" value="risk" />
                            <label for="risk" class="fwrd">Risk</label>
                        </div>
                        <div>
                            <input type="radio" name="question-7-answers" id="triviapursuit" value="triviapursuit" />
                            <label for="triviapursuit" class="fwrd">Trivia Pursuit</label>
                        </div>
                        <div>
                            <input type="radio" name="question-7-answers" id="catan" value="catan" />
                            <label for="catan" class="fwrd">Settlers of Catan</label>
                        </div>
                        <div>
                            <input type="radio" name="question-7-answers" id="chess" value="chess" />
                            <label for="chess" class="fwrd">Chess</label>
                        </div>
                        <p class="text-muted text-right"><small>7 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Dream Vacation?</h3>
                        <div>
                            <input type="radio" name="question-8-answers" id="bali" value="bali" />
                            <label for="bali" class="fwrd">Bali</label>
                        </div>
                        <div>
                            <input type="radio" name="question-8-answers" id="greece" value="greece" />
                            <label for="greece" class="fwrd">Greece</label>
                        </div>
                        <div>
                            <input type="radio" name="question-8-answers" id="hiking" value="hiking" />
                            <label for="hiking" class="fwrd">Anywhere with great hiking</label>
                        </div>
                        <div>
                            <input type="radio" name="question-8-answers" id="hawaii" value="hawaii" />
                            <label for="hawaii" class="fwrd">Hawaii</label>
                        </div>
                        <div>
                            <input type="radio" name="question-8-answers" id="switzerland" value="switzerland" />
                            <label for="switzerland" class="fwrd">Switzerland</label>
                        </div>
                        <div>
                            <input type="radio" name="question-8-answers" id="japan" value="japan" />
                            <label for="japan" class="fwrd">Japan</label>
                        </div>
                        <div>
                            <input type="radio" name="question-8-answers" id="italy" value="italy" />
                            <label for="italy" class="fwrd">Italy</label>
                        </div>
                        <div>
                            <input type="radio" name="question-8-answers" id="safari" value="safari" />
                            <label for="safari" class="fwrd">African Safari</label>
                        </div>
                        <p class="text-muted text-right"><small>8 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Favorite Animal?</h3>
                        <div>
                            <input type="radio" name="question-9-answers" id="panda" value="panda" />
                            <label for="panda" class="fwrd">Panda</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="chameleon" value="chameleon" />
                            <label for="chameleon" class="fwrd">Chameleon</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="dog" value="dog" />
                            <label for="dog" class="fwrd">Dog</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="zebra" value="zebra" />
                            <label for="zebra" class="fwrd">Zebra</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="platypus" value="platypus" />
                            <label for="platypus" class="fwrd">Platypus</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="fox" value="fox" />
                            <label for="fox" class="fwrd">Fox</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="duck" value="duck" />
                            <label for="duck" class="fwrd">Duck</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="giraffe" value="giraffe" />
                            <label for="giraffe" class="fwrd">Giraffe</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="monkey" value="monkey" />
                            <label for="monkey" class="fwrd">Monkey</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="cat" value="cat" />
                            <label for="cat" class="fwrd">Cat</label>
                        </div>
                        <div>
                            <input type="radio" name="question-9-answers" id="elephant" value="elephant" />
                            <label for="elephant" class="fwrd">Elephant</label>
                        </div>
                        <p class="text-muted text-right"><small>9 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Do you prefer leaps, turns, or legs?</h3>
                        <div>
                            <input type="radio" name="question-10-answers" id="leaps" value="leaps" />
                            <label for="leaps" class="fwrd">Leaps</label>
                        </div>
                        <div>
                            <input type="radio" name="question-10-answers" id="turns" value="turns" />
                            <label for="turns" class="fwrd">Turns</label>
                        </div>
                        <div>
                            <input type="radio" name="question-10-answers" id="legs" value="legs" />
                            <label for="legs" class="fwrd">Legs</label>
                        </div>
                        <div>
                            <input type="radio" name="question-10-answers" id="none" value="none" />
                            <label for="none" class="fwrd">None of the above</label>
                        </div>
                        <p class="text-muted text-right"><small>10 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Favorite thing to do (besides dance)?</h3>
                        <div>
                            <input type="radio" name="question-11-answers" id="family" value="family" />
                            <label for="family" class="fwrd">Hanging out with family</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="bake" value="bake" />
                            <label for="bake" class="fwrd">Bake</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="hike" value="hike" />
                            <label for="hike" class="fwrd">Hike</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="boat" value="boat" />
                            <label for="boat" class="fwrd">Going out on the boat</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="travel" value="travel" />
                            <label for="travel" class="fwrd">Travel and go on adventures</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="crafts" value="crafts" />
                            <label for="crafts" class="fwrd">Arts & Crafts</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="puzzles" value="puzzles" />
                            <label for="puzzles" class="fwrd">Puzzles</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="sing" value="sing" />
                            <label for="sing" class="fwrd">Sing</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="videogames" value="videogames" />
                            <label for="videogames" class="fwrd">Play video games</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="shop" value="shop" />
                            <label for="shop" class="fwrd">Shop</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="read" value="read" />
                            <label for="read" class="fwrd">Reading</label>
                        </div>
                        <div>
                            <input type="radio" name="question-11-answers" id="eat" value="eat" />
                            <label for="eat" class="fwrd">Eat</label>
                        </div>
                        <p class="text-muted text-right"><small>11 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>What would your superpower be if you had one?</h3>
                        <div>
                            <input type="radio" name="question-12-answers" id="invisibility" value="invisibility" />
                            <label for="invisibility" class="fwrd">Invisibility</label>
                        </div>
                        <div>
                            <input type="radio" name="question-12-answers" id="time" value="time" />
                            <label for="time" class="fwrd">Time travel or ability to freeze time</label>
                        </div>
                        <div>
                            <input type="radio" name="question-12-answers" id="animals" value="animals" />
                            <label for="animals" class="fwrd">Talk to animals</label>
                        </div>
                        <div>
                            <input type="radio" name="question-12-answers" id="teleportation" value="teleportation" />
                            <label for="teleportation" class="fwrd">Teleportation</label>
                        </div>
                        <div>
                            <input type="radio" name="question-12-answers" id="flight" value="flight" />
                            <label for="flight" class="fwrd">Flight</label>
                        </div>
                        <div>
                            <input type="radio" name="question-12-answers" id="mindreader" value="mindreader" />
                            <label for="mindreader" class="fwrd">Mind Reader</label>
                        </div>
                        <div>
                            <input type="radio" name="question-12-answers" id="love" value="love" />
                            <label for="love" class="fwrd">Ability to spread love and happiness to everyone</label>
                        </div>
                        <p class="text-muted text-right"><small>12 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Favorite Season?</h3>
                        <div>
                            <input type="radio" name="question-13-answers" id="spring" value="spring" />
                            <label for="spring" class="fwrd">Spring</label>
                        </div>
                        <div>
                            <input type="radio" name="question-13-answers" id="summer" value="summer" />
                            <label for="summer" class="fwrd">Summer</label>
                        </div>
                        <div>
                            <input type="radio" name="question-13-answers" id="fall" value="fall" />
                            <label for="fall" class="fwrd">Fall</label>
                        </div>
                        <div>
                            <input type="radio" name="question-13-answers" id="winter" value="winter" />
                            <label for="winter" class="fwrd">Winter</label>
                        </div>
                        <p class="text-muted text-right"><small>13 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Article of clothing you can't live without?</h3>
                        <div>
                            <input type="radio" name="question-14-answers" id="underwear" value="underwear" />
                            <label for="underwear" class="fwrd">Underwear</label>
                        </div>
                        <div>
                            <input type="radio" name="question-14-answers" id="cardigan" value="cardigan" />
                            <label for="cardigan" class="fwrd">Cardigan</label>
                        </div>
                        <div>
                            <input type="radio" name="question-14-answers" id="leggings" value="leggings" />
                            <label for="leggings" class="fwrd">Leggings</label>
                        </div>
                        <div>
                            <input type="radio" name="question-14-answers" id="jacket" value="jacket" />
                            <label for="jacket" class="fwrd">MDU jacket tied around my waist</label>
                        </div>
                        <div>
                            <input type="radio" name="question-14-answers" id="shoes" value="shoes" />
                            <label for="shoes" class="fwrd">Shoes</label>
                        </div>
                        <div>
                            <input type="radio" name="question-14-answers" id="pajamas" value="pajamas" />
                            <label for="pajamas" class="fwrd">Cozy pajamas</label>
                        </div>
                        <div>
                            <input type="radio" name="question-14-answers" id="sweatshirts" value="sweatshirts" />
                            <label for="sweatshirts" class="fwrd">Sweatshirts and warm things</label>
                        </div>
                        <div>
                            <input type="radio" name="question-14-answers" id="socks" value="socks" />
                            <label for="socks" class="fwrd">Socks</label>
                        </div>
                        <div>
                            <input type="radio" name="question-14-answers" id="slippers" value="slippers" />
                            <label for="slippers" class="fwrd">Slippers</label>
                        </div>
                        <div>
                            <input type="radio" name="question-14-answers" id="jeans" value="jeans" />
                            <label for="jeans" class="fwrd">Jeans</label>
                        </div>
                        <p class="text-muted text-right"><small>14 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>During class you can catch me...</h3>
                        <div>
                            <input type="radio" name="question-15-answers" id="practice" value="practice" />
                            <label for="practice" class="fwrd">Practicing everything twice</label>
                        </div>
                        <div>
                            <input type="radio" name="question-15-answers" id="hand" value="hand" />
                            <label for="hand" class="fwrd">Raising my hand to ask another question</label>
                        </div>
                        <div>
                            <input type="radio" name="question-15-answers" id="left" value="left" />
                            <label for="left" class="fwrd">Going to the left every time the teacher says right</label>
                        </div>
                        <div>
                            <input type="radio" name="question-15-answers" id="smiling" value="smiling" />
                            <label for="smiling" class="fwrd">Smiling</label>
                        </div>
                        <div>
                            <input type="radio" name="question-15-answers" id="full" value="full" />
                            <label for="full" class="fwrd">Going full out everytime!</label>
                        </div>
                        <div>
                            <input type="radio" name="question-15-answers" id="talking" value="talking" />
                            <label for="talking" class="fwrd">Talking to my best friend</label>
                        </div>
                        <p class="text-muted text-right"><small>15 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>On the weekend you can catch me...</h3>
                        <div>
                            <input type="radio" name="question-16-answers" id="adventuring" value="adventuring" />
                            <label for="adventuring" class="fwrd">Adventuring Outside</label>
                        </div>
                        <div>
                            <input type="radio" name="question-16-answers" id="learning" value="learning" />
                            <label for="learning" class="fwrd">Learning something new</label>
                        </div>
                        <div>
                            <input type="radio" name="question-16-answers" id="bingeing" value="bingeing" />
                            <label for="bingeing" class="fwrd">Bingeing my favorite show</label>
                        </div>
                        <div>
                            <input type="radio" name="question-16-answers" id="hanging" value="hanging" />
                            <label for="hanging" class="fwrd">Hanging with my friends</label>
                        </div>
                        <div>
                            <input type="radio" name="question-16-answers" id="napping" value="napping" />
                            <label for="napping" class="fwrd">Napping</label>
                        </div>
                        <p class="text-muted text-right"><small>16 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>I would describe myself as...</h3>
                        <div>
                            <input type="radio" name="question-17-answers" id="enthusiastic" value="enthusiastic" />
                            <label for="enthusiastic" class="fwrd">Enthusiastic</label>
                        </div>
                        <div>
                            <input type="radio" name="question-17-answers" id="hardworking" value="hardworking" />
                            <label for="hardworking" class="fwrd">Hardworking</label>
                        </div>
                        <div>
                            <input type="radio" name="question-17-answers" id="introverted" value="introverted" />
                            <label for="introverted" class="fwrd">Introverted</label>
                        </div>
                        <div>
                            <input type="radio" name="question-17-answers" id="outgoing" value="outgoing" />
                            <label for="outgoing" class="fwrd">Outgoing</label>
                        </div>
                        <p class="text-muted text-right"><small>17 of 18</small></p>
                    </li>
                </div>
                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>As a teacher, what would your catch phrase be?</h3>
                        <div>
                            <input type="radio" name="question-18-answers" id="again" value="again" />
                            <label for="again" class="fwrd">Let's try that again!</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="lied" value="lied" />
                            <label for="lied" class="fwrd">(After teaching a combo) I lied...</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="ready" value="ready" />
                            <label for="ready" class="fwrd">Stay ready so you don't have to get ready!</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="yeah" value="yeah" />
                            <label for="yeah" class="fwrd">Yeah?</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="fine" value="fine" />
                            <label for="fine" class="fwrd">You're fine :)</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="alive" value="alive" />
                            <label for="alive" class="fwrd">Wow what a time to be alive!</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="dancing" value="dancing" />
                            <label for="dancing" class="fwrd">Just Keep Dancing</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="remembers" value="remembers" />
                            <label for="remembers" class="fwrd">Who remembers what we did last week?</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="question" value="question" />
                            <label for="question" class="fwrd">Your question of the day is...</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="shot" value="shot" />
                            <label for="shot" class="fwrd">Let's give it a shot!</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="love" value="love" />
                            <label for="love" class="fwrd">Love ya!</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="cheer" value="cheer" />
                            <label for="cheer" class="fwrd">Cheer up!</label>
                        </div>
                        <div>
                            <input type="radio" name="question-18-answers" id="on" value="on" />
                            <label for="on" class="fwrd">I'm on it</label>
                        </div>
                        <p class="text-muted text-right"><small>18 of 18</small></p>
                    </li>
                </div>



                <div class="d-flex align-items-center quiz-box" style="height: 100vh;">
                    <li class="list-group-item">
                        <h3>Now it’s time to see your results...</h3>
                        <input type="submit" class="btn btn-primary" value="Submit Quiz">
                    </li>
                </div>
            </ul>
            @csrf
        </form>
    </div>
</div>

<style>
    * {
        font-family: 'Montserrat', sans-serif;
    }

    /*#page-wrap {
      height: 100%;
      margin: 0 auto;
      overflow: hidden;
      position: relative;
      width: 100%;
      background: red;
    }*/

    #teacher-quiz input[type=radio] {
        position: fixed;
        opacity: 0;
    }

    #teacher-quiz label {
        padding: 1px 6px;
    }

    #teacher-quiz label:hover {
        background: #ebe82e;
        border-radius: 3px;
    }

    .btn-primary {
        background: #008cc0 !important;
        border: none;
        box-shadow: 2px 2px 4px #30393e,
        -1px -1px 2px white;
    }

    .btn-primary:hover {
        background: #01A0DC !important;
        border: none;
        box-shadow: 1px 1px 2px #30393e,
        -1px -1px 2px white;
    }

    .container-bg {
        background: #ebe82e;
    }

</style>

@endsection
