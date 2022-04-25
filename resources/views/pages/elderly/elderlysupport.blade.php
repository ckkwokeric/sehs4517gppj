<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/1ed92467bb.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com"></link>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin></link>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"></link>


        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Montserrat', sans-serif;
            }

            .container2 {
                margin: 5%;
            }
            .container2 img {
                width: 100%;
            }

            .container3 {
                margin: 5%;
            }
            .container3 i {
                padding-right: 10px;
                color: black;
            }
            .container3 i a {
                text-decoration: none;
            }
            .container3 i:hover {
                color: #008DD0;
            }
            .container3 span {
                color: #9E3B25;
                font-size: 16px;
                font-weight: 600;
            }

            .container4,
            .container6,
            .container7 {
                margin: 5% 5% 10%;
                display: flex;
            }

            .text .title {
                font-size: 24px;
                line-height: 29px;
                font-weight: 700;
                margin-bottom: 5%;
            }

            .container4 .text .title {
                color: #E2C83F;
            }

            .container6 .text .title {
                color: #A49DF8;
            }

            .container7 .text .title {
                color: #4FA0CD;
            }

            .text {
                margin-right: 10px;
            }

            .text p {
                font-size: 16px;
                line-height: 30px;
                margin-bottom: 5%;
            }

            .btn-more {
                border-radius: 10px;
                color: white;
                text-transform: uppercase;
                display: inline-block;
                padding: 11px 47px;
                font-weight: 700;
            }

            .btn-more.yellow {
                background: #E2C83F;
            }

            .btn-more.purple {
                background: #A49DF8;
            }

            .btn-more.blue {
                background: #4FA0CD;
            }

            .btn-more:hover {
                transition: all 0.3s ease;
                transform: translateY(-5px);
            }

            .btn-more a {
                text-decoration: none;
                color: white;
            }

            .container4 .text,
            .container7 .text {
                margin-left: 30px;
                margin-top: 5%;
            }

            @media all and (max-width:1045px) {
                .container2 p {
                    font-size: 26px;
                }

                .container4,
                .container6,
                .container7 {
                    flex-wrap: wrap;
                }

                .container5 {
                    width: 100%;
                }

                .container5 .one,
                .container5 .two,
                .container5 .three {
                    display: block;
                    text-align: center;
                    width: 618px;
                    height: 416px;
                }

                .text {
                    width: 100%;
                }

                .text .title {
                    display: block;
                    text-align: start;
                    width: 100%;
                }

                .text p {
                    text-align: justify;
                }

                .container5 img {
                    width: 100%;
                    border-radius: 25px;
                }
            }
        </style>
    </head>

    <!-- <body> -->

    <body>

        @include('layouts.nav')

        <!-- content -->
        <div class="container2">
            <img src="{{ asset('img/elderlysupport/elderlysupport_icon.png') }}" alt=""></img>
        </div>

        <div class="container3">
            <a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i></a>
            <i class="fa-solid fa-chevron-right"></i>
            <span class="title">Elderly Support</span>
        </div>

        <div class="container4">
            <div class="container5 one">
                <img src="{{ asset('img/elderlysupport/elderlysupport_1.png') }}" alt=""></img>
            </div>
            <div class="text">
                <div class="title">ACTIVITIES FOR ELDERLY</div>

                <p>In April, we will have a health talk about COVID-19 vaccination.
                    Healthy aging is the aspiration of many seniors. In order to achieve good physical and
                    mental health, most of the elderly understand the truth that "prevention is better than
                    cure". What are the ways to prevent physical and mental illness? Not only in Western
                    countries, but also in Chinese areas, the elderly are becoming more and more popular to
                    prevent physical...</p>
                <div class="btn-more yellow">
                    <a href="{{  route('elderlyactivities') }}">more</a>
                </div>
            </div>
        </div>

        <div class="container6">
            <div class="text">
                <div class="title">ELDERLY DEVELOPMENT SERVICES</div>
                <p>Elderly development services assist elderly people to remain living in the community for
                    as long as possible. These services also give support to carers. With increasing diversity
                    of community support services for the elders, a more integrated approach to facilitate
                    access to services is adopted. In brief, there are three types of community support services
                    for the elders...</p>
                <div class="btn-more purple">
                    <a href="{{ route('elderlydevelopment') }}">more</a>
                </div>
            </div>
            <div class="container5 two">
                <img src="{{ asset('img/elderlysupport/elderlysupport_2.png') }}" alt=""></img>
            </div>
        </div>

        <div class="container7">
            <div class="container5 three">
                <img src="{{ asset('img/elderlysupport/elderlysupport_3.png') }}" alt=""></img>
            </div>
            <div class="text">
                <div class="title">WELLING FOR ELDERLY</div>
                <p>No matter how old you are or how far you are from old age, learn how to age
                    smartly and slowly! Let's learn self-healing power and smart aging together,
                    and realize the key core of graceful aging in body and mind!</p>
                <div class="btn-more blue">
                    <a href="{{ route('elderlywelling') }}">more</a>
                </div>
            </div>
        </div>

        @include('layouts.footer')

    </body>

</html>
