<script src="https://kit.fontawesome.com/1ed92467bb.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    footer {
        position: relative;
        width: 100%;
        background: #008DD0;
        min-height: 100px;
        padding: 20px 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    footer .so-icon,
    footer .menu {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px 0;
    }

    footer .so-icon li,
    footer .menu li {
        list-style: none;
    }

    footer .so-icon li a {
        font-size: 2em;
        color: white;
        margin: 0 10px;
        display: inline-block;
        transition: 0.5s;
    }

    footer .so-icon li a:hover {
        transform: translateY(-10px);
    }

    footer .menu li a {
        font-size: 1.2em;
        color: white;
        margin: 0 10px;
        display: inline-block;
        transition: 0.5s;
        text-decoration: none;
    }

    footer .menu li a:hover {
        opacity: 1;
    }

    footer p {
        color: white;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 10px;
        font-size: 1.1em;
    }
</style>
<div class="container-end">
    <footer>
        <ul class="so-icon">
            <li><a href="https://twitter.com/?lang=zh-Hant" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
        <ul class="menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('home') }}">About</a></li>
            <li><a href="{{ route('youth1') }}">Youth Services</a></li>
            <li><a href="{{ route('elderlysupport') }}">Elder Services</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <p>	&copy; 2022 Community Center | All Rights Reserved</p>
    </footer>
</div>
