<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1"><meta>

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
                line-height: 30px;
            }

            .container3 i {
                padding-right: 10px;
                color: black;
            }

            .container3 a {
                text-decoration: none;
            }

            .container3 span a {
                color: black;
            }

            .container3 i:hover,
            .container3 span a:hover {
                color: #008DD0;
            }

            .container3 span {
                color: #9E3B25;
                font-size: 16px;
                font-weight: 600;
            }

            .container4,
            .container5,
            .container6,
            .container7,
            .container8,
            .container9,
            .container10 {
                display: flex;
                margin: 5%;
            }
            .container4 img {
                width: 100%;
            }

            .container11 {
                font-size: 30px;
            }

            .title {
                line-height: 50px;
            }

            .container6 .title {
                color: #546687;
            }
            .container7 .title {
                color: #CC3232;
            }
            .container8 .title {
                color: #978D30;
            }
            .container9 .title {
                color: #1497C0;
            }
            .container10 .title {
                color: #5E3B97;
            }

            .container5 .aimg {
                width: 30%;
                float:left;
            }
            .info .one {
                width: calc(70%);
                float: right;
            }

            .border1 {
                border-width:3px;
                border-left-style:solid;
                padding:5px;
                margin: 5%;
                margin-top: 10px;
            }

            .border2 {
                border-width:3px;
                border-left-style:solid;
                padding:5px;
                margin: 5%;
                margin-top: 10px;
                width: 70%;
            }
            .container7 .aimg {
                width: calc(30%);
                float: right;
                margin-left: 5%;
            }

            .info .four {
                width: 50%;
                float: left;
            }
            .container8 .rimg {
                width: calc(50%);
                float: right;
            }

            .info .five {
                width: 50%;
                float: left;
            }
            .container9 .aimg {
                width: calc(50%);
                float: right;
            }

            .container10 .title {
                width: 30%;
            }
            .five .aimg {
                width: calc(70%);
                float: right;
            }

            .eventname {
                height: 100px;
            }
            .set {
                height: 432px;
            }
            .set .one {
                width: 36.3636364%;
                float: left;
            }
            .set .two {
                width: calc(63.6363637%);
                float: right;
            }
            .set .three {
                width: calc(36.3636364%);
                float: right;
            }

            .eventname .one {
                background: rgba(243, 180, 180, 0.8);
            }
            .eventname .two {
                background: rgba(242, 209, 159, 0.8);
            }
            .eventname .three {
                background: rgba(184, 219, 87, 0.8);
            }

            .border p,
            .info p {
                text-align: justify;
                width: 100%;
                padding: 5px;
            }

            .aimg {
                margin-left: 30px;
                margin-top: 5%;
            }
            .rimg {
                margin-right: 30px;
                margin-top: 5%;
                border-radius: 35px;
            }

        </style>
    </head>



    <!-- body -->

    <body>

        @include('layouts.nav')

        <!--content-->
        <div class="container2">
            <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices_icon.png') }}" alt=""></img>
        </div>

        <div class="container3">
            <a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i></a>
            <i class="fa-solid fa-chevron-right"></i>
            <span class="title"><a herf="{{ route('elderlysupport') }}">Elderly Support</a></span>
            <i class="fa-solid fa-chevron-right"></i>
            <span class="title">Elderly Development Services</span>
        </div>

        <div class="container4">
            <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices1.png') }}" alt=""></img>
        </div>

        <div class="container5">
            <div class="aimg">
                <img src="{{asset('img/elderlysupport/elderlydevelopmentservices2.png') }}" alt=""></img>
            </div>
            <div class="info one">
                <p>Elderly development services assist elderly people to remain living in the community for as long
                    as possible. These services also give support to carers. With increasing diversity of community
                    support services for the elders, a more integrated approach to facilitate access to services is
                    adopted. In brief, there are three types of community support services for the elders: elderly
                    centre services, community care services and other support services.</p>
            </div>
        </div>

        <div class="container6">
            <div class="container11 one">
                <div class="title">Misson</div>
            </div>
            <div class="border1">
                <p>To assist people aged 60 or above to maintain their quality of life and well-being.</p>
                <p>To assist the elders to remain as an active member in the society through fostering their dignity and potential</p>
                <p>To enhance inter-generational mutual understanding between the elders and people of other age groups</p>
                <p>To provide caring service to frail elders who are lacking of care during daytime</p>
                <p>To provide quality residential care service to meet the physical, psychological and social needs of the elders</p>
                <p>To provide support services to carers of elders</p>
            </div>
        </div>

        <div class="container7">
            <div class="container11 two">
                <div class="title">Achievement</div>
            </div>
            <div class="border2">
                <p>Over 17,000 elders were being served through our community support services and residential services</p>
                <p>Over 430,000 hot meals were provided to elders in need</p>
                <p>Over 2,700 carers received our supportive services</p>
                <p>Over 100 holders of Community Care Service roucher for the Elderly were served by 2 non-subvented day care centres</p>
            </div>
            <div class="aimg">
                <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices4.png') }}" alt=""></img>
            </div>
        </div>

        <div class="container8">
            <div class="container11 three">
                <div class="title">Elderly centre services</div>
            </div>
            <div class="container13">
                <div class="info four">
                    <p>In the past, we held some activities to some nursing houses. We provide some games and teach them
                        to play with each other, like rummikub, jenga and disc pool, etc. We hope those, who cannot live
                        by themselves or leave the nursing house, can be happier through playing.</p>
                    <p>Besides, this services also bring them new things, like new friends, different events, new products, etc.</p>
                </div>
                <div class="rimg">
                    <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices5.png') }}" alt=""></img>
                </div>
            </div>
        </div>

        <div class="container9">
            <div class="container11 four">
                <div class="title">Community care services</div>
            </div>
            <div class="container14">
                <div class="info five">
                    <p>We have cooperated with community groups in the district and arranged for about 200 volunteers to
                        visit the elderly living alone or chronically ill or two elderly households living in old-style
                        private buildings every month to provide about 100 seniors with health checks, social activities,
                        health education, Emotional support, etc., allow the elderly to obtain health information   and
                        community resources, and expand   their social and support network.</p>
                </div>
                <div class="aimg">
                    <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices7-9.png') }}" alt=""></img>
                </div>
            </div>
        </div>

        <div class="container10">
            <div class="container11 five">
                <div class="title">Other support services</div>
                <div class="aimg">
                    <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices6.png') }}" alt=""></img>
                </div>
            </div>
            <div class="info six">
                <p>Here are the past support services. Our purpose is hoping the elderly could have their own skills, like
                    painting and cooking. If they already contain a special skill like story telling, we would like to gather
                    them into a group. Then, helding a event for them to reach thier potential.</p>
            </div>
            <div class="container15">
                <div class="set one">
                    <div class="eventname one">
                        Painting course
                    </div>
                    <div class="aimg">
                        <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices10.png') }}" alt=""></img>
                    </div>
                </div>
                <div class="set two">
                    <div class="eventname two">
                        Story telling
                    </div>
                    <div class="aimg">
                        <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices11.png') }}" alt=""></img>
                    </div>
                </div>
                <div class="set three">
                    <div class="eventname three">
                        Cooking course
                    </div>
                    <div class="aimg">
                        <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices12.png') }}" alt=""></img>
                    </div>
                </div>
            </div>
        </div>

    @include('layouts.footer')

    </body>
</html>
