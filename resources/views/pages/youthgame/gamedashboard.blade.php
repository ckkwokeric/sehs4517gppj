<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/1ed92467bb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


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
            background-image: url(/img/questionnaire/poster.png);
            background-position: bottom;
            background-size: cover;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .container2 {
            color: black;
            text-align: start;
            margin-left: 5%;
            margin-right: 5%;
        }

        .container2 h1 {
            line-height: 40px;
            letter-spacing: 0.05em;
            padding-bottom: 40px;
        }

        .container2 h3 {
            font-size: 24px;
            padding-bottom: 15px;
        }

        .container2 p {
            max-width: 500px;
            line-height: 30px;
            letter-spacing: 0.05em;
        }

        .container3 {
            margin: 40px 5%;
        }

        .container3 .info {
            font-size: 20px;
            line-height: 49px;
            color: rgba(0, 0, 0, 0.6);
            margin: 40px 0;
        }

        .container3 .message {
            display: none;
        }

        .container3 .error-message {
            display: block;
            color: red;
        }

        .question-details input {
            display: inline-block;
        }

        .category1,
        .category2 {
            display: grid;
        }

        .input-box input {
            display: inline-block;
        }

        .btn input {
            display: inline-block;
        }

        .question-title {
            line-height: 29px;
            font-size: 20px;
            color: rgba(0, 0, 0, 0.9);

        }


        .category {
            margin: 20px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }

        .category label {
            color: rgba(0, 0, 0, 0.8);
            margin-bottom: 20px;
            font-size: 20px;
            display: flex;
            align-items: center;
            margin-left: 3%;
        }

        .category label:nth-child(5) {
            margin-bottom: 30px;
        }

        .question-details .category .dot {
            height: 18px;
            width: 18px;
            background: #d9d9d9;
            border-radius: 50%;
            margin-right: 10px;

            border: 5px solid transparent
        }

        #dot1-1:checked~.category .dot.one,
        #dot1-2:checked~.category .dot.two,
        #dot1-3:checked~.category .dot.three,
        #dot1-4:checked~.category .dot.four,
        #dot1-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
            ;
        }

        #dot2-1:checked~.category .dot.one,
        #dot2-2:checked~.category .dot.two,
        #dot2-3:checked~.category .dot.three,
        #dot2-4:checked~.category .dot.four,
        #dot2-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
            ;
        }

        #dot3-1:checked~.category .dot.one,
        #dot3-2:checked~.category .dot.two,
        #dot3-3:checked~.category .dot.three,
        #dot3-4:checked~.category .dot.four,
        #dot3-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
            ;
        }

        #dot4-1:checked~.category .dot.one,
        #dot4-2:checked~.category .dot.two,
        #dot4-3:checked~.category .dot.three,
        #dot4-4:checked~.category .dot.four,
        #dot4-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
            ;
        }

        #dot5-1:checked~.category .dot.one,
        #dot5-2:checked~.category .dot.two,
        #dot5-3:checked~.category .dot.three,
        #dot5-4:checked~.category .dot.four,
        #dot5-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
            ;
        }

        #dot6-1:checked~.category .dot.one,
        #dot6-2:checked~.category .dot.two,
        #dot6-3:checked~.category .dot.three,
        #dot6-4:checked~.category .dot.four,
        #dot6-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
            ;
        }

        #dot7-1:checked~.category .dot.one,
        #dot7-2:checked~.category .dot.two,
        #dot7-3:checked~.category .dot.three,
        #dot7-4:checked~.category .dot.four,
        #dot7-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
            ;
        }

        #dot8-1:checked~.category .dot.one,
        #dot8-2:checked~.category .dot.two,
        #dot8-3:checked~.category .dot.three,
        #dot8-4:checked~.category .dot.four,
        #dot8-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
            ;
        }

        #dot9-1:checked~.category .dot.one,
        #dot9-2:checked~.category .dot.two,
        #dot9-3:checked~.category .dot.three,
        #dot9-4:checked~.category .dot.four,
        #dot9-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
        }

        #dot10-1:checked~.category .dot.one,
        #dot10-2:checked~.category .dot.two,
        #dot10-3:checked~.category .dot.three,
        #dot10-4:checked~.category .dot.four,
        #dot10-5:checked~.category .dot.five {
            border-color: #d9d9d9;
            background: #008DD0;
            ;
        }

        form input[type="radio"] {
            display: none;
        }

        .btn {
            height: 45px;
            margin: 45px 0;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .btn button {
            height: 100%;
            width: 20%;
            outline: none;
            color: white;
            border: none;
            font-size: 18px;
            letter-spacing: 1px;
            background: #008DD0;
            font-weight: 700;
            border-radius: 5px;
        }

        @media all and (max-width:600px) {
            .container3 .info {
                line-height: 49px;
            }

            .question-title {
                line-height: 30px;
            }

            .category {
                margin-top: 20px;
            }

            .btn {
                height: 45px;
                margin: 45px 0;
            }

            .btn button {
                height: 100%;
                width: 100%;
                outline: none;
                color: white;
                border: none;
                font-size: 18px;
                letter-spacing: 1px;
                background: #008DD0;
                font-weight: 700;
                border-radius: 5px;
            }

            .btn:hover {
                opacity: 0.9;
            }
        }
    </style>
</head>

<!-- <body> -->

<body>
    @include('layouts.nav')

    <header>
        <div class="container2">
            <h1>Kessler Psychological Distress Inventory (K10)</h1>
            <h3>What is K10?</h3>
            <p>The Kessler Psychological Distress Scale (K10) is a psychological screening tool designed to identify
                adults with significant levels of psychological distress. It is widely used in Australia and often
                used
                in primary care settings to identify people with clinically significant psychological distress.</p>
        </div>
    </header>

    <div class="container3">
        <p class="info">This is a small test to assess your level of mental distress. Here are some questions that
            ask
            you about your emotions. For each question, select the option that best describes how often the emotion
            occurs.</p>
        {{-- <p class="message error-message">*Please enter all the questions.</p> --}}

        <form action="{{ route('processGameData') }}" method="POST">
            @csrf
            @foreach ($gameQuestions as $question)
            <div class="question-details">
                <input type="radio" name="q_{{ $question->q_id }}" id="dot{{ $question->q_id }}-1" value="5">
                <input type="radio" name="q_{{ $question->q_id }}" id="dot{{ $question->q_id }}-2" value="4">
                <input type="radio" name="q_{{ $question->q_id }}" id="dot{{ $question->q_id }}-3" value="3">
                <input type="radio" name="q_{{ $question->q_id }}" id="dot{{ $question->q_id }}-4" value="2">
                <input type="radio" name="q_{{ $question->q_id }}" id="dot{{ $question->q_id }}-5" value="1">



                @if ( $errors->has('q_' . $question->q_id ) )
                <span class="message error-message">
                    {{ $errors->first('q_' . $question->q_id ) }}
                </span>
                @endif

                <span class="question-title">{{ $question->q_id }}. {{ $question->q_description }}</span>
                <div class="category">
                    <label for="dot{{ $question->q_id }}-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot{{ $question->q_id }}-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot{{ $question->q_id }}-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot{{ $question->q_id }}-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot{{ $question->q_id }}-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>
            @endforeach

            <div class="btn">
                <button type="submit" class="field">Submit</button>
            </div>
        </form>
    </div>

    @include('layouts.footer')

</body>

</html>
