<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
            margin: 7% 5% 5%;
            position: relative;
        }

        .container2 img {
            width: 100%;
        }

        .container2 .bulk {
            width: 23%;
            position: absolute;
            left: 50px;
        }

        .container3 {
            margin: 5%;
        }

        .container3 span,
        .container4 span {
            font-size: 32px;
            line-height: 44px;
            letter-spacing: 0.05em;
            font-weight: 700;

        }

        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            width: 100%;
        }

        .content-table thead tr {
            background: #4EB4D4;
            color: white;
            text-align: center;
            font-size: 16px;
            line-height: 19px;
            font-weight: 600;
        }

        .content-table th,
        .content-table td {
            padding: 10px 15px;
            text-align: center;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddd;
            color: #4EB4D4;
        }

        .content-table tbody tr {
            background-color: white;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #fafafa;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #4EB4D4;
        }

        .container4 {
            margin: 5%;
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
            transform: translate(-10px, -10px);
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

        .btn-join.two {
            background: #008DD0;
            color: white;
            padding: 10px 50px;
            margin-top: 20px;
            margin-bottom: 20px;
            display: inline-block;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            padding: 10px 20px;
            font-weight: 700;
            margin: 50px 39%;
            border-radius: 5px;
        }

        .btn-join.two a {
            color: white;
            text-decoration: none;
        }

        .btn-join.two:hover {
            cursor: pointer;
            transition: 0.2s;
            opacity: 0.7;
        }

        .joinBtn {
            background: #008DD0;
            border: none;
            color: white;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            padding: 10px 20px;
            font-weight: 700;
            border-radius: 5px;
        }

        .joinBtn:hover {
            cursor: pointer;
            transition: 0.2s;
            opacity: 0.7;
        }

        @media all and (max-width:1045px) {
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
        }

        @media all and (max-width:600px) {
            .container10 {
                width: 100%;
                margin: 0 5%;
                padding-bottom: 5%;
            }
        }
    </style>
</head>

<body>
    @include('layouts.nav')
    <!-- <body> -->

    <!-- content -->
    <div class="container2">
        <img src="{{ asset('img/new-activities.png') }}">
        <img src="{{ asset('img/activity/light-bulk.png') }}" class="bulk">
    </div>

    @if (session('joinSuccess'))
    <div class="container2">
        <p>{{ session('joinSuccess') }}</p>
    </div>
    @endif


    <div class="container3">
        <img src="{{ asset('img/activity/flower-icon.png') }}">
        <span>New Timetable</span>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Date of Event</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Venue</th>
                    <th>Event Detail</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @auth
                {{-- Loop through the evenet table in the database using @foreach directive --}}
                @foreach ($results as $result)
                <tr>
                    <td>{{ $result->organize_date }}</td>
                    <td>{{ $result->start_time }}</td>
                    <td>{{ $result->end_time }}</td>
                    <td>{{ $result->venue_id }}</td>
                    <td>{{ $result->evt_detail }}</td>
                    <td>
                        <form
                            action="{{ route('joinActivity', ['evt_id' => $result->evt_id, 'user_id' => auth()->user()->user_id]) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="joinBtn">Join</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @else

                @foreach ($results as $result)
                <tr>
                    <td>{{ $result->organize_date }}</td>
                    <td>{{ $result->start_time }}</td>
                    <td>{{ $result->end_time }}</td>
                    <td>{{ $result->venue_id }}</td>
                    <td>{{ $result->evt_detail }}</td>
                    <td>
                        <button type="submit" class="joinBtn">Join</button>
                    </td>
                </tr>
                @endforeach

                @endauth
            </tbody>
        </table>
    </div>

    <div class="container4">
        <img src="{{ asset('img/activity/wolf-icon.png') }}">
        <span>Exciting Adventure</span>
    </div>

    <div class="container9">
        <div class="container10 one">
            <div class="title">
                Campsite
            </div>
            <div class="images">
                <img src="{{ asset('img/activity/Campsites.png') }}">
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
                <img src="{{ asset('img/activity/Adventure.png') }}">
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
                <img src="{{ asset('img/activity/night-hiking.png') }}">
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
