<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1ed92467bb.js" crossorigin="anonymous"></script> <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       
       
        <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        
        .body{
            background: #f5f6f7;
            display:flex;
            justify-content: center;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            height:100vh;
            margin: 0 auto;
        }
        .container2{
            background-color:white;
            border-radius:10px;
            width:768px;
            max-width:100%;
            min-height:480px;
            position:relative;
            overflow:hidden;
            box-shadow:0px 14px 28px rgba(0,0, 0,0.25),
                    0px 10px 10px rgba(0,0,0,0.22);
        }
        .form-container{
            position: absolute;
            top:0%;
            height:100%;
            transition: all 0.6 ease-in-out;
        }
        .sign-up-container{
            left:0;
            width:50%;
            z-index:1;
            opacity: 0;
        }
        form{
            background-color:white;
            display:flex;
            align-items: center;
            justify-content: center;
            flex-direction:column;
            padding:0px 50px;
            height:100%;
            text-align:center;
        }
        form h1{
            font-weight:bold;
            margin:0;
        }
        .social-container{
            margin:20px 0;
        }
        .social-container a{
            border:1px solid gray;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            height: 40px;
            width: 40px;
            margin:0 5px;
        }
        .social-container a{
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }
        span{
            font-size: 12px;
        }
        input{
            background-color:#eee;
            border: none;
            text-decoration: none;
            margin: 8px 0;
            padding: 12px 15px;
            width: 100%;
        }
        .btn-sign, .press{
            border-radius: 20px;
            border: 1px solid #1E90Ff;
            background-color:#1E90Ff;
            color:white;
            font-weight:bold;
            padding: 12px 45px;
            letter-spacing:1px;
            text-transform: uppercase;
            transition:transform 0.8s ease-in ;
        }
        .sign-in-container{
            left:0;
            width:50%;
            z-index:2;
        }
        .overlay-container{
            position: absolute;
            top:0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            z-index: 100;
            transition: transform 0.6s ease-in-out;
        }
        .overlay{
            
            background: linear-gradient(90deg, #0162c8, #55e7fc);
            background-repeat:no-repeat ;
            background-size:cover ;
            background-position:0 0 ;
            color: white;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }
        .overlay-panel{
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0px 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform:translateX(0) ;
            transition: transform 0.6s ease-in-out;
        }
        .overlay-left{
            transform: translateX(-20%);
        }
        .overlay-right{
            right:0;
            transform: translateX(0);
        }
        button:active{
            transform:scale(0.95)
        }
        button.press{
            background-color: transparent;
            border-color:white;
        }
        .overlay-panel p{
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }
        .container2.right-panel-active .sign-in-container{
            transform: translateX(100%);
        }
        .container2.right-panel-active .sign-up-container{
            transform: translateX(100%);
            opacity: 1;
            z-index:5;
            animation: slide 0.6s;
        }
        @keyframes slide{
            0%,49.99%{
                opacity: 0;
                z-index: 1;
            }
            50%,100%{
                opacity: 1;
                z-index: 5;
            }
        }
        .container2.right-panel-active .overlay-container{
            transform: translateX(-100%);
        }
        .container2.right-panel-active .overlay{
            transform: translateX(50%);
        }
        .container2.right-panel-active .overlay-left{
            transform: translateX(0);
        }
        .container2.right-panel-active .overlay-right{
            transform: translateX(20%);
        }
                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
<div class="body">
        <div class="container2" id="container2">
            <div class="form-container sign-up-container">
                <form action="">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href=" "class="social"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=" "class="social"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href=" "class="social"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your gmail for registration</span>
                    <input type="text" placeholder="Username">
                    <input type="pasword" placeholder="Password">
                    <input type="pasword" placeholder="Password">
                    <input type="pasword" placeholder="Password">
                    <button class="btn-sign">Sign up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="">
                        <h1>Sign In</h1>
                        <div class="social-container">
                            <a href=" "class="social"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href=" "class="social"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href=" "class="social"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your Your account</span>
                        <input type="text" placeholder="Username">
                        <input type="pasword" placeholder="Password">
                        <button class="btn-sign">Sign In</button>
                    </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome To FF!</h1>
                        <p>Please Subscribe and Support to our channel</p>
                        <button class="press" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Frontend Forever</h1>
                        <p>Learn web designing from here in tamil and english</p>
                        <button class="press" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const sigeUpButton = document.getElementById("signUp");
        const sigeInButton = document.getElementById("signIn");
        const container = document.getElementById("container2");

        sigeUpButton.addEventListener('click',()=>{
            container.classList.add("right-panel-active");
        })

        sigeInButton.addEventListener('click',()=>{
            container.classList.remove("right-panel-active");
        })
    </script>



</body>
</html>