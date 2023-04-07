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
    
    <div class="heading" style="background:url(img/contact-bg.jpg) no-repeat">
        <h1>contact us</h1>
    </div>

        
    <!-- contact section starts -->

    <div class="con_details">
        <br><br>
        <div class="con_container">
            <div class="con_box">
            <h3>contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i> +94-567-23-43</a>
                    <a href="#"><i class="fas fa-phone"></i> +94-567-23-53</a>
                    <a href="#"><i class="fas fa-envelope"></i> travel.lanka@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i> Nakiyadeniya, galle</a>
            </div>
            <div class="con_box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>

    <!-- contact section ends -->

    <!-- message section start -->

    <section class="contacting">
        <h1 class="head-title">You can also contact us by using this form</h1>

        <form action="mailto:travel.lanka@gmail.com?  method="" class="book-form" onsubmit="return validate1()">
            <div class="flex">
                <div class="inputBox">
                    <span>first name :</span>
                    <input type="text" placeholder="first name" name="fname" id="fname" required>
                </div>
                <div class="inputBox">
                    <span>last name :</span>
                    <input type="text" placeholder="last name" name="lname" id="lname" required>
                </div>
                <div class="inputBox">
                    <span>subject :</span>
                    <input type="text" placeholder="subject" name="subject" id="subject" required>
                </div>
                <div class="inputBox">
                    <span>message :</span>
                    <input type="text" placeholder="message" name="body" id="body" required>
                </div>
                <div class="inputBox">
                    <span>reply email :</span>
                    <input type="text" placeholder="xxx@gmail.com" name="email" id="email" id="body" required>
                </div>
                <input type="submit" value="submit" class="btn" name="send">
        </form>
       
    </section>

    
     <!-- message section ends -->

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