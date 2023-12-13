<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Lanka</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awasome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- coustom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nstyle.css">
    <style>
      .services .hai h1{
         font-size: 35px;
         font-family: Arial, Helvetica, sans-serif;
         color: blue;
      }
      .services .hai h1:hover{
         font-size: 50px;
         font-family: Arial, Helvetica, sans-serif;
         color: brown ;
         transition: .5s linear;
      }
    </style>
</head>
<body>

    <!-- header section starts -->

    <section class="header">
        <a href="index.php" class="logo">travel lanka</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="contact.php">contact</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->

        <!-- home section starts -->

   

    <section class="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide" style="background:url(img/home-slide-1.jpg) no-repeat">
               <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>travel around the world</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide" style="background:url(img/home-slide-2.jpg) no-repeat">
               <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>discover the new places</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide" style="background:url(img/home-slide-3.jpg) no-repeat">
               <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>make your tour worthwhile</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>
         </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
    </section>




    <!-- home section ends -->

    <!-- service section starts -->
   
   <section class="services">
      <div class="hai">
         <h1 id="demo">WELCOME!!!</h1>
      </div>

      <h1 class="heading-title">our services </h1><br>
      <div class="box-container">
         <div class="box">
            <img src="img/icon-1.jpg" alt="icon-1">
            <h3>adventure</h3>
         </div>

         <div class="box">
            <img src="img/icon-2.jpg" alt="icon-1">
            <h3>tour guide</h3>
         </div>

         <div class="box">
            <img src="img/icon-3.jpg" alt="icon-1">
            <h3>trekking</h3>
         </div>

         <div class="box">
            <img src="img/icon-4.jpg" alt="icon-1">
            <h3>camp fire</h3>
         </div>

         <div class="box">
            <img src="img/icon-5.jpg" alt="icon-1">
            <h3>off road</h3>
         </div>

         <div class="box">
            <img src="img/icon-6.jpg" alt="icon-1">
            <h3>camping</h3>
         </div>
      </div>
   </section>

    <!-- service section ends -->

    <!-- home about section starts -->
    
      <section class="home-about">
         <div class="image">
            <img src="img/home-about-img.jpg" alt="about">
         </div>

         <div class="content">
            <h3>about us</h3>
            <p>Travel is the movement of people between distant geographical locations. 
               Travel can be done by foot, bicycle, automobile, train, boat, bus, airplane, 
               ship or other means, with or without luggage, and can be one way or round trip.
               Travel can also include relatively short stays between successive movements, 
               as in the case of tourism.
            </p>
            <a href="about.php" class="btn">read more</a>
         </div>
      </section>

      <!-- home about section ends -->

      <!-- home packges section starts -->

      <section class="home-packages">
         <h1 class="heading-title">our packages</h1>
         <div class="box-container">
            <div class="box">
               <div class="image">
                  <img src="img/home-package1.jpg" alt="package">
               </div>
               <div class="content">
                  <h3>Sigiriya</h3>
                  <p>Sigiriya or Sinhagiri is an ancient rock fortress located in the 
                     northern Matale District near the town of Dambulla in the Central Province, Sri Lanka.</p>
               </div>
               <a href="book.php" class="btn">book now</a>
            </div>

            <div class="box">
               <div class="image">
                  <img src="img/home-package2.jpg" alt="package">
               </div>
               <div class="content">
                  <h3>Ella</h3>
                  <p>Ella is a small town in the Badulla District of Uva Province, Sri Lanka governed by an Urban Council.
                  Ella draws travelers to Sri Lanka's highlands with its mountain forests, tea plantations, 
                  and relatively cool climate.
                  </p>
               </div>
               <a href="book.php" class="btn">book now</a>
            </div>

            <div class="box">
               <div class="image">
                  <img src="img/home-package3.jpg" alt="package">
               </div>
               <div class="content">
                  <h3>Yala</h3>
                  <p>Yala National Park is Sri Lanka’s most popular wildlife park due to the presence of many leopards. Sri Lanka is one of the few countries in
                      the world where the population lives side-by-side with free-roaming animals.</p>
               </div>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="load-more">
            <a href="package.php" class="btn">load more</a>
         </div>
      </section>

       <!-- home packges section ends -->

       <section class="home-offer">
         <div class="content">
            <h3>upto 50% off</h3>
            <p>Our Sri Lanka tour packages offer an experience 
               like never before for tourists and locals alike! 
               Call our Sri Lanka tour agents today.</p>
               <a href="book.php" class="btn">book now</a>
         </div>
       </section>

       <!-- home offer section starts -->

       <!-- home offer section ends -->

     <!-- footer section starts -->

     <section class="footer">
        <div class="box-container">
             <div class="box">
                <h3>quick links</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
             </div>

             <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
             </div>

             <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +94-567-23-43</a>
                <a href="#"><i class="fas fa-phone"></i> +94-567-23-53</a>
                <a href="#"><i class="fas fa-envelope"></i> travel.lanka@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Nakiyadeniya, galle</a>
             </div>

             <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
             </div>
        </div>

        <div class="credit"> created by <span>Designer</span> | all right reserved! </div>
     </section>

     <!-- footer section ends -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- coustom js file link -->
    <script type="text/javascript" src="javascript/script.js"></script>
    <script type="text/javascript" src="javascript/script_dec.js"></script>
   
    

</body>
</html>