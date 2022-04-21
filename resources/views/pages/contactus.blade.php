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
            z-index: -1;
        }

        .container3 {
            display: flex;
            flex-wrap: wrap;
        }

        .container4 {
            width: calc(100% / 2);
            margin: 30px 0px 20px 0px;
        }

        .container4 .title {
            font-size: 20px;
            line-height: 29px;
            color: #0071BB;
        }

        .container4 .address,
        .container4 .email,
        .container4 .phone {
            margin: 10px 0;
            font-size: 16px;
            line-height: 24px;
        }

        .container4 i {
            padding-right: 5px;
        }

        @media all and (max-width:1045px) {

            .container4 {
                width: 100%;
            }
        }
    </style>

</head>

<!-- <body> -->

<body>

    @include('layouts.nav')
    <section>
        <div class="container2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14763.31402855268!2d114.15581419792628!3d22.322324629985257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400d046d2d3ff%3A0x3d91067a1d2a156d!2z5L-d6Imv5bGA5ZGC6Zmz5oWn6LKe5bm856ia5ZyS5pqo5bm85YWS5ZyS!5e0!3m2!1szh-TW!2shk!4v1650399128679!5m2!1szh-TW!2shk"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container3">
            <div class="container4 one">
                <div class="title">Head Office</div>
                <div class="address">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>66 Leighton Road, Causeway Bay, Hong Kong</span>
                </div>
                <div class="email">
                    <i class="fa-regular fa-envelope"></i>
                    <span>plkinfo@poleungkuk.org.hk</span>
                </div>
                <div class="phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>2277 8888</span>
                </div>
            </div>
            <div class="container4 one">
                <div class="title">Head Office</div>
                <div class="address">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>66 Leighton Road, Causeway Bay, Hong Kong</span>
                </div>
                <div class="email">
                    <i class="fa-regular fa-envelope"></i>
                    <span>plkinfo@poleungkuk.org.hk</span>
                </div>
                <div class="phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>2277 8888</span>
                </div>
            </div>
            <div class="container4 one">
                <div class="title">Head Office</div>
                <div class="address">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>66 Leighton Road, Causeway Bay, Hong Kong</span>
                </div>
                <div class="email">
                    <i class="fa-regular fa-envelope"></i>
                    <span>plkinfo@poleungkuk.org.hk</span>
                </div>
                <div class="phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>2277 8888</span>
                </div>
            </div>
            <div class="container4 one">
                <div class="title">Head Office</div>
                <div class="address">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>66 Leighton Road, Causeway Bay, Hong Kong</span>
                </div>
                <div class="email">
                    <i class="fa-regular fa-envelope"></i>
                    <span>plkinfo@poleungkuk.org.hk</span>
                </div>
                <div class="phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>2277 8888</span>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer')

</body>

</html>
