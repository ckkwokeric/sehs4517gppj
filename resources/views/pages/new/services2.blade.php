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
                margin-left:100px;
                margin-right:100px;
                justify-content:center;
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
                padding-right:20px;
            }
            .container2 .poster{
                width:100%;
            }
            .container2 .img{
                position: relative;
            }
            .container2 .img span{
                position: absolute;
                top:30%;
                right:5%;
                font-size:30px;
                color:white;
                width:400px;
            }
            .name{
                font-weight: 400;
                font-size: 28px;
                line-height: 29px;
                /* identical to box height */
                color: #0071BB;
                padding:40px 0 30px;
            }
            .container3 p{
                font-weight: 400;
                font-size: 20px;
                line-height: 30px;
                /* or 150% */
                color: #000000;
                padding-bottom:20px;
            }
            .container4{
                background: rgba(213, 243, 254, 0.4);
            }
            .container5{
                margin:0 100px;
                justify-content:center;
            }
            .container5 ul{
                list-style:none;
            }
            .container5 ul li{
                padding-bottom:30px;
                font-size:20px;
            }
            .container5 ul li span{
                width: 30px;
                height: 30px;
                background:#66d3fa;
                color:white;
                padding:5px 9px;
                border-radius:50%;
                margin-right:10px;
                font-size:18px;
            }
           
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
<div class="container2">
        <div class="address">
                <span><img src="img/home.png" alt=""></span>
                <span><img class="arrow"src="img/arrow.png" alt=""></span>
                <p>New Servicies</p>
                <span><img class="arrow"src="img/arrow.png" alt=""></span>
                <p>Teens Psychological Conunselling</p>
        </div>
        <div class="img">
            <img class="poster" src="img/C-services/poster2.png" alt="">
            <span>TEENS PSYCHOLOGICAL CONUNSELLING</span>
        </div>
        <p class="name">Service Introduction</p>
        <div class="container3">
            <p>BGCA has been providing educational psychological services since September 2004, with the addition of clinical psychological services in May 2006. In cooperation with schools and parents/caregivers, the initiative provides professional psychological support services to assist children and youth with various needs.</p>
            <p>The Service recruits qualified clinical/educational psychologists to provide a range of psychological services, including psychological assessment and diagnosis, case counselling and more, to children, youth and parents/caregivers in need of adjustment to their learning, family and social environments. Consultation services and trainings are also provided to professionals such as teachers and social workers.</p>
        </div>
</div>
<div class="container4">
    <div class="container5">
        <p class="name">Target Service Users</p>
                <ul>
                    <li><span>1</span> Children & Youth</li>
                    <li><span>2</span> Parent/Caregivers</li>
                    <li><span>3</span> Children & Youth</li>
                    <li><span>4</span> Parent/Caregivers</li>
                </ul>
    </div>
</div>
<div class="container2">
        <p class="name">Scrope of Service</p>
        <div class="container3">
           <p>Psychological assessment – including intellectual assessment and assessment of dyslexia, attention deficit/hyperactivity disorder (ADHD), and autism spectrum disorder (ASD) etc.</p>
            <p>Psychological treatment – mainly assists children and youth with difficulties adjusting to their learning, family and social environments.
</p>
            <p>Professional training – mainly supports our staff’s provision of services.  The Service also provides knowledge related to children and youth’s psychological development to external parties including professionals (e.g., teachers and social workers) and members of the community. </p>
           
        </div>
</div>

@include('layouts.footer')

</body>
</html>