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
            color: #2565AE;
            font-size: 16px;
            font-weight: 600;
        }

        .container4 {
            margin: 5%;
        }

        .container4 .title,
        .container6 .title,
        .container10 .title {
            margin-bottom: 3%;
            font-size: 24px;
            line-height: 29px;
            color: #0071BB;
            font-weight: 700;
        }

        .container4 p {
            margin-bottom: 3%;
            line-height: 30px;
            font-size: 18px;
        }

        .container5 {
            background: rgba(213, 243, 254, 0.4);
            font-size: 18px;
        }

        .container6 {
            margin: 0 5%;
            padding: 3% 0;
        }

        .container7 {
            margin: 5%;
        }

        .container8 {
            display: flex;
            margin-bottom: 3%;
        }

        .container8 span {
            background: red;
            width: 20px;
            height: 20px;
            background: #01B3EE;
            border-radius: 30px;
            text-align: center;
            color: white;
            margin-right: 3%;
        }

        .container10 {
            margin: 5%;
        }

        .container9 {
            display: flex;
            flex-wrap: wrap;
        }

        .container9 img {
            width: calc(100% / 3 - 20px);
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .container9 img:last-child {
            margin-right: 0;
        }

        .container9 img:hover {
            transition: all 0.2s ease;
            transform: translate(5px, 5px);
            opacity: 1;
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.4);
        }

        @media all and (max-width:1045px) {
            .container9 {
                flex-wrap: wrap;
            }

            .container9 img {
                width: calc(100% /2 - 20px);
            }
        }

        @media all and (max-width:700px) {

            .container4 p,
            .container5 p {
                font-size: 16px;
            }

            .container4 p {
                margin-bottom: 5%
            }

            .container4 {
                margin-bottom: 5%;
            }

            .title {
                margin-bottom: 5%;
            }

            .container4 p {
                text-align: justify;
            }

            .container9 img {
                width: 100%;
                margin-right: 0;
                margin-bottom: 5%;
            }
        }
    </style>
</head>

<!-- <body> -->

<body>

    @include('layouts.nav')

    <!-- content -->
    <div class="container2">
        <img src="{{ asset('img/C-services/poster3.png') }}" alt="">
    </div>

    <div class="container3">
        <a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i></a>
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title"><a href="{{ route('newServices') }}">New Services</a> </span>
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title">Student Development Services</span>
    </div>

    <div class="container4">
        <div class="title">Service Intorduction</div>
        <p>BGCA has been providing educational psychological services since September 2004, with the addition of
            clinical psychological services in May 2006. In cooperation with schools and parents/caregivers, the
            initiative provides professional psychological support services to assist children and youth with various
            needs.</p>
        <p>The Service recruits qualified clinical/educational psychologists to provide a range of psychological
            services, including psychological assessment and diagnosis, case counselling and more, to children, youth
            and parents/caregivers in need of adjustment to their learning, family and social environments. Consultation
            services and trainings are also provided to professionals such as teachers and social workers.</p>
    </div>

    <div class="container5">
        <div class="container6">
            <div class="title">Target Service Users</div>
            <div class="container7">
                <div class="container8">
                    <span>1</span>
                    <p>Children & Youth</p>
                </div>
                <div class="container8">
                    <span>2</span>
                    <p>Parents/Caregivers</p>
                </div>
                <div class="container8">
                    <span>3</span>
                    <p>Parents/Caregivers</p>
                </div>
                <div class="container8">
                    <span>4</span>
                    <p>Members of the community</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container10">
        <div class="title">Relatived Images</div>
        <div class="container9">
            <img src="{{ asset('img/img1 (1).png') }}">
            <img src="{{ asset('img/img2 (1).png') }}">
            <img src="{{ asset('img/img3 (1).png') }}">
            <img src="{{ asset('img/img4 (1).png') }}">
            <img src="{{ asset('img/img1 (1).png') }}">
            <img src="{{ asset('img/img6 (1).png') }}">
        </div>
    </div>


    @include('layouts.footer')

</body>

</html>
