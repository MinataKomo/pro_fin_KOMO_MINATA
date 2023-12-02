<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="owl.carousel.css">
        <title>Product card shop</title>
    </head>
    <body>
        <!-- <h1 class="title-shop">SHOP</h1> -->
        <main class="main bd-grid owl-carousel">
            <article class="card">
                <div class="card__img">
                    <img src="image/copro3.jpg" alt="" style=" width: 150px;">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="index.php" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="image/copro.jpg" alt="" style=" width: 150px;">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img3.png" alt="" style=" width: 150px;">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img4.png" alt="" style=" width: 150px;">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>
            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img3.png" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>
            <article class="card">
                <div class="card__img">
                    <img src="image/copro.jpg" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>
        </main>


<div>


</div>







        <!-- ICONS -->
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <!-- Jquery CDN  -->
        <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<!-- Owl Slider  -->
<script src="owl.carousel.js"></script>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    items: 4,
    autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:true,
    responsive:{
        0:{
             items:1
         },
         574:{
             items:2
         },
         600:{
             items:2
         },
         800:{
             items:3
         },
         1000:{
             items:4
         },
      
     }
    
})
</script>


    </body>
</html>
