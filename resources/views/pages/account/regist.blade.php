<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
.container2{
    display: flex;
    justify-content: center;
    align-items: center;
    
    padding: 10px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container3{
    max-width: 700px;
    background: white;
    width: 100%;
    padding: 25px 30px;
    border-radius: 5px;
}
.container3 .title{
    font-size: 25px;
    font-weight: 700;
    position: relative;
}
.container3 .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width:30px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container3 form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
}
.user-details .input-box .details{
    display: block;
  font-weight: 700;
  margin-bottom:5px ;
}
.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc ;
    padding-left: 15px;
    font-size: 16px;
    transition: all 0.3s ease;
}
.input-box input{
    display: inline-block;
}
.input-box .message, .gender-details .message{
    display:none;
}
.input-box .error-message, .gender-details .error-message{
    display:block;
    font-size:14px;
    color:red;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border:2px solid #9b59b6;
}
.user-details .input-box input.error{
    border:2px solid red;
}
form .gender-details{
    width:100%;
}
form .gender-details .gender-title{
    font-size:20px ;
    font-weight: 700;
}
form .gender-details .category{
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
}
.gender-details input{
    display: inline-block;
}
.gender-details .category label{
    display: flex;
    align-items: center;
}
.gender-details .category .dot{
    height: 18px;
    width: 18px;
    background: #d9d9d9;
    border-radius: 50%;
    margin-right: 10px;
    border: 5px solid transparent;
    transition: all 0.3s ease;
}
#dot-1:checked ~ .category .one,
#dot-2:checked ~ .category .two,
#dot-3:checked ~ .category .three{
    border-color: #d9d9d9;
    background:#9b59b6;
}
form input[ type="radio"]{
    display: none;
}
form .btn{
    height: 45px;
    margin: 45px 0;
}
.btn input{
    display: inline-block;
    height: 100%;
    width: 100%;
    outline: none;
    color: white;
    border: none;
    font-size: 18px;
    font-weight: 700;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
form .btn input:hover{
    opacity: 0.8;
    transition: all 0.4s ease;
    cursor: pointer;
}
@media(max-width:584px){
        .container3{
            max-width: 100%;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width: 100%;
        }
        form .gender-details .category{
            
            width: 100%;
        }
        .container3 form .user-details{
            max-height: 300px;
            overflow-y: scroll;
        }
        
}

                                 
        </style>
        
@include('layouts.nav')
<!-- <body> -->
<div class="container2">
            <div class="container3">
                <div class="title">Registration</div>
                <form action="">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">First Name</span>
                            <input type="text" class="field error" placeholder="Firstname" required>
                            <span class="message error-message">Incorrect input</span>
                        </div>
                        <div class="input-box">
                            <span class="details">Last Name</span>
                            <input type="text" class="field error" placeholder="Lastname" required>
                            <span class="message error-message">Incorrect input</span>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" class="field error" placeholder="Email" required>
                            <span class="message error-message">Incorrect input</span>
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" class="field error" placeholder="Phone number" required>
                            <span class="message error-message">Incorrect input</span>
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" class="field error" placeholder="Password" required>
                            <span class="message error-message">Incorrect input</span>
                        </div>
                        <div class="input-box">
                            <span class="details">Date</span>
                            <input type="date" class="field error" placeholder="Firstname" required>
                            <span class="message error-message">Incorrect input</span>
                        </div>
                    </div>
                    <div class="gender-details">
                            <input type="radio" name="gender" id="dot-1" class="field">
                            <input type="radio" name="gender" id="dot-2">
                            <input type="radio" name="gender" id="dot-3">
                            <span class="gender-title">Gender</span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="gender">Male</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">Female</span>
                                </label>
                                <label for="dot-3">
                                    <span class="dot three"></span>
                                    <span class="gender">Prefer not to say</span>
                                </label>
                            </div>
                            <span class="message error-message">Must be filled</span>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Registration" class="field">
                    </div>
                </form>
        </div>
    </div>


@include('layouts.footer')

</body>
</html>