<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Lanka</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- font awasome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- coustom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <style>
       .booking .book-form .flex .inputBox select {
            width: 100%;
            padding:1.2rem 1.4rem ;
            font-size: 1.6rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: var(--light-black);
            margin-top: 1.5rem;
            border: var(--border);
  
        }
        .booking .book-form .flex .inputBox select:focus{
            background: var(--black);
            color: var(--white);
        }
    </style>
</head>
<body>

    <!-- header section starts -->

    <section class="header">
        <a href="home.php" class="logo">travel lanka</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="contact.php">contact</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->
    
    <div class="heading" style="background:url(img/book-bg.jpg) no-repeat">
        <h1>book now</h1>
    </div>

    <!-- booking section starts -->

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form" onsubmit="return validate()">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" id="name" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="text" placeholder="enter your email" name="email" id="email" required>
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="text" placeholder="enter your number" name="phone" id="phone" required>
                </div>
                <div class="inputBox">
                    <span><address></address>address :</span>
                    <input type="text" placeholder="enter your address" name="address" id="address" required>
                </div>
                <div class="inputBox">
                    <span>where to :</span><br>
                    <!-- <input type="text" placeholder="place you want to visit" name="location" id="location" required> -->
                    <select name="location" id="location">
                        <option value="Select location" >Select location</option>
                        <option value="Sigiriya" >Sigiriya</option>
                        <option value="Ella" >Ella</option>
                        <option value="Yala" >Yala</option>
                        <option value="Hummanaya" >Hummanaya</option>
                        <option value="Polhena Beach" >Polhena Beach</option>
                        <option value="Sinharaja Rain Forest" >Sinharaja Rain Forest</option>
                        <option value="Kataragama" >Kataragama</option>
                        <option value="Ussangoda Beach" >Ussangoda Beach</option>
                        <option value="Galle Fort" >Galle Fort</option>
                        <option value="Doowili Ella" >Doowili Ella</option>
                        <option value="Trincomalee" >Trincomalee</option>
                        <option value="Sri Padaya" >Sri Padaya</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests" id="guests" required>
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals" id="arrivals" required >
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving" id="leaving" required>
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

    <!-- booking section ends -->


     <!-- footer section starts -->

     <section class="footer">
        <div class="box-container">
             <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
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
    <script type="text/javascript" src="javascript/script_validate.js"></script>

</body>
</html>