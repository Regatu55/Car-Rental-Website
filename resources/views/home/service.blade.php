<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car_Rental Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylrsheet">
</head>
<body>
    <header>
        <!-- nav container -->
         <div class="nav container">
            <!-- menu icon -->
             <i class="bx bx-menu" id="menu-icon"></i>
             <!-- logo -->
             {{-- <img src="{{asset('image/car logo.png')}}" alt= "width="50" height="50"> --}}
              <a href="#" class="logo">Car<span>Rental</span></a>
              <!-- nav list -->
               <ul class="navbar">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('cars') }}">Cars</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('parts') }}">Parts</a></li>
                <li><a href="{{ route('service') }}" class="active">Service</a></li>
                
             
               </ul>
         </div>
    </header>
{{-- page header --}}
<section id="page-header">
    <h1><span>#Our </span> Service</h1>
</section>
  <!-- service section -->
  <section class="services" id="service">
    <!-- <div class="service"> -->
        <div class="title">
           <h2>Our <span>Services</span><h2>    
        </div>
        <!-- <div class="container services-container">
            <div class="card">
            <div>
                <span class="lnr lnr-rocket"></span>
                <h4>Car Accessories</h4>
            </div>
            <p>Every website should be built with two primary goals: 
                Firstly it needs to works across all devoices.
            Secondly, it needs to be fast as possible. </p>
        </div>
        <div class="card">
            <div>
                <span class="lnr lnr-rocket"></span>
                <h4>Car Accessories</h4>
            </div>
            <p>Every website should be built with two primary goals: 
                Firstly it needs to works across all devoices.
            Secondly, it needs to be fast as possible. </p>
        </div>
        <div class="card">
            <div>
                <span class="lnr lnr-rocket"></span>
                <h4>Car Accessories</h4>
            </div>
            <p>Every website should be built with two primary goals: 
                Firstly it needs to works across all devoices.
            Secondly, it needs to be fast as possible. </p>
        </div> -->
  

        <div class="box">
            <div class="card">
                <i class='bx bxs-car'></i>
                <h5>Car Selling</h5>
                <div class="pra">
                    <p>A service that connects buyers and sellers,<br>
                         offering a variety of vehicles from new to pre-owned.<br>
                         Our platform ensures a seamless buying experience with verified listings,<br>
                          competitive prices, and expert assistance.</p>
                    <p style="text-align: center;">
                      <!--  <a class="button" href="#">Read More</a>-->
                    </p>
                </div>
            </div>
            <div class="card">
                <i class='bx bxs-car'></i>
                <h5>Parts repair</h5>
                <div class="pra">
                    <p>Professional repair and maintenance services for all car parts,<br>
                         including engines, brakes, transmissions, and more.<br>
                          Our skilled technicians use quality tools and <br>
                          genuine parts to ensure optimal performance and safety.</p>
                    <p style="text-align: center;">
                       <!-- <a class="button" href="#">Read More</a>-->
                    </p>
                </div>
            </div>
            <div class="card">
                <i class='bx bxs-car-crash'></i>
                <h5>Car Insurance</h5>
                <div class="pra">
                    <p>Comprehensive insurance solutions to protect your vehicle from accidents,<br>
                         theft, and damages. We offer customizable policies,<br>
                          competitive rates, and hassle-free claims processing <br>
                          to give you peace of mind on the road.</p>
                    <p style="text-align: center;">
                      <!--  <a class="button" href="#">Read More</a>-->
                    </p>
                </div>
            </div>
           <!-- <div class="card">
                <i class='fas fa-tools'></i>
                <h5>Parts repair</h5>
                <div class="pra">
                    <p>Perfect for short-term travel needs,<br>
                         our daily rental service offers a wide range of vehicles at competitive prices.<br>
                          Enjoy the freedom to explore without long-term commitments.</p>
                    {{-- <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p> --}}
                </div>
            </div>-->
          
          
        </div>
    </div>














 </section> 




{{-- footer --}}
<section class="footer">
    <div class="footer-container container">
        <div class="footer-box">
            <a href="#" class="logo">Car<span>Rental<span></a>
                <div class="social">
                    <a href="#"><i class="bx bxl-facebook"></i></a>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                    <a href="#"><i class="bx bxl-youtube"></i></a>
                </div>
        </div>
        <div class="footer-box">
            <h3>Page</h3>
            <a href="#">Home</a>
            <a href="#">Cars</a>
            <a href="#">Parts</a>
            <a href="#">Sales</a>
        </div>
        <div class="footer-box">
            <h3>Legal</h3>
            <a href="#">Privacy</a>
            <a href="#">Refund Policy</a>
            <a href="#">Cookie Policy</a>
           
        </div>
        <div class="footer-box">
            <h3>Contant</h3>
           <p>Adama</p>
           <p>Asella</p>
           <p>Shashamene</p>
        </div>
    </div>
</section>

{{-- copyright --}}
<div class="copyright">
    <p><i class='bx bx-copyright'></i> 2024 copyright - car rental</p>
</div>
<!-- link to js -->
<script src=" asset('js/main.js') }}"></script>
{{-- <script src="main.js"></script> --}}
</body>
</html>

