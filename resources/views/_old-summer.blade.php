@extends('layouts.app-lava')

@section('title', 'Summer 2024 | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            <p class="text-center fw-bold pb-0 mb-0 font-syne text-muted" style="font-size: 2em;">MDU 2024</p>
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Children's Summer Dance Classes</h3>
            <p class="text-center font-syne" style="font-size: 22px;">Registration begins Saturday, March 9 at 8:00 AM</p>
            <div class="text-center d-flex d-inline justify-content-center my-3">
                {{--                <div class="mx-2 px-2"><a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-lg">Enroll Now!</button></a></div>--}}
                <div class="mx-2 px-2"><a href="/images/kids-summer-dance-classes-la-crosse-2024-b.pdf" target="_blank"><button class="btn btn-danger btn-lg">View PDF</button></a></div>
                {{--                <div class="mx-2 px-2"><a href="/images/mdu-summer-dress-code-2023.pdf" target="_blank"><button class="btn btn-danger btn-lg">Summer Dress Code</button></a></div>--}}
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4 row-cols-lg-4">
                <x-summer-class
                    logo="logo-wiggle-wednesday.png"
                    what="Community Wiggle Wednesday"
                    who="18 months - 4 year olds"
                    when="Wednesdays, June & July, 9:30-10:30am"
                    tuition="$10 per dancer, per class"
                    why="Join us every Wednesday for a movement class, playtime, crafts, and connection!  Each week will include creative dance time, a new craft, and time to play and connect with other families.<br>*Guardians are also invited to participate in class with their dancer."
                />
                <x-summer-class
                    logo=""
                    what="Mini and Me"
                    who="18 months - 2 year olds"
                    when="Thursdays, June 6-27, 4:30-5:00pm<br>Tuesdays, July 2-23, 5:00-5:30pm"
                    tuition="$49. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo="logo-boppin-babies.png"
                    what="Boppin' Babies"
                    who="18 months - 2 year olds"
                    when="Tuesdays, June 4-25, 5:00-5:30pm<br>Thursdays, July 11 - August 1, 5:00-5:30pm"
                    tuition="$59. Add $10 after May 1st."
                    why="A program that allows the littlest dancers to explore movement and rhythm through interactive songs and sensory experiences."
                />
                <x-summer-class
                    logo=""
                    what="Ready Set Move With Me"
                    who="18 months - 2 year olds"
                    when="Thursdays, July 11 - August 1, 5:00-5:30"
                    tuition="$59. Add $10 after May 1st."
                    why="Engage, explore, and express in this movement and music class for toddlers and their grownups. "
                />
                <x-summer-class
                    logo=""
                    what="Fairytale Ballet"
                    who="3-4"
                    when="Thursdays, June 6-27, 5:00-5:30pm<br>Tuesdays, July 2-23, 5:30-6:00pm"
                    tuition="$49. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo=""
                    what="Tiny Tappers"
                    who="3-4"
                    when="Thursdays, June 6-27, 5:30-6:00pm<br>Tuesdays, July 2-23, 5:00-5:30pm"
                    tuition="$49. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo=""
                    what="Let's Go to the Zoo"
                    who="3-4"
                    when="Tuesdays, June 4-25, 4:50-5:30pm"
                    tuition="$59. Add $10 after May 1st."
                    why="Come play pretend and move like animals.  "
                />
                <x-summer-class
                    logo=""
                    what="Ballerina Dollhouse"
                    who="3-4"
                    when="Tuesdays, June 4-25, 5:30-6:10pm"
                    tuition="$59. Add $10 after May 1st."
                    why="Bring your own doll to class and include them in the fun!"
                />
                <x-summer-class
                    logo=""
                    what="Sibling & Me"
                    who="3-4"
                    when="Thursdays, July 11 - August 1, 4:50-5:30pm"
                    tuition="$59. Add $10 after May 1st."
                    why="Tailored for boys and girls ages 3-4 and their siblings of any age to come together and explore the joy of dance in a fun and supportive environment. "
                />
                <x-summer-class
                    logo="logo-bluey.png"
                    what="Bluey & Friends"
                    who="3-4"
                    when="Thursdays, July 11 - August 1, 5:30-6:10pm"
                    tuition="$59. Add $10 after May 1st."
                    why="Dance to the catchy tunes and play your favorite games from the hit animated series in this playful, high-energy class."
                />
                <x-summer-class
                    logo="logo-movie-magic.png"
                    what="Movie Magic"
                    who="4-9"
                    when="June 18-20, 9am-4pm"
                    tuition="3 day camp $129. Add $20 after May 1st."
                    why="Join us for a week of your kids' favorite movies, characters, and soundtracks as we make the movies come to life through dance and art!"
                />
                <x-summer-class
                    logo="logo-adventure-land.png"
                    what="Adventure Land"
                    who="4-9"
                    when="July 8-11"
                    tuition="4 day camp $169. Add $20 after May 1st."
                    why="Next stop…Adventureland!  Each day will be a new imaginary adventure–dinosaurs, space, the zoo–where will they go next?!"
                />
                <x-summer-class
                    logo="logo-best-friend-camp.png"
                    what="Best Friend Camp"
                    who="4-9"
                    when="July 15-18"
                    tuition="4 day camp $169. Add $20 after May 1st."
                    why="Pick a best friend (or two!) to join you for dancing and bonding!  Focus on the fun of friendship, make friendship bracelets, create best friend handshakes, and memories together during this energetic camp!"
                />
                <x-summer-class
                    logo="logo-stuffies-in-storyland.png"
                    what="Stuffies in Storyland"
                    who="4-9"
                    when="July 23-25"
                    tuition="3 day camp $129. Add $20 after May 1st."
                    why="Read new stories and do activities based on the characters and places we read about.  Bring your favorite stuffed animal along each day to take care of, dance with, and tag along for all the fun activities."
                />
                <x-summer-class
                    logo="logo-prince-parade.png"
                    what="Prince & Princess Parade"
                    who="4-9"
                    when="July 30 - August 1"
                    tuition="3 day camp $129. Add $20 after May 1st."
                    why="Our fanciest camp of them all!  Dress up each day and join us for tea parties, learning proper manners in a world of make-believe."
                />
                <x-summer-class
                    logo=""
                    what="Tap Adventures"
                    who="5-6"
                    when="Thursdays, June 6-27, 5:00-5:30pm<br>Tuesdays, July 2-23, 5:30-6:00pm"
                    tuition="$54. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo=""
                    what="Beginning Ballet"
                    who="5-6"
                    when="Thursdays, June 6-27, 5:30-6:00pm<br>Tuesdays, July 2-23, 6:00-6:30pm"
                    tuition="$54. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo=""
                    what="Hippity Hop"
                    who="5-6"
                    when="Thursdays, June 6-27, 6:00-6:30pm<br>Tuesdays, July 2-23, 5:00-5:30pm"
                    tuition="$54. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo=""
                    what="Rock 'N' Troll"
                    who="5-6"
                    when="Tuesdays, June 4-25, 4:50-5:30pm"
                    tuition="$69. Add $10 after May 1st."
                    why="Band together in this jazz and hip hop class set to all the grooves from the movie!"
                />
                <x-summer-class
                    logo=""
                    what="Ninja Tumbling"
                    who="5-6"
                    when="Tuesdays, June 4-25, 5:30-6:10pm"
                    tuition="$69. Add $10 after May 1st."
                    why="A high energy class that combines martial arts, climbing, obstacle courses and acro. "
                />
                <x-summer-class
                    logo=""
                    what="Mermaid Tumbling"
                    who="5-6"
                    when="Thurdays, July 11 - August 1, 4:50-5:30pm"
                    tuition="$79 (with tail). Add $10 after May 1st."
                    why="Discover your inner mermaid with this fun tumbling course. Tail included!"
                />
                <x-summer-class
                    logo=""
                    what="Squishmallow Jam"
                    who="5-6"
                    when="Thursdays, July 11 - August 1, 5:30-6:10pm"
                    tuition="$69. Add $10 after May 1st."
                    why="Join us for a pajama party with your favorite Squishmallow friend!"
                />
                <x-summer-class
                    logo=""
                    what="On Broadway"
                    who="5-12"
                    when="June 24-27, 9:00am - 1:00pm"
                    tuition="$159. Add $20 after May 1st."
                    why="Step into the spotlight as you dance, act, and sing in this 4 day musical adventure! From learning the fundamentals to exploring iconic musicals, your journey will end with a dazzling final performance on our in-house stage on Thursday, June 27 at 12:00pm."
                />
                <x-summer-class
                    logo=""
                    what="Dance Camp JR"
                    who="7-9 (entering 2nd-4th grade)"
                    when="August 5-9, 1:00-4:00pm"
                    tuition="$199. Add $20 after May 1st."
                    why="Take a BIG part in this MINI version of our beloved Dance Camp!  Explore different styles of dance, work with guest artists, and perform in the showcase on Friday, August 9 at 3:30pm."
                />
                <x-summer-class
                    logo=""
                    what="Mini Dance Team"
                    who="7-9"
                    when="Tuesdays, June 4-25, 4:50-5:30pm"
                    tuition="$69. Add $10 after May 1st."
                    why="Join us and learn all about being
on a team. Spread cheer
everywhere you go."
                />
                <x-summer-class
                    logo="logo-swifty-fun.png"
                    what="Swifty Fun"
                    who="7-9"
                    when="Tuesdays, June 4-25, 5:30-6:10pm"
                    tuition="$69. Add $10 after May 1st."
                    why="Join our Junior Faculty for a
Taylor Swift themed dance party!
We are bringing the Eras tour to you!"
                />
                <x-summer-class
                    logo=""
                    what="Ninja Tumbling"
                    who="7-9"
                    when="Tuesdays, June 4-25, 6:10-6:50pm"
                    tuition="$69. Add $10 after May 1st."
                    why="A high energy class that
combines martial arts,
climbing, obstacle courses and acro."
                />
                <x-summer-class
                    logo=""
                    what="Flexibility Focus"
                    who="7-9"
                    when="Thursdays, July 11 - August 1, 4:50-5:30pm"
                    tuition="$69. Add $10 after May 1st."
                    why="Spend time working on your splits and learn important stretches to further your technique."
                />
                <x-summer-class
                    logo=""
                    what="Mermaid Tumbling"
                    who="7-9"
                    when="Thursdays, July 11 - August 1, 5:30-6:10pm"
                    tuition="$79 (with tail). Add $10 after May 1st."
                    why="Discover your inner mermaid with this fun 4 week tumbling course.  Tail included!"
                />
                <x-summer-class
                    logo="logo-hip-hop-jams.png"
                    what="90s Hip Hop Jam"
                    who="7-9"
                    when="Thursdays, July 11 - August 1, 6:10-6:50pm"
                    tuition="$69. Add $10 after May 1st."
                    why="Go back in time to 90’s hip hop
and old school dance moves
in this fun, dance party class!"
                />
                <x-summer-class
                    logo=""
                    what="Lyrical"
                    who="7-9"
                    when="Thursdays, June 6-27, 5:30-6:00pm"
                    tuition="$59. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo=""
                    what="Building Ballet"
                    who="7-9"
                    when="Thursdays, June 6-27, 6:00-6:30pm<br>Tuesdays, July 2-23, 5:30-6:00pm"
                    tuition="$59. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo=""
                    what="Building Jazz"
                    who="7-9"
                    when="Thursdays, June 6-27, 6:30-7:00pm"
                    tuition="$59. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo=""
                    what="Musical Theater"
                    who="7-9"
                    when="Tuesdays, July 2-23, 5:00-5:30pm"
                    tuition="$59. Add $10 after May 1st."
                    why=""
                />
                <x-summer-class
                    logo=""
                    what="Building Tap"
                    who="7-9"
                    when="Tuesdays, July 2-23, 6:00-6:30pm"
                    tuition="$59. Add $10 after May 1st."
                    why=""
                />
            </div>
        </div>
    </div>


@endsection


