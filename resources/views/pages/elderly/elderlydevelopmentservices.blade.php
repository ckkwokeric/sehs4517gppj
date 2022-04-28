@extends('layouts.app')

@section('title', 'Elderly Development Service')

@section('css')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
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

    p {
        letter-spacing: 1px;
        line-height: 25px;
        font-size: 20px;
    }

    .container6 p,
    .container7 p {
        letter-spacing: 1px;
        line-height: 30px;
    }

    .container4,
    .one,
    .container5,
    .container6,
    .container7,
    .container8 {
        margin: 5%;
        margin-top: 10%;
    }

    .container9 {
        margin: 5%;
        margin-top: 15%;
    }

    .container10 {
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
        margin-left: -5%;
        margin-bottom: -5%;
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

    .container5 {
        flex-wrap: flex;
        display: inline;
    }

    .container5 img {
        width: 30%;
        float: left;
        margin: 0 5px 0 5%;
    }

    .one p {
        margin-left: 5%;
        margin-top: -100px;
    }

    .container6 {
        display: wrap;
    }

    .border1 {
        border-width: 3px;
        border-left-style: solid;
        padding: 5px;
        margin: 5%;
        margin-top: 10px;
    }

    .conatiner7 {
        display: wrap;
    }

    .border2 {
        border-width: 3px;
        border-left-style: solid;
        padding: 5px;
        margin: 5%;
        margin-top: 10px;
    }

    .aimg7 {
        width: 15%;
        float: right;
        margin-right: 10%;
        margin-top: 80px;
    }

    .aimg7 img {
        width: 100%;
    }

    .conatiner8 {
        display: wrap;
    }

    .info .four {
        width: 50%;
        float: left;
        margin-top: -10%;
    }

    .rimg8 {
        width: 45%;
        float: right;
        margin: 5%;
    }

    .rimg8 img {
        width: 100%;
        border-radius: 35px;
    }

    .container9 .info .five {
        width: 50%;
        float: left;
    }

    .container9 .aimg {
        width: 50%;
        float: right;
        margin-top: -60px;
    }

    .container9 .aimg img {
        width: 100%;
    }

    .house {
        width: 30%;
    }

    .house img {
        width: 100%;
        opacity: 20%;
    }

    .info .six {
        width: 50%;
    }

    .five .aimg {
        width: calc(70%);
        float: right;
    }

    .wrap {
        display: wrap;
    }

    .container15 {
        display: flex;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
        margin-bottom: 30%;
    }

    .set .one {
        display: wrap;
        background-color: #F3B4B4;
        height: 100px;
        width: 443px;
    }

    .photo1 {
        position: absolute;
        width: 443px;
        height: 336px;
        margin-top: -22px;
        margin-left: 42px;
    }

    .set .two {
        display: wrap;
        background-color: #F2D19F;
        height: 100px;
        width: 349px;
        margin-top: -56px;
        margin-left: 42px;
    }

    .photo2 {
        position: absolute;
        width: 349px;
        height: 336px;
        margin-left: 42px;
    }

    .set .three {
        display: wrap;
        background-color: #B8DB57;
        height: 100px;
        width: 437px;
        margin-top: -56px;
    }

    .photo3 {
        position: absolute;
        width: 437px;
        height: 336px;
    }

    .container15 p {
        text-align: center;
        line-height: 100px;
        color: #FFFFFF;
        font-size: 30px;
    }

    .container15 img {
        width: 100%;
    }

    .border p,
    .info p {
        text-align: justify;
        width: 100%;
        padding: 5px;
    }

    .rimg {
        margin-right: 30px;
        margin-top: 5%;
    }
</style>

@endsection

<!-- content -->
@section('content')

@include('layouts.nav')

<!--content-->
<div class="container2">
    <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices_icon.png') }}" alt="">
</div>

<div class="container3">
    <a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i></a>
    <i class="fa-solid fa-chevron-right"></i>
    <span class="title"><a herf="{{ route('elderlysupport') }}">Elderly Support</a></span>
    <i class="fa-solid fa-chevron-right"></i>
    <span class="title">Elderly Development Services</span>
</div>

<div class="container4">
    <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices1.png') }}" alt="">
</div>

<div class="one">
    <div class="container5">
        <img src="{{asset('img/elderlysupport/elderlydevelopmentservices2.png') }}" alt="">
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
        <p>To assist the elders to remain as an active member in the society through fostering their dignity and
            potential</p>
        <p>To enhance inter-generational mutual understanding between the elders and people of other age groups</p>
        <p>To provide caring service to frail elders who are lacking of care during daytime</p>
        <p>To provide quality residential care service to meet the physical, psychological and social needs of the
            elders</p>
        <p>To provide support services to carers of elders</p>
    </div>
</div>

<div class="aimg7">
    <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices4.png') }}" alt="">
</div>
<div class="container7">
    <div class="container11 two">
        <div class="title">Achievement</div>
    </div>
    <div class="border2">
        <p>Over 17,000 elders were being served through our community support services and residential services</p>
        <p>Over 430,000 hot meals were provided to elders in need</p>
        <p>Over 2,700 carers received our supportive services</p>
        <p>Over 100 holders of Community Care Service roucher for the Elderly were served by 2 non-subvented day care
            centres</p>
    </div>
</div>

<div class="rimg8">
    <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices5.png') }}" alt="">
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
            <p>Besides, this services also bring them new things, like new friends, different events, new products, etc.
            </p>
        </div>

    </div>
</div>

<div class="container9">
    <div class="container11 four">
        <div class="title">Community care services</div>
    </div>
    <div class="aimg">
        <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices7-9.png') }}" alt="">
    </div>
    <div class="info five">
        <p>We have cooperated with community groups in the district and arranged for about 200 volunteers to
            visit the elderly living alone or chronically ill or two elderly households living in old-style
            private buildings every month to provide about 100 seniors with health checks, social activities,
            health education, Emotional support, etc., allow the elderly to obtain health information and
            community resources, and expand their social and support network.</p>
    </div>
    <div class="house">
        <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices6.png') }}" alt="">
    </div>
</div>

<div class="container10">
    <div class="container11 five">
        <div class="title">Other support services</div>
    </div>
    <div class="info six">
        <p>Here are the past support services. Our purpose is hoping the elderly could have their own skills, like
            painting and cooking. If they already contain a special skill like story telling, we would like to gather
            them into a group. Then, helding a event for them to reach thier potential.</p>
    </div>
</div>

<div class="container15">
    <div class="wrap">
        <div class="set one">
            <div class="eventname one">
                <p>Painting course</p>
            </div>
        </div>
        <div class="photo1">
            <div class="aimg">
                <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices10.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="set two">
            <div class="eventname two">
                <p>Story telling</p>
            </div>
        </div>
        <div class="photo2">
            <div class="aimg">
                <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices11.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="set three">
            <div class="eventname three">
                <p>Cooking course</p>
            </div>
        </div>
        <div class="photo3">
            <div class="aimg">
                <img src="{{ asset('img/elderlysupport/elderlydevelopmentservices12.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection
