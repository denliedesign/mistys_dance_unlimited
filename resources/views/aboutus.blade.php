@extends('layouts.vanilla')

@section('title', 'Instructors | Misty\'s Dance Unlimited')
@section('description', 'Learn About Our Team And How We Can Help You.')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

   <div class="bg-white">
       <div class="container">
           <section class="section-teachers container">
               <section>
                   <h2 class="pt-5 text-center">About Us</h2>
                   <p class="font-pacifico" style="font-size: 2em;">Hi!</p>
                   <p>
                       My name is Misty Lown and I am the founder of Misty's Dance Unlimited, LLC, or "MDU" as we call it around here <3. I started the studio on a simple principle that we have stayed TRUE to over the last two and a half decades–we are "More Than Just Great Dancing!®".
                       <br><br>
                       So what does that mean?  It means that at a baseline we provide EXCELLENCE in dance education. I did my graduate work in education and lead the nation's only safety certifying organization for dance teachers. Our teachers are qualified and certified. And, our PROVEN curriculum has inspired CONFIDENCE in thousands of students; placing students on every local dance team, and countless college programs.
                       <br><br>
                       HOWEVER, we are MORE Than Just Great Dancing!®  At MDU, dance has lasting value because dance lessons are LIFE LESSONS.  Dance meets imperative needs for social-emotional skills, mental well-being, and physical health and provides quality friendships and role models.  And, THAT is the greatest investment a parent could make in their child.  I don't only share that as a dance teacher but as a mom of five myself.
                       <br><br>
                       At MDU dance becomes a FAMILY and the studio becomes a second HOME for kids during their developmental years. We invite you to meet some of our amazing faculty below, some of whom have been inspiring Coulee Region children for over two decades.
                   </p>
                   <p class="font-pacifico" style="font-size: 2em;">Welcome to MDU!!</p>
                   <img src="/images/mdu-about-us.jpg" alt="misty with young dancers" class="img-fluid">
                   <h2 class="pt-5 text-center">Meet The Team</h2>
               </section>
               <div class="about-teacher-wrapper row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher-misty.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Misty Lown</p></button>
                           <div class="biopanel-open">
                               <p>Miss Misty has been sharing her passion for dance and mentorship with students for 30 years. She is the founder of More Than Just Great Dancing™ affiliated dance studios and “A Chance to Dance Foundation”, a 501(c)3 charitable organization. Misty is passionate about community service and has given over $500,000 in combined cash and studio scholarships over the past 23 years.</p>
                           </div>
                       </div>
                   </div>
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher5.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Shayna Stellflue</p></button>
                           <div class="biopanel-open">
                               <p>Miss Shayna is the General Manager of Misty’s Dance Unlimited and leads the Safety Team and Recitals. She began teaching at MDU in 1999 and is the creator of “Dancin’ Kids!”, a popular performance group for 7-9 yr. olds. Miss Shayna co-authored a Children’s Curriculum for More Than Just Great Dancing™ and is passionate about instilling confidence in every child.</p>
                           </div>
                       </div>
                   </div>
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher6.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Tiffany Fischer</p></button>
                           <div class="biopanel-open">
                               <p>Miss Tiffany grew up dancing at MDU and has been teaching since 2008. She is an award-winning choreographer. Miss Tiffany is proficient in all styles of dance and has a passion for seeing students develop their God-given talents in a nurturing environment.  Miss Tiffany teaches in our Children's program, Graded Technique program and Performing Groups program. She also is our Senior class advisor.</p>
                           </div>
                       </div>
                   </div>


                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher11.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Amanda Schams</p></button>
                           <div class="biopanel-open">

                               <p>Miss Amanda has taught ballet and Pilates across the Midwest for two decades and for 17 years at MDU. She trained in Madison, with the Milwaukee Ballet and the Nutmeg Conservatory. She graduated from the University of Iowa with a dance minor. She has performed professionally with the Madison Ballet and as a guest artist throughout the Midwest.</p>
                           </div>
                       </div>
                   </div>
{{--                   <div class="teacher-col col-sm">--}}
{{--                       <div class="about-teacher-card my-4 mx-5">--}}
{{--                           <img class="img-fluid rounded shadow" src="images/teacher-as.jpg">--}}
{{--                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Alexia Sonnek</p></button>--}}
{{--                           <div class="biopanel-open">--}}

