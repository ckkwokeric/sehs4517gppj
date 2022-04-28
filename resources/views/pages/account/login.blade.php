@extends('layouts.app')

@section('title', 'Login')

@section('css')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;

    }

    .body {
        min-height: 100vh;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        color: #303433;
    }

    section {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section.side {
        background: url(img/login/bk.png) no-repeat;
        background-size: 100% 102%;
    }

    .side img {
        width: 50%;
        max-width: 50%;
    }

    .login-container {
        max-width: 450px;
        padding: 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .title {
        text-transform: uppercase;
        font-size: 3em;
        font-weight: bold;
        text-align: center;
        letter-spacing: 1px;
    }

    .seperator {
        width: 150px;
        height: 4px;
        background-color: #843bc7;
        margin: 24px;
    }

    .welcome-message {
        text-align: center;
        font-size: 1.1em;
        line-height: 28px;
        margin-bottom: 20px;
        color: #696969;
    }

    .message {
        display: none
    }

    .error-message {
        display: block;
        color: red;
        margin-bottom: 10px;
    }

    .login-form {
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .field {
        display: block;
    }

    .form-control {
        width: 100%;
        position: relative;
        margin-bottom: 24px;
    }

    .form-control:nth-child(2) {
        margin-bottom: 5px
    }

    .login-form .remind {
        font-size: 14px;
        text-align: right;
        font-weight: 600;
    }

    .login-form .remind a {
        color: #1E90FF;
    }

    .login-form .remind a:hover {
        opacity: 0.7;
    }

    .field,
    button {
        border: none;
        outline: none;
        background-color: red;
        border-radius: 30px;
        font-size: 1.1em;
    }

    .field {
        width: 100%;
        background: #e6e6e6;
        color: #333;
        letter-spacing: 0.5px;
        padding: 14px 64px;
    }

    .field.error {
        border: 1px solid red;
    }

    .field~i {
        position: absolute;
        top: 50%;
        left: 32px;
        transform: translateY(-50%);
        color: #888;
        transition: color 0.4s;
    }

    .field:focus~i {
        color: #843bc7;
    }

    button.submit {
        color: #fff;
        padding: 14px 64px;
        margin: 32px auto;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        background-image: linear-gradient(to right, #8b33c5, #15a0e1);
        cursor: pointer;
        transition: opacity 0.4s;
    }

    button.submit:hover {
        opacity: 0.7;
    }

    button.submit a {
        text-decoration: none;
        color: white;
    }

    /* responsive */
    @media(max-width:780px) {
        .body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .side {
            display: none;
        }
    }
</style>

@endsection

<!-- content -->
@section('content')

@include('layouts.nav')

<div class="container2">
    <div class="body">
        <section class="side">
            <img src="{{ asset('img/login/form.svg') }}" alt="">
        </section>

        <section class="main">
            <div class="login-container">
                <p class="title">Welcome back</p>
                <div class="seperator"></div>
                <p class="welcome-message">Please,
                    provide login credential to proceed and have access to all our services
                </p>


                <form action="{{ route('loginUser') }}" class="login-form" method="POST">
                    @csrf

                    @error('loginError')
                    <p class="message error-message">{{ $message }}</p>
                    @enderror

                    @error('email')
                    <p class="message error-message">{{ $message }}</p>
                    @enderror

                    <div class="form-control">
                        <input type="text" placeholder="Email" class="field @error('email') error @enderror"
                            name="email">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    @error('password')
                    <p class="message error-message">{{ $message }}</p>
                    @enderror
                    <div class="form-control">
                        <input type="password" placeholder="Password" class="field @error('password') error @enderror"
                            name="password">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <p class="remind"><a href="{{ route('registration') }}">Don't have account?</a></p>

                    <button class="submit" type="submit">Login</button>
                </form>
            </div>
        </section>
    </div>
</div>

@include('layouts.footer')

@endsection
