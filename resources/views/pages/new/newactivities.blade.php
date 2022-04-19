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
            }
            .container3{
                margin-left:100px;
                margin-right:100px;
                justify-content:center;
                margin-top:30px;
                position:relative;
                
            }
            .container3 img:nth-child(1){
                position:absolute;
                top:-135px;
                left:-100px;
            }
            .container3 img:nth-child(2){
               margin-top:77px;
               width:100%;
            }
            .container3 img:nth-child(3){
                position:absolute;
                left:300px;
                bottom:-250px;
            }
            .container4 {
                position:relative;
            }
            .content-table{
                border-collapse:collapse;
                margin:25px 0;
                font-size: 0.9em;
                min-width:400px;
                margin-left:40px;
                margin-right:40px;
                justify-content:center;
            }
            .content-table thead tr{
                background: #4EB4D4;
                color:white;
                text-align:center;
                font-weight: regular;
                font-size: 20px;
                line-height: 19px;
            }
            .content-table th,
            .content-table td{
                padding:30px 25px;
                font-size:18px;
            }
            .content-table tbody tr{
                border-bottom:1px solid #dddd;
                color: #4EB4D4;
            }
            .content-table tbody tr{
                background-color:white;
            }
            .content-table tbody tr:nth-of-type(even){
                background-color:#fafafa;
            }
            .content-table tbody tr:last-of-type{
                border-bottom:2px solid #4EB4D4;
            }
             .container4 .blue-arrow{
                 position:absolute;
                 
                 left:300px;
                 top:700px;
             }   
    
            
            .container5 .name, .container4 .name{
                display:flex;
                margin-left:38px;
                margin-bottom:26px;
                font-weight: 600;
                font-size: 26px;
                margin-top:170px;
            }
            .container5 .name img, .container4 .name img{
                padding-top:17px;
                padding-right:10px;
            }
            .items{
                display:flex;
                text-align:center;
            }
            
            .items .name{
                margin:50px 0;
                text-align:center;
                font-size:20px;
                display:block;
            } 
            .item1 {
                background: rgba(2, 3, 129, 0.8);
            }
            .item2{
                background: rgba(252, 185, 0, 0.8);
            }
            .item1 .container6, .item2 .container6{
                padding:0 10px;
            }
            .item1 .container6 p, .item2 .container6 p{
                padding:0 23px;
                letter-spacing: 0.05em;
                line-height: 20px;
               font-size:14px;
               color:white;
            }
            .item2 .container6 p{
                color:black;
            }
            
            .item1 .container6 .name, .item2 .container6 .name{
                font-size:24px;
            }
           
            .btn{
                background: #008DD0;
                display:inline-block;
                margin-bottom:98px;
                padding:10px 40px;
                text-transform:uppercase;
                margin-top:11px;
            }
            .btn a{
                color:white;
                text-decoration:none;
            }
                
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
    <div class="container2">
        <div class="container3">
            <img src="img/activity/light-bulk.png" alt="">
            <img src="img/new-activities.png" alt="">
            <img src="img/activity/arrow.png" alt="">
        </div>
        <div class="container4">
            <div class="name">
                <span>
                    <img src="img/activity/flower-icon.png" alt="">
                </span>
                <p>New Timetable</p>
            </div>
            <table class="content-table">
                <thead>
                    <tr>
                       <th>First Section</th>
                       <th>Second Section</th>
                       <th>Third Section</th>
                       <th>Time</th>
                       <th>Language</th>
                       <th>Activities</th>
                       <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>16/4/2022 Saturday</td>
                        <td>17/4/2022 Saturday</td>
                        <td>/</td>
                        <td>10:00 - 13:00</td>
                        <td>Cantonese</td>
                        <td>Artificial Intelligence Foundation Class</td>
                        <td>Click to join</td>
                    </tr>
                    <tr>
                        <td>16/4/2022 Saturday</td>
                        <td>17/4/2022 Saturday</td>
                        <td>/</td>
                        <td>10:00 - 13:00</td>
                        <td>Cantonese</td>
                        <td>Mobile Application Work Class(Parent-child)</td>
                        <td>Click to join</td>
                    </tr>
                    <tr>
                        <td>16/4/2022 Saturday</td>
                        <td>17/4/2022 Saturday</td>
                        <td>20/4/2022 Wednesday</td>
                        <td>10:00 - 13:00</td>
                        <td>Cantonese</td>
                        <td>Artificial Intelligence Foundation Class</td>
                        <td>Click to join</td>
                    </tr>
                    <tr>
                        <td>16/4/2022 Saturday</td>
                        <td>17/4/2022 Saturday</td>
                        <td>/</td>
                        <td>10:00 - 13:00</td>
                        <td>Cantonese</td>
                        <td>Artificial Intelligence Foundation Class</td>
                        <td>Click to join</td>
                    </tr>
                    <tr>
                        <td>16/4/2022 Saturday</td>
                        <td>17/4/2022 Saturday</td>
                        <td>/</td>
                        <td>10:00 - 13:00</td>
                        <td>Cantonese</td>
                        <td>Competency-Based Online Work Class:Knowledge of Artificial Intelligence</td>
                        <td>Click to join</td>
                    </tr>
                </tbody>
            </table>
            <img class="blue-arrow" src="img/activity/blue-arrow.png" alt="">
        </div>
        <div class="container5">
            <div class="name">
                <span><img src="img/activity/wolf-icon.png" alt=""></span>
                <p>Exciting Adventure</p>
            </div>
            <div class="items">
                <div class="item1">
                    <div class="container6">
                        <p class="name">Campsites</p>
                        <img src="img/activity/Campsites.png" alt="">
                        <p>Notable changes to the race weekend schedule is the ASICS half marathon moved to Saturday and the Village Roadshow Theme Parks Gold Coast Marathon starting earlier at 6am.</p>
                        <div class="btn">
                            <a href="">join</a>
                        </div>
                    </div>
                </div>
                <div class="item2">
                    <div class="container6">
                        <p class="name">Adventure</p>
                        <img src="img/activity/Adventure.png" alt="">
                        <p>Notable changes to the race weekend schedule is the ASICS half marathon moved to Saturday and the Village Roadshow Theme Parks Gold Coast Marathon starting earlier at 6am.</p>
                        <div class="btn">
                            <a href="">join</a>
                        </div>
                    </div>
                </div>
                <div class="item1">
                    <div class="container6">
                        <p class="name">Night Hiking</p>
                        <img src="img/activity/night-hiking.png" alt="">
                        <p>Notable changes to the race weekend schedule is the ASICS half marathon moved to Saturday and the Village Roadshow Theme Parks Gold Coast Marathon starting earlier at 6am.</p>
                        <div class="btn">
                            <a href="">join</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@include('layouts.footer')

</body>
</html>