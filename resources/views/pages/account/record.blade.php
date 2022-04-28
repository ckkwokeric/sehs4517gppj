@extends('layouts.app')

@section('title', 'Admin Record')

@section('css')

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
        color: #fafafa;
        font-size: 15px;
        text-align: center;
        padding: 10px 20px;
        border-radius: 8px;
        opacity: 0.8;
        transition: 0.3s;
        text-decoration: none
    }

    .pdfBtn:hover {
        opacity: 1;
        background-color: #0060bd;
    }
</style>

@endsection

<!-- content -->
@section('content')

@include('layouts.nav')

<!-- List of member -->
<div class="container2">
    <div class="tableHeader">
        <h3>List of member</h3>
        <a href="{{ URL::to('/admin/downloadpdf') }}" class="pdfBtn">Export to PDF</a>
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

        {{-- the html syntax inside the @if directive will only be shown if there are no records in the table --}}
        @if ($users->isEmpty())
        <tbody>
            <tr>
                <td colspan="7" style="text-align: center;">No record</td>
            </tr>
        </tbody>
        @endif

        <tbody>
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

<!-- List of Event -->
<div class="container2">
    <div class="tableHeader">
        <h3>List of Event</h3>
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

        {{-- the html syntax inside the @if directive will only be shown if there are no records in the table --}}
        @if ($events->isEmpty())
        <tbody>
            <tr>
                <td colspan="6" style="text-align: center;">No record</td>
            </tr>
        </tbody>
        @endif

        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{ $event->evt_id }}</td>
                <td>{{ $event->organize_date }}</td>
                <td>{{ $event->start_time }}</td>
                <td>{{ $event->end_time }}</td>
                <td>{{ $event->evt_detail }}</td>
                <td>{{ $venues->where('venue_id', $event->venue_id)->first()->venue_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- List of member joined event -->
<div class="container2">
    <div class="tableHeader">
        <h3>List of Joined Events</h3>
    </div>
    <table class="content-table">
        <thead>
            <tr>
                <th>Enrollment ID</th>
                <th>Participant ID</th>
                <th>Participant Name</th>
                <th>Event ID</th>
                <th>Joined Event</th>
            </tr>
        </thead>

        {{-- the html syntax inside the @if directive will only be shown if there are no records in the table --}}
        @if ($eventEnrollments->isEmpty())
        <tbody>
            <tr>
                <td colspan="5" style="text-align: center;">No record</td>
            </tr>
        </tbody>
        @endif

        <tbody>
            @foreach ($eventEnrollments as $enrollment)
            <tr>
                <td>{{ $enrollment->enrollment_id }}</td>
                <td>{{ $users->where('user_id', $enrollment->user_id)->first()->user_id }}</td>
                <td>{{ $users->where('user_id', $enrollment->user_id)->first()->first_name }}, {{
                    $users->where('user_id', $enrollment->user_id)->first()->last_name }}</td>
                <td>{{ $events->where('evt_id', $enrollment->evt_id)->first()->evt_id }}</td>
                <td>{{ $events->where('evt_id', $enrollment->evt_id)->first()->evt_detail }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- List of Game History -->
<div class="container2">
    <div class="tableHeader">
        <h3>List of Game History</h3>
    </div>
    <table class="content-table">
        <thead>
            <tr>
                <th>Game History ID</th>
                <th>Player</th>
                <th>Total score</th>
                <th>Played Date</th>
            </tr>
        </thead>

        {{-- the html syntax inside the @if directive will only be shown if there are no records in the table --}}
        @if ($gameHistory->isEmpty())
        <tbody>
            <tr>
                <td colspan="4" style="text-align: center;">No record</td>
            </tr>
        </tbody>
        @endif

        <tbody>
            @foreach ($gameHistory as $history)
            <tr>
                <td>{{ $history->history_id }}</td>
                <td>{{ $users->where('user_id', $history->user_id)->first()->first_name }}, {{ $users->where('user_id',
                    $history->user_id)->first()->last_name }}</td>
                <td>{{ $history->total_score }}</td>
                <td>{{ $history->played_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('layouts.footer')

@endsection
