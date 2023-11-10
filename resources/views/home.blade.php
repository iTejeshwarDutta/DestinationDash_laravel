@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
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
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background:url(iamges/home2.jpg)no-repeat">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>travel around the world</h3>
                    <a href="/package" class="btn">discover more..</a>

                </div>
            </div>


            <div class="swiper-slide" style="background:url(iamges/home1.jpg)no-repeat">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>discover the new places</h3>
                    <a href="/package" class="btn">discover more..</a>

                </div>
            </div>

            <div class="swiper-slide" style="background:url(iamges/home3.jpg)no-repeat">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="/package" class="btn">discover more..</a>

                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
</section>


<section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <svg  id="logo-69" width="80" height="80" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="stroke" d="M36.95 4.31006H13.05L1.09998 25.0001L13.05 45.6901H36.95L48.9 25.0001L36.95 4.31006Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M14.66 5.38996C14.77 5.27996 25.54 5.20996 25.71 5.20996C25.88 5.20996 36.65 5.27996 36.71 5.38996C36.77 5.49996 47.51 24.05 47.51 24.22C47.51 24.39 36.87 42.94 36.76 43.05C36.65 43.16 25.88 43.22 25.76 43.22C25.64 43.22 14.82 43.16 14.76 43.05C14.7 42.94 3.85999 24.39 3.85999 24.22C3.85999 24.05 14.55 5.49996 14.66 5.38996Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M16.26 6.48012C16.49 6.26012 26.08 6.12012 26.42 6.12012C26.76 6.12012 36.36 6.26012 36.58 6.48012C36.8 6.70012 46.23 23.1001 46.23 23.4801C46.23 23.8601 36.8 40.2201 36.58 40.4801C36.36 40.7401 26.76 40.8401 26.42 40.8401C26.08 40.8401 16.49 40.7001 16.26 40.4801C16.03 40.2601 6.60999 23.8601 6.60999 23.4801C6.60999 23.1001 16 6.70012 16.26 6.48012Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M17.87 7.57C18.2 7.23 26.63 7 27.13 7C27.63 7 36.06 7.2 36.39 7.54C36.72 7.88 44.9 22.15 44.9 22.66C44.9 23.17 36.72 37.42 36.39 37.75C36.06 38.08 27.64 38.29 27.13 38.29C26.62 38.29 18.2 38.08 17.87 37.75C17.54 37.42 9.37 23.16 9.37 22.66C9.37 22.16 17.54 7.9 17.87 7.57Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M19.48 8.64994C19.92 8.20994 27.17 7.93994 27.84 7.93994C28.51 7.93994 35.77 8.20994 36.21 8.64994C36.65 9.08994 43.56 21.1999 43.56 21.8799C43.56 22.5599 36.65 34.6599 36.21 35.0999C35.77 35.5399 28.52 35.8199 27.84 35.8199C27.16 35.8199 19.92 35.5399 19.48 35.0999C19.04 34.6599 12.12 22.5499 12.12 21.8799C12.12 21.2099 19 9.08994 19.48 8.64994Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M21.08 9.74009C21.64 9.18009 27.71 8.84009 28.55 8.84009C29.39 8.84009 35.47 9.18009 36.02 9.74009C36.57 10.3001 42.23 20.2501 42.23 21.1001C42.23 21.9501 36.58 31.9001 36 32.4501C35.42 33.0001 29.38 33.3501 28.53 33.3501C27.68 33.3501 21.62 33.0101 21.06 32.4501C20.5 31.8901 14.86 21.9401 14.86 21.1001C14.86 20.2601 20.53 10.2901 21.08 9.74009Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M22.69 10.82C23.35 10.16 28.25 9.75 29.26 9.75C30.27 9.75 35.18 10.16 35.84 10.82C36.5 11.48 40.9 19.3 40.9 20.31C40.9 21.32 36.5 29.14 35.84 29.81C35.18 30.48 30.28 30.88 29.26 30.88C28.24 30.88 23.35 30.47 22.69 29.81C22.03 29.15 17.63 21.33 17.63 20.31C17.63 19.29 22 11.49 22.69 10.82Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M24.29 11.9099C25.07 11.1399 28.79 10.6599 29.97 10.6599C31.15 10.6599 34.88 11.1399 35.65 11.9099C36.42 12.6799 39.56 18.3499 39.56 19.5299C39.56 20.7099 36.43 26.3799 35.65 27.1599C34.87 27.9399 31.16 28.4099 30 28.4099C28.84 28.4099 25.1 27.9299 24.32 27.1599C23.54 26.3899 20.42 20.7199 20.42 19.5299C20.42 18.3399 23.52 12.6799 24.29 11.9099Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M25.9 13.0001C26.78 12.1101 29.33 11.5601 30.68 11.5601C32.03 11.5601 34.58 12.1101 35.47 13.0001C36.36 13.8901 38.23 17.4001 38.23 18.7501C38.23 20.1001 36.35 23.6201 35.47 24.5101C34.59 25.4001 32 25.9401 30.68 25.9401C29.36 25.9401 26.78 25.3901 25.9 24.5101C25.02 23.6301 23.14 20.1001 23.14 18.7501C23.14 17.4001 25 13.8801 25.9 13.0001Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M36.9 17.9999C36.9028 19.2748 36.4635 20.5113 35.6568 21.4985C34.8501 22.4858 33.7261 23.1628 32.4762 23.4141C31.2262 23.6654 29.9279 23.4755 28.8023 22.8768C27.6767 22.278 26.7936 21.3074 26.3035 20.1305C25.8133 18.9536 25.7465 17.6431 26.1144 16.4224C26.4822 15.2017 27.262 14.1463 28.3208 13.4362C29.3796 12.726 30.652 12.405 31.921 12.5278C33.1899 12.6507 34.3771 13.2098 35.28 14.1099C35.7942 14.6186 36.2023 15.2245 36.4804 15.8923C36.7585 16.5601 36.9011 17.2765 36.9 17.9999Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path></svg>
            <h3>adventure</h3>
        </div>
        <div class="box">
            <svg id="logo-69" width="80" height="80" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="stroke" d="M36.95 4.31006H13.05L1.09998 25.0001L13.05 45.6901H36.95L48.9 25.0001L36.95 4.31006Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M14.66 5.38996C14.77 5.27996 25.54 5.20996 25.71 5.20996C25.88 5.20996 36.65 5.27996 36.71 5.38996C36.77 5.49996 47.51 24.05 47.51 24.22C47.51 24.39 36.87 42.94 36.76 43.05C36.65 43.16 25.88 43.22 25.76 43.22C25.64 43.22 14.82 43.16 14.76 43.05C14.7 42.94 3.85999 24.39 3.85999 24.22C3.85999 24.05 14.55 5.49996 14.66 5.38996Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M16.26 6.48012C16.49 6.26012 26.08 6.12012 26.42 6.12012C26.76 6.12012 36.36 6.26012 36.58 6.48012C36.8 6.70012 46.23 23.1001 46.23 23.4801C46.23 23.8601 36.8 40.2201 36.58 40.4801C36.36 40.7401 26.76 40.8401 26.42 40.8401C26.08 40.8401 16.49 40.7001 16.26 40.4801C16.03 40.2601 6.60999 23.8601 6.60999 23.4801C6.60999 23.1001 16 6.70012 16.26 6.48012Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M17.87 7.57C18.2 7.23 26.63 7 27.13 7C27.63 7 36.06 7.2 36.39 7.54C36.72 7.88 44.9 22.15 44.9 22.66C44.9 23.17 36.72 37.42 36.39 37.75C36.06 38.08 27.64 38.29 27.13 38.29C26.62 38.29 18.2 38.08 17.87 37.75C17.54 37.42 9.37 23.16 9.37 22.66C9.37 22.16 17.54 7.9 17.87 7.57Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M19.48 8.64994C19.92 8.20994 27.17 7.93994 27.84 7.93994C28.51 7.93994 35.77 8.20994 36.21 8.64994C36.65 9.08994 43.56 21.1999 43.56 21.8799C43.56 22.5599 36.65 34.6599 36.21 35.0999C35.77 35.5399 28.52 35.8199 27.84 35.8199C27.16 35.8199 19.92 35.5399 19.48 35.0999C19.04 34.6599 12.12 22.5499 12.12 21.8799C12.12 21.2099 19 9.08994 19.48 8.64994Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M21.08 9.74009C21.64 9.18009 27.71 8.84009 28.55 8.84009C29.39 8.84009 35.47 9.18009 36.02 9.74009C36.57 10.3001 42.23 20.2501 42.23 21.1001C42.23 21.9501 36.58 31.9001 36 32.4501C35.42 33.0001 29.38 33.3501 28.53 33.3501C27.68 33.3501 21.62 33.0101 21.06 32.4501C20.5 31.8901 14.86 21.9401 14.86 21.1001C14.86 20.2601 20.53 10.2901 21.08 9.74009Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M22.69 10.82C23.35 10.16 28.25 9.75 29.26 9.75C30.27 9.75 35.18 10.16 35.84 10.82C36.5 11.48 40.9 19.3 40.9 20.31C40.9 21.32 36.5 29.14 35.84 29.81C35.18 30.48 30.28 30.88 29.26 30.88C28.24 30.88 23.35 30.47 22.69 29.81C22.03 29.15 17.63 21.33 17.63 20.31C17.63 19.29 22 11.49 22.69 10.82Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M24.29 11.9099C25.07 11.1399 28.79 10.6599 29.97 10.6599C31.15 10.6599 34.88 11.1399 35.65 11.9099C36.42 12.6799 39.56 18.3499 39.56 19.5299C39.56 20.7099 36.43 26.3799 35.65 27.1599C34.87 27.9399 31.16 28.4099 30 28.4099C28.84 28.4099 25.1 27.9299 24.32 27.1599C23.54 26.3899 20.42 20.7199 20.42 19.5299C20.42 18.3399 23.52 12.6799 24.29 11.9099Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M25.9 13.0001C26.78 12.1101 29.33 11.5601 30.68 11.5601C32.03 11.5601 34.58 12.1101 35.47 13.0001C36.36 13.8901 38.23 17.4001 38.23 18.7501C38.23 20.1001 36.35 23.6201 35.47 24.5101C34.59 25.4001 32 25.9401 30.68 25.9401C29.36 25.9401 26.78 25.3901 25.9 24.5101C25.02 23.6301 23.14 20.1001 23.14 18.7501C23.14 17.4001 25 13.8801 25.9 13.0001Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M36.9 17.9999C36.9028 19.2748 36.4635 20.5113 35.6568 21.4985C34.8501 22.4858 33.7261 23.1628 32.4762 23.4141C31.2262 23.6654 29.9279 23.4755 28.8023 22.8768C27.6767 22.278 26.7936 21.3074 26.3035 20.1305C25.8133 18.9536 25.7465 17.6431 26.1144 16.4224C26.4822 15.2017 27.262 14.1463 28.3208 13.4362C29.3796 12.726 30.652 12.405 31.921 12.5278C33.1899 12.6507 34.3771 13.2098 35.28 14.1099C35.7942 14.6186 36.2023 15.2245 36.4804 15.8923C36.7585 16.5601 36.9011 17.2765 36.9 17.9999Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path></svg>
            <h3>tour guide</h3>
        </div>
        <div class="box">
           <svg id="logo-69" width="80" height="80" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="stroke" d="M36.95 4.31006H13.05L1.09998 25.0001L13.05 45.6901H36.95L48.9 25.0001L36.95 4.31006Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M14.66 5.38996C14.77 5.27996 25.54 5.20996 25.71 5.20996C25.88 5.20996 36.65 5.27996 36.71 5.38996C36.77 5.49996 47.51 24.05 47.51 24.22C47.51 24.39 36.87 42.94 36.76 43.05C36.65 43.16 25.88 43.22 25.76 43.22C25.64 43.22 14.82 43.16 14.76 43.05C14.7 42.94 3.85999 24.39 3.85999 24.22C3.85999 24.05 14.55 5.49996 14.66 5.38996Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M16.26 6.48012C16.49 6.26012 26.08 6.12012 26.42 6.12012C26.76 6.12012 36.36 6.26012 36.58 6.48012C36.8 6.70012 46.23 23.1001 46.23 23.4801C46.23 23.8601 36.8 40.2201 36.58 40.4801C36.36 40.7401 26.76 40.8401 26.42 40.8401C26.08 40.8401 16.49 40.7001 16.26 40.4801C16.03 40.2601 6.60999 23.8601 6.60999 23.4801C6.60999 23.1001 16 6.70012 16.26 6.48012Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M17.87 7.57C18.2 7.23 26.63 7 27.13 7C27.63 7 36.06 7.2 36.39 7.54C36.72 7.88 44.9 22.15 44.9 22.66C44.9 23.17 36.72 37.42 36.39 37.75C36.06 38.08 27.64 38.29 27.13 38.29C26.62 38.29 18.2 38.08 17.87 37.75C17.54 37.42 9.37 23.16 9.37 22.66C9.37 22.16 17.54 7.9 17.87 7.57Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M19.48 8.64994C19.92 8.20994 27.17 7.93994 27.84 7.93994C28.51 7.93994 35.77 8.20994 36.21 8.64994C36.65 9.08994 43.56 21.1999 43.56 21.8799C43.56 22.5599 36.65 34.6599 36.21 35.0999C35.77 35.5399 28.52 35.8199 27.84 35.8199C27.16 35.8199 19.92 35.5399 19.48 35.0999C19.04 34.6599 12.12 22.5499 12.12 21.8799C12.12 21.2099 19 9.08994 19.48 8.64994Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M21.08 9.74009C21.64 9.18009 27.71 8.84009 28.55 8.84009C29.39 8.84009 35.47 9.18009 36.02 9.74009C36.57 10.3001 42.23 20.2501 42.23 21.1001C42.23 21.9501 36.58 31.9001 36 32.4501C35.42 33.0001 29.38 33.3501 28.53 33.3501C27.68 33.3501 21.62 33.0101 21.06 32.4501C20.5 31.8901 14.86 21.9401 14.86 21.1001C14.86 20.2601 20.53 10.2901 21.08 9.74009Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M22.69 10.82C23.35 10.16 28.25 9.75 29.26 9.75C30.27 9.75 35.18 10.16 35.84 10.82C36.5 11.48 40.9 19.3 40.9 20.31C40.9 21.32 36.5 29.14 35.84 29.81C35.18 30.48 30.28 30.88 29.26 30.88C28.24 30.88 23.35 30.47 22.69 29.81C22.03 29.15 17.63 21.33 17.63 20.31C17.63 19.29 22 11.49 22.69 10.82Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M24.29 11.9099C25.07 11.1399 28.79 10.6599 29.97 10.6599C31.15 10.6599 34.88 11.1399 35.65 11.9099C36.42 12.6799 39.56 18.3499 39.56 19.5299C39.56 20.7099 36.43 26.3799 35.65 27.1599C34.87 27.9399 31.16 28.4099 30 28.4099C28.84 28.4099 25.1 27.9299 24.32 27.1599C23.54 26.3899 20.42 20.7199 20.42 19.5299C20.42 18.3399 23.52 12.6799 24.29 11.9099Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M25.9 13.0001C26.78 12.1101 29.33 11.5601 30.68 11.5601C32.03 11.5601 34.58 12.1101 35.47 13.0001C36.36 13.8901 38.23 17.4001 38.23 18.7501C38.23 20.1001 36.35 23.6201 35.47 24.5101C34.59 25.4001 32 25.9401 30.68 25.9401C29.36 25.9401 26.78 25.3901 25.9 24.5101C25.02 23.6301 23.14 20.1001 23.14 18.7501C23.14 17.4001 25 13.8801 25.9 13.0001Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M36.9 17.9999C36.9028 19.2748 36.4635 20.5113 35.6568 21.4985C34.8501 22.4858 33.7261 23.1628 32.4762 23.4141C31.2262 23.6654 29.9279 23.4755 28.8023 22.8768C27.6767 22.278 26.7936 21.3074 26.3035 20.1305C25.8133 18.9536 25.7465 17.6431 26.1144 16.4224C26.4822 15.2017 27.262 14.1463 28.3208 13.4362C29.3796 12.726 30.652 12.405 31.921 12.5278C33.1899 12.6507 34.3771 13.2098 35.28 14.1099C35.7942 14.6186 36.2023 15.2245 36.4804 15.8923C36.7585 16.5601 36.9011 17.2765 36.9 17.9999Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path></svg>
            <h3>trekking</h3>
        </div>
        <div class="box">
           <svg id="logo-69" width="80" height="80" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="stroke" d="M36.95 4.31006H13.05L1.09998 25.0001L13.05 45.6901H36.95L48.9 25.0001L36.95 4.31006Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M14.66 5.38996C14.77 5.27996 25.54 5.20996 25.71 5.20996C25.88 5.20996 36.65 5.27996 36.71 5.38996C36.77 5.49996 47.51 24.05 47.51 24.22C47.51 24.39 36.87 42.94 36.76 43.05C36.65 43.16 25.88 43.22 25.76 43.22C25.64 43.22 14.82 43.16 14.76 43.05C14.7 42.94 3.85999 24.39 3.85999 24.22C3.85999 24.05 14.55 5.49996 14.66 5.38996Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M16.26 6.48012C16.49 6.26012 26.08 6.12012 26.42 6.12012C26.76 6.12012 36.36 6.26012 36.58 6.48012C36.8 6.70012 46.23 23.1001 46.23 23.4801C46.23 23.8601 36.8 40.2201 36.58 40.4801C36.36 40.7401 26.76 40.8401 26.42 40.8401C26.08 40.8401 16.49 40.7001 16.26 40.4801C16.03 40.2601 6.60999 23.8601 6.60999 23.4801C6.60999 23.1001 16 6.70012 16.26 6.48012Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M17.87 7.57C18.2 7.23 26.63 7 27.13 7C27.63 7 36.06 7.2 36.39 7.54C36.72 7.88 44.9 22.15 44.9 22.66C44.9 23.17 36.72 37.42 36.39 37.75C36.06 38.08 27.64 38.29 27.13 38.29C26.62 38.29 18.2 38.08 17.87 37.75C17.54 37.42 9.37 23.16 9.37 22.66C9.37 22.16 17.54 7.9 17.87 7.57Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M19.48 8.64994C19.92 8.20994 27.17 7.93994 27.84 7.93994C28.51 7.93994 35.77 8.20994 36.21 8.64994C36.65 9.08994 43.56 21.1999 43.56 21.8799C43.56 22.5599 36.65 34.6599 36.21 35.0999C35.77 35.5399 28.52 35.8199 27.84 35.8199C27.16 35.8199 19.92 35.5399 19.48 35.0999C19.04 34.6599 12.12 22.5499 12.12 21.8799C12.12 21.2099 19 9.08994 19.48 8.64994Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M21.08 9.74009C21.64 9.18009 27.71 8.84009 28.55 8.84009C29.39 8.84009 35.47 9.18009 36.02 9.74009C36.57 10.3001 42.23 20.2501 42.23 21.1001C42.23 21.9501 36.58 31.9001 36 32.4501C35.42 33.0001 29.38 33.3501 28.53 33.3501C27.68 33.3501 21.62 33.0101 21.06 32.4501C20.5 31.8901 14.86 21.9401 14.86 21.1001C14.86 20.2601 20.53 10.2901 21.08 9.74009Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M22.69 10.82C23.35 10.16 28.25 9.75 29.26 9.75C30.27 9.75 35.18 10.16 35.84 10.82C36.5 11.48 40.9 19.3 40.9 20.31C40.9 21.32 36.5 29.14 35.84 29.81C35.18 30.48 30.28 30.88 29.26 30.88C28.24 30.88 23.35 30.47 22.69 29.81C22.03 29.15 17.63 21.33 17.63 20.31C17.63 19.29 22 11.49 22.69 10.82Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M24.29 11.9099C25.07 11.1399 28.79 10.6599 29.97 10.6599C31.15 10.6599 34.88 11.1399 35.65 11.9099C36.42 12.6799 39.56 18.3499 39.56 19.5299C39.56 20.7099 36.43 26.3799 35.65 27.1599C34.87 27.9399 31.16 28.4099 30 28.4099C28.84 28.4099 25.1 27.9299 24.32 27.1599C23.54 26.3899 20.42 20.7199 20.42 19.5299C20.42 18.3399 23.52 12.6799 24.29 11.9099Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M25.9 13.0001C26.78 12.1101 29.33 11.5601 30.68 11.5601C32.03 11.5601 34.58 12.1101 35.47 13.0001C36.36 13.8901 38.23 17.4001 38.23 18.7501C38.23 20.1001 36.35 23.6201 35.47 24.5101C34.59 25.4001 32 25.9401 30.68 25.9401C29.36 25.9401 26.78 25.3901 25.9 24.5101C25.02 23.6301 23.14 20.1001 23.14 18.7501C23.14 17.4001 25 13.8801 25.9 13.0001Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M36.9 17.9999C36.9028 19.2748 36.4635 20.5113 35.6568 21.4985C34.8501 22.4858 33.7261 23.1628 32.4762 23.4141C31.2262 23.6654 29.9279 23.4755 28.8023 22.8768C27.6767 22.278 26.7936 21.3074 26.3035 20.1305C25.8133 18.9536 25.7465 17.6431 26.1144 16.4224C26.4822 15.2017 27.262 14.1463 28.3208 13.4362C29.3796 12.726 30.652 12.405 31.921 12.5278C33.1899 12.6507 34.3771 13.2098 35.28 14.1099C35.7942 14.6186 36.2023 15.2245 36.4804 15.8923C36.7585 16.5601 36.9011 17.2765 36.9 17.9999Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path></svg>
            <h3>camp fire</h3>
        </div>
        <div class="box">
           <svg id="logo-69" width="80" height="80" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="stroke" d="M36.95 4.31006H13.05L1.09998 25.0001L13.05 45.6901H36.95L48.9 25.0001L36.95 4.31006Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M14.66 5.38996C14.77 5.27996 25.54 5.20996 25.71 5.20996C25.88 5.20996 36.65 5.27996 36.71 5.38996C36.77 5.49996 47.51 24.05 47.51 24.22C47.51 24.39 36.87 42.94 36.76 43.05C36.65 43.16 25.88 43.22 25.76 43.22C25.64 43.22 14.82 43.16 14.76 43.05C14.7 42.94 3.85999 24.39 3.85999 24.22C3.85999 24.05 14.55 5.49996 14.66 5.38996Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M16.26 6.48012C16.49 6.26012 26.08 6.12012 26.42 6.12012C26.76 6.12012 36.36 6.26012 36.58 6.48012C36.8 6.70012 46.23 23.1001 46.23 23.4801C46.23 23.8601 36.8 40.2201 36.58 40.4801C36.36 40.7401 26.76 40.8401 26.42 40.8401C26.08 40.8401 16.49 40.7001 16.26 40.4801C16.03 40.2601 6.60999 23.8601 6.60999 23.4801C6.60999 23.1001 16 6.70012 16.26 6.48012Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M17.87 7.57C18.2 7.23 26.63 7 27.13 7C27.63 7 36.06 7.2 36.39 7.54C36.72 7.88 44.9 22.15 44.9 22.66C44.9 23.17 36.72 37.42 36.39 37.75C36.06 38.08 27.64 38.29 27.13 38.29C26.62 38.29 18.2 38.08 17.87 37.75C17.54 37.42 9.37 23.16 9.37 22.66C9.37 22.16 17.54 7.9 17.87 7.57Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M19.48 8.64994C19.92 8.20994 27.17 7.93994 27.84 7.93994C28.51 7.93994 35.77 8.20994 36.21 8.64994C36.65 9.08994 43.56 21.1999 43.56 21.8799C43.56 22.5599 36.65 34.6599 36.21 35.0999C35.77 35.5399 28.52 35.8199 27.84 35.8199C27.16 35.8199 19.92 35.5399 19.48 35.0999C19.04 34.6599 12.12 22.5499 12.12 21.8799C12.12 21.2099 19 9.08994 19.48 8.64994Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M21.08 9.74009C21.64 9.18009 27.71 8.84009 28.55 8.84009C29.39 8.84009 35.47 9.18009 36.02 9.74009C36.57 10.3001 42.23 20.2501 42.23 21.1001C42.23 21.9501 36.58 31.9001 36 32.4501C35.42 33.0001 29.38 33.3501 28.53 33.3501C27.68 33.3501 21.62 33.0101 21.06 32.4501C20.5 31.8901 14.86 21.9401 14.86 21.1001C14.86 20.2601 20.53 10.2901 21.08 9.74009Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M22.69 10.82C23.35 10.16 28.25 9.75 29.26 9.75C30.27 9.75 35.18 10.16 35.84 10.82C36.5 11.48 40.9 19.3 40.9 20.31C40.9 21.32 36.5 29.14 35.84 29.81C35.18 30.48 30.28 30.88 29.26 30.88C28.24 30.88 23.35 30.47 22.69 29.81C22.03 29.15 17.63 21.33 17.63 20.31C17.63 19.29 22 11.49 22.69 10.82Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M24.29 11.9099C25.07 11.1399 28.79 10.6599 29.97 10.6599C31.15 10.6599 34.88 11.1399 35.65 11.9099C36.42 12.6799 39.56 18.3499 39.56 19.5299C39.56 20.7099 36.43 26.3799 35.65 27.1599C34.87 27.9399 31.16 28.4099 30 28.4099C28.84 28.4099 25.1 27.9299 24.32 27.1599C23.54 26.3899 20.42 20.7199 20.42 19.5299C20.42 18.3399 23.52 12.6799 24.29 11.9099Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M25.9 13.0001C26.78 12.1101 29.33 11.5601 30.68 11.5601C32.03 11.5601 34.58 12.1101 35.47 13.0001C36.36 13.8901 38.23 17.4001 38.23 18.7501C38.23 20.1001 36.35 23.6201 35.47 24.5101C34.59 25.4001 32 25.9401 30.68 25.9401C29.36 25.9401 26.78 25.3901 25.9 24.5101C25.02 23.6301 23.14 20.1001 23.14 18.7501C23.14 17.4001 25 13.8801 25.9 13.0001Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M36.9 17.9999C36.9028 19.2748 36.4635 20.5113 35.6568 21.4985C34.8501 22.4858 33.7261 23.1628 32.4762 23.4141C31.2262 23.6654 29.9279 23.4755 28.8023 22.8768C27.6767 22.278 26.7936 21.3074 26.3035 20.1305C25.8133 18.9536 25.7465 17.6431 26.1144 16.4224C26.4822 15.2017 27.262 14.1463 28.3208 13.4362C29.3796 12.726 30.652 12.405 31.921 12.5278C33.1899 12.6507 34.3771 13.2098 35.28 14.1099C35.7942 14.6186 36.2023 15.2245 36.4804 15.8923C36.7585 16.5601 36.9011 17.2765 36.9 17.9999Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path></svg>
            <h3>off road</h3>
        </div>
        <div class="box">
           <svg id="logo-69" width="80" height="80" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="stroke" d="M36.95 4.31006H13.05L1.09998 25.0001L13.05 45.6901H36.95L48.9 25.0001L36.95 4.31006Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M14.66 5.38996C14.77 5.27996 25.54 5.20996 25.71 5.20996C25.88 5.20996 36.65 5.27996 36.71 5.38996C36.77 5.49996 47.51 24.05 47.51 24.22C47.51 24.39 36.87 42.94 36.76 43.05C36.65 43.16 25.88 43.22 25.76 43.22C25.64 43.22 14.82 43.16 14.76 43.05C14.7 42.94 3.85999 24.39 3.85999 24.22C3.85999 24.05 14.55 5.49996 14.66 5.38996Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M16.26 6.48012C16.49 6.26012 26.08 6.12012 26.42 6.12012C26.76 6.12012 36.36 6.26012 36.58 6.48012C36.8 6.70012 46.23 23.1001 46.23 23.4801C46.23 23.8601 36.8 40.2201 36.58 40.4801C36.36 40.7401 26.76 40.8401 26.42 40.8401C26.08 40.8401 16.49 40.7001 16.26 40.4801C16.03 40.2601 6.60999 23.8601 6.60999 23.4801C6.60999 23.1001 16 6.70012 16.26 6.48012Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M17.87 7.57C18.2 7.23 26.63 7 27.13 7C27.63 7 36.06 7.2 36.39 7.54C36.72 7.88 44.9 22.15 44.9 22.66C44.9 23.17 36.72 37.42 36.39 37.75C36.06 38.08 27.64 38.29 27.13 38.29C26.62 38.29 18.2 38.08 17.87 37.75C17.54 37.42 9.37 23.16 9.37 22.66C9.37 22.16 17.54 7.9 17.87 7.57Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M19.48 8.64994C19.92 8.20994 27.17 7.93994 27.84 7.93994C28.51 7.93994 35.77 8.20994 36.21 8.64994C36.65 9.08994 43.56 21.1999 43.56 21.8799C43.56 22.5599 36.65 34.6599 36.21 35.0999C35.77 35.5399 28.52 35.8199 27.84 35.8199C27.16 35.8199 19.92 35.5399 19.48 35.0999C19.04 34.6599 12.12 22.5499 12.12 21.8799C12.12 21.2099 19 9.08994 19.48 8.64994Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M21.08 9.74009C21.64 9.18009 27.71 8.84009 28.55 8.84009C29.39 8.84009 35.47 9.18009 36.02 9.74009C36.57 10.3001 42.23 20.2501 42.23 21.1001C42.23 21.9501 36.58 31.9001 36 32.4501C35.42 33.0001 29.38 33.3501 28.53 33.3501C27.68 33.3501 21.62 33.0101 21.06 32.4501C20.5 31.8901 14.86 21.9401 14.86 21.1001C14.86 20.2601 20.53 10.2901 21.08 9.74009Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M22.69 10.82C23.35 10.16 28.25 9.75 29.26 9.75C30.27 9.75 35.18 10.16 35.84 10.82C36.5 11.48 40.9 19.3 40.9 20.31C40.9 21.32 36.5 29.14 35.84 29.81C35.18 30.48 30.28 30.88 29.26 30.88C28.24 30.88 23.35 30.47 22.69 29.81C22.03 29.15 17.63 21.33 17.63 20.31C17.63 19.29 22 11.49 22.69 10.82Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M24.29 11.9099C25.07 11.1399 28.79 10.6599 29.97 10.6599C31.15 10.6599 34.88 11.1399 35.65 11.9099C36.42 12.6799 39.56 18.3499 39.56 19.5299C39.56 20.7099 36.43 26.3799 35.65 27.1599C34.87 27.9399 31.16 28.4099 30 28.4099C28.84 28.4099 25.1 27.9299 24.32 27.1599C23.54 26.3899 20.42 20.7199 20.42 19.5299C20.42 18.3399 23.52 12.6799 24.29 11.9099Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M25.9 13.0001C26.78 12.1101 29.33 11.5601 30.68 11.5601C32.03 11.5601 34.58 12.1101 35.47 13.0001C36.36 13.8901 38.23 17.4001 38.23 18.7501C38.23 20.1001 36.35 23.6201 35.47 24.5101C34.59 25.4001 32 25.9401 30.68 25.9401C29.36 25.9401 26.78 25.3901 25.9 24.5101C25.02 23.6301 23.14 20.1001 23.14 18.7501C23.14 17.4001 25 13.8801 25.9 13.0001Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path><path class="stroke" d="M36.9 17.9999C36.9028 19.2748 36.4635 20.5113 35.6568 21.4985C34.8501 22.4858 33.7261 23.1628 32.4762 23.4141C31.2262 23.6654 29.9279 23.4755 28.8023 22.8768C27.6767 22.278 26.7936 21.3074 26.3035 20.1305C25.8133 18.9536 25.7465 17.6431 26.1144 16.4224C26.4822 15.2017 27.262 14.1463 28.3208 13.4362C29.3796 12.726 30.652 12.405 31.921 12.5278C33.1899 12.6507 34.3771 13.2098 35.28 14.1099C35.7942 14.6186 36.2023 15.2245 36.4804 15.8923C36.7585 16.5601 36.9011 17.2765 36.9 17.9999Z" stroke="black" stroke-width="0.5" stroke-miterlimit="10"></path></svg>
            <h3>camping</h3>
        </div>
       
    </div>

