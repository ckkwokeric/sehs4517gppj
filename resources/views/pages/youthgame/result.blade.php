@extends('layouts.app')

@section('title', 'Game Result')

@section('css')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        section {
            margin: 5% 100px;
            justify-content: center;
        }

        .title {
            font-size: 36px;
            line-height: 44px;
            /* identical to box height */
            color: #008DD0;
            font-weight: 600;

            padding-bottom: 30px;
        }

        .container2 .title {
            font-size: 24px;
            color: black;
        }

        .mark {
            border-bottom: 1px solid rgba(196, 196, 196, 0.7);
            ;
            margin-bottom: 50px;
        }

        span.score {
            font-weight: 600;
            font-size: 150px;
            line-height: 242px;
            /* identical to box height */
            color: rgba(0, 128, 0, 0.4);
        }

        .result-group {
            display: flex;
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .result-group.choose {
            padding: 10px;
            background: rgba(0, 128, 0, 0.2);
            width: 100%;
            border-radius: 5px;
            margin: 20px 0;
        }

        .result-group p {
            width: calc(100% / 2);
        }

        @media all and (max-width:600px) {
            section {
                margin: 5% 5%;
            }

            .title {
                text-align: center;
            }

            .mark {
                text-align: center;
            }

            .container2 .title {
                text-align: center;
            }

            .container2 {
                width: 100%;
            }

            .result-group {

                width: 100%;
            }

            .result-group p {
                width: calc(100% / 2);
            }

            .result-group.choose {
                padding: 5px;
                background: rgba(0, 128, 0, 0.2);
                border-radius: 5px;
            }

        }
    </style>

@endsection()

<!-- content -->
@section('content')

    @include('layouts.nav')

    <section>
        <div class="section">
            <p class="title">Kessler Psychological Distress Inventory (K10)</p>
            <div class="mark">
                <span class="score">{{ $data }}</span>
                <span class="total">/50</span>
            </div>
            <div class="container2">
                <p class="title">Result</p>
                <div class="result-group @if($data <= 19) choose @endif">
                    <p class="s-score">Below 19</p>
                    <p class="result">You seem to be a good state of mind</p>
                </div>
                <div class="result-group @if($data >= 20 && $data <= 24) choose @endif">
                    <p class="s-score">20-24</p>
                    <p class="result">You have mild emotional distress</p>
                </div>
                <div class="result-group @if($data >= 25 && $data <= 29) choose @endif">
                    <p class="s-score">25-29</p>
                    <p class="result">You have a moderate level of emotional distress</p>
                </div>
                <div class="result-group @if($data >= 30) choose @endif">
                    <p class="s-score">30 or above</p>
                    <p class="result">You have severe emotional distress</p>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer')

@endsection
