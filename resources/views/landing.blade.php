@extends('layout.main')

@section('content')
<section id="gallery">
<div class="container-fluid container-gallery">   
    <div class="gallery-title">
        <h1>GALLERY</h1>
    </div>
    <div class="gallery-card-container">
        <div class="gallery-card-top" data-aos="fade-right" data-aos-duration="1500">
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery1.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>COMPANY PROFILE - PT. INSPIRY INDONESIA KONSULTAN</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery2.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>IT | TIME MANAGEMENT YANG BAIK</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery3.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>TEASER | INSPIRY HADIR DI INDO LIVESTOCK 2022 EXHIBITION</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery4.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>IT | MENTAL BAJA</h6>
                </div>
            </div>
        </div>
        <div class="gallery-card-bottom" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300">
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery5.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>TEASER LEADERSHIP VIBES 26 MARET 2022 AT HOTEL ASTON PRIORITY SIMATUPANG & CONFERENCE CENTER</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery6.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>OBRAS | TIPS SUKSES BISNIS ALAT KESEHATAN EPISODE 2</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery7.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>OBRAS | TIPS SUKSES BISNIS ALAT KESEHATAN EPISODE 3</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery8.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>OBRAS | TIPS SUKSES DI BISNIS ALAT KESEHATAN PENGALAMAN EPISODE TESTIMONI PT MEGA GLOBAL PRATAMA</h6>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section id="about">

<div class="container-fluid container-about-us text-end fw-bold">

    <div class="imgleft" >
        <img src="{{ asset('circle-pink.png') }}" alt="" width="800px" data-aos="fade-down" class="circlepink">
        <img src="{{ asset('circle-red.png') }}" alt="" class="circlered">
        <img src="img/logo.png" alt="" width="300px" class="logo-about" data-aos="my-animation" data-aos-duration="2000" id="reload">
    </div>

    <div class="about-us-content">
        <div class="about-us-title">
            <h1 data-aos="zoom-in" data-aos-duration="1000" style="font-size: 45px;letter-spacing: 8px;color:red;text-shadow: 2px 1px #ff0000da; font-weight:600; text-shadow:1px 1px 2px black">ABOUT</h1>
            <h1 data-aos="zoom-in" data-aos-duration="1000" style="font-size: 50px;letter-spacing: 8px;text-shadow: 2px 1px #2c2c2cda; font-weight:600; text-shadow:1px 1px 2px black">US</h1>
            <div data-aos="zoom-in" data-aos-duration="1000" class="circlenyaya position-relative mt-4" style="display: flex;gap: .6rem;float:right; margin-right:1rem">
                <div class="circle-1" style="width:6px; height:6px;border-radius:30px;background:rgb(0, 0, 0)"></div>
                <div class="circle-1" style="width:6px; height:6px;border-radius:30px;background:rgb(0, 0, 0)"></div>
                <div class="circle-1" style="width:6px; height:6px;border-radius:30px;background:rgb(0, 0, 0)"></div>
            </div> 
        </div>

        <div class="about-us-text " data-aos="zoom-in" data-aos-duration="1000">
            <p style=" letter-spacing: .3px;font-weight:400;font-size:18px">INSPIRY INDONESIA CONSULTANT Founded in September 2019 is one of the consulting  companies that is present in order to improve the competitiveness of the company which  concentrates on productive management, good company quality standards and a strong work team.</p>
    
            <p style=" letter-spacing: -.3px;font-weight:400;font-size:18px">In productive management, the scope of the collaboration includes current condition analysis, company grand design, business implementation plan, and breakthroughs needed in order to accelerate the achievement of targets in the work plan. This is a guideline so that the companyruns according to what has been agreed by all shareholders, is easy to control, and can adaptquickly.</p>
    
            <p style=" letter-spacing: -.3px;font-weight:400;font-size:18px">The quality of the company’s standards is important in future competition so that the company’s position in the market is more credible, competent and classy.</p>
    
            <p style=" letter-spacing: -.3px;font-weight:400;font-size:18px">We also have training modules that vary greatly according to the demands of the times and the company, which are expected to improve the performance of the work team as a whole, standardized and sustainable. This can also support the creation of a productive climate in creating future leaders within the company.</p>
    
            <p style=" letter-spacing: -.1px;font-weight:400;font-size:18px">Part of our success stems from our motto “Your Trusted Partner”. This motto has become the DNA in our daily life where we always strive to provide the best service and are responsible for all our customers. Customer satisfaction is very important to us which is why we are committed to always pushing our customer service standards and providing the right solution for your business needs.</p>
        </div>
    </div>
