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
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       
       
 <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    
}

.body{
    min-height: 100vh;
    width: 100%;
    display:grid;
    grid-template-columns: 1fr 1fr;
    color: #303433;
}

section{
    display: flex;
    justify-content: center;
    align-items: center;
}
section.side{
    background:url(img/login/bk.png) no-repeat;
    background-size: 100% 102%;
}
.side img{
    width: 50%;
    max-width: 50%;
}
.login-container{
    max-width: 450px;
    padding: 24px;
    display: flex;
    flex-direction: column;
    align-items:center ;
}
.title{
    text-transform: uppercase;
    font-size: 3em;
    font-weight: bold;
    text-align: center;
    letter-spacing: 1px;
}
.seperator{
    width: 150px;
    height: 4px;
    background-color: #843bc7;
    margin: 24px;
}
.welcome-message{
    text-align: center;
    font-size: 1.1em;
    line-height: 28px;
    margin-bottom: 20px;
    color: #696969;
}
.message{
    display:none
}

.error-message{
    display:block;
    color:red;
    margin-bottom:10px;
}
.login-form{
    width: 100%;
    display: flex;
    flex-direction: column;
}
.field{
    display:block;
}
.form-control{
    width: 100%;
    position: relative;
    margin-bottom: 24px;
}
.form-control:nth-child(2){
    margin-bottom:5px
}
.login-form .remind{
    font-size:14px;
    text-align:right;
    font-weight:600;
}
.login-form .remind a{
    color:#1E90FF;
}
.login-form .remind a:hover{
    opacity:0.7;
}
.field,
button{
    border: none;
    outline: none;
    background-color: red;
    border-radius: 30px;
    font-size: 1.1em;
}
.field{
    width: 100%;
    background: #e6e6e6;
    color: #333;
    letter-spacing: 0.5px;
    padding: 14px 64px;
}
.field.error{
    border:1px solid red;
}

.field ~ i {
    position: absolute;
    top: 50%;
    left: 32px;
    transform: translateY(-50%);
    color: #888;
    transition: color 0.4s;
}
.field:focus ~ i{
    color: #843bc7;
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
/* responsive */
@media(max-width:780px){
  .body{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .side{
      display: none;
  }
}
                                 
</style>

@include('layouts.nav')

<!-- <body> -->
<div class="container2">
    <div class="body">
      <section class="side">
          <img src="img/login/form.svg" alt="">
      </section>  

      <section class="main">
          <div class="login-container">
             <p class="title">Welcome back</p>
             <div class="seperator"></div>
             <p class="welcome-message">Please,
                 provide login credential to proceed and have access to all our  services
             </p>
             <p class="message error-message">Sorry, your input is incorrect</p>

             <form action="" class="login-form">
                 <div class="form-control">
                     <input type="text" placeholder="username" class="field error">
                     <i class="fa-solid fa-user"></i>     
                 </div>
                 <div class="form-control">
                     <input type="password" placeholder="password" class="field error">
                     <i class="fa-solid fa-lock"></i>
                 </div>
                 <p class="remind"><a href="">Don't have account?</a></p>

                 <button class="submit">Login</button>
             </form>
          </div>
      </section>
      </div>
      </div>

      @include('layouts.footer')

</body>
</html>