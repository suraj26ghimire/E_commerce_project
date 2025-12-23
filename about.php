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
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm SURAJ GHIMIRE  A Student of BCA Student from Asian College . This website is designed and developed with care to provide a smooth and user-friendly experience. We are constantly working to improve features, fix bugs, and ensure everything runs efficiently. Your feedback is valuable, so feel free to share your thoughts.I love designing websites and exploring new things. Learning new things is my hobby.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-5.jpg" alt="">
        <P>The iPhone offers a smooth experience with a great camera and fast performance. My new laptop is lightweight yet powerful, perfect for daily tasks. The television delivers clear visuals and immersive sound, ideal for movie nights. The smartwatch keeps me updated and tracks health efficiently.</P>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="https://www.facebook.com" target="_blank"> Sagar Adhikari</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-1.jpg" alt="">
         <p>It is the first online services in Nepal which we can trust completely.I always unbox making a video and instantly complain if there's anything wrong. Sometimes even don't need to return the item and they process the refund. KinBech do heavy fine to sellers who send wrong products thats why its platform getting better day by day.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com" target="_blank">Gagan </a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.jpg" alt="">
         <p>This watch is a perfect blend of style and functionality. It looks sleek on the wrist and feels comfortable for all-day wear. The battery lasts long, and features like heart rate tracking, step count, and notifications are accurate and helpful. It pairs easily with my phone and keeps me updated. A great choice for everyday use!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com" target="_blank">Ganesh Regmi</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-7.jpg" alt="">
        <P>The iPhone offers a smooth experience with a great camera and fast performance. My new laptop is lightweight yet powerful, perfect for daily tasks. The television delivers clear visuals and immersive sound, ideal for movie nights. The smartwatch keeps me updated and tracks health efficiently.</P>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com target="_blank">Aayog Giri</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.jpg" alt="">
        <P>The iPhone offers a smooth experience with a great camera and fast performance. My new laptop is lightweight yet powerful, perfect for daily tasks. The television delivers clear visuals and immersive sound, ideal for movie nights. The smartwatch keeps me updated and tracks health efficiently.</P>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com" target="_blank">Suyog Adhikari</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.jpg" alt="">
          <P>The iPhone offers a smooth experience with a great camera and fast performance. My new laptop is lightweight yet powerful, perfect for daily tasks. The television delivers clear visuals and immersive sound, ideal for movie nights. The smartwatch keeps me updated and tracks health efficiently.</P>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com"  target="_blank">Binay Shrestha</a></h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>