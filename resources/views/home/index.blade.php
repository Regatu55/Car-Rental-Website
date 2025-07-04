<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car_Rental Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                <li><a href="{{ route('index') }}" class="active">Home</a></li>
                <li><a href="{{ route('cars') }}">Cars</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('parts') }}">Parts</a></li>
                <li><a href="{{ route('service') }}">Service</a></li>
               
             
               </ul>
         
         <div  style=" display: flex; gap: 35px;">
            <ul style="list-style: none; margin: 0; padding: 0; display: flex; gap: 35px;">
                <li><a href="{{ route('login') }}" class="btn">Login</a></li>
                <li><a href="{{ route('register') }}" class="btn">Register</a></li>
            </ul>
         </div>
        
         </div>
        
    </header>

<!-- Home -->

<section class="home" id="home">
<div class="home-text">
    <h1>We Have Everthing<br>Your <span>Car </span> Need</h1>
    <p>
        We Offer A Wide Range Of Rental Car To Suit Your Need.<br>
         Whether Your
        Planning A Weekend Getaway or A Bussines Trip.
      </p>
      <a  href="#" class="btn">Rent Now</a>
      

    </div>
</section>
<section class="cars1" id="cars1">
    <div class="heading">
        <h2>Feature <span>Products</span></h2>
        <p>New And Modern Cars</p>
     </div>
    

<!-- car container -->
<div class="cars1-container">

<div class="pro">
<img src="image/car2.jpg" alt="">
<div class="des">
    <span>Hayunda</span>
    <div class="star">
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
    </div>
    <h4>120000 birr</h4>
      <h2>Rent Car</h2>
</div>
</div>

<div class="pro">
<img src="image/car2.jpg" alt="">
<div class="des">
    <span>Hayunda</span>
    <div class="star">
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
    </div>
    <h4>120000 birr</h4>
   <h2>Rent Car</h2>
</div>
</div>
<div class="pro">
    <img src="image/car3.webp" alt="">
    <div class="des">
        <span>Hayunda</span>
        <div class="star">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
        </div>
        <h4>120000 birr</h4>
       <h2>Rent Car</h2>
    </div>
    </div>
    <div class="pro">
        <img src="image/car4.jpg" alt="">
        <div class="des">
            <span>Hayunda</span>
            <div class="star">
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
            </div>
            <h4>120000 birr</h4>
           <h2>Rent Car</h2>
        </div>
        </div>
        <div class="pro">
            <img src="image/car6.jpg" alt="">
            <div class="des">
                <span>Hayunda</span>
                <div class="star">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <h4>120000 birr</h4>
               <h2>Rent Car</h2>
            </div>
            </div>
            <div class="pro">
                <img src="image/car7.jpg" alt="">
                <div class="des">
                    <span>Hayunda</span>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <h4>120000 birr</h4>
                   <h2>Rent Car</h2>
                </div>
                </div>
                <div class="pro">
                    <img src="image/car8.jpg" alt="">
                    <div class="des">
                        <span>Hayunda</span>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <h4>120000 birr</h4>
                       <h2>Rent Car</h2>
                    </div>
                    </div>
                    <div class="pro">
                        <img src="image/car9.jpg" alt="">
                        <div class="des">
                            <span>Hayunda</span>
                            <div class="star">
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                            <h4>120000 birr</h4>
                           <h2>Rent Car</h2>
                        </div>
                        </div>
                        <div class="pro">
                            <img src="image/car11.avif" alt="">
                            <div class="des">
                                <span>Hayunda</span>
                                <div class="star">
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <h4>120000 birr</h4>
                               <h2>Rent Car</h2>
                            </div>
                            </div>
                            <div class="pro">
                                <img src="image/car3.webp" alt="">
                                <div class="des">
                                    <span>Hayunda</span>
                                    <div class="star">
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                    </div>
                                    <h4>120000 birr</h4>
                                   <h2>Rent Car</h2>
                                </div>
                                </div>
                                <div class="pro">
                                    <img src="image/car3.webp" alt="">
                                    <div class="des">
                                        <span>Hayunda</span>
                                        <div class="star">
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <h4>120000 birr</h4>
                                       <h2>Rent Car</h2>
                                    </div>
                                    </div>
                                    <div class="pro">
                                        <img src="image/car3.webp" alt="">
                                        <div class="des">
                                            <span>Hayunda</span>
                                            <div class="star">
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                            </div>
                                            <h4>120000 birr</h4>
                                           <h2>Rent Car</h2>
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
            <h3>Contact</h3>
           <p><i class='bx bx-phone'></i> 09-55-97-85-65</p>
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

</body>
</html>
