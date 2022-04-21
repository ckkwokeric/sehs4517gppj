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
p{
    
}
.container2{
    margin: 5%;
}
.container2 img{
    width: 100%;
}
.container3{
    margin: 5%;
    line-height: 30px;
}
.container3 i{
    padding-right: 10px;
    color: black;
}
.container3  a{
    text-decoration: none;
}
.container3 span a{
    color: black;
}
.container3 i:hover, .container3 span a:hover{
    color: #008DD0;
}
.container3 span{
    color: #2565AE;
    font-size: 16px;
    font-weight: 600;
}
.container4{
    margin: 5%;
}
.container4 .title, .container6 .title{
    margin-bottom: 3%;
    font-size: 24px;
    line-height: 29px;
    color: #0071BB;
    font-weight: 700;
}
.container4 p{
    margin-bottom: 3%;
    line-height: 30px;
    font-size: 18px;
}
.container5{
    background: rgba(213, 243, 254, 0.4);
    font-size: 18px;
}
.container6{
    margin:0 5%;
    padding: 3% 0;
}
.container7{
    margin: 5%;
}

.container8{
    display: flex;
    margin-bottom: 3%;
}
.container8 span{
    background: red;
    width: 20px;
    height: 20px;
    background: #01B3EE;
    border-radius: 30px;
    text-align: center;
    color: white;
    margin-right: 3%;
}

@media all and (max-width:1045px){}
@media all and (max-width:600px){
    .container4 p, .container5 p{
        font-size:16px ;
    }
    .container4 p{
        margin-bottom: 5%
    }
    .container4{
        margin-bottom: 5%;
    }
    .title{
        margin-bottom: 5%;
    }
    .container4 p{
        text-align: justify;
    }
}
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
 <!-- content -->
 <div class="container2">
        <img src="img/C-services/poster2.png" alt="">
    </div>

    
 <div class="container3">
        <a href="{{ url('home') }}"> <i class="fa-solid fa-house"></i></a> 
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title"><a href="{{ url('services') }}">New Services</a> </span>
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title">Teens Psychological Conunselling</span>
    </div>


    <div class="container4">
        <div class="title">Service Intorduction</div>
        <p>BGCA has been providing educational psychological services since September 2004, with the addition of clinical psychological services in May 2006. In cooperation with schools and parents/caregivers, the initiative provides professional psychological support services to assist children and youth with various needs.</p>
        <p>The Service recruits qualified clinical/educational psychologists to provide a range of psychological services, including psychological assessment and diagnosis, case counselling and more, to children, youth and parents/caregivers in need of adjustment to their learning, family and social environments. Consultation services and trainings are also provided to professionals such as teachers and social workers.</p>
    </div>

    <div class="container5">
        <div class="container6">
            <div class="title">Target Service Users</div>
            <div class="container7">
                <div class="container8">
                    <span>1</span>
                    <p>Children & Youth</p>
                </div>
                <div class="container8">
                    <span>2</span>
                    <p>Parents/Caregivers</p>
                </div>
                <div class="container8">
                    <span>3</span>
                    <p>Parents/Caregivers</p>
                </div>
                <div class="container8">
                    <span>4</span>
                   <p>Members of the community</p>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container4">
        <div class="title">Scope of Service</div>
        <p>Psychological assessment – including intellectual assessment and assessment of dyslexia, attention deficit/hyperactivity disorder (ADHD), and autism spectrum disorder (ASD) etc.</p>
        <p>Psychological treatment – mainly assists children and youth with difficulties adjusting to their learning, family and social environments.</p>
        <p>Professional training – mainly supports our staff’s provision of services.  The Service also provides knowledge related to children and youth’s psychological development to external parties including professionals (e.g., teachers and social workers) and members of the community.</p>
    </div>

@include('layouts.footer')

</body>
</html>