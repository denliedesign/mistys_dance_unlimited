@extends('layouts.app-side-mist')
@section('content')

    <div class="bg-white">
        <div class="mx-4 pb-5 pt-3">
            <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">About Us</h1>
                        <div class="row">
                <div class="col-md">
                    <img src="/images-lava/about-us-mistys-dance.jpg" alt="" class="img-fluid shadow rounded mb-2">
                </div>
                            <div class="col-md"></div>
{{--                <div class="col-sm">--}}


{{--                    <p class="poppins" style="font-size: 20px;">--}}
{{--                        <span style="font-family: 'Pacifico', cursive; font-size: 30px;">Hi!</span>--}}
{{--                        <br><br>--}}
{{--                        My name is Misty Lown and I am the founder of Misty's Dance Unlimited, LLC, or "MDU" as we call it around here <3. I started the studio on a simple principle that we have stayed TRUE to over the last two and a half decades–we are "More Than Just Great Dancing!®".--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <p class="poppins" style="font-size: 20px;">
                At Misty's Dance Unlimited (MDU), we believe that dance is about more than just great technique—it’s about nurturing the whole person. Our core values are rooted in creating a safe, loving, and inclusive environment where every dancer feels valued. For over 27 years, families have chosen MDU for our high-quality instruction, strong values, and the unparalleled professionalism of our teachers and staff.
                <br><br>MDU is more than a dance studio—it’s a community where children grow, friendships blossom, and leadership is fostered. Our classes are designed to challenge without overwhelming, encouraging dancers to raise the bar both in the studio and in life. Whether your child is just starting out or looking to refine their skills, our curriculum focuses on social, emotional, physical, and mental growth.
                <br><br>We pride ourselves on offering a clean, well-organized facility, complete with everything families need for comfort and convenience. From a welcoming staff who know each child by name to our well-maintained space, MDU provides a second home for your child to learn, grow, and thrive. Welcome to the MDU family, where dancers are built up, encouraged, and given the tools to succeed both on and off the dance floor.

                {{--                So what does that mean? It means that at a baseline we provide EXCELLENCE in dance education. I did my graduate work in education and lead the nation's only safety certifying organization for dance teachers. Our teachers are qualified and certified. And, our PROVEN curriculum has inspired CONFIDENCE in thousands of students; placing students on every local dance team, and countless college programs.--}}
{{--                <br><br>--}}
{{--                HOWEVER, we are MORE Than Just Great Dancing!® At MDU, dance has lasting value because dance lessons are LIFE LESSONS. Dance meets imperative needs for social-emotional skills, mental well-being, and physical health and provides quality friendships and role models. And, THAT is the greatest investment a parent could make in their child. I don't only share that as a dance teacher but as a mom of five myself.--}}
{{--                <br><br>--}}
{{--                At MDU dance becomes a FAMILY and the studio becomes a second HOME for kids during their developmental years. We invite you to meet some of our amazing faculty below, some of whom have been inspiring Coulee Region children for over two decades.--}}
{{--                <br><br>--}}
{{--                <span style="font-family: 'Pacifico', cursive; font-size: 30px;">Welcome to MDU!!</span>--}}
            </p>
            {{--            <h3 class="poppins" style="font-size: 100px; line-height: 0.9em;">Meet The Team</h3>--}}
        </div>
    </div>

    <div class="py-5" style="position: relative; height: 100%;">
        <div class="mx-4">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">

                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-shayna.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Shayna Stellflue</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">General Manager</span><br>
                        Miss Shayna is the General Manager of Misty’s Dance Unlimited and leads the Safety Team and Recitals. She began teaching at MDU in 1999 and is the creator of “Dancin’ Kids!”, a popular performance group for 7-9 yr. olds. Miss Shayna co-authored a Children’s Curriculum for More Than Just Great Dancing™ and is passionate about instilling confidence in every child.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kylie.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Kylie Williams</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Studio Director</span><br>
                        Miss Kylie returned to MDU in 2015 after graduating from Belhaven University with a Bachelor of Fine Arts in dance and a minor in accounting. She is the Director of our Award Winning Performance Company! She has worked with choreographers associated with Complexions, Ad Deum, Inaside Chicago, and Limon Dance Company. Her favorite dance role was in Pitch Perfect 2.
                    </p>
                </div>
                                <div class="col-sm mt-3" style="height: 100%;">
                                    <div style="position: relative;">
                                        <img src="/images/staff-kp.jpg" alt="staff member" class="img-fluid" style="height: 382.50px; object-fit: cover; filter: grayscale(100%);">
                                        <div id="triangle-bottomleft-staff"></div>
                                        <div class="triangle-text poppins mt-2" style="font-size: 25px; line-height: 0.9em;">Miss<br>Kylie Pecarina (Miss KP) </div>
                                    </div>
                                    <p class="poppins">
                                        <span class="txt-yellow" style="font-size: 1.2em;">Office & Enrollment Manager</span><br>
                                        Miss KP manages student enrollment, studio emails, family accounts, attendance, and our in-house boutique, Willow & Grace. New to the MDU team, she brings a strong background in customer service and administrative support, with a passion for organization and clear communication. She believes in the heart behind the studio and is committed to creating a welcoming, well-organized experience for every family.
                                    </p>
                                </div>

{{--                <div class="col-sm mt-3" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-kris.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Kris Nandory</div>--}}
{{--                    </div>--}}
{{--                    <p class="poppins">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.4em;">Business Manager</span><br>--}}
{{--                        Kris comes to us with 25 plus years of excelling in managerial careers. She started at MDU in 2013 and currently serves as our Family Services leader and well as coordinating our boutique, Everything Dance. She manages student enrollment, studio emails, family accounts, student attendance, and more! She loves working with families and kids!--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-sandy.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Sandy Averill</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Front Desk</span><br>
                        Miss Sandy has been with MDU since day one! She is our Hospitality Services leader at the front desk as well as Miss Misty’s mom! Miss Sandy is the first friendly face you will see when you come in and always happy to help. She enjoys the warmth and camaraderie of the families and staff at MDU and watching our students grow throughout the years.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-lexi.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Lexi Fishbein</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.1em;">Performing Groups Admin & Instructor</span><br>
                        Lexi grew up dancing at Summit Dance Shoppe in Plymouth, Minnesota where she danced and competed for 15 years. She attends Winona State University where she studies psychology and continues her love for dance by teaching! She helps out with the Performance Company as well as teaching jazz, lyrical and contemporary classes!
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-tiffany.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Tiffany Fischer</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Costume Coordinator</span><br>
                        Miss Tiffany grew up dancing at MDU and has been teaching since 2008. She is an award-winning choreographer. Miss Tiffany is proficient in all styles of dance and has a passion for seeing students develop their God-given talents in a nurturing environment. Miss Tiffany teaches a variety of our classes, Performing Groups, and is our senior class advisor. She is also our Costume Coordinator.
                    </p>
                </div>

                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-misty.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Misty Lown</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Founder</span><br>
                        Miss Misty has been sharing her passion for dance and mentorship with students for over 30 years. She is the founder of More Than Just Great Dancing™ affiliated dance studios and “A Chance to Dance Foundation”, a 501(c)3 charitable organization. Misty is passionate about community service and has given over $500,000 in combined cash and studio scholarships over the past few decades.
                    </p>
                </div>
{{--                <div class="col-sm mt-3" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-kaydra.jpg" alt="staff member" class="img-fluid" style=max-height: 382.50px; filter: grayscale(100%);>--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Kaydra Moses</div>--}}
{{--                    </div>--}}
{{--                    <p class="poppins">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.4em;">Admin Assistant</span><br>--}}
{{--                        Miss Kaydra Moses is another MDU alumna who enjoys giving back to the next generation. She is currently serving as one of our Performing Groups teachers.--}}
{{--                    </p>--}}
{{--                </div>--}}

            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm poppins d-none d-lg-block" style="font-size: 60px; transform: rotate(-90deg) translate(-50%, -50%); height: 100%;">teachers</div>
                <div class="col-sm mt-3 d-flex align-items-center poppins d-block d-lg-none" style="font-size: 60px;">teachers</div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-cindy.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Cindy Anneke</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Cindy discovered our MDU family through a Mommy & Me class. In 2020, she transitioned from a dance mom to a staff member and now teaches the same class that introduced her to us. Miss Cindy is our preschool dance class specialist, working closely with our youngest dancers. She also leads our Wiggle Wednesday program, an early childhood class that promotes connection, creative movement, and art.
{{--                        Miss Cindy Anneke is a Preschool dance class specialist, a member of our Adult Tap program. Miss Cindy is also a proud dance mom and the energetic leader of our Wiggle Wednesday program.--}}
                    </p>
                </div>
{{--                <div class="col-sm mt-3" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images/miss-ashlin-bowyer.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Ashlin Bowyer</div>--}}
{{--                    </div>--}}
{{--                    <p class="poppins">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>--}}
{{--                        Miss Ashlin trained with the Royal Winnipeg Ballet’s Professional Division year-round program and was an Advanced Touring Student with the Minnesota Ballet. Ashlin is in her second year at MDU and enjoys teaching Ballet and Pointe. She grew up in Duluth and has her M.F.A from Washington State University with a focus in Fiber Art and Printmaking.--}}
{{--                        Miss Ashlin trained with the Royal Winnipeg Ballet’s Professional Division year-round program and was an Advanced Touring Student with the Minnesota Ballet. Ashlin is in her second year at MDU and enjoys teaching Ballet and Pointe. She grew up in Duluth and has her M.F.A from Washington State University in Fiber Art and Printmaking.--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/25-staff-chloe-jane.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Chloe Jane Bulman</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Chloe Jane began dancing at MDU at the age of 3, she performed in Ballet La Crosse for 10 years and was a member of our Pre-professional ballet program. She is thrilled to be able to share her love of dance by being a rehearsal assistant with Ballet La Crosse, as well as instructing all ages in ballet, tap, and Steps of Praise. Miss Chloe Jane also serves as our Admin Assistant.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/25-staff-hannah-derksen.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Hannah Derksen</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Hannah grew up dancing competitively at Just For Kix - Waupun, and was also on the Waupun Varsity Dance Team for four years. She has previously taught dance at her home studio since sophomore year of high school, and currently attends UW-La Crosse where she is majoring in Marketing with a minor in Dance. She is also a member of the UWL dance team.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-hannah.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Hannah Dummer</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Hannah grew up dancing at MDU and performed with Ballet La Crosse for 6 years. She graduated with a degree in Computer Science and works as a Software Engineer. Hannah started teaching at MDU in 2022 and currently serves as an instructor and rehearsal assistant with Ballet La Crosse.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/25-staff-madalyn.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Madalyn Erickson</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Bio coming soon.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/25-staff-maddie-hischke.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Maddie Hischke</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Bio coming soon.
                    </p>
                </div>


{{--                <div class="col-sm mt-3" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images/miss-bailey-hoffman.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Bailey Hoffman</div>--}}
{{--                    </div>--}}
{{--                    <p class="poppins">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>--}}
{{--                        Bailey grew up dancing at Misty’s and participated in Ballet La Crosse and Pre Pro for several years. Bailey became a classroom helper at age 9 which made her realize her love for kids and inspired her to become a teacher. She loves watching her students grow in confidence and skill as they learn to express themselves through dance.--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/miss-hailey-hotvedt.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Hailey Hotvedt</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Hailey grew up competitively dancing at Broadway Academy of Art and Dance in Lake Geneva, Wisconsin. She also competed on the Burlington High School Varsity Dance Team for all four years. She currently attends Viterbo University where she studies social work and criminal justice. She is also on the competitive dance team at Viterbo. She teaches hip hop classes, Crew, Crew Jr., and Guys Hip Hop Team!
                    </p>
                </div>


                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-mist/staff-alex.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Alex Meier</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Alex has been teaching at MDU since 2012. She is a ballet and tap specialist with a love for children. She is a graduate of Winona State University and fuels her love of science during the day as a surgical technician for Gundersen Health. She currently serves as the administrative coordinator for Ballet La Crosse.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/25-staff-macy.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Macy Meyer</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Bio coming soon.
                    </p>
                </div>
{{--                <div class="col-sm mt-3" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-denise.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Denise Meyer</div>--}}
{{--                    </div>--}}
{{--                    <p class="poppins">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>--}}
{{--                        Miss Denise and Miss Misty grew up dancing together at Marilyn School of Dance in La Crosse. Miss Denise is currently a training director at LHI in La Crosse and has loved being back in the dance classroom since 2009. Miss Denise teaches in our Children's program and leads our Darby's Dancer's program for dancers with special needs.--}}
{{--                    </p>--}}
{{--                </div>--}}

                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/25-staff-elisabeth.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Elisabeth Michelson</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Elisabeth has been dancing for over 20 years. Her favorite genres include tap, musical theatre, and contemporary. Elisabeth shared her love for performing for many years as a member of MDU’s Performance Company. She is a 2013 graduate of the University of Minnesota with a degree in Elementary Education and Spanish. She has danced with Ingredients Dance Company in Texas and has taught at MDU since 2014.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-emma.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Emma Miller</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Emma grew up dancing at Misty’s and recently graduated from the program. She can’t imagine a world without dance and has always dreamed of sharing her love of dance with others.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/miss-kyra-moore.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br> Kyra Moore</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Kyra grew up in the area and started dancing at Misty's when she was 3. She was involved in the Performance Company for 5 years and was on the Holmen Dance Team for all 4 years of high school. Last summer, she was trained through the AcrobaticArts curriculum and has expanded her teaching to Acro classes along with Tap, Jazz, and Lyrical! She is excited to share her passion for dance with all of her students!
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-larissa.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Larissa Oberly</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Larissa is a former professional ballerina with the Estonian National Ballet in Europe. She has been teaching for MDU's Pre-Professional Program and our classical performing company, Ballet La Crosse since 2011. Ballet La Crosse was founded by Miss Larissa's late husband and beloved ballet master, Mr. Kennet Oberly.
                    </p>
                </div>

                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/25-staff-olivia.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Olivia Servais</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Olivia grew up dancing at MDU and has been teaching since 2017. Her favorite styles include ballet, lyrical and modern but she is able to teach all styles. Miss Olivia graduated from UW-Stevens Point with a degree in elementary education and dance. She is also a part of our Pre-Professional ballet program and Ballet La Crosse.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kristina.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Kristina Schoh</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Kristina is proud to be one of Misty’s original students and one of the first seven students to be on the first ever Performance Company. She taught from 2001-2009 and attests skills acquired at MDU to ultimately help her achieve winning Miss Wisconsin 2009, allowing her to share her passion of dance on the Miss America stage. Miss Kristina is elated to be back at MDU!
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/25-staff-aly.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Aly Small</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Bio coming soon.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-carmina.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Carmina Stauffer</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Carmina is currently a student at the UW-L. She studied Ballet, Tap and Jazz extensively as a student participating in both Performance Company and Ballet La Crosse. She loves working with kids and teaching in the children's program.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff-rubie.jpeg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Rubie Stetzer</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Rubie is an established stage actor, on-camera actor, vocalist, model and dancer. Rubie is a BFA musical theatre major with a dance minor at Viterbo University.
                        In high school, Rubie performed with the award winning Onalaska Hilltopper Show Choir. She is honored to be part of the same team that influenced her love for dance.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-suzanne.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Suzanne Swanson Wagner</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Suzanne Swanson Wagner was Miss Misty's main teacher growing up and is the former owner of the Marilyn School of Dance in Tomah and Black River Falls. She will be driving in a couple of times per week to share her experience with our students–super exciting!
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-greta.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Greta Vollendorf</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Greta Vollendorf is a former competitive dancer from Forthcoming Danspace in Stevens Point, Wisconsin. She is currently studying elementary education and dance at UW-L. She is also a 2nd year member of the UWL Dance Team.
                    </p>
                </div>
{{--                <div class="col-sm mt-3" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-addi.jpg" alt="staff member" class="img-fluid" style=max-height: 382.50px; filter: grayscale(100%);>--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Addi Berry</div>--}}
{{--                    </div>--}}
{{--                    <p class="poppins">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>--}}
{{--                        I am a senior at Tomah High School and have been dancing for about 13 years. This is only my third year at Misty’s and my first year teaching. My favorite styles of dance are hip hop, jazz, and contemporary. I hope to continue my dance journey after high school and plan to major in dance in college.--}}
{{--                    </p>--}}
{{--                </div>--}}


{{--                <div class="col-sm mt-3" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-amy.jpg" alt="staff member" class="img-fluid" style=max-height: 382.50px; filter: grayscale(100%);>--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Amy Fortner</div>--}}
{{--                    </div>--}}
{{--                    <p class="poppins">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>--}}
{{--                        After doing gymnastics through her sophomore year of college, Amy still has a passion for the sport and loves to teach kids acro and tumbling. Amy has been teaching for many years, and is certified in acro by Acrobatic Arts. She's been teaching at Misty's since 2016.--}}
{{--                    </p>--}}
{{--                </div>--}}




                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-dennis.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Mr<br>Dennis Williams</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Mr. Dennis grew up studying ballet at Maple Conservatory of Dance in California. He graduated from Belhaven University with a BFA in dance and has danced professionally with Ballet Mississippi and Filter Dance Company. Additionally, he has four years of experience in Martial Arts. Mr. Dennis has taught at MDU since 2015.
                    </p>
                </div>



{{--                <div class="col-sm mt-3" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-katelyn.jpg" alt="staff member" class="img-fluid" style=max-height: 382.50px; filter: grayscale(100%);>--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Katelyn Phelps</div>--}}
{{--                    </div>--}}
{{--                    <p class="poppins">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>--}}
{{--                        Miss Katelyn Phelps is a former competitive dancer from Lakeshore Dance in the Milwaukee area. She is moving to La Crosse to attend school at UW-L.--}}
{{--                    </p>--}}
{{--                </div>--}}



{{--                <div class="col-sm mt-3" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-michelle.jpg" alt="staff member" class="img-fluid" style=max-height: 382.50px; filter: grayscale(100%);>--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Michelle Malone</div>--}}
{{--                    </div>--}}
{{--                    <p class="poppins">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>--}}
{{--                        Miss Michelle Malone is an MDU alumna who has performed professionally with Ingredients Dance Company out of Dallas and with a ministry in Brazil. She currently teaches Hip Hop and leads her own company, I & E Dance Company, which is housed at MDU.--}}
{{--                    </p>--}}
{{--                </div>--}}




            </div>
{{--            <p class="poppins mt-5 text-center">--}}
{{--                <span class="txt-yellow" style="font-size: 1.4em;">Please also welcome our new instructors for 2025. Head shots and biographies coming soon!</span><br>--}}
{{--                Julia Chirillo, Madalyn Erickson, and Macy Meyer--}}
{{--            </p>--}}

            <p class="poppins mt-5 text-center">
                <span class="txt-yellow" style="font-size: 1.4em;">Summer Instructors/Subbing Team</span><br>
                The team below as well as Kyla Betz, Sophie Cowgill, and Isabella Lown
            </p>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/miss-elsa-fortner.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br> Elsa Fortner</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Elsa has been dancing with Misty’s for as long as she can remember. She is currently a member of Performance Company, Traveling Team, and CREW, and participates in Ballet La Crosse. She is a student at Aquinas High School and is a senior captain of the Aquinas High School Dance Team. She loves teaching a variety of genres and ages and sharing the love of dance.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/miss-kaleyah-rivera.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Kaleyah Rivera</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Kaleyah has danced at Misty’s Dance Unlimited for 6 years and has participated in the Performance Company, Crew, Traveling Teams, and Ballet La Crosse. Miss Kaleyah was a part of the Junior Faculty last year and is excited to continue teaching this year!
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/miss-tabitha-meyer.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Tabitha Meyer</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Tabitha has been dancing at Misty’s for 14 years and is a part of Performance Company, Ballet La Crosse, Crew, and Traveling Team. Her favorite styles are contemporary and Hip Hop. This is her second year teaching and she’s excited for it!
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-amanda.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px; filter: grayscale(100%);">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Amanda Schams</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Amanda has taught ballet and Pilates across the Midwest for two decades and for 17 years at MDU. She trained in Madison, with the Milwaukee Ballet and the Nutmeg Conservatory. She graduated from the University of Iowa with a dance minor. She has performed professionally with the Madison Ballet and as a guest artist throughout the Midwest.
                    </p>
                </div>
            </div>
        </div>

    </div>

@endsection
