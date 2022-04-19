<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/1ed92467bb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       
       
        <style>
                  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
header{
    width: 100%;
    height: 100vh;
    background-image: url(/img/questionnaire/poster.png);
    background-position: bottom;
    background-size: cover;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.container2{
    color: black;
    text-align: start;
    margin-left: 5%;
    margin-right: 5%;
}
.container2 h1{
    line-height: 40px;
    letter-spacing: 0.05em;
    padding-bottom: 40px;
}
.container2 h3{
    font-size: 24px;
    padding-bottom: 15px;
}
.container2 p{
    max-width:500px;
    line-height: 30px;
    letter-spacing: 0.05em;
}
.container3{
   margin: 40px 5%;
}
.container3 .info{
    font-size: 20px;
line-height: 49px;
color: rgba(0, 0, 0, 0.6);
margin: 40px 0;
}
.container3 .message{
    display:none;
}
.container3 .error-message{
    display:block;
    color: red;
}
.question-details input{
    display: inline-block;
}
.category1, .category2{
    display: grid;
}
.input-box input{
    display: inline-block;
}
.btn input{
    display: inline-block;
}
.question-title{
    line-height: 29px;
    font-size: 20px;
    color: rgba(0, 0, 0, 0.9);
    
}


.category{
    margin: 20px 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);    
    margin-bottom: 30px;
}

.category label{
    color: rgba(0, 0, 0, 0.8);
    margin-bottom: 20px;
    font-size: 20px;
    display: flex;
    align-items: center;
    margin-left: 3%;
}
.category label:nth-child(5){
    margin-bottom: 30px;
}
.question-details .category .dot{
    height: 18px;
    width: 18px;
    background: #d9d9d9;
    border-radius: 50%;
    margin-right: 10px;
    
    border: 5px solid transparent
}
#dot-2:checked ~ .category .dot.two,
#dot-1:checked ~ .category .dot.one,
#dot-3:checked ~ .category .dot.three,
#dot-4:checked ~ .category .dot.four,
#dot-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;;
}
#dot2-1:checked ~ .category .dot.one,
#dot2-2:checked ~ .category .dot.two,
#dot2-3:checked ~ .category .dot.three,
#dot2-4:checked ~ .category .dot.four,
#dot2-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;;
}
#dot3-1:checked ~ .category .dot.one,
#dot3-2:checked ~ .category .dot.two,
#dot3-3:checked ~ .category .dot.three,
#dot3-4:checked ~ .category .dot.four,
#dot3-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;;
}
#dot4-1:checked ~ .category .dot.one,
#dot4-2:checked ~ .category .dot.two,
#dot4-3:checked ~ .category .dot.three,
#dot4-4:checked ~ .category .dot.four,
#dot4-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;;
}
#dot5-1:checked ~ .category .dot.one,
#dot5-2:checked ~ .category .dot.two,
#dot5-3:checked ~ .category .dot.three,
#dot5-4:checked ~ .category .dot.four,
#dot5-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;;
}
#dot6-1:checked ~ .category .dot.one,
#dot6-2:checked ~ .category .dot.two,
#dot6-3:checked ~ .category .dot.three,
#dot6-4:checked ~ .category .dot.four,
#dot6-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;;
}
#dot7-1:checked ~ .category .dot.one,
#dot7-2:checked ~ .category .dot.two,
#dot7-3:checked ~ .category .dot.three,
#dot7-4:checked ~ .category .dot.four,
#dot7-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;;
}
#dot8-1:checked ~ .category .dot.one,
#dot8-2:checked ~ .category .dot.two,
#dot8-3:checked ~ .category .dot.three,
#dot8-4:checked ~ .category .dot.four,
#dot8-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;;
}
#dot9-1:checked ~ .category .dot.one,
#dot9-2:checked ~ .category .dot.two,
#dot9-3:checked ~ .category .dot.three,
#dot9-4:checked ~ .category .dot.four,
#dot9-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;
}
#dot10-1:checked ~ .category .dot.one,
#dot10-2:checked ~ .category .dot.two,
#dot10-3:checked ~ .category .dot.three,
#dot10-4:checked ~ .category .dot.four,
#dot10-5:checked ~ .category .dot.five{
    border-color: #d9d9d9;
    background: #008DD0;;
}

