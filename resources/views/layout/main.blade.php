<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- My fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Mahee:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    {{-- icon --}}
    <script src="https://kit.fontawesome.com/1271dcdccb.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- AOS Animated -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Landing</title>
</head>
<body onload="load()">
    <div class="container-fluid preloader">
        <div class="loading">
            <img src="img/black.gif" width="230">
        </div>
    </div>

    <div class="whatsapp-logo">
        <a href="">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <nav class="container-fluid navbar navbar-expand" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" width="30" height="24" class="navbar-brand-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar navbar-item" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PROFILE <i class="fa-solid fa-chevron-down" style="font-size:14px"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">A Thought</a></li>
                            <li><a class="dropdown-item" href="#">Our Dream</a></li>
                            <li><a class="dropdown-item" href="#">Headliner</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        OUR PRODUCT <i class="fa-solid fa-chevron-down" style="font-size:14px"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Certification</a></li>
                            <li><a class="dropdown-item" href="#">Training Program</a></li>
                            <li><a class="dropdown-item" href="#">FDA Program</a></li>
                            <li><a class="dropdown-item" href="#">INSFENGER (Conference Arranger)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CLIENT <i class="fa-solid fa-chevron-down" style="font-size:14px"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Our Client</a></li>
                            <li><a class="dropdown-item" href="#">Recommendation Letter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="#">BLOG</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        DOCUMENT <i class="fa-solid fa-chevron-down" style="font-size:14px"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">E-Flyer</a></li>
                            <li><a class="dropdown-item" href="#">FAQs CDAKB</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
            <div class="nav-socmed">
                <a href="">
                    <i class="fa-brands fa-youtube" style="color: red"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-linkedin" style="color: blue"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram" style="color: red"></i>
                </a>
            </div>
        </div>
    </nav>

    <header class="v-header container-fluid">
        <div class="header-overlay">
            <div class="header-h6">
                <h6> Management is doing the things right,</br>People is doing the right things. </h6>
            </div>
            <div class="header-content">
                <div class="header-content-title">
                    <h2> 
                        <img src="{{ asset('btn-red.png') }}" alt="" class="red-dot">
                        PT. INSPIRY INDONESIA KONSULTAN</h2>
                    <h4>YOUR TRUSTED PARTNER</h4>
                </div>
                <div class="header-content-logo">
                    {{-- logo 1 --}}
                    <div class="logo-1">
                        <img class="logo-col-1" src="{{ asset('gaslogo.png') }}" alt="">
                        <p>GAKESLAB MEMBERS</br>No. 921/GAKESLAB/JABAR</p>
                    </div>
                    {{-- logo 2 --}}
                    <div class="logo-1">
                        <img class="logo-col-1" src="{{ asset('isologo.png') }}" alt="">
                        <p>ISO 9001-2015</br>CERTIFIED</p>
                    </div>
                </div>
                <div class="circlenyaya">
                    <div class="circle-1"></div>
                    <div class="circle-1"></div>
                    <div class="circle-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="section">
        @yield('content')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    {{-- AOS animated --}}
    <script>
        function animate(obj, initVal, lastVal, duration) {
            let startTime = null;
  
        //get the current timestamp and assign it to the currentTime variable
        let currentTime = Date.now();
  
        //pass the current timestamp to the step function
        const step = (currentTime ) => {
  
        //if the start time is null, assign the current time to startTime
        if (!startTime) {
           startTime = currentTime ;
        }
  
        //calculate the value to be used in calculating the number to be displayed
        const progress = Math.min((currentTime - startTime)/ duration, 1);
  
        //calculate what to be displayed using the value gotten above
        obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);
  
        //checking to make sure the counter does not exceed the last value (lastVal)
        if (progress < 1) {
           window.requestAnimationFrame(step);
        } else {
              window.cancelAnimationFrame(window.requestAnimationFrame(step));
           }
        };
        //start animating
           window.requestAnimationFrame(step);
        }
        let text1 = document.getElementById('0101');
        let text2 = document.getElementById('0102');
        let text3 = document.getElementById('0103');
        const load = () => {
            animate(text1, 0, 150, 20000);
            animate(text2, 0, 6, 20000);
            animate(text3, 0, 20, 20000);
        }

     </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(document).ready(function(){
        $(".preloader").fadeOut(1000);
        })
    </script>
        
    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-30vh";
        }
        prevScrollpos = currentScrollPos;
        }
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 5,
            autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        });
    </script>
</body>
</html>

{{-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48" style=" fill: white;">
    <path fill="red" d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z"></path>
    <path fill="" d="M20 31L20 17 32 24z"></path>
</svg> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48" style=" fill:#000000;">
    <path fill="#0288D1" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path>
    <path fill="#FFF" d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z"></path>
</svg> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48" style=" fill:#000000;">
    <radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#fd5"></stop>
        <stop offset=".328" stop-color="#ff543f"></stop>
        <stop offset=".348" stop-color="#fc5245"></stop>
        <stop offset=".504" stop-color="#e64771"></stop>
        <stop offset=".643" stop-color="#d53e91"></stop>
        <stop offset=".761" stop-color="#cc39a4"></stop>
        <stop offset=".841" stop-color="#c837ab"></stop>
    </radialGradient>
    <path fill="url(#yOrnnhliCrdS2gy~4tD8ma)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
    </path>
    <radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#4168c9"></stop>
        <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
    </radialGradient>
    <path fill="url(#yOrnnhliCrdS2gy~4tD8mb)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
    </path>
    <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
    </path>
        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff">

        </circle>
        <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
</svg> --}}