{{--                               <p>Miss Alexia has studied various styles of dance, but has a special love of Hip Hop and Lyrical. She is a former member of MDU’s Performance Company and currently leads our Steps of Praise program in which dancers can share their love of God through dance. Miss Alexia enjoys working with children of all ages to help them grow as dancers and individuals. She has been teaching at MDU since 2014.</p>--}}
{{--                           </div>--}}
{{--                       </div>--}}
{{--                   </div>--}}


                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher1.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Beth Michelson</p></button>
                           <div class="biopanel-open">

                               <p>Miss Beth has been dancing for 20 years. Her favorite genres include tap, musical theatre, and contemporary. Beth shared her love for performing for many years as a member of MDU’s Performance Company. She is a 2013 graduate of the University of Minnesota with a degree in Elementary Education and Spanish. She has danced with Ingredients Dance Company in Texas and has taught at MDU since 2014.</p>
                           </div>
                       </div>
                   </div>
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher-dw.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Mr. Dennis Williams</p></button>
                           <div class="biopanel-open">

                               <p>Mr. Dennis grew up studying ballet at Maple Conservatory of Dance in California. He graduated from Belhaven University with a BFA in dance and has danced professionally with Ballet Mississippi and Filter Dance Company. Additionally, he has four years of experience in Martial Arts. Mr. Dennis has taught at MDU since 2015.</p>
                           </div>
                       </div>
                   </div>
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher2.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Kylie Williams</p></button>
                           <div class="biopanel-open">

                               <p>Miss Kylie returned to MDU in 2015 after graduating from Belhaven University with a Bachelor of Fine Arts in dance and a minor in accounting. She is the Director of our Award Winning Performance Company!  She has worked with choreographers associated with Complexions, Ad Deum, Inaside Chicago, and Limon Dance Company. Her favorite dance role was in Pitch Perfect 2.</p>
                           </div>
                       </div>
                   </div>


                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher10.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Alex Meier</p></button>
                           <div class="biopanel-open">
                            <p>Miss Alex has been teaching at MDU since 2012. She is a ballet and tap specialist with a love for children. She is a graduate of Winona State University and fuels her love of science during the day as a surgical technician for Gundersen Health. She currently serves as the administrative coordinator for Ballet La Crosse.</p>
                           </div>
                       </div>
                   </div>
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher12.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Denise Meyer</p></button>
                           <div class="biopanel-open">
                           <p>Miss Denise and Miss Misty grew up dancing together at Marilyn School of Dance in La Crosse. Miss Denise is currently a training director at LHI in La Crosse and has loved being back in the dance classroom since 2009. Miss Denise teaches in our Children's program, leads our Darby's Dancer's program, and is a rehearsal assistant for Ballet La Crosse.</p>
                           </div>
                       </div>
                   </div>
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher-lo.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Larissa Oberly</p></button>
                           <div class="biopanel-open">

                               <p>Miss Larissa is a former professional ballerina with the Estonian National Ballet in Europe. She has been teaching for MDU's Pre-Professional Program and our classical performing company, Ballet La Crosse since 2011. Ballet La Crosse was founded by Miss Larissa's late husband and beloved ballet master, Mr. Kennet Oberly.</p>
                           </div>
                       </div>
                   </div>


{{--                   <div class="teacher-col col-sm">--}}
{{--                       <div class="about-teacher-card my-4 mx-5">--}}
{{--                           <img class="img-fluid rounded shadow" src="images/teacher-deb.jpg">--}}
{{--                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Debbie White</p></button>--}}
{{--                           <div class="biopanel-open">--}}