</section>






<section class="home-about">
    <div class="image">
        <img src="iamges/about1.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>With a deep love for travel and a commitment to seamless experiences, This is your ticket to extraordinary destinations. Our mission is to make every trip a story worth telling.&nbsp Join us on this voyage of discovery and let's create memories together.
            <a href="/about" class="btn">read more</a>
   
    </div>
</section>




<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        
        
        <div class="box">
            <div class="image">
            <img src="iamges/packages5.jpg" alt="Click me" onclick="openPopup()">
  <div class="popup-container" id="popup">
    <div class="popup-content">
      <h2>Details</h2>
      <p> Welcome to our Travel Guide for Istanbul, a city where East meets West in a mesmerizing blend of cultures, history, and breathtaking landscapes. Explore the ancient wonders of Hagia Sophia, where Byzantine grandeur meets Ottoman splendor, and the Blue Mosque, an architectural masterpiece that graces the skyline. Stroll through the vibrant markets of the Grand Bazaar, where treasures from across the world await discovery. </p>
     <br> <p>places to visit : <span style=" font-weight:bold"  > Galata Tower, Bosphorus Cruise,  Grand Bazaar ,Topkapi Palace,Hagia Sophia , Chora Church  </span></p>
       <br><p style="font-weight:bold"> estimate cost ₹139440 per head for 7days</p>
      <button onclick="closePopup() " class="btn">Close</button>
      <a href="/book"class="btn">book now</a>

    </div>
  </div>         
  </div>
  <div class="content">
                <h3> istanbul </h3>
                <p>A city where the aroma of spices dances in the air, and the markets beckon with treasures from lands far and wide..</p>
                <a href="/book"class="btn">book now</a>
            </div>
        </div>




        <div class="box">
            <div class="image">
            <img src="iamges/packages6.jpg" alt="Click me" onclick="openPopup()">
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
                <h3> downtown </h3>
                <p>Downtown, where the city's heartbeat is most pronounced, and skyscrapers touch the sky like urban sentinels.</p>
                <a href="/book"class="btn">book now</a>
            </div>
        </div>




        <div class="box">
            <div class="image">
            <img src="iamges/packages12.jpg" alt="Click me" onclick="openPopup()">
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
                <h3> new york </h3>
                <p>A city aglow, where the lights of Broadway rival the stars, and Times Square pulses with the heartbeat of the night</p>
                <a href="/book"class="btn">book now</a>
            </div>
        </div>
</div>

    <div class="load-more" style="margin-left:1rem"> <a href="/package"  class="btn">load more</a></div>
</section>


<section class="home-offer">
    <div class="content">
        <h3>upto 50%off</h3>
        <p>We're passionate about crafting unforgettable journeys that turn travel dreams into cherished memories. Let us be your guide to discovering the world's wonders..</p>
                <a href="/book"class="btn">book now</a>

    </div>
</section>







<section class="footer" >
<div class="box-container">
<div class="box">
    <h3>quick links</h3>
    <a href="/home"><i class="fas fa-angle-right"></i> home</a> 
     <a href="/about"><i class="fas fa-angle-right"></i>about</a>
     <!-- <a href="/about"class="btn btn-primary">abouut </a> -->
 
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
<a href="https://www.facebook.com/tejeshwar.dutta.3/"><i class="fab fa-facebook-f" target="_blank"></i>facebook</a> 
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


</body>
</html>
@endsection
