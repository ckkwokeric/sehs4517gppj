<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       
       
        <style>
            .container2{
                font-family: 'Montserrat', sans-serif;
                margin-left:100px;
                        margin-right:100px;
                        justify-content: center;
               
                      
            }
            .container2 .poster{
                width:100%;
                margin-top:50px;
                margin-bottom:70px;
            }
            .address{
                display:flex;
                font-weight: 400;
                
            }
            .address .address-box{
                display:flex;
                padding-right:18px;
            }
            .address-box img{
                padding-top:50%;
            }
            .address-box .type{
                color:#D2B48C;
            }
            .arrow{
                width:15px;
                height:15px;
                padding-top:50%;
                padding-left:18px;
            }
            .content p{
                padding-bottom:30px;
                font-weight: 400;
                font-size: 20px;
                line-height: 24px;
            }
            .picture{
                width:100%;
              
            }
                  
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
    <div class="container2">
        <img class="poster" src="img/new-program.png" alt="">
        <div class="address">
            <div class="address-box">
                <span><img src="img/home.png" alt=""></span>
                <span><img class="arrow" src="img/arrow.png" alt=""></span>
            </div>
            <div class="address-box">
                <p class="type">New Services</p>
                <span><img class="arrow" src="img/arrow.png" alt=""></span>
            </div>
            <div class="address-box">
                <p>Wisdom and Love Carer Support Project</p>
                <span><img class="arrow" src="img/arrow.png" alt=""></span>
            </div>
        </div>
        
        <div class="content">
            <p>Christian Wisdom Service has always been concerned about the physical, psychological, 
                social and spiritual needs of the carers. Therefore, the "Wisdom and Love Carer Support Project" was established 
                with the concept of "carer-oriented" service to walk with the carers of the mentally disabled.
            </p>
            <p>Christian Wisdom Service has always been concerned about the physical, psychological, social and spiritual needs 
                of the carers. Therefore, the "Wisdom and Love Carer Support Project" was established with the concept of "carer-oriented"
                 service to walk with the carers of the mentally disabled.
            </p>
            <p>In addition, in order to value the carers' participation in the center and to enhance their sense of recognition 
                and belonging to the service, we have established a membership system and a "Wisdom and Love Committee", with the 
                carers acting as office-bearers, with the direction of joint planning and sharing of tasks.
            </p>
            <p>If you are interested in participating or collaborating in the following events or service briefings, 
                please click here to leave your contact information so that our staff can contact you.
            </p>
        </div>
    </div>
    <img  class="picture" src="img/Component 57.png" alt="">


@include('layouts.footer')

</body>
</html>