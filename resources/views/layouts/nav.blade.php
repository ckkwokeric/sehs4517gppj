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
.container{
    background: #f2f2f2;
}
nav{
    background: #008DD0;
}
nav:after{
    content:'';
    clear:both;
    display: table;
}
nav .logo{
    float: left;
    color: white;
    font-size: 27px;
    font-weight: 600;
    line-height: 70px;
    padding-left: 60px;
    
}
nav ul{
    float:right;
    list-style:none;
    margin-right: 40px;
    position: relative;
}
nav ul li{
    float: left;
    display: inline-block;
    background: #008DD0;
    margin: 0 5px;
}
nav ul li a{
    color: white;
    text-decoration: none;
    line-height: 70px;
    font-size: 18px;
    padding: 8px 15px;
    position: relative;
}
/* nav ul li a:after{
    content:'';
    position: absolute;
    width: 0;
    height: 2px;
    background-color:#33ffff;
    left: 0;
    bottom: -10px;
    transition: 0.4s;
}
nav ul li a:hover:after{
    color: cyan;
    width:100%;
} */
nav ul li a:hover{
    color: cyan;
    border-radius: 5px;
    box-shadow: 0 0 5px #33ffff,
                0 0 5px #33ffff;
}
nav ul ul i a:hover{
    color: cyan;
    box-shadow: none;
}
nav ul ul{
    position: absolute;
    top: 90px;
    border-top: 3px solid cyan;
    opacity: 0;
    visibility: hidden;
    transition:top 0.2s;
}
nav ul li:hover >ul{
    top: 70px;
    opacity:1;
    visibility: visible;
}
nav ul ul li{
    position: relative;
    margin: 0;
    width: 160px;
    float: none;
    display: list-item;
    border-bottom:1px solid rgba(0,0,0,0.3)
}

nav ul ul.col-2 li{
    width:310px;
}
nav ul ul.col-4 li{
    width:100px;
}
.show, .icon, input{
    display: none;
}
@media all and (max-width:968px){
    nav ul{
        margin-right: 0px;
        float: left;
    }
    nav .logo{
        padding-left: 30px;
        width: 100%;
    }
    nav ul li, nav ul ul li{
        display: block;
        width: 100%;
    }
    nav ul ul{
        top: 70px;
        position: static;
        border-top: none;
        float: none;
        display: none;
        opacity: 1;
        visibility: visible;
    }
    nav ul ul a{
        padding-left: 40px;
    }
    nav ul ul li{
        border-bottom: 0px;
    }
    .show{
        display: block;
        color: white;
        font-size: 18px;
        padding: 0 20px;
        line-height: 70px;
        cursor:pointer;
    }
    .show:hover{
        color:cyan;
    }
    .icon{
        display: block;
        color:white;
        position: absolute;
        right: 40px;
        line-height: 70px;
        font-size: 25px;
        cursor: pointer;
    }
    nav ul li a:hover{
        box-shadow: none;
    }
    .show + a, ul{
        display: none;
    }
    [id^=btn]:checked + ul{
        display: block;
    }
}
</style>
    </head>
    <body>
    <div class="container">
            <nav>
                <div class="logo">Community Center</div>
                <label for="btn" class="icon">
                    <span class="fa-solid fa-bars"></span>
                </label>
                <input type="checkbox" id="btn">
                <ul>
                    <li><a href="">About us</a></li>
                    <li>
                        <label for="btn-1" class="show">New +</label>
                        <a href="">New</a>
                        <input type="checkbox" id="btn-1">
                        <ul class="col-1">
                            <li><a href="">New Services</a></li>
                            <li><a href="">New Activities</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="btn-2" class="show">Youth Support +</label>
                        <a href="">Youth Support</a>
                        <input type="checkbox" id="btn-2">
                        <ul class="col-2">
                            <li><a href="{{ url('youth1') }}">Mental Support</a></li>
                            <li><a href="">Student Development Service</a></li>
                            <li><a href="">Welling for Youths</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="btn-3" class="show">Elderly Support +</label>
                         <a href="">Elderly Support</a>
                         <input type="checkbox" id="btn-3">
                        <ul class="col-3">
                            <li><a href="">New Services</a></li>
                            <li><a href="">New Activities</a></li>
                        </ul>
                    </li>
                    <li><a href="">Contact Us</a></li>
                    <li>
                        <label for="btn-4" class="show">Language</label>
                        <a href=""><i class="fa-solid fa-earth-americas"></i></a>
                        <input type="checkbox" id="btn-4">
                        <ul class="col-4">
                            <li><a href="">English</a></li>
                            <li><a href="">Chinese</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                    </li>
                </ul>
            </nav>

    </div>
<!-- </body>
</html> -->
  