{{--                               <p>Miss Debbie started studying dance at age 15 at the former College of St. Teresa in Winona, MN. She performed with the Minnesota Collegiate Ballet Company for 2 years. She studied at the National Academy of Dance in Champaign, IL during high school. Later she taught and performed at the Rochester Ballet School in MN. She studied, danced, and taught several years at the Alvin Ailey School in New York City.</p>--}}
{{--                           </div>--}}
{{--                       </div>--}}
{{--                   </div>--}}
{{--                   <div class="teacher-col col-sm">--}}
{{--                       <div class="about-teacher-card my-4 mx-5">--}}
{{--                           <img class="img-fluid rounded shadow" src="images/teacher3.jpg">--}}
{{--                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Krisa Roggensack</p></button>--}}
{{--                           <div class="biopanel-open">--}}

{{--                               <p>Miss Krisa is another MDU grad who returned to the studio following college graduation. She is a jazz and hip hop specialist and the former coach of the award winning UW-Green Bay dance team. She has been teaching at MDU since 2007.</p>--}}
{{--                           </div>--}}
{{--                       </div>--}}
{{--                   </div>--}}
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher-af.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Amy Fortner</p></button>
                           <div class="biopanel-open">

                               <p>After doing gymnastics through her sophomore year of college, Amy still has a passion for the sport and loves to teach kids acro and tumbling. Amy has been teaching for many years, and is certified in acro by Acrobatic Arts. She's been teaching at Misty's since 2016.</p>
                           </div>
                       </div>
                   </div>


{{--                   <div class="teacher-col col-sm">--}}
{{--                       <div class="about-teacher-card my-4 mx-5">--}}
{{--                           <img class="img-fluid rounded shadow" src="images/teacher-aw.jpg">--}}
{{--                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Anna Weidner</p></button>--}}
{{--                           <div class="biopanel-open">--}}

