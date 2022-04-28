@extends('layouts.app')

@section('title', 'Community Center')

@section('css')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    header {
        width: 100%;
        height: 100vh;
        background-image: url("img/poster.png");
        background-position: bottom;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    header .info {
        color: black;
        font-size: 40px;
        width: 80%;
        margin-top: -20%;
        text-align: center;
        font-weight: 700;
        transition: all 0.3s ease;
        cursor: pointer;

    }

    header .info:hover {
        visibility: visible;
        transform: translateY(70px);
        transition: all 0.3s ease;
    }

    .container2 {
        margin: 30px 5%;
    }

    .container2 .type,
    .container4 .type {
        font-size: 30px;
        line-height: 39px;
        color: #43B8D2;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .container3 img {
        width: 100%;
    }

    .container2 .title {
        font-weight: 700;
        font-size: 28px;
        line-height: 29px;
        color: #663399;
        margin: 30px 0 20px;
        font-weight: 700;
    }

    .container2 .info {
        font-size: 20px;
        line-height: 40px;
        /* or 200% */

        letter-spacing: 0.02em;
        font-weight: 600;
        margin-bottom: 30px;
    }

    .btn-more {
        display: inline-block;
        text-align: start;
        font-size: 16px;
        background: #FF4500;
        border-radius: 10px;
        padding: 11px 47px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .btn-more a {
        text-decoration: none;
        color: white;
    }

    .btn-more:hover {
        transition: all 0.3s ease;
        transform: translateY(5px);
    }

    .container2 .info {
        font-size: 16px;
    }

    .container4 .type {
        margin: 30px 5%;
    }

    .container5 {
        display: flex;
        margin: 0 5%;
    }

    .container5 .info {
        text-align: justify;
        padding-bottom: 40px;
    }

    @media all and (max-width:600px) {
        .container5 {
            flex-wrap: wrap;
        }

    }

    @media all and (max-width:1045px) {
        .container2 .title {
            font-size: 22px;
        }

    }
</style>

@endsection()

<!-- content -->
@section('content')

@include('layouts.nav')

<header>
    <p class="info slogo">
        Boundless compassion solidarity in action
    </p>
</header>

<div class="container2">
    <p class="type">New Service</p>
    <div class="container3">
        <img src="{{ asset('img/new-program.png') }}">
    </div>
    <p class="title">
        智親至愛照顧者支援計劃
    </p>
    <p class="info">
        In the late 19th Century, abduction and trafficking of women and children were serious crimes in Hong Kong.
        On 8th November, 1878, a group of local Chinese presented a petition to the Governor, Sir John Pope
        Hennessy, K.C.M.G., to set up Po Leung Kuk to rescue the kidnapped victims. The “Society for the Protection
        of Women and Children” was approved by the Hong Kong Governor in May, 1880, but as the petition was
        submitted on 8th November, 1878, that date was adopted as our founding date.
    </p>
    <div class="btn-more">
        <a href="{{ route('subService1') }}">More</a>
    </div>

</div>
<div class="container2 two">
    <p class="type">New Activities</p>
    <div class="container3">
        <img src="{{ asset('img/new-activities.png') }}">
    </div>
    <p class="title">
        March - April Science Camp
    </p>
    <p class="info">
        "Summer" holiday comes earlier than expected but let's make the most of it! We are hosting summer camps that
        will make it the best holiday ever!
    </p>
    <p class="info">*All summer camps are online camps. Online camps will be held via Zoom. Rest assured, we keep
        the class sizes small and deliver the experiment materials straight to your doorstep! All you need to
        prepare is a pencil, some water and the spirit to experiment!</p>
    <div class="btn-more">
        <a href="{{ route('newActivities') }}">More</a>
    </div>

</div>

<div class="container4">
    <p class="type">Quick Donate</p>
    <div class="container5">
        <img src="{{ asset('img/Donate.png') }}">
        <div class="container6">
            <p class="info">Let's support us, your generous donation can help to provide timely assistance to the
                affected grassroots people. Every HK$350 you donate will enable a person with low-income, jobless or
                in need to receive hot meals / food coupons for a week, your donation can also help us to carry out
                other all-round supporting services.
            </p>
            <p class="info">All administrative expenses of this programme are sponsored by the Kuk's Board of
                Directors.</p>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection()
