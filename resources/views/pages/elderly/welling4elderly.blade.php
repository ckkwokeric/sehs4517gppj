@extends('layouts.app')

@section('title', 'Welling for elderly')

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

    .container4,
    .container5,
    .container6,
    .container7 {
        margin: 5%;
    }

    .Q p,
    .title p {
        font-size: 35px;
    }

    .container141 .title,
    .container15 .title,
    .container16 .title {
        font-size: 30px;
    }

    .Q1 p,
    .Q2 p {
        color: #FF7F37;
        font-size: 40px;
    }

    .container6 .title,
    .container141 .title,
    .container15 .title,
    .container16 .title {
        color: #055C88;
    }

    .container12 {
        font-size: 18px;
        color: #045F8A;
    }

    .container13 {
        color: #A67E68;
    }

    .box {
        background-color: #F0F0E7;
    }

    .container14 {
        background-color: #FFFBD9;
        border-radius: 35px;
    }

    .container9 .rimg {
        border-radius: 44px;
    }

    .container10 .rimg {
        border-radius: 32px;
    }

    .container5 {
        display: flex;
    }

    .container51 {
        display: wrap;
        width: 55%;
    }

    .info .one {
        height: 500%;
    }

    .container51 p {
        font-size: 35px;
    }

    .container51 .aimg {
        display: flex;
    }

    .photo1 {
        width: 35%;
        margin-left: -35px;
    }

    .photo1 img {
        width: 100%;
    }

    .photo2 {
        width: 95%;
    }

    .photo2 img {
        width: 100%;
    }

    .container52 {
        width: 45%;
        float: right;
        margin-top: -50px;
    }

    .container52 .aimg img {
        width: 100%;
    }

    .container7 .aimg {
        width: 100%;
        margin-left: 0px;
    }

    .container7 img {
        width: 100%;
    }

    .container11 p {
        margin: 5%;
        font-size: 24px;
    }

    .container12 {
        display: wrap;
        padding: 3%;
        margin-top: -60px;
    }

    .videosetrow {
        display: flex;
    }

    .videoset {
        display: wrap;
        margin: 2%;
    }

    video {
        width: 100%;
        height: 100%;
    }

    .container13 .title p {
        margin-top: 5%;
        margin-bottom: 3%;
    }

    .container14 {
        display: flex;
    }

    .container141 {
        margin: 5%;
    }

    li {
        font-size: 24px;
    }

    .photo {
        width: 30%;
        margin-left: auto;
        margin-right: auto;
    }

    .container9 {
        display: flex;
    }

    .container9 .rimg {
        width: 50%;
    }

    .container9 .aimg {
        width: 70%;
        margin: 5%;
    }

    .container10 {
        display: flex;
    }

    .container10 .rimg {
        width: 40%;
    }

    .container16 {
        margin: 5%;
    }

    .bgc {
        background-color: #CBDBF4;
        border-radius: 35px;
        margin: 5%;
    }

    .aimg {
        margin-left: 30px;
        margin-top: 5%;
    }

    .rimg img {
        margin-right: 30px;
        margin-top: 5%;
        border-radius: 35px;
    }

    .hrimg img {
        border-radius: 35px;
    }
</style>

@endsection

<!-- content -->
@section('content')

@include('layouts.nav')

<!--content-->
<div class="container2">
    <img src="{{ asset('img/elderlysupport/WELLING4ELDERLY_icon.png') }}" alt="">
</div>

<div class="container3">
    <a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i></a>
    <i class="fa-solid fa-chevron-right"></i>
    <span class="title"><a herf="{{ route('elderlysupport') }}">Elderly Support</a></span>
    <i class="fa-solid fa-chevron-right"></i>
    <span class="title">Welling For Elderly</span>
</div>

<div class="container4">
    <div class="Q1">
        <p>What is welling for elderly?</p>
    </div>
</div>
<div class="container5">
    <div class="container51">
        <div class="info one">
            <p>No matter how old you are or how far you are from old age, learn how to age smartly and slowly!
                Let's learn self-healing power and smart aging together, and realize the key core of graceful
                aging in body and mind!</p>
        </div>
        <div class="aimg">
            <div class="photo1">
                <img src="{{asset('img/elderlysupport/welling4elderly1.png') }}" alt="">
            </div>
            <div class="photo2">
                <img src="{{asset('img/elderlysupport/welling4elderly2.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container52">
        <div class="aimg">
            <img src="{{asset('img/elderlysupport/welling4elderly3.png') }}" alt="">
        </div>
    </div>
</div>

<div class="container6">
    <div class="Q2">
        <p>How can elderly be welling?</p>
    </div>
    <div class="title">
        <p>Stay Active at Home</p>
    </div>