</div>
</section>

<section id="handshake">
    
<div class="container-fluid container-handshake">
    <div class="handshake-overlay">
        <div class="handshake-content">
            <h3 data-aos="fade-right" data-aos-duration="1000">YOUR</h3>
            <h3 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">TRUSTED PARTNER</h3>
            <div class="handshake-dot" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500" data-aos-offset="50">
                <div class="dot-1"></div>
                <div class="dot-1"></div>
                <div class="dot-1"></div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="container-fluid container-our-team">
    <div class="our-team-title">
        <h1 data-aos="fade-in" data-aos-duration="1500">OUR TEAM</h1>
    </div>

    <div class="our-team-img">
        <div class="img-1 img-hover" data-aos="fade-down" data-aos-duration="900" data-aos-offset="300">
            <img class="img-team" src="{{ asset('img/Pak-Lukman.png') }}" alt="" style="top: -12rem;">
            <div class="textnya mt-5">
                <h4 style="text-shadow:0 0 10px rgba(0, 0, 0, 0.877);margin-left:.5rem;letter-spacing: 2.4px;font-weight:600">Lukmanul Hakim</h4>
                <p style="font-size:15px;margin-left: .1rem;letter-spacing: 1px;width:100%;text-align:center"> OPERATIONAL DIRECTOR</p>
            </div>
        </div>

        <div class="img-2 img-hover" data-aos="fade-up" data-aos-duration="900" data-aos-offset="300" data-aos-delay="700">
            <img class="img-team" src="{{ asset('img/Pak-Sony.png') }}" alt="" style="top: -12rem;">
            <div class="textnya mt-5">
                <h4 style="text-shadow:0 0 10px rgba(0, 0, 0, 0.877);margin-left:.5rem;letter-spacing: 2.4px;font-weight:600">Marsono Mardi</h4>
                <p style="font-size:15px;margin-left: .1rem;letter-spacing: 1px;width:100%">PROGRAM DEVELOPMENT <br> DIRECTOR</p>
            </div>
        </div>

        <div class="img-3 img-hover" data-aos="fade-down" data-aos-duration="900" data-aos-offset="300">
            <img class="img-team" src="{{ asset('img/Pak-Asrul.png') }}" alt="" style="top: -12rem;">
            <div class="textnya mt-5">
                <h4 style="text-shadow:0 0 10px rgba(0, 0, 0, 0.877);margin-left:.5rem;letter-spacing: 2.4px;font-weight:600; text-align:center">Asrul Sani</h4>
                <p style="font-size:15px;margin-left: .1rem;letter-spacing: 1px;width:100%;text-align:center">PRESIDENT COMMISIONER</p>
            </div>
        </div>

        <div class="img-4 img-hover" data-aos="fade-up" data-aos-duration="900" data-aos-offset="300" data-aos-delay="700">
            <img class="img-team" src="{{ asset('img/Pak-Tanto.png') }}" alt="" style="top: -12rem;">
            <div class="textnya mt-5">
                <h4 style="text-shadow:0 0 10px rgba(0, 0, 0, 0.877);margin-left:.5rem;letter-spacing: 2.4px;font-weight:600; text-align:center">Hartanto</h4>
                <p style="font-size:15px;margin-left: .1rem;letter-spacing: 1px;width:100%;text-align:center">PRESIDENT DIRECTOR</p>
            </div>
        </div>

        <div class="img-5 img-hover" data-aos="fade-down" data-aos-duration="900" data-aos-offset="300">
            <img class="img-team" src="{{ asset('img/Pak-Pri.png') }}" alt="" style="top: -12rem;">
            <div class="textnya mt-5">
                <h4 style="text-shadow:0 0 10px rgba(0, 0, 0, 0.877);margin-left:.5rem;letter-spacing: 2.4px;font-weight:600; text-align:center">Supriya Lelana</h4>
                <p style="font-size:15px;margin-left: .1rem;letter-spacing: 1px;width:100%;text-align:center">BOARD OF COMMISSIONER</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid container-culture">
    <div class="culture">
        <div class="culture-title">
            <h3>OUR CULTURE & SOUL</h3>
        </div>
        <div class="culture-card-container">
            <div class="culture-card" data-aos="fade-right" data-aos-duration="1000">
                <div class="culture-card-img">
                    <img class="culture-img1" src="{{ asset ('img/respect.png')}}" alt="">
                </div>
                <div class="culture-card-content">
                    <h3>RESPECT</h3>
                    <p>We value everyone and treat people with dignity and professionalism</p>
                </div>
            </div>

            <div class="culture-card" data-aos="fade-up" data-aos-duration="1000">
                <div class="culture-card-img">
                    <img class="culture-img1" src="{{ asset ('img/integrity.png')}}" alt="">
                </div>
                <div class="culture-card-content">
                    <h3>INTEGRITY</h3>
                    <p>We build trust through responsible actions and honest relationships</p>
                </div>
            </div>

            <div class="culture-card" data-aos="fade-left" data-aos-duration="1000">
                <div class="culture-card-img">
                    <img class="culture-img1" src="{{ asset ('img/innovation.png')}}" alt="">
                </div>
                <div class="culture-card-content">
                    <h3>INNOVATION</h3>
                    <p>We value original thinking, a passion for attacking difficult challenges and openly giving and receiving thoughtful feedback.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="product-header">
            <div class="product-title">
                <h3>Our</h3>
                <h3>Product</h3>
            </div>
            <hr>
        </div>

        <div class="product-card-container">
            <div class="product-card" data-aos="fade-left" data-aos-offset="100px">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/accepted.jpg')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>CERTIFICATION</h6>
                </div>
            </div>
            <div class="product-card" data-aos="fade-left" data-aos-offset="100px">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/training.jpg')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>TRAINING <br> PROGRAM</h6>
                </div>
            </div>
            <div class="product-card product-top" data-aos="fade-left" data-aos-offset="100px">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/fda.jpg')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>FDA <br> PROGRAM</h6>
                </div>
            </div>
            <div class="product-card product-top" data-aos="fade-left" data-aos-offset="100px">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/insfenger.png')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>INSFENGER <br> (CONFERENCE <br> ARRANGER)</h6>
                </div>
            </div>
            <div class="product-card product-top" data-aos="fade-left" data-aos-offset="100px">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/opspiry.jpg')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>OPSPIRY <br> (OPERATING <br> MANAGEMENT <br> SYSTEM)</h6>
                </div>
            </div>
            
            <div class="product-card product-top" data-aos="fade-right">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/legspiry.jpg')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>LEGSPIRY <br> (LEGAL <br> CONSULTANT)</h6>
                </div>
            </div>
            <div class="product-card product-top" data-aos="fade-right">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/company.jpg')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>COMPANY <br> LICENCE</h6>
                </div>
            </div>
            <div class="product-card product-top" data-aos="fade-right">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/imagery.jpg')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>IMAGERY <br> (BRAND <br> BUILDER)</h6>
                </div>
            </div>
            <div class="product-card product-top" data-aos="fade-right">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/inssearch.jpg')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>INSSEARCH <br> (HEAD <br> HUNTER)</h6>
                </div>
            </div>
            <div class="product-card product-top" data-aos="fade-right">
                <div class="product-card-img">
                    <img class="product-img1" src="{{ asset ('img/instrainment.jpg')}}" alt="">
                </div>
                <div class="product-card-content">
                    <h6>INSTRAINMENT <br> (TRAINING & <br> ENTERTAINMENT)</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid container-solution">
    <div class="solution-overlay">
    <div class="all-solution position-relative">
            <div class="text-solution pt-5" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="text-white" style="font-size: 67px;font-weight:600;text-shadow:2px 3px #000">OUR</h1>
                <h1 style="color: red;font-size: 50px;font-weight:600;text-shadow:2px 3px #000;letter-spacing: 5px;margin-top:-1.5rem">SOLUTION</h1>
            </div>
            <div class="solution-circle" data-aos="fade-up" data-aos-duration="1500">
                <div class="circle-1"></div>
                <div class="circle-1"></div>
                <div class="circle-1"></div>
            </div>

            <div class="content-solution d-flex" style="gap: 4rem;">
                <div class="text-solution-1 mt-5 text-white" style="font-size: 17px; text-align: justify; width:80%;" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                    <p style="letter-spacing: .2px;">INSPIRY is here to help entrepreneurs, business owners, and company leaders to maximize all business management performance, design and map out the right business strategy, and ultimately be able to improve the company’s financial on an ongoing basis. We provide you with all the answers, and strategies and solutions that can bring your  company and business to grow faster and better, and are fully scalable and controllable.</p>

                    <p style="letter-spacing: .2px">With the increase in the company’s internal competence and the ability to manage all company resources accompanied by foresight and speed in responding to the company’s external conditions. Our clients are able to take their company and business to a level that is more advanced than its previous position and excel in business competition. Client companies also have a series of solutions and strategies, especially dealing with recession, crisis and decline successfully</p>
                </div>

                <div class="btn-contact text-white">
                    <div class="title-btn" style="padding: 10px 30px;">
                        <i class="fa-solid fa-phone-volume" style="transform: rotate(-30deg)"></i>
                        + 62 21 22178061
                    </div>
                </div>
            </div>
        

        <div class="our-client text-white text-center" style="display: flex; gap:2rem ;justify-content: center;align-items: center;background:rgba(0, 0, 0, 0.5);height:50vh;margin-left: -3rem;margin-top:5rem">
            {{-- <div class="column" style="width: 33%;height:220px;background:rgba(255, 255, 255, 0.137);margin-left: 4.5rem;margin-top:2rem">
                <div class="textnya" style="margin-top:4rem">
                    <h1 id='0101'>150</h1><h2 style="position: relative;top:-4rem; font-size:36px;left:2.9rem">+</h2>
                    <p style="position:relative; top: -3rem">OUR CLIENT</p>
                </div>
                <div class="column-line" style="position: relative; top:-3.2rem"></div>
            </div> --}}

            <div class="column" style="width: 30%;height:220px;background:rgba(255, 255, 255, 0.137);margin-left: margin-top:2rem">
                <div class="textnya" style="margin-top:4rem">
                    <h1 id='0101'>150</h1>
                    <p>OUR CLIENT</p>
                </div>
                <div class="column-line"></div>
            </div>
            <div class="column" style="width: 30%;height:220px;background:rgba(255, 255, 255, 0.137);margin-left: margin-top:2rem">
                <div class="textnya" style="margin-top:4rem">
                    <h1 id='0102'>6</h1>
                    <p>PARTNERSHIP</p>
                </div>
                <div class="column-line"></div>
            </div>
            <div class="column" style="width: 30%;height:220px;background:rgba(255, 255, 255, 0.137);margin-left: margin-top:2rem">
                <div class="textnya" style="margin-top:4rem">
                    <h1 id='0103'>20</h1>
                    <p>RECOMMENDATION LETTER</p>
                </div>
                <div class="column-line"></div>
            </div>
    
            {{-- <div class="column" style="width: 33%;height:220px;background:rgba(255, 255, 255, 0.137);margin-left: margin-top:2rem">
                <div class="textnya" style="margin-top:4rem">
                    <h1 id='0103'>20 +</h1><h2 style="position: relative;top:-4rem; font-size:36px;left:2.9rem">+</h2>
                    <p style="position:relative; top: -3rem">RECOMMENDATION LETTER</p>
                </div>
                <div class="column-line" style="position: relative; top:-3.2rem"></div>
            </div> --}}
        </div>
    </div>
</div>

<!-- Swiper -->
<div class="swiper mySwiper">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/Screen-Shot-2022-02-25-at-07.56.13-235x300.png" alt="">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/Screen-Shot-2022-02-25-at-07.56.35-233x300.png" alt="" style="margin-left: -1rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/Screen-Shot-2022-02-25-at-07.56.51-218x300.png" alt="" style="margin-left: -2rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/Screen-Shot-2022-02-25-at-07.57.06-247x300.png" alt="" style="margin-left: -3rem;"></div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/Screen-Shot-2022-02-25-at-07.57.19-1-215x300.png" alt="" style="margin-left: -4rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/Screen-Shot-2022-02-25-at-07.57.41-1-212x300.png" alt="" style="margin-left: -3rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/Screen-Shot-2022-02-25-at-07.57.59-1-212x300.png" alt="" style="margin-left: -3rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/WhatsApp-Image-2022-02-24-at-17.40.11-1-1-1-197x300.jpeg" alt="" style="margin-left: -3rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/WhatsApp-Image-2022-02-24-at-17.40.11-2-204x300.jpeg" alt="" style="margin-left: -3rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/03/WhatsApp-Image-2022-02-24-at-17.40.12-1-200x300.jpeg" alt="" style="margin-left: -3rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/06/Screen-Shot-2022-06-02-at-14.40.42-212x300.png" alt="" style="margin-left: -3rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/06/Screen-Shot-2022-06-06-at-14.43.40-216x300.png" alt="" style="margin-left: -3rem;">
        </div>
        <div class="swiper-slide">
            <img src="https://www.inspiryconsultant.com/wp-content/uploads/2022/06/Screen-Shot-2022-06-06-at-15.55.41-212x300.png" alt="" style="margin-left: -3rem;">
        </div>
        </div>
        {{-- <div class="swiper-pagination"></div> --}}
</div>

<div class="container-fluid container-our-partner our-partner-logo mt-5 mb-5">
        <h1>Our Partner</h1>
        <div class="our-partner-img mt-5" style="display: flex; justify-content:center;gap:2rem">
            <div class="colomn-img-our">
                <img src="img/geslab.png" alt="" width="150px">
                <h2 class="text-center mt-4">Association of</br>Indonesian medical</br>and laboratory</br>equipment</br>companies</h2>
            </div>
            <div class="colomn-img-our">
                <img src="img/hostpital.jpeg" alt="" width="150px">
                <h2 class="text-center mt-4">Indonesian Hospital</br> Association</h2>
            </div>
            <div class="colomn-img-our">
                <img src="img/pdhi.png" alt="" width="150px">
                <h2 class="text-center mt-4">Indonesian</br>Veterinary</br>Association</h2>
            </div>
            <div class="colomn-img-our">
                <img src="img/ui.png" alt="" width="150px">
                <h2 class="text-center mt-4">Faculty of</br>Engineering -</br>Indonesia University</h2>
            </div>
            <div class="colomn-img-our">
                <img src="img/ipwija.png" alt="" width="150px">
                <h2 class="text-center mt-4">Institute of</br>Economic Science</br>IPWIJA</h2>
            </div>
            <div class="colomn-img-our" style="margin-top: 2rem">
                <img src="img/idbi.webp" alt="" width="150px">
                <h2 class="text-center mt-4">Indonesian Business</br>Digital Institute</h2>
            </div>
        </div>
            <div class="inline"></div>
</div>

<div class="container-fluid container-footer">
        <div class="footer-address">
            <img src="{{ asset ('img/footer-logo.png')}}" alt="">
            <div class="footer-address-content">
                <div class="address-office">
                    <p> <b>Head Office :</b> </p>
                    <p> Jl. Alternatif Cibubur CBD Cibubur Ruko Fraser Park FR 02 05 Kota Bekasi 17435 Indonesia </p>
                    <p> Phone: + 62 21 22178061 </p>
                </div>
                <div class="address-marketing">
                    <p> <b>Marketing Office :</b> </p>
                    <p> Jl. TB Simatupang Perumahan <br> Tanjung Barat Indah </p>
                    <p> Jl. Teratai XIII Blok P No.7 Jakarta Selatan 12530 Indonesia </p>
                    <p> Phone: + 62 21 22178061 </p>
                </div>
            </div>
        </div>
        <div class="footer-map">
            <h2>Map PT. INSPIRY INDONESIA KONSULTAN</h2>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="500" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=PT.%20INSPIRY%20INDONESIA%20KONSULTAN&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    {{-- <a href="https://123movies-to.org">123movies</a> --}}
                    <style>.mapouter{margin-left: auto; margin-right: auto;margin-top: 3vh;position:relative;text-align:right;height:300px;width:500px;}</style>
                    {{-- <a href="https://www.embedgooglemap.net">google maps embed generator</a> --}}
                    <style>.gmap_canvas {overflow:hidden;background:none!important;height: 110%;width:500px;}</style>
                </div>
            </div>
        </div>
        <div class="footer-socmed">
            <div class="footer-socmed-title">
            <h2>Follow Us : </h2>
            </div>
            <div class="footer-socmed-content">
                <div class="footer-socmed-btn">
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="footer-socmed-btn">
                    <a href="">
                    <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
                <div class="footer-socmed-btn">
                    <a href="">
                    <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
                <div class="footer-socmed-btn">
                    <a href="">
                    <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
</div>
@endsection