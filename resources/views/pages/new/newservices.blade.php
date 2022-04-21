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
          *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
.container2{
    position: relative;
    text-align: center;
}
.container2 img{
    width: 100%;
}
.container2 p{
    position: absolute;
    text-align: center;
    bottom: 15%;
    left: 25%;
    right: 25%;
    transition: all 0.3s ease;
    font-size: 36px;
    line-height: 40px;
    color: #D2B48C;
    font-weight: 700;
}
.container2:hover > p{
    visibility: visible;
    transition: all 0.3s ease;
    transform: translateY(-20px);
}
.container3{
    margin: 5%;
}
.container3 i{
    padding-right: 10px;
    color: black;
}
.container3 i a{
    text-decoration: none;
}
.container3 i:hover{
    color: #008DD0;
}
.container3 span{
    color: #2565AE;
    font-size: 16px;
    font-weight: 600;
}
.container4, .container6{
    margin: 5% 5% 10%;
    display: flex;
}
.container5.two{
    display: none;
}
.text{
    margin-right: 10px;
}
.text.two .title{
    display: none;
}
.text .title{
    font-size: 24px;
    line-height: 29px;
    color: #FF4500;
    font-weight: 700;
    margin-bottom: 5%;
}
.container6 .text .title{
    color: #FFD700;
}
.container4.green .title{
    color: #008000;
}
.text p{
    font-size: 16px;
    line-height: 30px;
    margin-bottom: 5%;
}
.btn-more{
    border-radius: 10px;
    color: white;
    text-transform: uppercase;
    display: inline-block;
    padding: 11px 47px;
    font-weight: 700;
}
.btn-more.red{
    background: #FF4500;
}
.btn-more.yellow{
    background: #FFD700;
}
.btn-more.green{
    background: #008000;;
}
.btn-more:hover{
    transition: all 0.3s ease;
    transform: translateY(-5px);
}
.btn-more a{
    text-decoration: none;
    color: white;
}
.container6 .text.one {
    margin-left: 30px;
    margin-top: 5%;
}
@media all and (max-width:1045px){
    .container2 p{
        font-size: 26px;
    }
    .container4, .container6{
        flex-wrap: wrap;
    }
    .container5{
        width: 100%;
    }
    .container5.one{
        display: none;
    }
    .container5.two{
        display: block;
        text-align: center;
    }
    .text{
        width: 100%;
    }
    .text.two .title{
        display: block;
        text-align: start;
        width: 100%;
    }
    .text.one .title{
        display: none;
    }
    .text p{
        text-align: justify;
    }
    .container5 img{
        width: 100%;
    }
    .container6 .text.one{
        margin-left: 0;
    }
}
@media all and (max-width:600px){
    .container2 p{
        font-size: 15px;
    }
}
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->

<!-- content -->
<div class="container2">
        <img src="img/C-services/poster2 (2).png" alt="">
        <p>From the heart, created by love</p>
    </div>

    <div class="container3">
        <a href="{{ url('home') }}"> <i class="fa-solid fa-house"></i></a> 
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title">Activities</span>
    </div>

    <div class="container4">
        <div class="text two">
            <div class="title">Wisdom and Love Carer Support Project</div>
        </div>
        <div class="container5 two">
            <img src="img/C-services/elderly.png" alt="">
        </div>
        <div class="text one">
            <div class="title">Wisdom and Love Carer Support Project</div>
            <p>In the late 19th Century, abduction and trafficking of women and children were serious crimes in Hong Kong. On 8th November, 1878, a group of local Chinese presented a petition to the Governor, Sir John Pope Hennessy, K.C.M.G., to set up Po Leung Kuk to rescue the kidnapped victims. The “Society for the Protection of Women and Children” was approved by the Hong Kong Governor in May, 1880, but as the petition was submitted on 8th November, 1878, that date was adopted as our founding date.</p>
            <div class="btn-more red">
                <a href="{{ url('services1') }}">more</a>
             </div>
        </div>
        <div class="container5 one">
            <img src="img/C-services/elderly.png" alt="">
        </div>
    </div>

    <div class="container6">
        <div class="text two">
        <div class="title">TEENS PSYCHOLOGICAL CONUNSELLING</div>
        </div>
        <div class="container5">
             <img src="img/C-services/teens.png" alt="">
        </div>
        <div class="text one">
            <div class="title">TEENS PSYCHOLOGICAL CONUNSELLING</div>
            <p>Children are nurtured, Youngsters are educated, Adults are supported to contribute, Elderly are cared for, The less fortunate are lightened with hope.
            </p>
            <div class="btn-more yellow">
                <a href="{{ url('services2') }}">more</a>
             </div>
        </div>
    </div>

    <div class="container4 green">
        <div class="text two">
            <div class="title">STUDENT DEVELOPMENT SERVICES</div>
        </div>
        <div class="container5 two">
            <img src="img/C-services/climbing.png" alt="">
        </div>
        <div class="text one">
            <div class="title">STUDENT DEVELOPMENT SERVICES</div>
            <p>To be the most prominent and committed charitable organisation. In the Kuk's Spirit to do good deeds with benevolence. Dedicated in protecting the young and the innocent, caring for the elderly and the underprivileged, aiding the poor and healing the sick, educating the young and nurturing their morality, providing recreaction to the public, caring for the environment, passing on the cultural inheritance and bringing goodness to the community.</p>
            <div class="btn-more green">
                <a href="{{ url('services3') }}">more</a>
             </div>
        </div>
        <div class="container5 one">
            <img src="img/C-services/climbing.png" alt="">
        </div>
    </div>
@include('layouts.footer')

</body>
</html>