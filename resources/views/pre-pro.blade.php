@extends('layouts.app')
@section('title', 'Pre-Professional Ballet | Misty\'s Dance Unlimited')
@section('content')

    <section id="pp-education">
        <h1 class="text-center mt-5">Pre-Professional Ballet</h1>

        <div class="container">

            <ul class="nav my-3 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">September</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">October</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#november">November</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#january">December</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#january">January</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#january">February</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">March</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">April</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">May</a>
                </li>
            </ul>


            <div class="card-deck">
                <div class="card bg-white">
                    <div class="card-body">
                        <h5 class="card-title">Local Performances</h5>
                        <p class="card-text">
                            <span class="pp-date text-info font-weight-light">2/20-2/23 </span>Shen Yun <small class="text-muted">in Minneapolis</small>
                            <br><span class="pp-date text-info font-weight-light">2/21 </span>Lula Washington <small class="text-muted">at Viterbo</small>
                            <br><span class="pp-date text-info font-weight-light">2/22-2/23 </span>Ballet West performing "Jewels" <small class="text-muted">in Minneapolis</small>
                            <br><span class="pp-date text-info font-weight-light">3/28 </span><a href="images/james-sewell.pdf" target="_blank" class="text-danger">James Sewell Ballet</a> <small class="text-muted">in Winona</small>
                        </p>
                    </div>
                </div>
                <div class="card bg-white">
                    <div class="card-body">
                        <h5 class="card-title">Nearby Auditions</h5>
                        <p class="card-text">
                            <span class="pp-date text-info font-weight-light">02/29</span>
                            <a href="https://www.ballet58.org/summer-intensive" target="_blank" class="text-body">
                                Ballet 5:8 (Christian based ballet company and school, Katie Peterson has studied over the summer here)
                            </a>
                            <small class="text-muted">in Chicago</small>
                            <br>
                            <span class="pp-date text-info font-weight-light">02/22</span>
                            <a href="https://www.ballet58.org/summer-intensive" target="_blank" class="text-body">
                                Ballet 5:8
                            </a>
                            <small class="text-muted">in Milwaukee</small>
                            <br>
                            <span class="pp-date text-info font-weight-light">N/A</span>
                            <a href="https://www.stlouisballet.org/summerprogram" target="_blank" class="text-body">
                                St. Louis Ballet (Miss CiCi's company's summer program)
                            </a>
                            <small class="text-muted">no audition requirement listed on website</small>
                            <br>
                            <span class="pp-date text-info font-weight-light">N/A</span>
                            <a href="https://www.classical-ballet-academy.com/summer-intensive" target="_blank" class="text-body">
                                Classical Ballet Academy (owned by former director of the Colorado ballet school who trained at the Vaganova School - Miss Amanda studied with her for 2 summers)
                            </a>
                            <small class="text-muted">audition by video</small>
                            <br>
                            <span class="pp-date text-info font-weight-light">2/23</span>
                            <a href="https://www.aacenterfordance.org/copy-of-winter-intensive" target="_blank" class="text-body">
                                A&A Ballet (former directors of the Joffrey school)
                            </a>
                            <small class="text-muted">in Chicago</small>
                            <br>
                            <span class="pp-date text-info font-weight-light">2/22</span>
                            <a href="https://www.milwaukeeballet.org/summer-intensive/auditions/" target="_blank" class="text-body">
                                Milwaukee Ballet
                            </a>
                            <small class="text-muted">in Milwaukee</small>
                            <br>
                            <span class="pp-date text-info font-weight-light">N/A</span>
                            <a href="https://bluelake.org/summercamp/majors/dance.php" target="_blank" class="text-body">
                                Blue Lake Fine Arts
                            </a>
                            <small class="text-muted">no audition required</small>
                            <br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md">
                    <h5 class="lead"><em>Alvin Ailey and the AMAZING Donna Wood in CRY 1982</em></h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/39cc1D5yD2A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md">
                    <h5 class="lead"><em>Alvin Ailey American Dance Theater: Revelations</em></h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/RrPJ4kt3a64" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md">
                    <h5 class="lead"><em>How to Sew Pointe Shoes</em></h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/4q--RBX_kp8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md">
                    <h5 class="lead"><em>The Nutcraker Ballet Mariinsky Theatre</em></h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/7neCn9nP0bo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="p-4 my-5 border bg-white" id="january">
                <h3 class="mb-3"><span class="text-uppercase text-info font-weight-bold">Dec/Jan/Feb</span> Dancers, Teachers, & Choreographers</h3>
                <div class="row">
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Lester Horton <br><span class="lead">&</span><br> Maria Tallchief</strong></p>

                            <li>Tiahna</li>
                            <li>Kyla</li>
                            <li>Sophie</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Doris Humphrey <br><span class="lead">&</span><br> Antony Tudor</strong></p>

                            <li>Amber</li>
                            <li>Hannah</li>
                            <li>Grace V</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>José Limón <br><span class="lead">&</span><br> Cynthia Gregory</strong></p>

                            <li>Hayley</li>
                            <li>Belle</li>
                            <li>Lara</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Martha Graham <br><span class="lead">&</span><br> Mikael Baryshnikov</strong></p>

                            <li>Sophia</li>
                            <li>Maya</li>
                            <li>Taryn</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Paul Taylor <br><span class="lead">&</span><br> Svetlana Zakharova</strong></p>

                            <li>Megan</li>
                            <li>Ada</li>
                            <li>Anna</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Joyce Trisler <br><span class="lead">&</span><br> Sergei Diaghilev</strong></p>

                            <li>Julia</li>
                            <li>Sylvie</li>
                            <li>Kaelin</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Maurice Béjart <br><span class="lead">&</span><br> Aggripina Vaganova</strong></p>

                            <li>Elise</li>
                            <li>Grace M</li>
                            <li>Brooke</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Pearl Lang <br><span class="lead">&</span><br> Jerome Robbins</strong></p>

                            <li>Isabella</li>
                            <li>Grechyn</li>
                            <li>Annika</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md">
                    <h5 class="lead"><em>Paul Taylor</em></h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/blq1BNhyyVg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md">
                    <h5 class="lead"><em>Paul Taylor Dance Company</em></h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/27jXGTYPqKg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md">
                    <h5 class="lead"><em>Giselle 1969</em></h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/BbYlMnFgp3c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md">
                    <h5 class="lead"><em>Giselle 2005</em></h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/cqOm922Fhx8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="p-4 my-5 border bg-white" id="november">
                <h3 class="mb-3"><span class="text-uppercase text-info font-weight-bold">November</span> Dancers, Teachers, & Choreographers</h3>
                <div class="row">
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>August Bournonville <br><span class="lead">&</span><br> Bella Lewitzky</strong></p>

                            <li>Tiahna</li>
                            <li>Kyla</li>
                            <li>Sophie</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Alessandra Ferri <br><span class="lead">&</span><br> Louis Falco</strong></p>

                            <li>Amber</li>
                            <li>Hannah</li>
                            <li>Grace V</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Margot Fonteyn <br><span class="lead">&</span><br> Alvin Ailey</strong></p>

                            <li>Hayley</li>
                            <li>Belle</li>
                            <li>Lara</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Anna Pavlova <br><span class="lead">&</span><br> Merce Cunningham</strong></p>

                            <li>Sophia</li>
                            <li>Maya</li>
                            <li>Taryn</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Rudolf Nureyev <br><span class="lead">&</span><br> Ruth St. Denis</strong></p>

                            <li>Megan</li>
                            <li>Ada</li>
                            <li>Anna</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Christopher Wheeldon <br><span class="lead">&</span><br> Hanya Holm</strong></p>

                            <li>Julia</li>
                            <li>Sylvie</li>
                            <li>Kaelin</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Sylvie Guillem <br><span class="lead">&</span><br> Eric Hawkins</strong></p>

                            <li>Elise</li>
                            <li>Grace M</li>
                            <li>Brooke</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <p class="bg-warning p-2"><strong>Robert Joffrey <br><span class="lead">&</span><br> Twyla Tharp</strong></p>

                            <li>Isabella</li>
                            <li>Grechyn</li>
                            <li>Annika</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="pb-3 bg-ivory" id="pp-footer">
            <div class="container">
                <div class="card-deck">
                    <div class="card border-0">
                        <div class="card-body bg-ivory">
                            <h5 class="card-title text-white pt-3">Recommended Websites</h5>
                            <div class="card-text">
                                <ul>
                                    <li><a class="text-info" href="https://www.dancemagazine.com/" target="_blank">Dance Magazine</a></li>
                                    <li><a class="text-info" href="https://www.pointemagazine.com/" target="_blank">Pointe Magazine</a></li>
                                    <li><a class="text-info" href="https://dancer.com/" target="_blank">Dancer.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style type="text/css">
        .pp-date {
            font-size: 120%;
        }

        body {
            background-image: linear-gradient(snow, whitesmoke);
            overflow-x: hidden;
        }

        #pp-education .bg-white {
            background-image: linear-gradient(to right, snow, whitesmoke) !important;
            -moz-box-shadow:    -0.5px 0.5px 5px 0.5px #ccc;
            -webkit-box-shadow: -0.5px 0.5px 5px 0.5px #ccc;
            box-shadow:         -0.5px 0.5px 5px 0.5px #ccc;
        }

        #pp-education .bg-warning {
            background-image: linear-gradient(to bottom right, #ffc107, #ecf097) !important;
        }

        #pp-education ul {
            list-style-type: none;
        }

        #pp-education p {
            margin: 0;
        }

        #pp-footer {
            border-bottom: 1px solid white;
        }

    </style>

    @include('footer')
@endsection
