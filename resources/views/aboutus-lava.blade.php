@extends('layouts.app-lava')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-sm">
                    <img src="/images-lava/about-us-mistys-dance.jpg" alt="" class="img-fluid shadow rounded mb-2">
                </div>
                <div class="col-sm">
                    <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">About Us</h3>
                    <p class="font-syne" style="font-size: 22px;">
                        <span style="font-family: 'Pacifico', cursive; font-size: 30px;">Hi!</span>
                        <br><br>
                        My name is Misty Lown and I am the founder of Misty's Dance Unlimited, LLC, or "MDU" as we call it around here <3. I started the studio on a simple principle that we have stayed TRUE to over the last two and a half decades–we are "More Than Just Great Dancing!®".
                    </p>
                </div>
            </div>
            <p class="font-syne" style="font-size: 22px;">
                So what does that mean? It means that at a baseline we provide EXCELLENCE in dance education. I did my graduate work in education and lead the nation's only safety certifying organization for dance teachers. Our teachers are qualified and certified. And, our PROVEN curriculum has inspired CONFIDENCE in thousands of students; placing students on every local dance team, and countless college programs.
                <br><br>
                HOWEVER, we are MORE Than Just Great Dancing!® At MDU, dance has lasting value because dance lessons are LIFE LESSONS. Dance meets imperative needs for social-emotional skills, mental well-being, and physical health and provides quality friendships and role models. And, THAT is the greatest investment a parent could make in their child. I don't only share that as a dance teacher but as a mom of five myself.
                <br><br>
                At MDU dance becomes a FAMILY and the studio becomes a second HOME for kids during their developmental years. We invite you to meet some of our amazing faculty below, some of whom have been inspiring Coulee Region children for over two decades.
                <br><br>
                <span style="font-family: 'Pacifico', cursive; font-size: 30px;">Welcome to MDU!!</span>
            </p>
            {{--            <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">Meet The Team</h3>--}}
        </div>
    </div>

    <div class="bg-red-solid py-5" style="position: relative; height: 100%;">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
{{--                <div class="col-sm mt-3" style="height: 100%;"></div>--}}
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-misty.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Misty Lown</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">CEO Owner Founder</span><br>
                        Miss Misty has been sharing her passion for dance and mentorship with students for 30 years. She is the founder of More Than Just Great Dancing™ affiliated dance studios and “A Chance to Dance Foundation”, a 501(c)3 charitable organization. Misty is passionate about community service and has given over $500,000 in combined cash and studio scholarships over the past 23 years.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kylie.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Kylie Williams</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">Studio Director</span><br>
                        Miss Kylie returned to MDU in 2015 after graduating from Belhaven University with a Bachelor of Fine Arts in dance and a minor in accounting. She is the Director of our Award Winning Performance Company! She has worked with choreographers associated with Complexions, Ad Deum, Inaside Chicago, and Limon Dance Company. Her favorite dance role was in Pitch Perfect 2.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-shayna.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Shayna Stellflue</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">General Manager</span><br>
                        Miss Shayna is the General Manager of Misty’s Dance Unlimited and leads the Safety Team and Recitals. She began teaching at MDU in 1999 and is the creator of “Dancin’ Kids!”, a popular performance group for 7-9 yr. olds. Miss Shayna co-authored a Children’s Curriculum for More Than Just Great Dancing™ and is passionate about instilling confidence in every child.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kris.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Kris Nandory</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">Business Manager</span><br>
                        Kris comes to us with 25 plus years of excelling in managerial careers. She started at MDU in 2013 and currently serves as our Family Services leader and well as coordinating our boutique, Everything Dance. She manages student enrollment, studio emails, family accounts, student attendance, and more! She loves working with families and kids!
                    </p>
                </div>
{{--                <div class="col-sm font-staat text-white d-none d-lg-block" style="font-size: 100px; transform: rotate(-90deg) translate(-50%, -50%); height: 100%;">admin</div>--}}
{{--                <div class="col-sm mt-3 d-flex align-items-center font-staat text-white d-block d-lg-none" style="font-size: 100px;">admin</div>--}}
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-sandy.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Sandy Averill</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">Front Desk</span><br>
                        Miss Sandy has been with MDU since day one! She is our Hospitality Services leader at the front desk as well as Miss Misty’s mom! Miss Sandy is the first friendly face you will see when you come in and always happy to help. She enjoys the warmth and camaraderie of the families and staff at MDU and watching our students grow throughout the years.                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-tiffany.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Tiffany Fischer</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">Admin Assistant</span><br>
                        Miss Tiffany grew up dancing at MDU and has been teaching since 2008. She is an award-winning choreographer. Miss Tiffany is proficient in all styles of dance and has a passion for seeing students develop their God-given talents in a nurturing environment. Miss Tiffany teaches in our Children's program, Graded Technique program and Performing Groups program. She also is our Senior class advisor.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kaydra.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Kaydra Moses</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">Admin Assistant</span><br>
                        Miss Kaydra Moses is another MDU alumna who enjoys giving back to the next generation. She is currently serving as one of our Performing Groups teachers.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-beth.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Elisabeth Michelson</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">Costumes</span><br>
                        Miss Elisabeth has been dancing for 20 years. Her favorite genres include tap, musical theatre, and contemporary. Elisabeth shared her love for performing for many years as a member of MDU’s Performance Company. She is a 2013 graduate of the University of Minnesota with a degree in Elementary Education and Spanish. She has danced with Ingredients Dance Company in Texas and has taught at MDU since 2014.
                    </p>
                </div>
{{--                <div class="col-sm mt-3 text-white" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-abby.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Abby Konopacki</div>--}}
{{--                    </div>--}}
{{--                    <p class="font-syne">--}}
{{--                        Miss Abby Konopacki grew up at MDU. She currently works as a para for Holmen Schools and teaches Children's and Graded Technique classes.--}}
{{--                    </p>--}}
{{--                </div>--}}

            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm font-staat text-white d-none d-lg-block" style="font-size: 100px; transform: rotate(-90deg) translate(-50%, -50%); height: 100%;">teachers</div>
                <div class="col-sm mt-3 d-flex align-items-center font-staat text-white d-block d-lg-none" style="font-size: 100px;">teachers</div>
                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-addi.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Addi Berry</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-alex.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Alex Meier</div>
                    </div>
                    <p class="font-syne">
                        Miss Alex has been teaching at MDU since 2012. She is a ballet and tap specialist with a love for children. She is a graduate of Winona State University and fuels her love of science during the day as a surgical technician for Gundersen Health. She currently serves as the administrative coordinator for Ballet La Crosse.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-amanda.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Amanda Schams</div>
                    </div>
                    <p class="font-syne">
                        Miss Amanda has taught ballet and Pilates across the Midwest for two decades and for 17 years at MDU. She trained in Madison, with the Milwaukee Ballet and the Nutmeg Conservatory. She graduated from the University of Iowa with a dance minor. She has performed professionally with the Madison Ballet and as a guest artist throughout the Midwest.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-amy.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Amy Fortner</div>
                    </div>
                    <p class="font-syne">
                        After doing gymnastics through her sophomore year of college, Amy still has a passion for the sport and loves to teach kids acro and tumbling. Amy has been teaching for many years, and is certified in acro by Acrobatic Arts. She's been teaching at Misty's since 2016.
                    </p>
                </div>

                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-carmina.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Carmina Stauffer</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>
                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-chloe-jane.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Chloe Jane Bulman</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-cindy.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Cindy Anneke</div>
                    </div>
                    <p class="font-syne">
                        Miss Cindy Anneke is a Preschool dance class specialist, a member of our Adult Tap program. Miss Cindy is also a proud dance mom.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-denise.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Denise Meyer</div>
                    </div>
                    <p class="font-syne">
                        Miss Denise and Miss Misty grew up dancing together at Marilyn School of Dance in La Crosse. Miss Denise is currently a training director at LHI in La Crosse and has loved being back in the dance classroom since 2009. Miss Denise teaches in our Children's program, leads our Darby's Dancer's program, and is a rehearsal assistant for Ballet La Crosse.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-dennis.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Mr<br>Dennis Williams</div>
                    </div>
                    <p class="font-syne">
                        Mr. Dennis grew up studying ballet at Maple Conservatory of Dance in California. He graduated from Belhaven University with a BFA in dance and has danced professionally with Ballet Mississippi and Filter Dance Company. Additionally, he has four years of experience in Martial Arts. Mr. Dennis has taught at MDU since 2015.
                    </p>
                </div>
{{--                <div class="col-sm mt-3 text-white" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-emily.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Emily Sweeny</div>--}}
{{--                    </div>--}}
{{--                    <p class="font-syne">--}}
{{--                        Miss Emily graduated from Mankato State University with a degree in Dance and Sports Management. In addition to being a teacher at MDU, she is also the Coordinator of Youth Protection Advocates in Dance and oversees the training of hundreds of dance teachers nationwide each year. Miss Emily has been a teacher at MDU since 2018.--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-emma.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Emma Calmes</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>
{{--                <div class="col-sm mt-3 text-white" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-grace.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Grace Meyer</div>--}}
{{--                    </div>--}}
{{--                    <p class="font-syne">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet aperiam atque autem consequatur dolores eaque exercitationem fugiat, id in maxime minima molestiae nemo nulla obcaecati, perferendis provident quas reprehenderit, veniam! Amet aut consequatur cum, delectus deleniti dolorem, eius eveniet hic laboriosam molestias nostrum perferendis praesentium, provident quia vel?--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-greta.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Greta Vollendorf</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>
                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-hannah.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Hannah Hunt</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-katelyn.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Katelyn Phelps</div>
                    </div>
                    <p class="font-syne">
                        Miss Katelyn Phelps is a former competitive dancer from Lakeshore Dance in the Milwaukee area. She is moving to La Crosse to attend school at UW-L.
                    </p>
                </div>


                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kristina.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Kristina Schoh</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>
                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kyla.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Kyla Betz</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>

                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-larissa.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Larissa Oberly</div>
                    </div>
                    <p class="font-syne">
                        Miss Larissa is a former professional ballerina with the Estonian National Ballet in Europe. She has been teaching for MDU's Pre-Professional Program and our classical performing company, Ballet La Crosse since 2011. Ballet La Crosse was founded by Miss Larissa's late husband and beloved ballet master, Mr. Kennet Oberly.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-lexi.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Lexi Fishbein</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-melanie.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Melanie Earl</div>
                    </div>
                    <p class="font-syne">
                        Miss Melanie Earl taught English and dance abroad is currently teaching Kindergarten at Eagle Bluff in addition to Children's programs at MDU. Miss Melanie is a proud MDU alumna.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-michelle.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Michelle Malone</div>
                    </div>
                    <p class="font-syne">
                        Miss Michelle Malone is an MDU alumna who has performed professionally with Ingredients Dance Company out of Dallas and with a ministry in Brazil. She currently teaches Hip Hop and leads her own company, I & E Dance Company, which is housed at MDU.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-nicole.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Nicole Fry</div>
                    </div>
                    <p class="font-syne">
                        Miss Nicole Fry is a former competitive dancer from Young Dance Academy in the Milwaukee area. She is moving to La Crosse to attend Physician Assistant school at UW-L.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white d-none" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-olivia.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Olivia Key</div>
                    </div>
                    <p class="font-syne">
bio coming soon
                    </p>
                </div>
{{--                <div class="col-sm mt-3 text-white" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images-lava/staff-richard.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Richard Smith</div>--}}
{{--                    </div>--}}
{{--                    <p class="font-syne">--}}
{{--                        Mr. Richard Smith , an MDU guest teacher favorite, will be doing a technique and teacher training residency with us in the fall. Mr. Richard is a former Giordano Jazz Company2 member and former Artistic Director of Inaside Chicago Dance.--}}
{{--                    </p>--}}
{{--                </div>--}}


                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-suzanne.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Suzanne Swanson Wagner</div>
                    </div>
                    <p class="font-syne">
                        Miss Suzanne Swanson Wagner was Miss Misty's main teacher growing up and is the former owner of the Marilyn School of Dance in Tomah and Black River Falls. She will be driving in a couple of times per week to share her experience with our students–super exciting!
                    </p>
                </div>




            </div>
        </div>
        <div style="height: 300px;"></div>
        <div class="custom-shape-divider-bottom-1648524823" style="transform: translateY(1px);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

@endsection
