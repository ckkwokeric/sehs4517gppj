<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1ed92467bb.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
       
        <style>
           *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
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
    margin: 5% 5% 0;
}
.container4 p{
    margin-bottom:5% ;
    line-height: 30px;
}
.container4 p:last-child{
    margin-bottom: 0;
}
.container5 img{
    width: 100%;
    margin-top: -30px;
}
        </style>
        
@include('layouts.nav')
<!-- <body> -->
   <!-- content -->
   <div class="container2">
        <img src="img/new-program.png" alt="">
    </div>

    <div class="container3">
        <a href="{{ url('home') }}"> <i class="fa-solid fa-house"></i></a> 
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title"><a href="{{ url('services') }}">New Services</a> </span>
        <i class="fa-solid fa-chevron-right"></i>
        <span class="title">Wisdom and Love Carer Support Project</span>
    </div>

    <div class="container4">
        <p>Christian Wisdom Service has always been concerned about the physical, psychological, social and spiritual needs of the carers. Therefore, the "Wisdom and Love Carer Support Project" was established with the concept of "carer-oriented" service to walk with the carers of the mentally disabled.
        </p>
        <p>Christian Wisdom Service has always been concerned about the physical, psychological, social and spiritual needs of the carers. Therefore, the "Wisdom and Love Carer Support Project" was established with the concept of "carer-oriented" service to walk with the carers of the mentally disabled.
        </p>
        <p>In addition, in order to value the carers' participation in the center and to enhance their sense of recognition and belonging to the service, we have established a membership system and a "Wisdom and Love Committee", with the carers acting as office-bearers, with the direction of joint planning and sharing of tasks.
        </p>
        <p>If you are interested in participating or collaborating in the following events or service briefings, please click here to leave your contact information so that our staff can contact you.</p>
    </div>

    <div class="container5">
        <img src="img/Component 57.png" alt="">
    </div>


@include('layouts.footer')

</body>
</html>