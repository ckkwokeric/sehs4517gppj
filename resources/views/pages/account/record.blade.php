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
            <button class="pdfBtn">FUCK THIS SHIT</button>
        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>First Section</th>
                    <th>Second Section</th>
                    <th>Third Section</th>
                    <th>Time</th>
                    <th>Language</th>
                    <th>Activities</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>16/4/2022 Saturday</td>
                    <td>17/4/2022 Saturday</td>
                    <td>/</td>
                    <td>10:00 - 13:00</td>
                    <td>Cantonese</td>
                    <td>Artificial Intelligence Foundation Class</td>
                    <td>join</td>
                </tr>
                <tr>
                    <td>16/4/2022 Saturday</td>
                    <td>17/4/2022 Saturday</td>
                    <td>/</td>
                    <td>10:00 - 13:00</td>
                    <td>Cantonese</td>
                    <td>Mobile Application Work Class(Parent-child)</td>
                    <td>join</td>
                </tr>
                <tr>
                    <td>16/4/2022 Saturday</td>
                    <td>17/4/2022 Saturday</td>
                    <td>20/4/2022 Wednesday</td>
                    <td>10:00 - 13:00</td>
                    <td>Cantonese</td>
                    <td>Artificial Intelligence Foundation Class</td>
                    <td>join</td>
                </tr>
                <tr>
                    <td>16/4/2022 Saturday</td>
                    <td>17/4/2022 Saturday</td>
                    <td>/</td>
                    <td>10:00 - 13:00</td>
                    <td>Cantonese</td>
                    <td>Artificial Intelligence Foundation Class</td>
                    <td>join</td>
                </tr>
                <tr>
                    <td>16/4/2022 Saturday</td>
                    <td>17/4/2022 Saturday</td>
                    <td>/</td>
                    <td>10:00 - 13:00</td>
                    <td>Cantonese</td>
                    <td>Competency-Based Online Work Class:Knowledge of Artificial Intelligence</td>
                    <td>join</td>
                </tr>
            </tbody>
        </table>
    </div>

    @include('layouts.footer')

</body>

</html>
