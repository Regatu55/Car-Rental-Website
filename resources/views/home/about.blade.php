<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car_Rental Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                <li><a href="{{ route('index') }}" >Home</a></li>
                <li><a href="{{ route('cars') }}">Cars</a></li>
                <li><a href="{{ route('about') }}" class="active">About</a></li>
                <li><a href="{{ route('parts') }}">Parts</a></li>
                <li><a href="{{ route('service') }}">Service</a></li>
               
             
               </ul>
        
         </div>
        
    </header>
    <section id="page-header">
        <h1><span>#About </span> Us</h1>
    </section>

<section class="about container" id="about">
    <div class="about-img">
<img src="image/about_page.png" alt="">
</div>
<div class="about-text">
    <span>About Us</span>
    <h2>cheap prices with <br>Quality Cars</h2>
    <p>
        Where quality meets affordability.
        We understand the importance of a smooth and enjoyable journey without the burden of excessive costs. 
        That's why we have meticulously crafted our offerings to provide you with top-notch vehicles at minimum expense.
        Our platform simplifies the process of renting vehicles by providing a user-friendly platform for browsing, 
        booking, and managing rentals. 
        This project aims to develop such a system, offering convenience and flexibility for both customers and rental companies </p>
    <a href="#" class="btn">Learn More</a>
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
