<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://kit.fontawesome.com/1ed92467bb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <!-- Fonts -->
        
       
       
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
    background-image:url(/img/youth1/depress.png);
    background-position: bottom;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container2{
    color: white;
    text-align: center;
}
.container2 h1{
    font-size: 30px;
    margin-bottom: 20px;
}
.container2 h3{
    font-size: 20px;
}
button{
    border: none;
    outline: none;
    background-color: red;
    border-radius: 30px;
    font-size: 1.1em;
}
button.submit{
    color: #fff;
    padding: 14px 64px;
    margin: 32px auto;
    text-transform:uppercase ;
    letter-spacing: 2px;
    font-weight: bold;
    background-image: linear-gradient(to right, #8b33c5, #15a0e1);
    cursor: pointer;
    transition: opacity 0.4s;
}
button.submit:hover{
    opacity:0.7;
}
section{
    width: 80%;
    margin: 80px auto;
}
section .container3{
    display: flex;
    margin-bottom: 80px;
}
section .container3 .card-lapping{
    margin-right: 50px;
}
section .container3 .card-lapping img{
    max-width:550px;
    cursor: pointer;
    transition: 0.5s;
    position: relative;
}

section .container3.youth2 .card-lapping img:hover{
    opacity:0.7;
    transform: rotate(-5deg);
    transition: 0.5s;
 }
section .container3.youth1 .card-lapping img:hover{
   opacity:0.7;
   transform: rotate(5deg);
   transition: 0.5s;
}
section .container3 .info{
    margin-top: 30px;
}
section .container3 .info.youth1 .title{
    color:#0ABAB5;
    padding-bottom: 35px;
    line-height: 19px;
    /* identical to box height, or 80% */
    letter-spacing: 0.05em;
    font-size: 28px;
}
section .container3 .info.youth2{
    margin-top: 10px;
}
section .container3 .info.youth2 .title{
    color:#7FC7DF;
    padding-bottom: 35px;
    line-height: 30px;
    /* identical to box height, or 80% */
    letter-spacing: 0.05em;
    font-size: 28px;
}
section .container3 .info .description{
    line-height: 30px;
    /* or 150% */
    letter-spacing: 0.05em;
    margin-bottom: 20px;
    font-size: 20px;
}
section .container3 .info .btn-readmore{
    display:inline-block;
    font-size: 1.1em;
    color: #FFD700;
    letter-spacing: 2px;
    font-weight: bold;
    cursor: pointer;
    cursor: pointer;
    transition: 0.5s;
}
section .container3 .info .btn-readmore a{
    text-decoration: none;
    color: #FFD700;
    transition: 0.5s;
}
section .container3 .info .btn-readmore i{
   transition: 0.5s;
}
section .container3 .info .btn-readmore:hover > a{
    text-decoration: underline;
    color: #FFD700;
}
section .container3 .info .btn-readmore:hover > i{
    transform: translateX(10px);
}
@media all and (max-width:1165px){
    section{
        text-align: center;
        width: 90%;
        margin: 50px auto;
    }
    section .container3{
        flex-direction: column;
        text-align: center;
      
    }
    section .container3 .card-lapping{
        margin-right: 0;
       
    }
    section .container3 .card-lapping img{
        max-width: 100%;
        margin-bottom: 40px;
    }
    section .container3 .info{
        margin: 0;
    }
    section .container3 .info .description{
        letter-spacing: 0em;
        margin-bottom: 10px;
    }
}    
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
    <header>
        <div class="container2">
           <h1>Are you depress?</h1>
            <h3>A series of questions designed to assess your emotional, physical, and intellectual symptoms.</h3>
            <button class="submit">Make a test</button>
        </div>
    </header>
    <section class="content">
           <div class="container3 youth1">
                <div class="card-lapping">
                    <img src="img/youth1/youth2-1.png" alt="" class="img1">
                </div>
                <div class="info youth1">
                    <h2 class="title">Element of Emotion</h2>
                    <p class="description">Emotions, which live with us every day, sometimes remind us of them before our consciousness does. When we encounter unfair treatment, A feels frustrated, while B shows incomparable anger, why the two emotions...</p>
                    <div class="btn-readmore">
                        <a href="">Read more</a>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
           </div>
           <div class="container3 youth2">
                <div class="card-lapping">
                    <img src="img/youth1/youth2-2.png" alt="" class="img1">
                </div>
                <div class="info youth2">
                    <h2 class="title">How do I listen to people? How do I speak to people?</h2>
                    <p class="description">Every word, whether it comes out of kindness or ill will, from the other person's mouth or their own inner voice, different emotions will turn into a set of notes, which will amplify, refine, and even adapt the original meaning of the words,...</p>
                    <div class="btn-readmore">
                        <a href="">Read more</a>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
           </div>
       </section>




</body>
</html>