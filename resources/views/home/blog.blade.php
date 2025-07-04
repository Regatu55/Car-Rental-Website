<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car_Rental Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
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
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="{{ route('cars') }}">Cars</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('parts') }}">Parts</a></li>
                <li><a href="{{ route('service') }}">Our Service</a></li>
                <li><a href="{{ route('blog') }}" class="active">Blog</a></li>
             
               </ul>
         </div>
    </header>
    <section id="page-header">
        <h1>#Blog</h1>
    </section>
     <!-- Blog  -->
<section class="blog" id="blog">
    <div class="heading">
        <span>Our Blog</span>
        <h2>Our Blog Content</h2>
        <p>lorem ipsum dolor sit,amet</p>
    </div>

 <!-- Blog container -->
<div class="blog-container container">
    <!-- Box 1 -->
    <div class="box">
        <img src="image/car11.avif" alt="">
        <span>Fab 14 2021</span>
        <h3>How To Get Perfect Car At Low Price</h3>
        <p>lorem ipsum dolor sit, amet lorem ipsum dolor sit, amet lorem ipsum dolor sit, amet</p>
        <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i></a>
    </div>
    
    <!-- Box 2 -->
    <div class="box">
        <img src="image/car11.avif" alt="">
        <span>Fab 14 2021</span>
        <h3>How To Get Perfect Car At Low Price</h3>
        <p>lorem ipsum dolor sit, amet lorem ipsum dolor sit, amet lorem ipsum dolor sit, amet</p>
        <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i></a>
    </div>

    <!-- Box 3 -->
    <div class="box">
        <img src="image/car11.avif" alt="">
        <span>Fab 14 2021</span>
        <h3>How To Get Perfect Car At Low Price</h3>
        <p>lorem ipsum dolor sit, amet lorem ipsum dolor sit, amet lorem ipsum dolor sit, amet</p>
        <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i></a>
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