form input[type="radio"]{
    display:none;
}
.btn
{
    height: 45px;
    margin: 45px 0;
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.btn input{
    height: 100%;
    width: 20%;
    outline: none;
    color: white;
    border: none;
    font-size: 18px;
    letter-spacing: 1px;
    background: #008DD0;
    font-weight: 700;
    border-radius: 5px;
}

@media all and (max-width:600px){
    .container3 .info{
        line-height: 49px;
    }
    .question-title{
        line-height: 30px;
    }
    .category{
        margin-top: 20px;
    }
   
    .btn{
        height: 45px;
        margin: 45px 0;
    }
    .btn input{
        height: 100%;
        width: 100%;
        outline: none;
        color: white;
        border: none;
        font-size: 18px;
        letter-spacing: 1px;
        background: #008DD0;
        font-weight: 700;
        border-radius: 5px;
    }
    .btn:hover{
        opacity: 0.9;
    }
}

                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
<header>
        <div class="container2">
           <h1>Kessler Psychological Distress Inventory (K10)</h1>
            <h3>What is K10?</h3>
            <p>The Kessler Psychological Distress Scale (K10) is a psychological screening tool designed to identify adults with significant levels of psychological distress. It is widely used in Australia and often used in primary care settings to identify people with clinically significant psychological distress.</p>
        </div>
    </header>

    <div class="container3">
        <p class="info">This is a small test to assess your level of mental distress. Here are some questions that ask you about your emotions. For each question, select the option that best describes how often the emotion occurs.</p>
        <p class="message error-message">*Please enter all the questions.</p>
        <form action="">
            <div class="question-details">
                <input type="radio" name="question" id="dot-1" >
                <input type="radio" name="question" id="dot-2" >
                <input type="radio" name="question" id="dot-3" >
                <input type="radio" name="question" id="dot-4" >
                <input type="radio" name="question" id="dot-5" >
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">1. In the past month, how many times have you felt unexplainably exhausted?</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>

            <div class="question-details">
                <input type="radio" name="question" id="dot2-1">
                <input type="radio" name="question" id="dot2-2">
                <input type="radio" name="question" id="dot2-3">
                <input type="radio" name="question" id="dot2-4">
                <input type="radio" name="question" id="dot2-5">
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">2. During the past 1 month, how often did you feel nervous?</span>
                <div class="category">
                    <label for="dot2-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot2-2">
                        <span class="dot two"></span>
                        <span class="question-2"> Most of the time</span>
                    </label>
                    <label for="dot2-3">
                        <span class="dot three"></span>
                        <span class="question-2">Some of the time</span>
                    </label>
                    <label for="dot2-4">
                        <span class="dot four"></span>
                        <span class="question-2">A little of the time</span>
                    </label>
                    <label for="dot2-5">
                        <span class="dot five"></span>
                        <span class="question-2"> None of the time</span>
                    </label>
                </div>
            </div>

            <div class="question-details">
                <input type="radio" name="question" id="dot3-1">
                <input type="radio" name="question" id="dot3-2">
                <input type="radio" name="question" id="dot3-3">
                <input type="radio" name="question" id="dot3-4">
                <input type="radio" name="question" id="dot3-5">
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">3. During the past 1 month, how often did you feel so nervous that nothing could calm you down?</span>
                <div class="category">
                    <label for="dot3-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot3-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot3-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot3-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot3-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>

            
            <div class="question-details">
                <input type="radio" name="question" id="dot4-1">
                <input type="radio" name="question" id="dot4-2">
                <input type="radio" name="question" id="dot4-3">
                <input type="radio" name="question" id="dot4-4">
                <input type="radio" name="question" id="dot4-5">
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">4. During the past 1 month, how often did you feel hopeless?</span>
                <div class="category">
                    <label for="dot4-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot4-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot4-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot4-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot4-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>

            <div class="question-details">
                <input type="radio" name="question" id="dot5-1">
                <input type="radio" name="question" id="dot5-2">
                <input type="radio" name="question" id="dot5-3">
                <input type="radio" name="question" id="dot5-4">
                <input type="radio" name="question" id="dot5-5">
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">5. During the past 1 month, how often did you feel restless or fidgety?</span>
                <div class="category">
                    <label for="dot5-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot5-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot5-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot5-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot5-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>
            <div class="question-details">
                <input type="radio" name="question" id="dot6-1">
                <input type="radio" name="question" id="dot6-2">
                <input type="radio" name="question" id="dot6-3">
                <input type="radio" name="question" id="dot6-4">
                <input type="radio" name="question" id="dot6-5">
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">6. During the past 1 month, how often did you feel so restless that you could not sit still?</span>
                <div class="category">
                    <label for="dot6-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot6-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot6-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot6-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot6-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>
            <div class="question-details">
                <input type="radio" name="question" id="dot7-1">
                <input type="radio" name="question" id="dot7-2">
                <input type="radio" name="question" id="dot7-3">
                <input type="radio" name="question" id="dot7-4">
                <input type="radio" name="question" id="dot7-5">
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">7. During the past 1 month, how often did you feel depressed?</span>
                <div class="category">
                    <label for="dot7-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot7-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot7-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot7-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot7-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>
            <div class="question-details">
                <input type="radio" name="question" id="dot8-1">
                <input type="radio" name="question" id="dot8-2">
                <input type="radio" name="question" id="dot8-3">
                <input type="radio" name="question" id="dot8-4">
                <input type="radio" name="question" id="dot8-5">
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">8. During the past 1 month, how often did you feel so depressed that nothing could cheer you up?</span>
                <div class="category">
                    <label for="dot8-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot8-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot8-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot8-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot8-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>
            <div class="question-details">
                <input type="radio" name="question" id="dot9-1">
                <input type="radio" name="question" id="dot9-2">
                <input type="radio" name="question" id="dot9-3">
                <input type="radio" name="question" id="dot9-4">
                <input type="radio" name="question" id="dot9-5">
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">9. During the past 1 month, how often did you feel that everything was an effort?</span>
                <div class="category">
                    <label for="dot9-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot9-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot9-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot9-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot9-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>
            <div class="question-details ">
                <input type="radio" name="question" id="dot10-1">
                <input type="radio" name="question" id="dot10-2">
                <input type="radio" name="question" id="dot10-3">
                <input type="radio" name="question" id="dot10-4">
                <input type="radio" name="question" id="dot10-5">
                <span class="message error-message">*This question had not answered yet.</span>
                <span class="question-title">10. During the past 1 month, how often did you feel worthless?</span>
                <div class="category ">
                    <label for="dot10-1">
                        <span class="dot one"></span>
                        <span class="question"> All of the time</span>
                    </label>
                    <label for="dot10-2">
                        <span class="dot two"></span>
                        <span class="question"> Most of the time</span>
                    </label>
                    <label for="dot10-3">
                        <span class="dot three"></span>
                        <span class="question">Some of the time</span>
                    </label>
                    <label for="dot10-4">
                        <span class="dot four"></span>
                        <span class="question">A little of the time</span>
                    </label>
                    <label for="dot10-5">
                        <span class="dot five"></span>
                        <span class="question"> None of the time</span>
                    </label>
                </div>
            </div>

            <div class="btn">
                <input type="submit" value="Submit" class="field">
            </div>
        </form>
    </div>


@include('layouts.footer')

</body>
</html>