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

        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            width: 100%;
        }

        .content-table thead tr {
            background: #1E90FF;
            color: white;
            text-align: center;
            font-size: 16px;
            line-height: 19px;
            font-weight: 600;
        }

        .content-table th,
        .content-table td {
            padding: 10px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddd;
            color: black;
        }

        .content-table tbody tr {
            background-color: white;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #fafafa;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #1E90FF;
        }

        .tableHeader {
            display: flex;
            justify-content: space-between;
        }

        .pdfBtn {
            border: none;
            background-color: #1E90FF;
            color:  #fafafa;
            font-size: 15px;
            text-align: center;
            padding: 10px 20px;
            border-radius: 8px;
            opacity: 0.8;
            transition: 0.3s;
        }
        .pdfBtn:hover {
            cursor: pointer;
            opacity: 1;
            background-color: #0060bd;
        }
    </style>
</head>


<!-- <body> -->

<body>

    @include('layouts.nav')

    <!-- List of member -->
    <div class="container2">
        <div class="tableHeader">
            <h3>List of member</h3>
            <button class="pdfBtn">Export to PDF</button>
        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $users = DB::table('users')->get() ?>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucwords($user->gender) }}</td>
                    <td>{{ $user->phone_no }}</td>
                    <td>{{ $user->dob }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- List Event -->
    <div class="container2">
        <div class="tableHeader">
            <h3>List of Event</h3>
            <button class="pdfBtn">Export to PDF</button>
        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Event ID</th>
                    <th>Organize Date</th>
                    <th>Start Time</th>
                    <th>End Tiem</th>
                    <th>Event Detail</th>
                    <th>Venue</th>
                </tr>
            </thead>
            <tbody>
                <?php $events = DB::table('events')->get() ?>
                @foreach ($events as $event)
                <tr>
                    <td>{{ $event->evt_id }}</td>
                    <td>{{ $event->organize_date }}</td>
                    <td>{{ $event->start_time }}</td>
                    <td>{{ $event->end_time }}</td>
                    <td>{{ $event->evt_detail }}</td>
                    <td>{{ DB::table('venues')->where('venue_id', $event->venue_id)->first()->venue_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('layouts.footer')

</body>

</html>
