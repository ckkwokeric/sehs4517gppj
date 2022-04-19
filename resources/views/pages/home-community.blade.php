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
                        margin-bottom:80px;
                    }
                    .poster .p-img{
                        width: 100%;
                    }
                    .new{
                        margin-left:100px;
                        margin-right:100px;
                        justify-content: center;
                        background: #fafafa;
                    }
                    .new img{
                        width:100%;
                    }
                   
                    .type{
                        display: block;
                        background: white;
                        font-style: normal;
                        font-weight: 700;
                        font-size: 32px;
                        line-height: 30px;
                        color: #43B8D2;
                        margin: 65px 0 36px;
                    }
                    .name{
                        font-weight: 600;
                        font-size: 24px;
                        color: #663399;
                        font-family: 'Montserrat', sans-serif;
                    }
                    .name.youth{
                        color:#FF4500;
                    }
                    .info{
                        font-weight: 400;
                        font-size: 18px;
                        line-height: 40px;
                        /* or 200% */
                        letter-spacing: 0.02em;
                        color: #000000;
                        font-family: 'Montserrat', sans-serif;
                        padding-bottom:10px;
                    }
                    .info.youth{
                        line-height: 24px;
                    }
                    .btn{
                        background:red;
                        display:inline-block;
                        padding:5px 38px;
                        background:rgba(102, 51, 153, 0.9);
                        border-radius: 10px;
                        curson:pointer;
                    }
                    .btn.youth{
                        background: rgba(255, 69, 0, 0.9);
                    }
                    .btn a{
                        font-weight: 600;
                        font-size: 16px;
                        line-height: 29px;
                        /* identical to box height */
                        color: #FFFFFF;
                        text-transform:uppercase;
                        text-decoration:none;
                    }
                    .btn:hover{
                        background:#663399;
                    }
                    .btn.youth:hover{
                        background:red;
                    }
                    .container3{
                        background:white;
                        margin-left:100px;
                        margin-right:100px;
                        justify-content: center;
                    }
                    .donate{
                        display:flex;
                        margin-left:20px;
                        position: relative;
                        margin-top:100px;
                    }
                    .donate img{
                        width:310px;
                        margin-left:7%;
                    }
                    .donate .donate-info{
                        position:absolute;
                        top:-70px;
                        width:734px;
                        right:3%;
                        font-size:20px;
                        font-weight: 600;
                        line-height: 40px;
                    }
                    .donate .donate-info p:nth-child(2){
                        padding-top:30px;
                    }
                  
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->


    <div class="poster">
        <img class="p-img" src="img/poster.png" alt="">
    </div>
    
<div class="container2">
    <!-- new servies -->
    <div class="new">
        <p class="type">New Program</p>
        <div class="poster2">
            <img src="img/new-program.png" alt="">
    </div>

    <p class="name">Wisdom and Love Carer Support Project</p>
    <p class="info">In the late 19th Century, abduction and trafficking of women and children were serious crimes in Hong Kong. On 8th November, 
        1878, a group of local Chinese presented a petition to the Governor, Sir John Pope Hennessy, K.C.M.G., to set up Po Leung Kuk to rescue the kidnapped victims. 
        The “Society for the Protection of Women and Children” was approved by the Hong Kong Governor in May, 1880, but as the petition was submitted on 8th November,
        1878, that date was adopted as our founding date.
    </p>
    <div class="btn">
        <a href="">more</a>
    </div>
</div>

<div class="container2">
    <!-- new servies -->
    <div class="new">
        <p class="type">New Activities</p>
        <div class="poster2">
            <img src="img/new-activities.png" alt="">
       
    </div>

    <p class="name youth">March - April Science Camp</p>
    <p class="info youth">"Summer" holiday comes earlier than expected but let's make the most of it! We are hosting summer 
        camps that will make it the best holiday ever!
    </p>
    <p class="info youth">*All summer camps are online camps. Online camps will be held via Zoom. Rest assured, we keep the class sizes small and deliver the experiment materials straight to your doorstep! All you need to prepare is a pencil, 
        some water and the spirit to experiment!
    </p>
    <div class="btn youth">
        <a href="">more</a>
    </div>
</div>

<div class="container3">
    <p class="type">Quick Donation</p>
   <div class="donate">
       <img src="img/Donate.png" alt="">
       <div class="donate-info">
            <p>Let's support us, your generous donation can help to provide timely assistance to the affected grassroots people.
                    Every HK$350 you donate will enable a person with low-income, jobless or in need to receive hot meals / food coupons for a week,
                    your donation can also help us to carry out other all-round supporting services.
                </p>
                <p>
                All administrative expenses of this programme are sponsored by the Kuk’s Board of Directors.
                </p>
        </div>
   </div>
</div>






@include('layouts.footer')

</body>
</html>