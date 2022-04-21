<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/1ed92467bb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="responsive-nav.css">
    <link rel="stylesheet" href="responsive-footer.css">
    <link rel="stylesheet" href="youth3.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        section {
            margin: 5%;
        }

        .container2 {
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
            position: relative;
        }

        .container2 iframe {
            position: absolute;
            width: 100%;
            height: 100%;
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
            color: #2565AE;
            font-size: 16px;
            font-weight: 600;
        }

        .container4 img {
            width: 100%;
        }

        .container5 {
            width: 100%;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .container6 {
            width: calc(100% / 4);
            height: 615px;
        }

        .container6:hover {
            cursor: pointer;
            transition: 0.2s;
            transform: translateY(-20px);
        }

        .container6.blue {
            background: rgba(0, 141, 208, 0.9);
            margin-top: 60px;
            position: relative;

        }

        .container6.yellow {
            background: rgba(253, 185, 51, 0.8);
            margin-top: -4px;
            position: relative;
        }

        .container6.green {
            background: rgba(0, 181, 173, 0.8);
            margin-top: 60px;
            position: relative;
        }

        .container6.red {
            background: rgba(210, 77, 112, 0.8);
            margin-top: -4px;
            position: relative;
        }

        .circle {
            width: 150px;
            height: 150px;
            background: #008DD0;
            border: 3px solid white;
            border-radius: 50%;
            z-index: 0;
            text-align: center;
            margin: 40% 30% 0;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .yellow .circle {
            background: #FDB933;
        }

        .yellow .circle2 {
            color: #FDB933;
        }

        .yellow .container7 {
            background: #FDB933;
        }

        .green .circle {
            background: rgba(0, 181, 173, 0.8);
        }

        .green .circle2 {
            color: rgba(0, 181, 173, 1);
        }

        .green .container7 {
            background: #00B5AD;
        }

        .red .circle {
            background: rgba(210, 77, 112, 0.8);
        }

        .red .circle2 {
            color: rgba(210, 77, 112, 0.8);
            ;
        }

        .red .container7 {
            background: #D24D70;
        }

        .circle2 {
            font-size: 48px;
            font-weight: 700;
            letter-spacing: 0.05em;
            color: #008DD0;
            background: white;
            padding: 32px 30px;
            border-radius: 50%;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .container7 {
            width: 100%;
            height: 150px;
            background: #008DD0;
            margin-top: -25px;
            z-index: -1;
            position: absolute;
        }

        .container6 .title {
            line-height: 30px;
            /* or 75% */
            font-style: bold;
            letter-spacing: 0.05em;
            color: #FFFFFF;
            text-align: center;
            margin-top: 30px;
            font-size: 24px;
        }

        .btn-join {
            display: inline-block;
            align-items: center;
            justify-content: center;
            color: black;
            background: white;
            text-transform: uppercase;
            padding: 10px 20px;
            font-weight: 700;
            margin: 50px 39%;
            border-radius: 5px;
        }

        .btn-join a {
            text-decoration: none;
            color: black;
        }

        .container8 {
            width: 100%;
            z-index: -1;
            margin-top: -90px;
        }

        .container8 img {
            width: 100%;
        }

        .container9 {
            display: flex;
        }

        .container10 {
            width: calc(100% / 3);
            height: 619px;
            padding-bottom: 50px;
            margin-top: -4px;
        }

        .container10:hover {
            transform: translate(-5px, -5px);
            cursor: pointer;
            transition: 0.2s;
        }

        .container10.one {
            background: rgba(2, 3, 129, 0.8);
        }

        .container10.two {
            background: rgba(252, 185, 0, 0.8);
        }

        .container10 .title {
            color: white;
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            margin: 5% 0;
        }

        .container10 .images {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container10 .images img {
            width: 80%;
        }

        .container10 .info {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: justify;
            font-size: 16px;
            color: white;
            letter-spacing: 0.05em;
            line-height: 30px;
        }

        .container10 .info p {
            width: 80%;
        }

        .btn-join.two:hover {
            opacity: 0.8;
        }

        .btn-join.two {
            margin-top: 10px;
            padding-left: 40px;
            padding-right: 40px;
        }

        @media all and (max-width:1045px) {
            .container5 {
                flex-wrap: wrap;
            }

            .container6.blue,
            .container6.green {
                margin-top: -4px;
            }

            .container6 {
                width: calc(100% / 2);
            }

            .circle {
                margin: 27% 33% 0;
            }

            .container6 .title {
                margin-top: 35px;
                font-size: 30px;
            }

            .container7 {
                height: 170px;
                margin-top: -30px;
            }

            .btn-join {
                margin-left: 40%;
                margin-right: 40%;
            }

            .container8 {
                margin-top: -20px;
            }

            .container9 {
                flex-wrap: wrap;
            }

            .container10 {
                width: calc(100% / 2);
                padding-bottom: 5%;
            }

            .container10 {
                margin-bottom: 5px;
            }

            .btn-join.two {
                margin: 5% 10% 10%;
                padding-left: 40px;
                padding-right: 40px;
            }
        }

        @media all and (max-width:600px) {
            .container6 {
                width: 100%;
                height: 550px;
            }

            .circle {
                margin-top: 20%;
                margin-left: 35%;
                margin-right: 35%;
            }

            .container7 {
                margin-top: -30px;
                height: 150px;
            }

            .container6 .title {
                font-size: 35px;
                margin-top: 40px;
            }

            .btn-join {
                margin-left: 40%;
                margin-right: 40%;
                margin-top: 40px;
                font-size: 20px;
            }

            .container8 {
                margin-top: 0;
            }

            .container10 {
                width: 100%;
                margin: 0 5%;
                padding-bottom: 5%;
            }

            .btn-join.two {
                margin: 10% 35%;
                padding-left: 40px;
                padding-right: 40px;
            }

        }
    </style>
</head>

<!-- <body> -->
<body>
    @include('layouts.nav')

    <section>
        <div class="container2">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Qs7zPjWMq-s?start=1"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </section>

    <div class="container3">
        <a href="{{ url('home') }}"> <i class="fa-solid fa-house"></i></a>
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title">Activities</span>
    </div>

    <div class="container4">
        <img src="img/image 14 (2).png" alt="">
    </div>

    <div class="container5">
        <div class="container6 blue">
            <div class="circle">
                <div class="circle2">42</div>
            </div>
            <div class="container7">
            </div>
            <p class="title">Marathon</p>
            <div class="btn-join">
                <a href="">info</a>
            </div>
        </div>

        <div class="container6 yellow">
            <div class="circle">
                <div class="circle2">42</div>
            </div>
            <div class="container7">
            </div>
            <p class="title">Marathon</p>
            <div class="btn-join">
                <a href="">info</a>
            </div>

        </div>

        <div class="container6 green">
            <div class="circle">
                <div class="circle2">42</div>
            </div>
            <div class="container7">
            </div>
            <p class="title">Marathon</p>
            <div class="btn-join">
                <a href="">info</a>
            </div>
        </div>

        <div class="container6 red">
            <div class="circle">
                <div class="circle2">42</div>
            </div>
            <div class="container7">
            </div>
            <p class="title">Marathon</p>
            <div class="btn-join">
                <a href="">info</a>
            </div>
        </div>
    </div>

    <div class="container8">
        <img src="img/image 18.png" alt="">
    </div>

    <div class="container9">
        <div class="container10 one">
            <div class="title">
                Campsite
            </div>
            <div class="images">
                <img src="img/activity/Campsites.png" alt="">
            </div>
            <div class="info">
                <p>Notable changes to the race weekend schedule is the ASICS half marathon moved to Saturday and the
                    Village Roadshow Theme Parks Gold Coast Marathon starting earlier at 6am.</p>
            </div>

            <div class="btn-join two">
                <a href="">Join</a>
            </div>
        </div>
        <div class="container10 two">
            <div class="title">
                Adventure
            </div>
            <div class="images">
                <img src="img/activity/Adventure.png" alt="">
            </div>
            <div class="info">
                <p>Notable changes to the race weekend schedule is the ASICS half marathon moved to Saturday and the
                    Village Roadshow Theme Parks Gold Coast Marathon starting earlier at 6am.</p>
            </div>

            <div class="btn-join two">
                <a href="">Join</a>
            </div>
        </div>
        <div class="container10 one">
            <div class="title">
                Night Hiking
            </div>
            <div class="images">
                <img src="img/activity/night-hiking.png" alt="">
            </div>
            <div class="info">
                <p>Notable changes to the race weekend schedule is the ASICS half marathon moved to Saturday and the
                    Village Roadshow Theme Parks Gold Coast Marathon starting earlier at 6am.</p>
            </div>

            <div class="btn-join two">
                <a href="">Join</a>
            </div>
        </div>
    </div>


    @include('layouts.footer')

</body>

</html>
