@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    


<section class="header">
<!-- <a href="home.php" class="logo">travel.</a> -->
<!-- <a id="warning" href="logout.php" class="btn btn-warning">Logout</a> -->
<nav class="navbar">
    <a href="/home">home</a>
    <a href="/about">about</a>
    <a href="/package">package</a>
    <a href="/book">book</a>
</nav>
<div id="menu-btn" class="fa fa-bars"></div>


</section>
<div class="heading" style="background:url(iamges/abtpage1.jpg) no-repeat">
<h1>about us</h1>
</div>

<section class="about">
    <div class="image">
    <img src="iamges/abtpage4.jpg" alt="">
    </div>
    <div class="content">
        <h3>why this? </h3>
        <p>We meticulously select destinations that offer a perfect blend of cultural richness, natural beauty, and adventure.
        Tailored to your preferences, our itineraries guarantee a unique and unforgettable journey.</p>
        <p> Whether you're traveling alone or with a group, our itineraries are designed to accommodate various group sizes.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span> top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span> affordable price</span>
            </div>
            <div class="icons">
                <i class="fa fa-headphones"></i>
                <span> 24/7 guidance</span>
            </div>
        </div>

    </div>
</section>


<section class="footer" >
<div class="box-container">
<div class="box">
    <h3>quick links</h3>
    <a href="/home"><i class="fas fa-angle-right"></i> home</a> 
     <a href="/about"><i class="fas fa-angle-right"></i>about</a> 
    <a href="/package"><i class="fas fa-angle-right"></i>package</a>
    <a href="/book"><i class="fas fa-angle-right"></i>book</a>
</div>


<div class="box">
    <h3>exra links</h3>
<a href="#"><i class="fas fa-angle-right"></i> ask questions</a> 
<a href="#"><i class="fas fa-angle-right"></i> about us</a> 
<a href="#"><i class="fas fa-angle-right"></i> privacy policy</a> 
<a href="#"><i class="fas fa-angle-right"></i> terms of use</a> 
</div>


<div class="box">
    <h3>contact info</h3>
<a href="#"><i class="fas fa-phone"></i>+111-222-3332</a> 
<a href="#"><i class="fas fa-phone"></i>+222-222-3332</a> 
<a href="mailto:tejdutta7051@gmail.com" target="_blank"><i class="fas fa-envelope"></i>tejdutta7051@gmail.com</a> 
<a href="https://maps.app.goo.gl/uYaa3ZFZ4p4R1qBx9" target="_blank"><i class="fas fa-map"></i>jammu, India-180005</a> 
</div>


<div class="box">
    <h3>contact info</h3>
<a href="https://www.facebook.com/tejeshwar.dutta.3/" target="_blank"><i class="fab fa-facebook-f"></i>facebook</a> 
<a href="https://twitter.com/TejeshwarDutta" target="_blank"><i class="fab fa-twitter"></i>twitter</a> 
<a href="https://www.instagram.com/_tannu_dutta/" target="_blank"><i class="fab fa-instagram"></i>instagram</a> 
<a href="https://www.linkedin.com/in/tejeshwardutta/" target="_blank"><i class="fab fa-linkedin"></i>linkedin</a> 

</div>

</div>
<div class="credit">designed by <span> Tejeshwar Dutta </span> | All rights reserved!
</div>

</section>




<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="{{asset('js/script.js')}}" defer></script>


</body>
</html>
@endsection