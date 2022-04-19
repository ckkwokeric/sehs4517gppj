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
            .poster{
                width:100%;
                height:90vh;
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


                color: #2565AE;
            }
            .info-name{
                font-weight: 700;
                font-size: 24px;
                line-height: 29px;
                /* identical to box height */
                color: #FF4500;
            }
            .container3{
                display:flex;
                justify-content:space-between;
            }
            .container3 img{
                height:442px;
                padding-top:50px;
            }
            .info1{
                padding-right:21px;
            }
            .info1 p{
                width:750px;
                font-size: 16px;
                line-height: 30px;
                /* or 188% */
                font-weight:500;
                letter-spacing: 0.05em;
                padding-bottom:20px;
            }
            .info2{
                text-align:center;
            }
            .info2.name{
                font-weight: 500;
                font-size: 36px;
                line-height: 44px;
                /* identical to box height */
                color: #2565AE;
            }
            .info2 p{
                font-size: 16px;
                line-height: 30px;
                /* or 188% */

                text-align: center;
                letter-spacing: 0.05em;
            }
            .items{
                display:flex;
                background:white;
                justify-content:space-between;
                margin-top:50px;
            }
            .item-box1{
                background: rgba(0, 128, 0, 0.4);
                border-radius: 30px;
                padding:0 25px;
               
            }
            .item-box2{
                background: rgba(255, 99, 71, 0.2);
                border-radius: 30px;
                padding:0 25px;
            }
            .item-box2 img{
                padding-top:40px;
                padding:40px 20px 0;
            }
            .item-box3{
                background: rgba(135, 206, 250, 0.4);
                border-radius: 30px;
                padding:0 25px;
            }
            .item-box3 img{
                width:324px;
                height:337px;
            }
            .big-heart{
                position:absolute;
                top:1200px;
                left:0;
            }
            .small-heart{
                position: absolute;
                top:700px;
                right:0;
                
            }
            
            
            
            
            
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->

    <img class="poster" src="img/about/poster.png" alt="">
    <div class="container2">
        <div class="address">
           <span><img src="img/home.png" alt=""></span>
           <span><img class="arrow"src="img/arrow.png" alt=""></span>
           <p>About Us</p>
        </div>
        <p class="info-name">The Founding of Po Leung Kuk</p>
        <div class="container3">
            <div class="info1">
                <p>In the late 19th Century, abduction and trafficking of women and children were serious crimes in Hong Kong. On 8th November, 1878, a group of local Chinese presented a petition to the Governor, Sir John Pope Hennessy, K.C.M.G., to set up Po Leung Kuk to rescue the kidnapped victims. The “Society for the Protection of Women and Children” was approved by the Hong Kong Governor in May, 1880, but as the petition was submitted on 8th November, 1878, that date was adopted as our founding date.</p>
                <p>“Po Leung”, translating literally as protection of the young and the innocent, represents the core vision of our organisation. Formally established as the Society for the Protection of Women and Children in 1880, in our long history we have prevented and resolved kidnappings, protected destitute women and children, and assisted the Secretary for Chinese Affairs (under British Rule) as a mediator in complex family and marriage disputes.</p>
                <p>In line with the economic development of Hong Kong over the past century, the range of services and coverage we provided to the community constantly expanded as welfare needs evolved. Today, we are Hong Kong’s leading social service organisation and fundraiser. Under a modern corporatised management structure, we are able to utilise donation dollars to maximize the returns to our most important stakeholder – the community.</p>
            </div>
            <img src="img/about/building.png" alt="">
        </div>
        <div class="container4">
            <div class="info2">
                <p class="info2 name">Beneficiaries</p>
                <p>Po Leung Kuk provides multifaceted and quality social, educational, recreational and cultural services to all ages in the community through its 300 service units. Every year, the Kuk serves over 800,000 people on average with about 45,000 students of its affiliated schools.</p>
            </div>
            <div class="items">
                <div class="item-box1">
                    <div class="ib1"></div>
                    <img src="img/about/elderly.png" alt="">
                </div>
                <div class="item-box2">
                    <div class="ib2"></div>
                    <img src="img/about/kids.png" alt="">
                </div>
                <div class="item-box3">
                    <div class="ib3"></div>
                    <img src="img/about/teens.png" alt="">
                </div>
            </div>
        </div>
        <img src="img/about/big-heart.png" class="big-heart" alt="">
        <img src="img/about/small-heart.png" class="small-heart" alt="">
       
    </div>

@include('layouts.footer')

</body>
</html>