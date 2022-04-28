@extends('layouts.app')

@section('title', 'About us')

@section('css')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    .container2 {
        width: 100%;
    }

    .container2 img {
        width: 100%;
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

    .container4 {
        display: flex;
        margin: 5% 5% 0;
    }

    .container5.two {
        display: none;
    }

    .container5 .title {
        font-size: 24px;
        line-height: 29px;
        color: #FF4500;
        font-weight: 700;
        margin: 5% 0;
    }

    .container5 p {
        font-size: 16px;
        line-height: 30px;
        letter-spacing: 0.05em;
        margin-bottom: 5%;
    }

    .container6.one {
        margin: 10% 0px 0% 20px;
    }

    .container6.two {
        display: none;
    }

    .container7 .title {
        text-align: center;
        font-size: 30px;
        line-height: 44px;
        color: #2565AE;
        font-weight: 700;
        margin-bottom: 3%;
    }

    .container7 p {
        text-align: center;
        letter-spacing: 0.05em;
        font-size: 16px;
        line-height: 30px;
        margin: 0 4%;
    }

    .container8 {
        display: flex;
        margin: 5%;
    }

    .container9 {
        width: calc(100% / 3);
        position: relative;
        margin-right: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container9 img {
        background: rgba(0, 128, 0, 0.3);
        border-radius: 30px;
        width: 80%;
        padding: 0 5%;
    }

    .container9.two img {
        background: rgba(255, 99, 71, 0.2);
        padding: 1.5% 5%;
    }

    .container9.three img {
        background: rgba(135, 206, 250, 0.4);
        padding: 3.7% 5%;

    }

    .container9 span {
        visibility: hidden;
        position: absolute;
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        color: white;
    }

    .container9:hover {
        transform: translateY(-10px);
        transition: all 0.3s ease-in-out;
        cursor: pointer;
        opacity: 0.9;
    }

    .container9:hover>span {
        visibility: visible;
    }

    @media all and (max-width:1045px) {
        .container4 {
            flex-wrap: wrap;
        }

        .container6.two {
            display: block;
            width: 100%;
        }

        .container5.two {
            display: block;
        }

        .container5.one {
            display: none;
        }

        .container5 p {
            text-align: justify;
        }

        .container6.two img {
            width: 100%;
        }

        .container6.one {
            display: none;
        }

        .container7 .title {
            text-align: center;
            margin: 5% 0 3%;
        }

        .container7 p {
            text-align: justify;
        }

        .container8 {
            flex-wrap: wrap;
        }

    }
</style>

@endsection()

<!-- content -->
@section('content')

@include('layouts.nav')

<!-- content -->
<div class="container2">
    <img src="{{ asset('img/about/poster.png') }}">
</div>

<div class="container3">
    <a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i></a>
    <i class="fa-solid fa-chevron-right"></i>
    <span class="title">About Us</span>
</div>

<div class="container4">
    <div class="container5 two">
        <div class="title">The Founding of Po Leung Kuk</div>
        <p>In the late 19th Century, abduction and trafficking of women and children were serious crimes in Hong
            Kong. On 8th November, 1878, a group of local Chinese presented a petition to the Governor, Sir John
            Pope Hennessy, K.C.M.G., to set up Po Leung Kuk to rescue the kidnapped victims. The “Society for the
            Protection of Women and Children” was approved by the Hong Kong Governor in May, 1880, but as the
            petition was submitted on 8th November, 1878, that date was adopted as our founding date.
        </p>
        <p>“Po Leung”, translating literally as protection of the young and the innocent, represents the core vision
            of our organisation. Formally established as the Society for the Protection of Women and Children in
            1880, in our long history we have prevented and resolved kidnappings, protected destitute women and
            children, and assisted the Secretary for Chinese Affairs (under British Rule) as a mediator in complex
            family and marriage disputes.
        </p>
        <p>In line with the economic development of Hong Kong over the past century, the range of services and
            coverage we provided to the community constantly expanded as welfare needs evolved. Today, we are Hong
            Kong's leading social service organisation and fundraiser. Under a modern corporatised management
            structure, we are able to utilise donation dollars to maximize the returns to our most important
            stakeholder - the community.</p>
    </div>
    <div class="container6 two">
        <img src="{{ asset('img/about/building.png') }}">
    </div>
    <div class="container5 one">
        <div class="title">The Founding of Po Leung Kuk</div>
        <p>In the late 19th Century, abduction and trafficking of women and children were serious crimes in Hong
            Kong. On 8th November, 1878, a group of local Chinese presented a petition to the Governor, Sir John
            Pope Hennessy, K.C.M.G., to set up Po Leung Kuk to rescue the kidnapped victims. The “Society for the
            Protection of Women and Children” was approved by the Hong Kong Governor in May, 1880, but as the
            petition was submitted on 8th November, 1878, that date was adopted as our founding date.
        </p>
        <p>“Po Leung”, translating literally as protection of the young and the innocent, represents the core vision
            of our organisation. Formally established as the Society for the Protection of Women and Children in
            1880, in our long history we have prevented and resolved kidnappings, protected destitute women and
            children, and assisted the Secretary for Chinese Affairs (under British Rule) as a mediator in complex
            family and marriage disputes.
        </p>
        <p>In line with the economic development of Hong Kong over the past century, the range of services and
            coverage we provided to the community constantly expanded as welfare needs evolved. Today, we are Hong
            Kong's leading social service organisation and fundraiser. Under a modern corporatised management
            structure, we are able to utilise donation dollars to maximize the returns to our most important
            stakeholder - the community.</p>
    </div>

    <div class="container6 one">
        <img src="{{ asset('img/about/building.png') }}">
    </div>
</div>

<div class="container7">
    <div class="title">Beneficiaries</div>
    <p>Po Leung Kuk provides multifaceted and quality social, educational, recreational and cultural services to all
        ages in the community through its 300 service units. Every year, the Kuk serves over 800,000 people on
        average with about 45,000 students of its affiliated schools.</p>
    <div class="container8">
        <div class="container9 one">
            <img src="{{ asset('img/about/elderly.png') }}">
            <span>Elderly</span>
        </div>
        <div class="container9 two">
            <img src="{{ asset('img/about/teens.png') }}">
            <span>Teens</span>
        </div>
        <div class="container9 three">
            <img src="{{ asset('img/about/kids.png') }}">
            <span>Kids</span>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection
