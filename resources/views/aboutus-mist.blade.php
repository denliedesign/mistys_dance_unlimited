@extends('layouts.app-side-mist')
@section('content')

    <div class="bg-white">
        <div class="mx-4 pb-5 pt-3">
            <div class="row">
                <div class="col-sm">
                    <img src="/images-lava/about-us-mistys-dance.jpg" alt="" class="img-fluid shadow rounded mb-2">
                </div>
                <div class="col-sm">
                    <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">About Us</h1>

                    <p class="poppins" style="font-size: 20px;">
                        <span style="font-family: 'Pacifico', cursive; font-size: 30px;">Hi!</span>
                        <br><br>
                        My name is Misty Lown and I am the founder of Misty's Dance Unlimited, LLC, or "MDU" as we call it around here <3. I started the studio on a simple principle that we have stayed TRUE to over the last two and a half decades–we are "More Than Just Great Dancing!®".
                    </p>
                </div>
            </div>
            <p class="poppins" style="font-size: 20px;">
                So what does that mean? It means that at a baseline we provide EXCELLENCE in dance education. I did my graduate work in education and lead the nation's only safety certifying organization for dance teachers. Our teachers are qualified and certified. And, our PROVEN curriculum has inspired CONFIDENCE in thousands of students; placing students on every local dance team, and countless college programs.
                <br><br>
                HOWEVER, we are MORE Than Just Great Dancing!® At MDU, dance has lasting value because dance lessons are LIFE LESSONS. Dance meets imperative needs for social-emotional skills, mental well-being, and physical health and provides quality friendships and role models. And, THAT is the greatest investment a parent could make in their child. I don't only share that as a dance teacher but as a mom of five myself.
                <br><br>
                At MDU dance becomes a FAMILY and the studio becomes a second HOME for kids during their developmental years. We invite you to meet some of our amazing faculty below, some of whom have been inspiring Coulee Region children for over two decades.
                <br><br>
                <span style="font-family: 'Pacifico', cursive; font-size: 30px;">Welcome to MDU!!</span>
            </p>
            {{--            <h3 class="poppins" style="font-size: 100px; line-height: 0.9em;">Meet The Team</h3>--}}
        </div>
    </div>

    <div class="py-5" style="position: relative; height: 100%;">
        <div class="mx-4">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-misty.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Misty Lown</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">CEO Owner Founder</span><br>
                        Miss Misty has been sharing her passion for dance and mentorship with students for 30 years. She is the founder of More Than Just Great Dancing™ affiliated dance studios and “A Chance to Dance Foundation”, a 501(c)3 charitable organization. Misty is passionate about community service and has given over $500,000 in combined cash and studio scholarships over the past 23 years.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kylie.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
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
                        <img src="/images-lava/staff-shayna.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
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
                        <img src="/images-lava/staff-kris.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Kris Nandory</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Business Manager</span><br>
                        Kris comes to us with 25 plus years of excelling in managerial careers. She started at MDU in 2013 and currently serves as our Family Services leader and well as coordinating our boutique, Everything Dance. She manages student enrollment, studio emails, family accounts, student attendance, and more! She loves working with families and kids!
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-sandy.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
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
                        <img src="/images-lava/staff-tiffany.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Tiffany Fischer</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Admin Assistant</span><br>
                        Miss Tiffany grew up dancing at MDU and has been teaching since 2008. She is an award-winning choreographer. Miss Tiffany is proficient in all styles of dance and has a passion for seeing students develop their God-given talents in a nurturing environment. Miss Tiffany teaches in our Children's program, Graded Technique program and Performing Groups program. She also is our Senior class advisor.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kaydra.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Kaydra Moses</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Admin Assistant</span><br>
                        Miss Kaydra Moses is another MDU alumna who enjoys giving back to the next generation. She is currently serving as one of our Performing Groups teachers.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-beth.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Elisabeth Michelson</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Costumes</span><br>
                        Miss Elisabeth has been dancing for 20 years. Her favorite genres include tap, musical theatre, and contemporary. Elisabeth shared her love for performing for many years as a member of MDU’s Performance Company. She is a 2013 graduate of the University of Minnesota with a degree in Elementary Education and Spanish. She has danced with Ingredients Dance Company in Texas and has taught at MDU since 2014.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm poppins d-none d-lg-block" style="font-size: 80px; transform: rotate(-90deg) translate(-50%, -50%); height: 100%;">teachers</div>
                <div class="col-sm mt-3 d-flex align-items-center poppins d-block d-lg-none" style="font-size: 80px;">teachers</div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-addi.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Addi Berry</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        I am a senior at Tomah High School and have been dancing for about 13 years. This is only my third year at Misty’s and my first year teaching. My favorite styles of dance are hip hop, jazz, and contemporary. I hope to continue my dance journey after high school and plan to major in dance in college.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-alex.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
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
                        <img src="/images-lava/staff-amanda.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Amanda Schams</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Amanda has taught ballet and Pilates across the Midwest for two decades and for 17 years at MDU. She trained in Madison, with the Milwaukee Ballet and the Nutmeg Conservatory. She graduated from the University of Iowa with a dance minor. She has performed professionally with the Madison Ballet and as a guest artist throughout the Midwest.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-amy.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Amy Fortner</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        After doing gymnastics through her sophomore year of college, Amy still has a passion for the sport and loves to teach kids acro and tumbling. Amy has been teaching for many years, and is certified in acro by Acrobatic Arts. She's been teaching at Misty's since 2016.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-carmina.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Carmina Stauffer</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Carmina is currently enrolled in Rural Virtual Academy as a Junior in High School. She has been dancing for twelve years with genres consisting of Ballet, Tap and Jazz. She loves working with kids and teaching in the children's program.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-chloe-jane.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Chloe Jane Bulman</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Chloe Jane began dancing at MDU at the age of 3, she performed in Ballet La Crosse for 10 years and was a member of our Pre-professional ballet program. She is thrilled to be able to share her love of dance by being a rehearsal assistant with Ballet La Crosse, as well as instructing all ages in ballet, tap, and Steps of Praise.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-cindy.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Cindy Anneke</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Cindy Anneke is a Preschool dance class specialist, a member of our Adult Tap program. Miss Cindy is also a proud dance mom.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-denise.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Denise Meyer</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Denise and Miss Misty grew up dancing together at Marilyn School of Dance in La Crosse. Miss Denise is currently a training director at LHI in La Crosse and has loved being back in the dance classroom since 2009. Miss Denise teaches in our Children's program, leads our Darby's Dancer's program, and is a rehearsal assistant for Ballet La Crosse.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-dennis.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Mr<br>Dennis Williams</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Mr. Dennis grew up studying ballet at Maple Conservatory of Dance in California. He graduated from Belhaven University with a BFA in dance and has danced professionally with Ballet Mississippi and Filter Dance Company. Additionally, he has four years of experience in Martial Arts. Mr. Dennis has taught at MDU since 2015.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-emma.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Emma Calmes</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Emma grew up dancing at Misty’s and recently graduated from the program. She can’t imagine a world without dance and has always dreamed of sharing her love of dance with others.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-greta.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Greta Vollendorf</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Greta Vollendorf is a former competitive dancer from Forthcoming Danspace in Stevens Point, Wisconsin. She is currently studying elementary education and dance at UWL. She is also a 2nd year member of the UWL Dance Team.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-hannah.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Hannah Hunt</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Hannah grew up dancing at MDU and performed with Ballet La Crosse for 6 years. She graduated with a degree in Computer Science and works as a Software Engineer. This is her second year teaching as an instructor at MDU and as a rehearsal assistant with Ballet La Crosse.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-katelyn.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Katelyn Phelps</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Katelyn Phelps is a former competitive dancer from Lakeshore Dance in the Milwaukee area. She is moving to La Crosse to attend school at UW-L.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kristina.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Kristina Schoh</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Kristina is proud to be one of Misty’s original students and one of the first seven students to be on the first ever Performance Company. She taught from 2001-2009 and attests skills acquired at MDU to ultimately help her achieve winning Miss Wisconsin 2009, allowing her to share her passion of dance on the Miss America stage. Miss Kristina is elated to be back for the 25th anniversary of MDU!
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-larissa.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
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
                        <img src="/images-lava/staff-lexi.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Lexi Fishbein</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        I grew up dancing at Summit Dance Shoppe in Plymouth, Minnesota where I danced and competed for 15 years. I now attend Winona State University where I’m studying psychology and continuing with my love for dance by teaching! I help out with the performance company as well as teaching jazz, lyrical and contemporary classes!
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-michelle.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Michelle Malone</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Michelle Malone is an MDU alumna who has performed professionally with Ingredients Dance Company out of Dallas and with a ministry in Brazil. She currently teaches Hip Hop and leads her own company, I & E Dance Company, which is housed at MDU.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-olivia.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Olivia Key</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Olivia grew up dancing at MDU and has been teaching since 2017. Her favorite styles include ballet, lyrical and modern but she is able to teach all styles. Miss Olivia graduated from UW-Stevens Point with a degree in elementary education and dance. She is also a part of our Pre-Professional ballet program and Ballet La Crosse.
                    </p>
                </div>
                <div class="col-sm mt-3" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-suzanne.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text poppins mt-2" style="font-size: 30px; line-height: 0.9em;">Miss<br>Suzanne Swanson Wagner</div>
                    </div>
                    <p class="poppins">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Miss Suzanne Swanson Wagner was Miss Misty's main teacher growing up and is the former owner of the Marilyn School of Dance in Tomah and Black River Falls. She will be driving in a couple of times per week to share her experience with our students–super exciting!
                    </p>
                </div>


            </div>
            <p class="poppins mt-5 text-center">
                <span class="txt-yellow" style="font-size: 1.4em;">Meet our new instructors for 2023-2024. Head shots and biographies coming soon!</span><br>
                Ashlin Bowyer, Bailey Hoffman, Kyra Moore, Lizzie Mead, Tabitha Meyer.
            </p>
        </div>

    </div>

@endsection
