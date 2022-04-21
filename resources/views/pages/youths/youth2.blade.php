<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        section {
            margin: 5% 100px;
        }

        .container2 {
            display: flex;
            font-size: 16px;
            line-height: 30px;
            text-align: justify;
        }

        .container2 .heart {
            width: 50%;
        }

        .container2 .info {
            padding-left: 20px;
            font-weight: 600;
        }

        .container2 .poster {
            padding-left: 20px;
        }

        .container4 {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            min-height: 100vh;
        }

        .wrapper {
            max-width: 1100px;

        }

        .wrapper .gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery span {
            display: flex;
            width: 100%;
            overflow: hidden;
        }

        .gallery .image {
            padding: 7px;
            width: calc(100% / 3);
        }

        .gallery .image img {
            width: 100%;
            vertical-align: middle;
            transition: all 0.3s ease;
        }

        .gallery .image:hover img {
            transform: scale(1.1);
        }

        @media all and (max-width:1253px) {
            section {
                margin: 5%;
            }

            .container2 {
                flex-direction: column;
                text-align: center;
            }

            .container2 .heart {
                width: 100%;
            }

            .container2 .info {
                padding: 0;
            }

            .container2 .poster {
                width: 70%;
                padding: 0;
            }

            .container2 .detail {
                text-align: justify;
                font-size: 14px;
                font-weight: 600;
            }
        }

        @media(max-width: 1000px) {
            .gallery .image {
                width: calc(100% / 2);
            }
        }

        @media(max-width: 600px) {
            .gallery .image {
                padding: 4px;
                width: 100%;
            }
        }

        .preview-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.9);
            max-width: 700px;
            width: 100%;
            z-index: 5;
            background: white;
            padding: 0 5px 5px 5px;
            border-radius: 3px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            opacity: 0;
            pointer-events: none;
        }

        .preview-box.show {
            opacity: 1;
            pointer-events: auto;
            transform: translate(-50%, -50%) scale(1);
            transition: all 0.3s ease;
        }

        .preview-box .details {
            display: flex;
            align-items: center;
            padding: 12px 15px 12px 10px;
            justify-content: space-between;
        }

        .preview-box .details .cross {
            color: #007bff;
            cursor: pointer;
            font-size: 20px;
        }

        .details .details-title {
            display: flex;
            font-size: 18px;
            font-weight: 400;
            color: black;
        }

        .details .details-title p {
            margin: 0 5px;
        }

        .details .details-title p.current-img {
            font-weight: 700;
        }

        .preview-box .img-box {
            display: flex;
            width: 100%;
            position: relative;
        }

        .img-box .slide {
            position: absolute;
            top: 50%;
            z-index: 3;
            transform: translateY(-50%);
            font-size: 30px;
            cursor: pointer;
            color: white;
            width: 60px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 3px;
        }

        .img-box .slide.prev {
            left: 0;
        }

        .img-box .slide.next {
            right: 0;
        }

        .preview-box .img-box img {
            width: 100%;
            border-radius: 0 0 3px 3px;
        }

        .shadow {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 2;
            display: none;
            background: rgba(0, 0, 0, 0.45);
        }
    </style>

</head>

<!-- <body> -->

<body>
    @include('layouts.nav')

    <section>
        <div class="container2">
            <img src="{{ asset('img/youths2/heart.png') }}" class="heart">
            <div class="info">
                <img src="{{ asset('img/youths2/image 66.png') }}" class="poster">
                <p class="detail">Service learning", as the name implies, is the achievement of "learning" through
                    "service". The International College has been actively promoting "service learning" by incorporating
                    relevant elements in various disciplines (e.g. "Business Ethics and Social Responsibility") and
                    collaborating with different organizations to develop "service learning projects", encouraging
                    students to focus on their studies, but also to care for the needs of society and cultivate a spirit
                    of service to others. Students have provided different services to students, elderly, visually
                    impaired, single-parent families, etc. Through their participation and planning of community
                    services, they have strengthened their sense of responsibility as social citizens and promoted their
                    personal development.</p>
            </div>
        </div>
        <div class="container3">
            <p class="title">Service Learning Projects</p>
        </div>
    </section>
    <div class="container4">
        <div class="wrapper">
            <div class="gallery">
                <div class="image"><span><img src="{{ asset('img/youths2/img1 (1).png') }}"></span></div>
                <div class="image"><span><img src="{{ asset('img/youths2/img2 (1).png') }}"></span></div>
                <div class="image"><span><img src="{{ asset('img/youths2/img3 (1).png') }}"></span></div>
                <div class="image"><span><img src="{{ asset('img/youths2/img4 (1).png') }}"></span></div>
                <div class="image"><span><img src="{{ asset('img/youths2/img1 (1).png') }}"></span></div>
                <div class="image"><span><img src="{{ asset('img/youths2/img6 (1).png') }}"></span></div>
            </div>
        </div>

        <div class="preview-box">
            <div class="details">
                <span class="details-title">
                    Image <p class="current-img"></p>
                    of <p class="total-img"></p>
                </span>
                <span><i class="cross fa-solid fa-xmark"></i></span>
            </div>
            <div class="img-box">
                <div class="slide prev">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div class="slide next">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow"></div>

    @include('layouts.footer')

    <script>
        const gallery = document.querySelectorAll(".gallery .image"),
                previewBox = document.querySelector(".preview-box"),
                previewImg = previewBox.querySelector("img"),
                closeIcon = previewBox.querySelector(".cross"),
                currentImg = previewBox.querySelector(".current-img"),
                totalImg = previewBox.querySelector(".total-img"),
                shadow = document.querySelector(".shadow");

        window.onload = ()=>{
            for (let i = 0; i < gallery.length; i++) {
                totalImg.textContent = gallery.length;
                let newIndex = i;
                let clickImgIndex;

            gallery[i].onclick = ()=>{
                clickImgIndex = newIndex;
                function preview(){
                    currentImg.textContent = newIndex + 1;

                    let selectedImgUrl = gallery[newIndex].querySelector('img').src;
                    previewImg.src = selectedImgUrl;
                }
                preview();

                const prevBtn = document.querySelector(".prev");
                const nextBtn = document.querySelector(".next");
                if(newIndex == 0){
                        prevBtn.style.display ="none";
                }
                if(newIndex >= gallery.length - 1){
                        nextBtn.style.display ="none";
                }
                prevBtn.onclick = ()=>{
                    newIndex--;
                    if(newIndex == 0){
                        preview();
                        prevBtn.style.display ="none";
                    }else{
                        preview();
                        nextBtn.style.display ="block";
                    }
                }
                nextBtn.onclick = ()=>{
                    newIndex++;
                    if(newIndex >= gallery.length - 1){
                    preview();
                    nextBtn.style.display ="none";
                    }else{
                        preview();
                        prevBtn.style.display ="block";
                    }
                }


                previewBox.classList.add("show");
                shadow.style.display= "block";
                document.querySelector("body").style.overflow = "hidden";

                closeIcon.onclick = ()=>{
                    newIndex = clickImgIndex;
                    prevBtn.style.display ="block";
                    nextBtn.style.display ="block";
                    previewBox.classList.remove("show");
                    shadow.style.display= "none";
                    document.querySelector("body").style.overflow = "scroll";
                }
            }
            }
        }
    </script>
</body>

</html>