{{--                               <p>Miss Anna is a graduate of the UW-La Crosse where she was a member of the Hip Hop Dance Team. She grew up dancing at Jan's School of Dance in Hastings, MN. Anna has been teaching at MDU since 2017 and is currently the Varsity Dance Team coach at Viterbo University.</p>--}}
{{--                           </div>--}}
{{--                       </div>--}}
{{--                   </div>--}}
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher-emily.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Emily Sweeny</p></button>
                           <div class="biopanel-open">

                               <p>Miss Emily graduated from Mankato State University with a degree in Dance and Sports Management.  In addition to being a teacher at MDU, she is also the Coordinator of Youth Protection Advocates in Dance and oversees the training of hundreds of dance teachers nationwide each year.  Miss Emily has been a teacher at MDU since 2018.</p>
                           </div>
                       </div>
                   </div>
{{--                   <div class="teacher-col col-sm">--}}
{{--                       <div class="about-teacher-card my-4 mx-5">--}}
{{--                           <img class="img-fluid rounded shadow" src="images/teacher-keagan.jpg">--}}
{{--                           <button class="bioaccordion"><p class="lead my-1 p-0">Mr Keagan Walz</p></button>--}}
{{--                           <div class="biopanel-open">--}}

{{--                               <p>Bio coming soon!</p>--}}
{{--                           </div>--}}
{{--                       </div>--}}
{{--                   </div>--}}
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher-sandy.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Sandy Averill</p></button>
                           <div class="biopanel-open">

                               <p>Miss Sandy has been with MDU since day one! She is our Hospitality Services leader at the front desk as well as Miss Misty’s mom! Miss Sandy is the first friendly face you will see when you come in and always happy to help. She enjoys the warmth and camaraderie of the families and staff at MDU and watching our students grow throughout the years.</p>
                           </div>
                       </div>
                   </div>
                   <div class="teacher-col col-sm">
                       <div class="about-teacher-card my-4 mx-5">
                           <img class="img-fluid rounded shadow" src="images/teacher-kris.jpg">
                           <button class="bioaccordion"><p class="lead my-1 p-0">Miss Kris Nandory</p></button>
                           <div class="biopanel-open">

                               <p>Kris comes to us with 25 plus years of excelling in managerial careers. She started at MDU in 2013 and currently serves as our Family Services leader and well as coordinating our boutique, Everything Dance. She manages student enrollment, studio emails, family accounts, student attendance, and more! She loves working with families and kids!</p>
                           </div>
                       </div>
                   </div>
               </div>

               <div id="support-staff-area" class="pb-5 container">
                   <p class="pt-5 text-center">
                       I would also like to take this moment to welcome several new team members to our MDU family. Our Dream Team (teachers and staff) are the heartbeat of our programs and I can’t wait for you to meet them:
                   </p>
                   <div class="row row-cols-2 row-cols-sm-2 row-cols-md-5 row-cols-lg-5">
                       <div class="col-sm">
                           <p>
                               <strong>Miss Abby Konopacki</strong>
                               grew up at MDU. She currently works as a para for Holmen Schools and teaches Children's and Graded Technique classes.
                           </p>
                       </div>
                       <div class="col-sm">
                           <p>
                               <strong>Miss Cindy Anneke</strong>
                               is a Preschool dance class specialist, a member of our Adult Tap program. Miss Cindy is also a proud dance mom.
                           </p>
                       </div>
                       <div class="col-sm">
                           <p>
                               <strong>Miss Kaydra Moses</strong>
                               is another MDU alumna who enjoys giving back to the next generation.  She is currently serving as one of our Performing Groups teachers.
                           </p>
                       </div>
                       <div class="col-sm">
                           <p>
                               <strong>Miss Melanie Earll</strong>
                               taught English and dance abroad is currently teaching Kindergarten at Eagle Bluff in addition to Children's programs at MDU. Miss Melanie is a proud MDU alumna.
                           </p>
                       </div>
                       <div class="col-sm">
                           <p>
                               <strong>Miss Michelle Malone</strong>
                               is an MDU alumna who has performed professionally with Ingredients Dance Company out of Dallas and with a ministry in Brazil. She currently teaches Hip Hop and leads her own company, I & E Dance Company, which is housed at MDU.
                           </p>
                       </div>
                       <div class="col-sm">
                           <p>
                               <strong>Miss Katelyn Phelps</strong>
                               is a former competitive dancer from Lakeshore Dance in the Milwaukee area. She is moving to La Crosse to attend school at UW-L.
                           </p>
                       </div>
                       <div class="col-sm">
                           <p>
                               <strong>Miss Nicole Fry</strong>
                               is a former competitive dancer from Young Dance Academy in the Milwaukee area. She is moving to La Crosse to attend Physician Assistant school at UW-L.
                           </p>
                       </div>
                       <div class="col-sm">
                           <p>
                               <strong>Miss Brianna Augustine</strong>
                               is a company member with Ballet Magnum Opus in Madison. She will be driving in a few times a month from Madison to guest teach classes.
                           </p>
                       </div>
                       <div class="col-sm">
                           <p>
                               <strong>Miss Suzanne Swanson Wagner</strong>
                               was Miss Misty's main teacher growing up and is the former owner of the Marilyn School of Dance in Tomah and Black River Falls. She will be driving in a couple of times per week to share her experience with our students–super exciting!
                           </p>
                       </div>
                       <div class="col-sm">
                           <p>
                               <strong>Mr. Richard Smith</strong>
                               , an MDU guest teacher favorite, will be doing a technique and teacher training residency with us in the fall. Mr. Richard is a former Giordano Jazz Company2 member and former Artistic Director of Inaside Chicago Dance.
                           </p>
                       </div>
                   </div>
               </div>
           </section>
       </div>
   </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection
