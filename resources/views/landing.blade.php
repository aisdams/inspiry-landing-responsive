@extends('layout.main')

@section('content')
<div class="container-fluid container-our-partner our-partner-logo">
    {{-- <h1>Our Partner</h1> --}}
    <div class="our-partner-img">
        <div class="colomn-img-our">
            <img src="img/geslab.png" alt="">
            {{-- <h2 class="text-partnert-1">Association of </br> Indonesian medical </br> and laboratory </br> equipment </br> companies</h2> --}}
        </div>
        <div class="colomn-img-our our-img-2">
            <img src="img/hostpital.jpeg" alt="">
            {{-- <h2 class="text-partnert-6">Indonesian Hospital</br> Association</h2> --}}
        </div>
        <div class="colomn-img-our topnyaya">
            <img src="img/pdhi.png" alt="">
            {{-- <h2 class="text-partnert-2">Indonesian </br> Veterinary </br> Association</h2> --}}
        </div>
        <div class="colomn-img-our topnyaya">
            <img src="img/ui.png" alt="">
            {{-- <h2 class="text-partnert-3">Faculty of </br> Engineering -</br>Indonesia University</h2> --}}
        </div>
        <div class="colomn-img-our topnyaya">
            <img src="img/ipwija.png" alt="">
            {{-- <h2 class="text-partnert-4">Institute of </br> Economic Science </br>IPWIJA</h2> --}}
        </div>
        <div class="colomn-img-our topnyaya5">
            <img src="img/idbi.webp" alt="">
            {{-- <h2 class="text-partnert-5">Indonesian Business</br>Digital Institute</h2> --}}
        </div>
    </div>
        {{-- <div class="inline"></div> --}}
</div>

    <div class="container-fluid container-about-us">

        <div class="about-us-logo">
            <img class="about-logo" src="{{ asset ('/img/about-1.jpg')}}" alt="">
        </div>

        <div class="about-us-content">
            <div class="about-us-title">
                <h5>ABOUT US</h5>
            </div>
            <div class="about-us-text">
                <p class="about-text-content">
                    INSPIRY INDONESIA CONSULTANT Founded in September 2019 is one of the consulting companies that is present in order to improve the competitiveness of the company which concentrates on productive management, good company quality standards and a strong work team.
                </p>
                <p class="about-text-content">
                    In productive management, the scope of the collaboration includes current condition analysis, company grand design, business implementation plan, and breakthroughs needed in order to accelerate the achievement of targets in the work plan. This is a guideline so that the company runs according to what has been agreed by all shareholders, is easy to control, and can adapt quickly.
                </p>
                <p class="about-text-content">
                    The quality of the company's standards is important in future competition so that the company's position in the market is more credible, competent and classy.
                </p>
                <p class="about-text-content">
                    We also have training modules that vary greatly according to the demands of the times and the company, which are expected to improve the performance of the work team as a whole, standardized and sustainable. This can also support the creation of a productive climate in creating future leaders within the company.
                </p>
                <p class="about-text-content">
                    Part of our success stems from our motto "Your Trusted Partner". This motto has become the DNA in our daily life where we always strive to provide the best service and are responsible for all our customers. Customer satisfaction is very important to us which is why we are committed to always pushing our customer service standards and providing the right solution for your business needs.
                </p>
            </div>

            <div class="about-us-button">
                <div class="about-button">
                    <a href="">Learn More</a>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div class="about-button">
                    <a href="">Contact Us</a>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>

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


{{-- gallery --}}
<div class="all-galery">

    <div class="line-gallery"></div>

    <div class="gallery">
        <h1>GALLERY</h1>
    </div>
    <div class="container container-gallery">
      <div class="text-gallery">
        <h3 class="text-start ">Our <br/>Gallery</h3>
        <p class="w-25 text-dark">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto voluptate nesciunt veritatis expedita!</p>
      </div>
       <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="img/gallery1.jpeg" />
          </div>
          <div class="swiper-slide">
            <img src="img/gallery2.jpeg" />
          </div>
          <div class="swiper-slide">
            <img src="img/gallery3.jpeg" />
          </div>
          <div class="swiper-slide">
            <img src="img/gallery4.jpeg" />
          </div>
          <div class="swiper-slide">
            <img src="img/gallery5.jpeg" />
          </div>
          <div class="swiper-slide">
            <img src="img/gallery6.jpeg" />
          </div>
          <div class="swiper-slide">
            <img src="img/gallery7.jpeg" />
          </div>
          <div class="swiper-slide">
            <img src="img/gallery8.jpeg" />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
  
    </div>

  </div>

  {{-- end gallery --}}


<div class="container-fluid container-our-team">
    <div class="our-team-title">
        <h1 data-aos="fade-in" data-aos-duration="1500">OUR TEAM</h1>
    </div>

    <div class="our-team-img">
        <div class="img-1 img-hover" data-aos="fade-down" data-aos-duration="900" data-aos-offset="300">
            <img class="img-team" src="{{ asset('img/Pak-Lukman.png') }}" alt="" style="top: -12rem;">
            <div class="textnya mt-5">
                <h4 style="text-shadow:0 0 10px rgba(0, 0, 0, 0.877);margin-left:.5rem;letter-spacing: 2.4px;font-weight:600" class="paklukman">Lukmanul Hakim</h4>
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

    <div class="circleproduct"></div>
    <div class="product">
        <div class="text-all">
            <div class="textn">Our <div class="lineour" style="width: 150px;height: 1px;background-color: rgb(0, 0, 0); position: absolute;margin-top: -2rem;left: 13rem;"></div><br> <code class="textn1">Product <!-- <div class="line-product"></div>  --></code></div>
            <p class="text-product">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus aut est laboriosam delectus voluptatem quo a magnam obcaecati vel. Ipsam blanditiis pariatur eveniet tempora provident magni quidem, enim id voluptas!</p>
            <div class="our-product-text">
                <h1>OUR PRODUCT</h1>
            </div>
            
            <div class="imgblock">
                <img src="img/inssearch.jpg" alt="">
            </div>

        </div>

        <div class="row" style="display: flex;flex-direction: column;gap: 2rem;"> 
            <div class="column">
              <img src="img/accepted.jpg">
              <img src="img/company.jpg">
            </div>
            <div class="column1">
                <img src="img/opspiry.jpg">
                <img src="img/legspiry.jpg">
            </div>
            
            <div class="column2">
                <img src="img/insfenger.png">
                <img src="img/fda.jpg">
            </div>
          </div>
    </div>

</div>

<div class="container-solution">
    <div class="solution-overlay">
        <div class="all-solution">
            <div class="text-solution pt-5" data-aos="fade-up" data-aos-duration="1500">
                    <h1 class="text-white" style="font-size: 67px;font-weight:600;text-shadow:2px 3px #000">OUR</h1>
                    <h1 style="color: red;font-size: 50px;font-weight:600;text-shadow:2px 3px #000;letter-spacing: 5px;margin-top:-1.5rem">SOLUTION</h1>
            </div>
            <div class="solution-circle" data-aos="fade-up" data-aos-duration="1500">
                    <div class="circle-1"></div>
                    <div class="circle-1"></div>
                    <div class="circle-1"></div>
            </div>

            <div class="content-solution" style="display: flex; gap: 4rem;">
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
                <div class="column column-topnya" style="width: 30%;height:220px;background:rgba(255, 255, 255, 0.137);margin-left: margin-top:2rem">
                    <div class="textnya" style="margin-top:4rem">
                        <h1 id='0102'>6</h1>
                        <p>PARTNERSHIP</p>
                    </div>
                    <div class="column-line"></div>
                </div>
                <div class="column column-topnya" style="width: 30%;height:220px;background:rgba(255, 255, 255, 0.137);margin-left: margin-top:2rem">
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
</div>


{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill=" rgba(204,204,0, 0.1)" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,218.7C384,213,480,139,576,128C672,117,768,171,864,176C960,181,1056,139,1152,138.7C1248,139,1344,181,1392,202.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> --}}

<div class="container-map">
    <div class="map-title">
        <h1>Our Location</h1>
        <hr style="border: 1px solid black;opacity: .50;height: 60px;">
        <div class="map-text">
            <h3>PT. Inspiry Indonesia Konsultan</h3>
            <p>For larger map <a href="https://goo.gl/maps/Kx6EuWQSxJDcKVQy8" target="_blank" style="cursor: pointer">View Here</a></p>
        </div>
    </div>
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="1200" height="550" id="gmap_canvas" src="https://maps.google.com/maps?q=PT.%20INSPIRY%20INDONESIA%20KONSULTAN&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;display: flex; justify-content: center;align-items: center}</style>
        </div>
    </div>
</div>

@endsection