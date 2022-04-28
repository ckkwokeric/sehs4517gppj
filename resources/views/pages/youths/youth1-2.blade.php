@extends('layouts.app')

@section('title', 'Element of Emotion')

@section('css')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    .container2 {
        margin: 0px 5%;
    }

    .container2 .title {
        text-align: center;
        font-size: 30px;
    }

    .container2 img {
        width: 80%;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 5% auto;
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
        color: #0ABAB5;
        font-size: 16px;
        font-weight: 600;
    }

    .container4 {
        margin: 5%;
    }

    .container4 .title {
        font-size: 24px;
        line-height: 29px;
        color: #554F90;
        font-weight: 700;
        margin-bottom: 3%;
    }

    .container4 p {
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 4%;
    }

    @media all and (max-width:700px) {
        .container2 img {
            width: 100%;
        }

        .container4 .title {
            font-size: 22px;
        }

        .container4 p {
            font-size: 18px;
        }
    }
</style>

@endsection

<!-- content -->
@section('content')

@include('layouts.nav')

<!-- content -->
<div class="container3">
    <a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i></a>
    <i class="fa-solid fa-chevron-right"></i>
    <span class="title"><a href="{{ route('youth1') }}">Mental Support</a> </span>
    <i class="fa-solid fa-chevron-right"></i>
    <span class="title">Teens Psychological Counselling</span>
</div>

<div class="container2">
    <div class="title">Element of Emotion</div>
    <img src="{{ asset('img/youth1/image 55.png') }}" alt="">
</div>

<div class="container4">
    <div class="title">What's going on with emotions?</div>
    <p>Emotions, which live with us every day, sometimes alert us before our consciousness does.
    </p>
    <p>Why is there such a big difference between the emotions of A and B, when A is frustrated and B is furious
        when they are treated unfairly? When that emotion can haunt you for more than a few days, what is she trying
        to remind you of? The hope and perseverance you have in your heart may have been touched by the pain; the
        emotions that cannot be temporarily eliminated may actually be related to your expectations of yourself.</p>
    <p>Behind the different emotional responses are the beliefs of "how I am", "how I want to be in the eyes of
        others", "I am willing or not to accept how I live", and so on, which are used to "affirm my self-worth".
        When you hold on to beliefs that are not really good for you in the situation, they become food for
        emotions.
    </p>
    <p>No matter what emotions you're feeling, emotions are always thinking of you ....... Take care of yourself.
    </p>

</div>

@include('layouts.footer')

@endsection
