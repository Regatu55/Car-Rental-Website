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
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('cars') }} " class="active">Cars</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('parts') }}">Parts</a></li>
                <li><a href="{{ route('service') }}">Service</a></li>
               
             
               </ul>
            </div>
    </header>
            <section id="page-header">
                    <h1><span>#Rent</span> Cars</h1>
                 
                </section>

                
               <section class="cars" id="cars">
                <div class="heading">
                    <span>All Cars</span>
                    <h2>We have all types cars</h2>
                
                </div>
               
          
 <!-- car container -->
 <!--<div class="cars-container">-->
    <section>
        <div class="parts-container container">
            <div class="box">
                <img src="image/car13.avif" alt="">
                <h3>Nisan</h3>
                <span>12000 </span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
    
            </div>
            <div class="box">
                <img src="image/car11.avif" alt="">
                <h3>Ford</h3>
                <span>12000 </span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
    
            </div>
            <div class="box">
                <img src="image/car9.jpg" alt="">
                <h3>Hayunda</h3>
                <span>12000 </span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
    
            </div>
            <div class="box">
                <img src="image/car3.webp" alt="">
                <h3>Hayunda</h3>
                <span>12000 </span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
    
            </div>
            <div class="box">
                <img src="image/car4.jpg" alt="">
                <h3>Nisan</h3>
                <span>12000 </span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
    
            </div>
            <div class="box">
                <img src="image/car6.jpg" alt="">
                <h3>Ford</h3>
                <span>12000 </span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
    
            </div>
        </div>
     </section>










   <!-- <div class="box">
        <img src="image/car2.jpg" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car3.webp" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car4.jpg" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car5.jpg" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car6.jpg" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car12.jpg" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car5.jpg" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car9.jpg" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car10.webp" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car8.jpg" alt="">
        <h2>Rent Car</h2>
    </div>
    <div class="box">
        <img src="image/car11.avif" alt="">
        <h2>Rent Car</h2>
    </div>-->
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
