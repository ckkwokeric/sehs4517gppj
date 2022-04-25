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
            .container9 {
                margin: 5%;
            }

            .container4,
            .container5,
            .container8 {
                flex-wrap: wrap;
            }

            .container7 p {
                margin: 2%;
            }

            .content-table{
                border-collapse:collapse;
                margin:25px 0;
                font-size: 0.9em;
                min-width:400px;
                margin-left:40px;
                margin-right:40px;
                justify-content:center;
            }
            .content-table thead tr{
                background: #4EB4D4;
                color:white;
                text-align:center;
                font-weight: regular;
                font-size: 20px;
                line-height: 19px;
            }
            .content-table th,
            .content-table td{
                padding:30px 25px;
                font-size:18px;
            }
            .content-table tbody tr{
                border-bottom:1px solid #dddd;
                color: #4EB4D4;
            }
            .content-table tbody tr{
                background-color:white;
            }
            .content-table tbody tr:nth-of-type(even){
                background-color:#fafafa;
            }
            .content-table tbody tr:last-of-type{
                border-bottom:2px solid #4EB4D4;
            }

             .container10 {
                 margin: 5%;
             }
             .container10 img {
                 width: 100%;
             }

        </style>
    </head>

<!-- body -->

<body>

    @include('layouts.nav')

    <!--content-->
    <div class="container2">
        <img src="{{ asset('img/elderlysupport/activities4elderly_icon.png') }}" alt=""></img>
    </div>

    <div class="container3">
        <a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i></a>
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title"><a herf="{{ route('elderlysupport') }}">Elderly Support</a></span>
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title">Activities For Elderly</span>
    </div>

    <div class="container4">
        <div class="title">Talk on health care activities</div>
    </div>

    <div class="container5">
        <div class="container6">
            <img src="{{asset('img/elderlysupport/activities4elderly_healthtalk.png') }}" alt=""></img>
        </div>
        <div class="container7">
            <p>In April, we will have a talk about health care activities.</p>

            <p>Healthy aging is the aspiration of many seniors. In order to achieve good physical and
                mental health, most of the elderly understand the truth that "prevention is better than
                cure". What are the ways to prevent physical and mental illness? Not only in Western
                countries, but also in Chinese areas, the elderly are becoming more and more popular to
                prevent physical and mental diseases by participating in various health care activities. </p>

            <p>This talk is to let participants understand which wellness activities are suitable for
                the elderly, and to explain the benefits of various wellness activities on the healthy
                behavior and emotional well-being of the elderly. In addition, carers may neglect the
                balance between personal leisure activities and caring work because of their busy caring
                work. Therefore, this talk will also explore the factors that restrict carers from
                pursuing leisure activities, and introduce some leisure and health care activities
                suitable for carers, so that carers can maintain their own physical and mental health
                while maintaining the physical and mental health of the elderly.</p>
        </div>
    </div>

    <div class="container8">
        <p>In response to the latest situation of coronavirus disease 2019 (COVID-19) and the need to
            maintain social distancing, the quota of the health talks in Elderly Health Centres is limited.
            Interested clients can click the button below or contact the Elderly Health Centre for reservation.
            Telephone number:  2277 8888</p>
    </div>

    <div class="container9">
        <table class="content-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Language</th>
                    <th>Activities</th>
                    <th>Place</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>16/4/2022 Saturday</td>
                    <td>11:00 - 13:00</td>
                    <td>Cantonese</td>
                    <td>Health talk on COVID-19 vaccination</td>
                    <td>Sai Ying Pun Elderly Health Centre</td>
                    <td>Join</td>
                </tr>
                <tr>
                    <td>17/4/2022 Sunday</td>
                    <td>13:00 - 15:00</td>
                    <td>English</td>
                    <td>Health talk on COVID-19 vaccination</td>
                    <td>Kowloon City Elderly Health Centre</td>
                    <td>Join</td>
                </tr>
                <tr>
                    <td>20/4/2022 Wednesday</td>
                    <td>10:00 - 12:00</td>
                    <td>Cantonese</td>
                    <td>Health talk on COVID-19 vaccination</td>
                    <td>Tung Chung Elderly Health Centre</td>
                    <td>Join</td>
                </tr>
                <tr>
                    <td>23/4/2022 Saturday</td>
                    <td>13:00 - 15:00</td>
                    <td>Cantonese</td>
                    <td>Health talk on COVID-19 vaccination</td>
                    <td>Tsuen Wan Elderly Health Centre</td>
                    <td>Join</td>
                </tr>
                <tr>
                    <td>24/4/2022 Sunday</td>
                    <td>11:00 - 13:00</td>
                    <td>English</td>
                    <td>Health talk on COVID-19 vaccination</td>
                    <td>Tuen Mun Wu Hong Elderly Health Centre</td>
                    <td>Join</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="comtainer10">
        <img src="{{asset('img/elderlysupport/activities4elderly_bottom.png') }}" alt=""></img>
    </div>

@include('layouts.footer')

</body>
</html>
