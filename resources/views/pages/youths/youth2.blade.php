<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       
       
        <style>
            body{
                font-family: 'Montserrat', sans-serif;
            }
            .container2{
                margin:0 100px 200px;
                justify-content:center;
                
            }
            .address{
                margin:30px 0 10px;
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
                padding-right:20px;
            }
            .poster{
                margin:32px 0 10px;
                width:100%;
                height:80vh;
            }
            .container2 .info{
                font-weight: 400;
                font-size: 16px;
                line-height: 30px;
                /* or 150% */
                color: #000000;
                margin-bottom:100px;
            }
            .container3 {
                position:relative;
            }
            .container3 .name{
                font-weight: 400;
                font-size: 28px;
                line-height: 29px;
                /* identical to box height */
                color: #0071BB;
                margin:80px 0 20px;
            }
            .container4 {
                display:flex;
                margin-bottom:20px;
            }
            .container4 p{
                font-weight: 400;
                font-size: 16px;
                line-height: 30px;
                width:670px;
                margin-right:40px;
                letter-spacing: 0.04em;
            }
            .container4 img{
                position:absolute;
                top:0;
                right:3%;
                max-width:478px;
            }
            .btn{
                background:red;
                display:inline-block;
                padding:14px 49px;
                border-radius:10px;
            }
            .btn a{
                text-decoration:none;
                font-size: 18px;
                line-height: 24px;

                color: #FFFFFF;
            }
                
            
        </style>
        
@include('layouts.nav')
<!-- <body> -->
<div class="container2">
    <div class="address">
                    <span><img src="img/home.png" alt=""></span>
                    <span><img class="arrow"src="img/arrow.png" alt=""></span>
                    <p>Youths Support</p>
                    <span><img class="arrow"src="img/arrow.png" alt=""></span>
                    <p>Student Developmeny Service</p>
    </div>
    <img class="poster" src="img/youths/poster.png" alt="">
    <p class="info">The Student Affairs Office and the International College Student Development Center provide a variety of services and activities to inspire whole-person development, including career counseling, leadership training, international and global experiences, service learning, and counseling services. Students will learn to identify their potential, develop the ability to continue learning, and make wise choices in career planning and education to cope with the ever-changing society.</p>
    <div class="container3">
        <div class="name">Service Learning</div>
        <div class="container4">
            <p>Service learning", as the name implies, is the achievement of "learning" through "service". The International College has been actively promoting "service learning" by incorporating relevant elements in various disciplines (e.g. "Business Ethics and Social Responsibility") and collaborating with different organizations to develop "service learning projects", encouraging students to focus on their studies, but also to care for the needs of society and cultivate a spirit of service to others. Students have provided different services to students, elderly, visually impaired, single-parent families, etc. Through their participation and planning of community services, they have strengthened their sense of responsibility as social citizens and promoted their personal development.</p>
            <img src="img/youths/learning.png" alt="">
        </div>
        <div class="btn">
            <a href="">Learn More</a>
        </div>
    </div>
</div>

@include('layouts.footer')

</body>
</html>