<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Majecs Grills and Restobar offers a vibrant atmosphere with expertly crafted grilled dishes and refreshing cocktails, making it the perfect spot for any occasion.</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">3 SIMPLE STEPS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Select_Food.png" alt="">
         <h3>Select Food</h3>
         <p>Browse through our menu and choose your favorite dishes.</p>
      </div>

      <div class="box">
         <img src="images/Delivery.png" alt="">
         <h3>Delivery</h3>
         <p>We’ll prepare and deliver your order right to your doorstep.</p>
      </div>

      <div class="box">
         <img src="images/Enjoy_Food.png" alt="">
         <h3>Enjoy Food</h3>
         <p>Sit back as well as relax and savor your delicious meal!</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">Developers</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/user-icon.png" alt="">
            <h3>Issah Mae Trani</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/user-icon.png" alt="">
            <h3>Joshua Batestil</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/user-icon.png" alt="">
            <h3>Marygin Pulga</h3>
         </div>
      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>