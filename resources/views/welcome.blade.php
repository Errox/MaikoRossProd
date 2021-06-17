<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MaikoRoss Productions</title>
    <!-- Loading in bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <link rel="stylesheet" href="{{URL('/css/main.css') }}">
    <link rel="stylesheet" href="{{URL('/css/fixed.css') }}">
    <link rel="stylesheet" href="{{URL('/css/buttons.css')}}">
    <link rel="stylesheet" href="{{URL('/css/cards.css')}}">

    <!-- Loading in font awesome -->
    <script src="https://kit.fontawesome.com/73201f4522.js" crossorigin="anonymous"></script>

    <!-- Jquery loading -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('body').addClass('loaded');
                $('#bgvid').trigger('play');
                $('.navbar').addClass("fixed-top", 500);
                $('body').removeClass("scrollLock", 500);
                $('.hidden').removeClass();
                window.dispatchEvent(new Event('resize'));
            }, 1500);


            $('#onsTeamButton').click(function () {
                $('html, body').animate({
                    scrollTop: $("#onsTeam").offset().top - 100
                }, 1500);
            });

            $('#contactButton').click(function () {
                console.log("yeet")
                $('html, body').animate({
                    scrollTop: $("#contact").offset().top - 100
                }, 1500);
            });

            $('#homeButton').click(function () {
                console.log("yeet")
                $('html, body').animate({
                    scrollTop: $("#homePage").offset().top - 100
                }, 1500);
            });

            $('#overOnsButton').click(function () {
                console.log("yeet")
                $('html, body').animate({
                    scrollTop: $("#overOns").offset().top - 100
                }, 1500);
            });

            $('#klantenButton').click(function () {
                console.log("yeet")
                $('html, body').animate({
                    scrollTop: $("#klanten").offset().top - 100
                }, 1500);
            });
        });

    </script>
</head>
<!-- <img src="{{ URL('/images/640x360.png') }}" alt="" title=""> -->

