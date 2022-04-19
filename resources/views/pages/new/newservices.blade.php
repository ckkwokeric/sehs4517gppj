<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
       
       
        <style>
            body{
                font-family: 'Montserrat', sans-serif;
            }
             .poster{
                width:100%;
                height:90vh;
             }     
             .container3{
                 position:relative;
             }
             .slogo{
                 position: absolute;
                 font-size: 30px;
                line-height: 40px;
                color: #D2B48C;
                top:550px;
                left:30%;
                font-family: 'Comfortaa', cursive;
             }
             .container4{
                 
                 margin-left:100px;
                 margin-right:100px;
                 justify-content:cener;
             }
             .container5{
                 display:flex;
                 margin-bottom:180px;
             }
             .address{
                margin:30px 0;
                display:flex;
            }
            .address img{
                padding-top:12px;
                padding-right:20px;
            }
            .address .arrow{
                width:15px;
                height:15px;
                padding-top:16px;
                padding-right:20px;
            }
            .address p{   
                /* identical to box height */
                color: #D2B48C;
            }
            .container6{
                margin:30px;
            }
            .container6 p{
                font-size: 16px;
                line-height: 30px;
                /* or 188% */
                letter-spacing: 0.05em;
                color: #000000;
                width:600px;
                padding-right:60px;
            }
            .container6 p.climb{
                width:500px;
            }
            .container6 .name{
                font-size: 24px;
                line-height: 29px;
                /* identical to box height */
               font-weight:400;
                font-family: 'Montserrat', sans-serif;
            }
            .container6 .name.elderly{
                color: #FF4500;
            }
            .container6 .name.teens{
                color: #FFD700;
            }
            .container6 .name.climb{
                color: #008000;
            }
            .container5 .img{
                margin-right:50px;
            }
            .btn{
                background:red;
                display:inline-block;
                padding:5px 38px;
                border-radius: 10px;
                margin-top:20px;
                text-transform:uppercase;
            }
            .btn.elderly{
                background: #FF4500;
            }
            .btn.teens{
                background: #FFD700;
            }
            .btn.climb{
                background: #008000;
            }
            .btn a{
                font-weight: 600;
                font-size: 18px;
                line-height: 29px;
                /* identical to box height */
                text-decoration:none;
                color: #FFFFFF; 
            }
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
<div class="container2">
    <div class="container3"></div>
        <img class="poster" src="img/C-services/poster.png" alt="">
        <p class="slogo">From the heart, created by love</p>
    </div>
    <div class="container4">
        <div class="address">
           <span><img src="img/home.png" alt=""></span>
           <span><img class="arrow"src="img/arrow.png" alt=""></span>
           <p>About Us</p>
        </div>
        <div class="container5">
            <div class="container6">
                <p class="name elderly">Wisdom and Love Carer Support Project</p>
                <p>In the late 19th Century, abduction and trafficking of women and children were serious crimes in Hong Kong. On 8th November, 1878, a group of local Chinese presented a petition to the Governor, Sir John Pope Hennessy, K.C.M.G., to set up Po Leung Kuk to rescue the kidnapped victims. The “Society for the Protection of Women and Children” was approved by the Hong Kong Governor in May, 1880, but as the petition was submitted on 8th November, 1878, that date was adopted as our founding date.</p>
                <div class="btn elderly">
                    <a href="">more</a>
                </div>
            </div>
            <img src="img/C-services/elderly.png" alt="">
        </div>
        
        <div class="container5">
        <img class="img" src="img/C-services/teens.png" alt="">
            <div class="container6">
                <p class="name teens">TEENS PSYCHOLOGICAL CONUNSELLING</p>
                <p>Children are nurtured, Youngsters are educated, Adults are supported to contribute, Elderly are cared for, The less fortunate are lightened with hope.
</p>
                <div class="btn teens">
                    <a href="">more</a>
                </div>
            </div>
            
        </div>
        <div class="container5">
            <div class="container6">
                <p class="name climb">STUDENT DEVELOPMENT SERVICES</p>
                <p class="climb">To be the most prominent and committed charitable organisation. In the Kuk's Spirit to do good deeds with benevolence. Dedicated in protecting the young and the innocent, caring for the elderly and the underprivileged, aiding the poor and healing the sick, educating the young and nurturing their morality, providing recreaction to the public, caring for the environment, passing on the cultural inheritance and bringing goodness to the community.</p>
                <div class="btn climb">
                    <a href="">more</a>
                </div>
            </div>
            <img src="img/C-services/climbing.png" alt="">
        </div>
    </div>
</div>

@include('layouts.footer')

</body>
</html>