</div>

<div class="container7">
    <div class="aimg">
        <img src="{{asset('img/elderlysupport/welling4elderly4.png') }}" alt="">
    </div>
    <div class="box">
        <div class="text">
            <br>
        </div>
        <div class="container11">
            <p>“Stay Active at Home” is produced by the Elderly Health Service of the Department of Health to
                help elderly safely and effectively stay physically active while at home. This series of seven
                videos, designed and demonstrated by physiotherapists, trains different parts of the body,
                improves health and caters to elderly persons with different mobility levels. Elderly can select
                different videos based on their capabilities and exercise together by following the demonstrations.
                Let’s get moving at Home!</p>
        </div>
        <div class="container12">
            <div class="videosetrow one">
                <div class="videoset 1">
                    <div class="videoinfo 1">
                        <p>Upper Limbs</p>
                        <p>(Sitting)</p>
                    </div>
                    <div class="video 1">
                        <iframe src="https://www.youtube.com/embed/MP1zfiiogxw" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="videoset 2">
                    <div class="videoinfo 2">
                        <p>Upper Limbs & Posture</p>
                        <p>(Sitting)</p>
                    </div>
                    <div class="video 2">
                        <iframe src="https://www.youtube.com/embed/bKAvb5G2s8Q" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="videoset 3">
                    <div class="videoinfo 3">
                        <p>Upper Limbs & Back</p>
                        <p>(Sitting)</p>
                    </div>
                    <div class="video 3">
                        <iframe src="https://www.youtube.com/embed/1cteM5SNDqg" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="videoset 4">
                    <div class="videoinfo 4">
                        <p>Lower Limbs & Abdomen</p>
                        <p>(Sitting)</p>
                    </div>
                    <div class="video 4">
                        <iframe src="https://www.youtube.com/embed/PzAat6WCibw" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="videosetrow two">
                <div class="videoset 5">
                    <div class="videoinfo 5">
                        <p>Heart & Lung Function</p>
                        <p>(Sitting)</p>
                    </div>
                    <div class="video 5">
                        <iframe src="https://www.youtube.com/embed/wnGIeGaTDuk" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="videoset 6">
                    <div class="videoinfo 6">
                        <p>Lower Limbs & Balance</p>
                        <p>(Supported Standing)</p>
                    </div>
                    <div class="video 6">
                        <iframe src="https://www.youtube.com/embed/QNeO5WHYII0" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="videoset 7">
                    <div class="videoinfo 7">
                        <p>Heart & Lung Function</p>
                        <p>(Standing)</p>
                    </div>
                    <div class="video 7">
                        <iframe src="https://www.youtube.com/embed/NFfYQivX_L0" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container8">
        <div class="container13">
            <div class="title">
                <p>More tips for age smartly and slowly</p>
            </div>
        </div>
        <div class="container14">
            <div class="container141">
                <br>
                <div class="title">
                    <p>Basic health living</p>
                </div>
                <br><br><br><br><br><br><br><br>
                <ul class="info three">
                    <li>Weight-breaking exercise 3-4 times a week</li>
                    <li>Absorb enough vitamin D</li>
                    <li>Eat more calcium-rich foods</li>
                    <li>Avoid smoking, drinking alcohol, drinking too much caffeinated beverages such as coffee and
                        strong tea</li>
                </ul>
            </div>
            <div class="hrimg">
                <img src="{{ asset('img/elderlysupport/welling4elderly5.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="photo">
        <img src="{{ asset('img/elderlysupport/welling4elderly.png') }}" alt="">
    </div>
    <div class="container9">
        <div class="rimg">
            <img src="{{ asset('img/elderlysupport/welling4elderly6.png') }}" alt="">
        </div>
        <div class="container15">
            <div class="aimg">
                <div style="font-size: 30px;color: #055C88;">
                    <p>Which are high calcium foods?</p>
                </div>
                <img src="{{ asset('img/elderlysupport/welling4elderly6_1.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container10">
        <div class="rimg">
            <img src="{{ asset('img/elderlysupport/welling4elderly7.png') }}" alt="">
        </div>
        <div class="bgc">
            <div class="container16">
                <div class="title">
                    <p>Who are more easier to have osteoporosis?</p>
                </div>
                <br><br><br><br>
                <ul class="info four">
                    <li>Lack of exercise and low exposure to sunlight</li>
                    <li>Excessive caffeine</li>
                    <li>Women after menstruation has stopped</li>
                    <li>Too much alcohol and tobacco</li>
                    <li>Diet deficient in calcium</li>
                    <li>Family Member Cases</li>
                    <li>Disease and drug effects</li>
                    <li>People who are underweight and have a small frame</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection
