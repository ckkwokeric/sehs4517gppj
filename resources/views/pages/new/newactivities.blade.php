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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     
        <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
.container2{
    margin:  7% 5% 5%;
    position: relative;
}
.container2 img{
    width: 100%;
}
.container2 .bulk{
    width: 40%;
    position: absolute;
    left: -5%;
    top: -30%;
}
.container3{
    margin: 5%;
}

.container3 span, .container4 span{
    font-size: 32px;
    line-height: 44px;
    letter-spacing: 0.05em;
    font-weight: 700;
    
}
.content-table{
    border-collapse:collapse;
    margin:25px 0;
    width: 100%;
}
.content-table thead tr{
    background: #4EB4D4;
    color:white;
    text-align:center;
    font-size: 16px;
    line-height: 19px;
    font-weight: 600;
}
.content-table th,
.content-table td
{
    padding:10px 15px;
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
.container4{
    margin: 5%;
}
.container9{
    display: flex;
}
.container10{
    width: calc(100% / 3);
    height:619px ;
    padding-bottom: 50px;
    margin-top: -4px;
}
.container10:hover{
    transform: translate(-10px,-10px);
    cursor: pointer;
    transition: 0.2s;
}
.container10.one{
    background: rgba(2, 3, 129, 0.8);
}
.container10.two{
    background: rgba(252, 185, 0, 0.8);
}
.container10 .title{
    color: white;
    font-size: 24px;
    font-weight: 600;
    text-align: center;
    margin: 5% 0;
}
.container10 .images{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container10 .images img{
    width: 80%;
}
.container10 .info{
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: justify;
    font-size: 16px;
    color: white;
    letter-spacing: 0.05em;
    line-height: 30px;
}
.container10 .info p{
    width: 80%;
}
.btn-join.two{
    background: #008DD0;
    color: white;
    padding: 10px 50px;
    margin-top: 20px;
    margin-bottom: 20px;
    display: inline-block;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    padding: 10px 20px;
    font-weight: 700;
   margin: 50px 39%;
   border-radius: 5px;
}
.btn-join.two a{
    color: white;
    text-decoration: none;
}
.btn-join.two:hover{
    cursor: pointer;
    transition: 0.2s;
    opacity: 0.7;
}
@media all and (max-width:1045px){
    .container9{
        flex-wrap: wrap;
    }
     .container10{
        width: calc(100% / 2);
         padding-bottom: 5%;
     }
     .container10{
         margin-bottom: 5px;
     }
}
@media all and (max-width:600px){
    .container10{
        width: 100%;
         margin: 0 5%;
         padding-bottom: 5%;
     }
}
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->

<!-- content -->
<div class="container2">
            <img src="img/new-activities.png" alt="">
            <img src="img/activity/light-bulk.png" alt="" class="bulk">
    </div>

    <div class="container3">
        <img src="img/activity/flower-icon.png" alt="">
        <span>New Timetable</span>
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
                        <td>join</td>
                    </tr>
                    <tr>
                        <td>16/4/2022 Saturday</td>
                        <td>17/4/2022 Saturday</td>
                        <td>/</td>
                        <td>10:00 - 13:00</td>
                        <td>Cantonese</td>
                        <td>Mobile Application Work Class(Parent-child)</td>
                        <td>join</td>
                    </tr>
                    <tr>
                        <td>16/4/2022 Saturday</td>
                        <td>17/4/2022 Saturday</td>
                        <td>20/4/2022 Wednesday</td>
                        <td>10:00 - 13:00</td>
                        <td>Cantonese</td>
                        <td>Artificial Intelligence Foundation Class</td>
                        <td>join</td>
                    </tr>
                    <tr>
                        <td>16/4/2022 Saturday</td>
                        <td>17/4/2022 Saturday</td>
                        <td>/</td>
                        <td>10:00 - 13:00</td>
                        <td>Cantonese</td>
                        <td>Artificial Intelligence Foundation Class</td>
                        <td>join</td>
                    </tr>
                    <tr>
                        <td>16/4/2022 Saturday</td>
                        <td>17/4/2022 Saturday</td>
                        <td>/</td>
                        <td>10:00 - 13:00</td>
                        <td>Cantonese</td>
                        <td>Competency-Based Online Work Class:Knowledge of Artificial Intelligence</td>
                        <td>join</td>
                    </tr>
                </tbody>
    </table>
    </div>

    <div class="container4">
        <img src="img/activity/wolf-icon.png" alt="">
        <span>Exciting Adventure</span>
    </div>

    <div class="container9">
            <div class="container10 one">
                <div class="title">
                    Campsite
                </div>
                <div class="images">
                    <img src="img/activity/Campsites.png" alt="">
                </div>
                <div class="info">
                    <p>Notable changes to the race weekend schedule is the ASICS half marathon moved to Saturday and the Village Roadshow Theme Parks Gold Coast Marathon starting earlier at 6am.</p>
                </div>
                
                <div class="btn-join two">
                    <a href="">Join</a>
                </div>
            </div>
            <div class="container10 two">
                <div class="title">
                Adventure
                    </div>
                    <div class="images">
                        <img src="img/activity/Adventure.png" alt="">
                    </div>
                    <div class="info">
                        <p>Notable changes to the race weekend schedule is the ASICS half marathon moved to Saturday and the Village Roadshow Theme Parks Gold Coast Marathon starting earlier at 6am.</p>
                    </div>
                    
                    <div class="btn-join two">
                        <a href="">Join</a>
                    </div>
            </div>
            <div class="container10 one">
                <div class="title">
                Night Hiking
                    </div>
                    <div class="images">
                        <img src="img/activity/night-hiking.png" alt="">
                    </div>
                    <div class="info">
                        <p>Notable changes to the race weekend schedule is the ASICS half marathon moved to Saturday and the Village Roadshow Theme Parks Gold Coast Marathon starting earlier at 6am.</p>
                    </div>
                    
                    <div class="btn-join two">
                        <a href="">Join</a>
                    </div>
            </div>
    </div>


@include('layouts.footer')

</body>
</html>