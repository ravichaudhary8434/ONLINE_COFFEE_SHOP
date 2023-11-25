<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive coffee shop website </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> coffee <i class="fas fa-mug-hot"></i> </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="#book">book</a>
    </nav>

    <a href="#" class="btn">book a table</a>

</header>

<!-- header section ends -->

<!-- book section starts -->


<section class="book" id="book">

    <h1 class="heading"> booking <span>reserve a table</span> </h1>

    <form action="book_form.php" method="post">

        <input type="text" placeholder="Enter your name" class="box" name="username">
        <input type="email" placeholder=" Enter your email" class="box" name="email">
        <input type="number" placeholder="Enter your number" class="box" name="phone">

        <textarea  placeholder="Enter your message" class="box" id="" cols="30" rows="10" name="message"></textarea>

        <input type="submit" value="send message" class="btn" name="send">

    </form>

</section>
<!-- book section end -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Bhopal </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Lucknow </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Noida </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Surat </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Bombay </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> menu </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> book </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 8637965378 </a>
            <a href="#"> <i class="fas fa-phone"></i> 8263749534 </a>
            <a href="#"> <i class="fas fa-envelope"></i> romikasingh@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> Bombay, india = 400104 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
    </div>

    <div class="credit"> creatd by <span>Sonali</span> | all rights reserved </div>

</section>

<!-- footer section ends -->

    


















    <!-- custom js file link  -->
<script src="script.js"></script>

    
</body>
</html>