<body class="scrollLock">
    <!-- Beginning of our preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>


    <!-- Beginning of our content. -->
    <div id="homePage" class="content hidden">

        <!-- Start of navbar -->
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="d-flex w-50 order-0">
                <a class="navbar-brand" href="#">
                    <image src="{{URL('/images/MaikoRossProdLogoWit.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <div class="section__box">
                            <a id="homeButton" id="test"
                                class="r-link ai-element ai-element_type1 ai-element1 navItems">
                                <span class="ai-element__label ">Home</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="section__box">
                            <a id="onsTeamButton" class="r-link ai-element ai-element_type1 ai-element1 navItems">
                                <span class="ai-element__label ">Ons Team</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="section__box">
                            <a id="contactButton" class="r-link ai-element ai-element_type1 ai-element1 navItems">
                                <span class="ai-element__label ">Contact</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"><a
                    href="{{URL('/login')}}"> Coming Soon</a></span>
        </nav>
        <!-- End of navbar -->

        <!-- Start of front page -->
        <div id="home" class="front-page">
            <div class="video-background">
                <div class="video-wrap">
                    <div id="video">
                        <video id="bgvid" preload="metadata" loop muted>
                            <source src="{{ URL('/video/MIJN NIEUW GEPIMPTE AUTO.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <!-- End of video background -->
            <div class="caption text-center">
                <div class="section__box">
                    <a id="overOnsButton" class="r-link ai-element ai-element_type1 ai-element1 homePageCaption">
                        <span class="ai-element__label ">Over ons</span>
                    </a>
                </div>
            </div>
            <div id="klantenButton" class="arrow bounce">
                <i class="fa fa-angle-down fa-5x" aria-hidden="true"></i>
            </div>
        </div>

        <!-- Start rest of the page -->
        <div class="bg-white contentBody container">

            <!-- Section Klanten -->
            <div id="klanten" class="klanten">
                <h1 class="text-center">Klanten</h1>

                <div class="container mt-100 mt-60">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245" class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Joey van Bonkelen</h4>
                                        <small class="text-muted">Streamer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245" class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Joey van Bonkelen</h4>
                                        <small class="text-muted">Streamer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245" class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Joey van Bonkelen</h4>
                                        <small class="text-muted">Streamer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245" class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Joey van Bonkelen</h4>
                                        <small class="text-muted">Streamer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245" class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Martin Sobhe</h4>
                                        <small class="text-muted">Youtuber</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245" class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Bobby DE</h4>
                                        <small class="text-muted">Developer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245" class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Cristino Murphy</h4>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <hr>

            <!-- Section Overons -->
            <div id="overOns" class="container overOns">
                <h1 class="text-center align-middle">Over ons</h1>
                <br>
                <p class="text-center">
                    MaikoRoss Productions is het bedrijf voor alle grote en upcoming YouTubers. Wij ontzorgen de
                    YouTuber van de stress dat komt kijken bij het editten van de video's. MaikoRoss Productions
                    produceert vanuit onbewerkte videobeelden de complete content. Dat wil zeggen een volledig geëditte
                    video inclusief thumbnail.<br><br>

                    Veel Youtubers editten zelf, hebben een freelance editor of een stagiair waarmee zij samenwerken.
                    Youtubers lopen hierbij tegen meerdere problemen aan. Zelf editten kost veel tijd en geeft je minder
                    tijd om creatief bezig te zijn met het bedenken van nieuwe content. Een freelance editor heeft niet
                    24/7 de tijd, want die heeft nog ander werk ernaast. Een stagiair kost veel tijd om te begeleiden en
                    op te leiden. Als de stagiair er eenmaal klaar voor is, dan is hun stageperiode voorbij en ben je
                    hem kwijt.<br><br>

                    Ben jij een Youtuber die geen tijd heeft om zich zorgen te maken over de edits? Heb jij behoefte aan
                    24/7 contact en zekerheid dat jouw content van hoge kwaliteit is. <br>Neem dan nu contact met ons
                    op.
                    <br>
                    <br>
                    <div class="text-center">
                        <div class="section__box">
                            <a id="contactButton"
                                class="r-link ai-element ai-element_type1 ai-element1 homePageCaption">
                                <span class="ai-element__label ">Neem contact op!</span>
                            </a>
                        </div>
                    </div>
                </p>
            </div>

            <hr>

            <!-- Section Onsteam -->
            <div id="onsTeam" class="container onsTeams">
                <h1 class="text-center align-middle">Ons Team</h1>
                <br>
                <!-- Maiko section-->
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/350x350" class="img-responsive img-fluid rounded" alt="">
                    </div>
                    <div class="col-md-8 TeamIndividualText">
                        <h2 class="text-center align-middle"> Maiko Roskam </h2>
                        <p class="text-center align-middle"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Cras odio purus, pharetra sed efficitur ut, commodo ac tortor. Etiam nec imperdiet ligula.
                            Duis in quam leo. Integer tempus pulvinar purus eu dapibus. Pellentesque pretium, mauris a
                            facilisis tristique, enim ipsum condimentum magna, id mattis mi massa id ex. Nunc tristique
                            sed lacus nec pellentesque. Donec ultrices quis tortor id lobortis. Interdum et malesuada
                            fames ac ante ipsum primis in faucibus. </p>
                        <p class="phoneNumberTeam text-center align-middle">
                            Email: maiko@ross.nl<br>
                            Phone: 0637777777
                        </p>
                    </div>
                </div>
                <br>
                <!-- Rolin section-->
                <div class="row">
                    <div class="col-md-8 TeamIndividualText">
                        <h2 class="text-center align-middle"> Rolin Noteboom </h2>
                        <p class="text-center align-middle"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Cras odio purus, pharetra sed efficitur ut, commodo ac tortor. Etiam nec imperdiet ligula.
                            Duis in quam leo. Integer tempus pulvinar purus eu dapibus. Pellentesque pretium, mauris a
                            facilisis tristique, enim ipsum condimentum magna, id mattis mi massa id ex. Nunc tristique
                            sed lacus nec pellentesque. Donec ultrices quis tortor id lobortis. Interdum et malesuada
                            fames ac ante ipsum primis in faucibus. </p>
                        <p class="phoneNumberTeam text-center align-middle">
                            Email: maiko@ross.nl<br>
                            Phone: 0637777777
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/350x350" class="img-responsive img-fluid rounded" alt="">
                    </div>
                </div>
                <br>
                <!-- Tebbe section-->
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/350x350" class="img-responsive img-fluid rounded" alt="">
                    </div>
                    <div class="col-md-8 TeamIndividualText">
                        <h2 class="text-center align-middle"> Tebbe Jan van Loon </h2>
                        <p class="text-center align-middle"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Cras odio purus, pharetra sed efficitur ut, commodo ac tortor. Etiam nec imperdiet ligula.
                            Duis in quam leo. Integer tempus pulvinar purus eu dapibus. Pellentesque pretium, mauris a
                            facilisis tristique, enim ipsum condimentum magna, id mattis mi massa id ex. Nunc tristique
                            sed lacus nec pellentesque. Donec ultrices quis tortor id lobortis. Interdum et malesuada
                            fames ac ante ipsum primis in faucibus. </p>
                        <p class="phoneNumberTeam text-center align-middle">
                            Email: maiko@ross.nl<br>
                            Phone: 0637777777
                        </p>
                    </div>
                </div>
                <br>
            </div>

            <hr>

            <!-- Section contact -->
            <div id="contact" class="container Contact">
                <h1 class="text-center align-middle">Contact</h1>
                <br>
                <div class="row">
                    <!-- Contact image -->
                    <div class="col-md-7 text-center align-middle">
                        <div id="map"></div>
                        <script>
                            var mymap = L.map('map', {
                                scrollWheelZoom: false
                            }).setView([51.81467816805412, 4.666442580866372], 16);
                            L.tileLayer(
                                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                    maxZoom: 18,
                                    id: 'mapbox/streets-v11',
                                    tileSize: 512,
                                    zoomOffset: -1,
                                    accessToken: 'pk.eyJ1IjoiZXJyb3g1MDUiLCJhIjoiY2tvaXBlanJwMG1wbDJ2anplYW9heTFlbiJ9.7zvQNg_y2HX8kDP-9p_WoA',
                                }).addTo(mymap);

                            var marker = L.marker([51.81467816805412, 4.666442580866372]).addTo(mymap);
                            marker.bindPopup(
                                "<h5> MaikoRoss Productions </h5> <p><a href='https://www.google.com/maps/place/Voorstraat+315,+3311+EP+Dordrecht/@51.8146843,4.6642383,17z/data=!3m1!4b1!4m5!3m4!1s0x47c42ecd3d49f75d:0x26175ac26f763d7b!8m2!3d51.814681!4d4.666427'>Voorstraat 315 <br> 3311 EP <br> Dordrecht </a></p> <p> +31 (0) 6 54 85 12 54 </p> <p> Info@maikoross.nl </p> "
                                ).openPopup();

                        </script>
                    </div>


                    <!-- Contact Form -->
                    <div class="col-md-5 text-center align-middle ">
                        <h3> Neem contact op! </h3>
                        <div style="display:none" class="SuccesMessage">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Succes!</h4>
                                <p>Je bericht is succesvol ontvangen! We zullen zo spoedig mogelijk contact met je opnemen!</p>
                              </div>
                        </div>
                        <div style="display:none" class="ErrorMessage">
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Oops</h4>
                                <p>Er is iets fout gegaan! Probeer opnieuw. </p>
                                <p class="errorMessage"> </p>
                              </div>
                        </div>
                        <form name="contactUsForm" id="contactUsForm" method="POST" action="javascript:void">
                            @csrf
                            <div class=" form-group">
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="Name"
                                    placeholder="Naam *" require>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email *"
                                    require>
                            </div>
                            <div class=" form-group">
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                                    aria-describedby="emailHelp" placeholder="Telefoon nummer">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Onderwerp *" require>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" id="message" name="message"
                                    placeholder="Je bericht *"></textarea>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                        &#x21bb;
                                    </button>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                            </div>
                            <div class="section__box">
                                <a class="r-link ai-element ai-element_type1 ai-element1 navItems">
                                    <span class="ai-element__label "><button type="submit" id="submit" > Verstuur </button> </span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <br>
            </div>

        </div>
    </div>
    <!-- Footer -->
    <footer id="footer" class="bg-secondary text-white d-flex-column text-center">
        <!--Footer Links-->
        <div class="container text-left">
            <div class="row">
                <!--First column-->
                <div class="col-md-3 mx-auto shfooter">
                    <h5 class="my-2 font-weight-bold ">MaikoRoss Productions</h5>

                    <ul class="collapse" id="Product">
                        <li id="homeButton"><a id="homeButton">Klanten</a></li>
                        <li id="overOnsButton"><a id="overOnsButton">Over ons</a></li>
                        <li id="onsTeamButton"><a id="onsTeamButton">Ons team</a></li>
                        <li id="contactButton"><a id="contactButton">Contact</a></li>
                        <li><a href="/privacy">Privacy statement</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mx-auto shfooter">
                </div>
                <div class="col-md-3 mx-auto shfooter">
                </div>
                <!--Fourth column-->
                <div class="col-md-3 mx-auto shfooter">
                    <h5 class="my-2 font-weight-bold">Volg ons</h5>
                    <hr>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#!" target="_blank" class="sbtn btn-large mx-1" title="Facebook">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!" target="_blank" class="sbtn btn-large mx-1" title="Linkedin">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!" target="_blank" class="sbtn btn-large mx-1" title="Twitter">
                                <i class="fab fa-twitter-square fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!" target="_blank" class="sbtn btn-large mx-1" title="Youtube">
                                <i class="fab fa-youtube-square fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!" target="_blank" class="sbtn btn-large mx-1" title="Instagram">
                                <i class="fab fa-instagram-square fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer Links-->
        <hr class="mb-0">
        <!--Copyright-->
        <div class="py-3 text-center">
            <p> &copy; <?php 
                $copyYear = 2020; 
                $curYear = date('Y'); 
                echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                ?> MaikoRoss Productions | Alle rechten voorbehouden | <a href="/privacy"> Privacy Statement </a> </p>
        </div>
        <!--/.Copyright-->
    </footer>

    <script>
        $(window).scroll(function () {
            $(".arrow").css("opacity", 1 - $(window).scrollTop() / 150);
            $(".caption").css("opacity", 1 - $(window).scrollTop() / 150);
        });

        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });

        if ($("#contactUsForm").length > 0) {
            $("#contactUsForm").validate({
                rules: {
                    name: {
                        required: true,
                        maxlength: 100
                    },
                    email: {
                        required: true,
                        maxlength: 255,
                        email: true,
                    },
                    phoneNumber: {
                        required: false,
                        maxlength: 15,
                        minlength: 8
                    },
                    subject: {
                        required: true,
                        maxlength: 100
                    },
                    message: {
                        required: true,
                        maxlength: 255
                    },
                    captcha: {
                        required: true,
                        maxlength: 5,
                        minlength: 5
                    }
                },
                messages: {
                    name: {
                        required: "Vul hier je naam in.",
                        maxlength: "Je naam mag maar minder dan 100 karakters bevatten."
                    },
                    email: {
                        required: "Vul hier je email in.",
                        email: "Vul een valide email in.",
                        maxlength: "Je email mag maar minder dan 255 characters bevatten.",
                    },
                    phoneNumber: {
                        maxlength: "Je telefoonnummer mag maximaal maar 12 karakters bevatten.",
                        minlength: "Je telefoonnummer moet minimaal 8 karakters bevatten."
                    },
                    subject: {
                        required: "Vul hier een onderwerp in.",
                        maxlength: "Je onderwerp mag maar maximaal 100 karakters zijn."
                    },
                    message: {
                        required: "Vul hier je bericht in.",
                        maxlength: "Je bericht mag maar maximaal 255 karakters bevatten."
                    },
                    captcha: {
                        required: "De Captcha is verplicht in te vullen.",
                        maxlength: "De Captcha mag maximaal 5 karakters hebben.",
                        minlength: "De Captcha moet minimaal 5 karakters hebben."
                    }
                },
                submitHandler: function (form) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#submit').html('Versturen...');
                    $("#submit").attr("disabled", true);
                    $.ajax({
                        url: "/contactForm",
                        type: "POST",
                        data: $('#contactUsForm').serialize(),
                        success: function (response) {
                            $('#submit').html('Verstuur');
                            document.getElementById("contactUsForm").reset();
                            $(".SuccesMessage").css('display', 'contents');
                            $("#contactUsForm").css('display', 'none');
                        },
                        error: function (response){
                            $('#submit').html('Verstuur');
                            document.getElementById("contactUsForm").reset();
                            $(".ErrorMessage").css('display', 'contents');
                            $(".errorMessage").html(response.responseText);
                        }
                    });
                }
            })
        }

    </script>
</body>

</html>
