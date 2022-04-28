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
    .container9,
    .container10,
    .container11 {
        margin: 5%;
    }



    .Q,
    .title {
        font-size: 32px;
    }

    .container141 .title,
    .container15 .title,
    .container16 .title {
        font-size: 30px;
    }

    .container4 .Q {
        color: #FF7F37;
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
        background-color: #FFF281;
        border-radius: 35px;
    }

    .container9 .rimg {
        border-radius: 44px;
    }

    .container10 .rimg {
        border-radius: 32px;
    }


    .container11 .title {
        width: 30%;
    }

    .five .aimg {
        width: calc(70%);
        float: right;
    }

    .aimg {
        margin-left: 30px;
        margin-top: 5%;
    }

    .rimg {
        margin-right: 30px;
        margin-top: 5%;
        border-radius: 35px;
    }
</style>

@endsection

<!-- content -->
@section('content')
@include('layouts.nav')

<!--content-->
<div class="container2">
    <img src="{{ asset('img/elderlysupport/WELLING4ELDERLY_icon.png') }}" alt=""></img>
</div>

<div class="container3">
    <a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i></a>
    <i class="fa-solid fa-chevron-right"></i>
    <span class="title"><a href="{{ route('elderlysupport') }}">Elderly Support</a></span>
    <i class="fa-solid fa-chevron-right"></i>
    <span class="title">Welling For Elderly</span>
</div>

<div class="container4">
    <div class="Q">What is welling for elderly?</div>
</div>
<div class="container5">
    <div class="container51" <div class="info one">
        <p>No matter how old you are or how far you are from old age, learn how to age smartly and slowly!
            Let's learn self-healing power and smart aging together, and realize the key core of graceful
            aging in body and mind!</p>
    </div>
    <div class="aimg">
        <img src="{{ asset('img/elderlysupport/welling4elderly1.png') }}" alt=""></img>
        <img src="{{asset('img/elderlysupport/welling4elderly2.png') }}" alt=""></img>
    </div>
</div>
<div class="aimg">
    <img src="{{ asset('img/elderlysupport/welling4elderly3.png') }}" alt=""></img>
</div>
</div>

<div class="container6">
    <div class="Q">How can elderly be welling?</div>
    <div class="title">Stay Active at Home</div>
</div>

<div class="container7">
    <div class="aimg">
        <img src="{{asset('img/elderlysupport/welling4elderly4.png') }}" alt=""></img>
    </div>
    <div class="box">
        <div class="container11">
            <p>“Stay Active at Home” is produced by the Elderly Health Service of the Department of Health to
                help elderly safely and effectively stay physically active while at home. This series of seven
                videos, designed and demonstrated by physiotherapists, trains different parts of the body,
                improves health and caters to elderly persons with different mobility levels. Elderly can select
                different videos based on their capabilities and exercise together by following the demonstrations.
                Let’s get moving at Home!</p>
        </div>
        <div class="container12">
            <div class="videosetrow 1">
                <div class="videoset 1">
                    <div class="videoinfo 1">
                        <p>Upper Limbs</p>
                        <p>(Sitting)</p>
                    </div>
                    <div class="video 1">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/MP1zfiiogxw"
                            title="YouTube video player" frameborder="0"
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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/bKAvb5G2s8Q"
                            title="YouTube video player" frameborder="0"
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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/1cteM5SNDqg"
                            title="YouTube video player" frameborder="0"
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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/PzAat6WCibw"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="videosetrow 2">
                <div class="videoset 5">
                    <div class="videoinfo 5">
                        <p>Heart & Lung Function</p>
                        <p>(Sitting)</p>
                    </div>
                    <div class="video 5">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/wnGIeGaTDuk"
                            title="YouTube video player" frameborder="0"
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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/QNeO5WHYII0"
                            title="YouTube video player" frameborder="0"
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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/NFfYQivX_L0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container8">
        <div class="container13">
            <div class="title">More tips for age smartly and slowly</div>
        </div>
        <div class="container14">
            <div class="container141">
                <div class="title">Basic health living</div>
                <div class="info three">
                    <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Weight-breaking
                        exercise 3-4 times a week</p>
                    <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Absorb enough
                        vitamin D</p>
                    <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Eat more
                        calcium-rich foods</p>
                    <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Avoid smoking,
                        drinking alcohol, drinking too much caffeinated beverages such as coffee and strong tea</p>
                </div>
            </div>
            <div class="hrimg">
                <img src="{{ asset('img/elderlysupport/welling4elderly5.png') }}" alt=""></img>
            </div>
        </div>
    </div>

    <div class="container9">
        <div class="rimg">
            <img src="{{ asset('img/elderlysupport/welling4elderly6.png') }}" alt=""></img>
        </div>
        <div class="container15">
            <div clsss="title">Which are high calcium foods?</div>
            <div class="aimg">
                <img src="{{ asset('img/elderlysupport/welling4elderly6_1.png') }}" alt=""></img>
            </div>
        </div>
    </div>

    <div class="container10">
        <div class="rimg">
            <img src="{{ asset('img/elderlysupport/welling4elderly7.png') }}" alt=""></img>
        </div>
        <div class="container16">
            <div class="title">Who are more easier to have osteoporosis?</div>
            <div class="container info four">
                <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Lack of exercise
                    and low exposure to sunlight</p>
                <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Excessive caffeine
                </p>
                <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Women after
                    menstruation has stopped</p>
                <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Too much alcohol
                    and tobacco</p>
                <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Diet deficient in
                    calcium</p>
                <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Family Member Cases
                </p>
                <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>Disease and drug
                    effects</p>
                <p><img src="{{ asset('img/elderlysupport/welling4elderly_dot.png') }}" alt=""></img>People who are
                    underweight and have a small frame</p>
            </div>
        </div>
        <div class="info six">

        </div>
    </div>
</div>

@include('layouts.footer')

@endsection
