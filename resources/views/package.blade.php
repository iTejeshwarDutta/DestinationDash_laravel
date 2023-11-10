@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>packages</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
 
  .popup-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
  }
  .popup-content {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    max-width: 80%;
    text-align: center;
  }
  img {
    cursor: pointer;
    max-width: 100%;
    height: auto;
  }
</style>
</head>
<body>
    


<section class="header">
<nav class="navbar">
    <a href="/home">home</a>
    <a href="/about">about</a>
    <a href="/package">package</a>
    <a href="/book">book</a>
</nav>
<div id="menu-btn" class="fa fa-bars"></div>


</section>




<div class="heading" style="background:url(iamges/packages1.jpg) no-repeat">
<h1>packages</h1>
</div>

<section class="packages">
    <h1 class="heading-title">top destinations</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
            <img src="iamges/booking1.jpg" alt="Click me" onclick="openPopup()">
  <div class="popup-container" id="popup">
    <div class="popup-content">
      <h2>Details</h2>
      <p> Welcome to our Travel Guide for India, a portal to a tapestry of captivating destinations and experiences that span this diverse subcontinent. From the majestic palaces of Rajasthan to the tranquil backwaters of Kerala, India's landscape is a canvas of contrasts. Immerse yourself in the cultural extravaganza of Varanasi, where ancient rituals unfold on the banks of the sacred Ganges.</p>
     <br> <p>places to visit : <span style=" font-weight:bold"  > Delhi, rishikesh, kerala, spiti_valley, mumbai, meghalaya </span></p>
       <br><p style="font-weight:bold"> estimate cost ₹59440 per head for 6 days</p>
      <button onclick="closePopup() " class="btn">Close</button>
      <a href="/book"class="btn">book now</a>

    </div>
  </div>         
  </div>
 <div class="content">
                <h3> india </h3>
                <p>India, where every dawn paints a new story on the canvas of ancient wisdom.</p>
                <a href="/book"class="btn">book now</a>
            </div>
        </div>




 <div class="box">
            <div class="image">
            <img src="iamges/packages11.jpg" alt="Click me" onclick="openPopup()">
  <div class="popup-container" id="popup">
    <div class="popup-content">
      <h2>Details</h2>
      <!-- <p> Welcome to our Travel Guide for Canada, an invitation to explore a country of boundless natural beauty and rich cultural diversity. From the rugged shores of Newfoundland to the majestic Rockies of Alberta, Canada's landscapes are a testament to the power of nature. Traverse the cobblestone streets of Old Quebec, where French and English heritage blend seamlessly. Witness the awe-inspiring Niagara Falls, a force of nature that never fails to captivate..</p>
     <br> <p>places to visit : <span style=" font-weight:bold"  > Whistler, Niagara Falls,  Toronto, Quebec City, Banff National Park, Vancouver </span></p>
       <br><p style="font-weight:bold"> estimate cost ₹89440 per head</p> -->
      <button onclick="closePopup() " class="btn">Close</button>
      <a href="/book"class="btn">book now</a>
    </div>
  </div>  
            </div>
            <div class="content">
                <h3>chaudiere river</h3>
                <p>From the vibrant mosaic of cultures to the serenity of its untouched wilderness, Canada is a symphony of beauty.</p>
                <a href="/book"class="btn">book now</a>

            </div>
        </div>




        <div class="box">
            <div class="image">
            <img src="iamges/packages2.jpg" alt="Click me" onclick="openPopup()">
  <div class="popup-container" id="popup">
    <div class="popup-content">
      <h2>Details</h2>
      <p> Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Officiis Porro Voluptate Officia Earum Corrupti Sint Atque Quos Obcaecati Sapiente Nulla Hic Exercitationem Doloremque Ab Ducimus Provident Deleniti Tenetur, Facilis Repudiandae.</p>
      <p> Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing El Obcaecati s Provident Deleniti Tenetur, Facilis Repudiandae.</p>
      <p> Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing El Obcaecati Sapiente Nulla Hic Exercitationem Doloremque Ab Ducimus Provident Deleniti Tenetur, Facilis Repudiandae.</p>
      <button onclick="closePopup() " class="btn">Close</button>
      <a href="/book"class="btn">book now</a>

    </div>
  </div>            
  </div>
    <div class="content">
                <h3>Istanbul</h3>
                <p>A city where the aroma of spices dances in the air, and the markets beckon with treasures from lands far and wide</p>
                <a href="/book"class="btn">book now</a>

            </div>
        </div>

        <div class="box">
            <div class="image">
                <img  src="iamges/packages10.jpg" alt="">
            </div>
            <div class="content">
                <h3>Germany</h3>
                <p>Where the scent of blooming linden trees mingles with the fragrance of freshly baked bread, Germany's essence is a symphony of aromas</p>
                <a href="/book"class="btn">book now</a>
            </div>
        </div>




    <div class="box">
            <div class="image">
                <img  src="iamges/packages8.jpg" alt="">
            </div>
            <div class="content">
                <h3>greece</h3>
                <p>In the embrace of Santorini's sunsets, time seems to pause, as if the world itself is holding its breath in awe.</p>
                <a href="/book"class="btn">book now</a>

            </div>
        </div>
        <div class="box">
            <div class="image">
                <img  src="iamges/packages7.jpg" alt="">
            </div>
            <div class="content">
                <h3>jakarta</h3>
                <p>A city of dreams and aspirations, where every corner holds the promise of new beginnings and endless possibilities.</p>
                <a href="/book"class="btn">book now</a>

            </div>
        </div>


        <div class="box">
            <div class="image">
                <img  src="iamges/packages5.jpg" alt="">
            </div>
            <div class="content">
                <h3>turkey</h3>
                <p>Turkey, where the Silk Road once weaved tales of commerce, now beckons travelers with its rich tapestry of experiences.</p>
                <a href="/book"class="btn">book now</a>

            </div>
        </div>



        <div class="box">
            <div class="image">
                <img  src="iamges/packages6.jpg" alt="">
            </div> 
            <div class="content">
                <h3>Downtown</h3>
                <p>Downtown, where the city's heartbeat is most pronounced, and skyscrapers touch the sky like urban sentinels.</p>
                <a href="/book"class="btn">book now</a>

            </div>
        </div>



        
        <div class="box">
            <div class="image">
                <img  src="iamges/packages12.jpg" alt="">
            </div>
            <div class="content">
                <h3>New york</h3>
                <p>A city aglow, where the lights of Broadway rival the stars, and Times Square pulses with the heartbeat of the night</p>
                <a href="/book"class="btn">book now</a>

            </div>
        </div>

    </div>
    <div class="load-more"><span class="btn">load more</span></div>
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

<script>
function openPopup() {
      document.getElementById('popup').style.display = 'flex';
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }
    </script>



<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="{{asset('js/script.js')}}" defer></script>

<!-- @yield('scripts') -->


</body>
</html>
@endsection