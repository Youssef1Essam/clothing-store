
<?php
session_start();
if($_SESSION['issignin']!=true){
    header("location:signin.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LInk To CSS -->
    <link rel="stylesheet" href="../clothing-store2/css/style.css">
    <!-- render all elements normally -->
    <link rel="stylesheet" href="css/normalaze.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- font awesome library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- icon-->
    <link rel="shortcut icon" href="../clothing-store2/image/logo.ico">

    <title>Prada Store</title>
</head>

<body>

    <!-- start Navbar -->
    <header>
        
        <h1 class="logo"><span>P</span>rada <span>Store</span></h1>
        
        <div class="navbar">


            <ul>
                
                <li><a href="#home">Home</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#aboutus">About</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li class="dropdown">
                    <a href="#partners" class="dropbtn">our partners</a>
                    <div class="dropdown-content">
                    <a href="zara.php">Zara</a>
                    <a href="nike.php">Nike</a>
                    <a href="adidas.php">Adidas</a>
                    </div>
                </li>
                <li class="btn-cta  dropdown" ><a><span>Setting</span></a>
                    <div class="dropdown-content">
                    <a href="signin.php">Signin</a>
                    <a href="logout.php">logout</a>
                    </div>
            
            
            </li>
            </ul>
            



        </div>
        <div class="logo-search">

            <label class="switch">
                <input type="checkbox" id="toggle-button">
                <span class="slider round"></span>
            </label>
            
            <a  class="logo">Shoping<span>bag</span></a>
            
            <br>
            <div class="bag">
                <a href="#" onclick="openWin()"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>

        </div>
    </header>
    <!-- end Navbar -->
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>
                <Span>Make</Span>Your shopping <span>Now</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Dolores veritatis ad blanditiis molestias sunt aspernatur.</p>
            <a href="#shop" class="btn">Shop Now</a>
        </div>
    </section>
    <!--end home-->


   <!--start shop -->
   <section class="shop  reveal fade-bottom" id="shop">
        <div class="heading">
            <i class="fas fa-shopping-cart"></i><br>
            <span>NEW COLLECTION</span>
            <h2>Best Selling</h2>
        </div>
        <div class="shop-container">
            <!-- Box 1 -->
            <div class="box">
            <a href="zara.php" ><div class="box-img">
                    <img src="image/7_vhbd-ce.jpg" alt="">
                </div></a>
                <div class="title-price">
                    <h3>white T-shirt</h3>
                
                </div>
                <span>$99</span>

            </div>

            <!-- Box 2 -->
            <div class="box">
                <a href="zara.php" > <div class="box-img">
                    <img src="image/7_efwo-nw.jpg" alt="">
                </div></a>
                <div class="title-price">
                    <h3> white T-shirt</h3>
                </div>
                <span>$99</span>

            </div>
            <!-- Box 3 -->
            <div class="box">
                <a href="zara.php" >  <div class="box-img">
                    <img src="image/7_dwcc-8f.jpg" alt="">
                </div></a>
                <div class="title-price">
                    <h3>pink T-shirt</h3>
                </div>
                <span>$99</span>
                

            </div>
            <!-- Box 4 -->
            <div class="box">
                <a href="nike.php" ><div class="box-img">
                    <img src="image/ad10.jpg" alt="">
                </div></a>
                <div class="title-price">
                    <h3>Adidas Shoes</h3>
                
                </div>
                <span>$99</span>

            </div>
            <!-- Box 5 -->
            <div class="box">
                <a href="nike.php" >  <div class="box-img">
                    <img src="image/ad9.jpg" alt="">
                </div></a>
                <div class="title-price">
                    <h3>Adidas Shoes</h3>
                
                </div>
                <span>$99</span>

            </div>
            <!-- Box 6 -->
            <div class="box">
                <a href="nike.php" >  <div class="box-img">
                    <img src="image/ad8.jpg" alt="">
                </div></a>
                <div class="title-price">
                    <h3>Adidas Shoes</h3>
                    
                </div>
                <span>$99</span>

            </div>
        </div>
        </div>

    </section>

    <!--end shop-->
    <!-- Products -->
    <section class="new reveal fade-left" id="partners">
        <div class="heading">
            <i class="fas fa-check-circle"></i>
            <h2>our partners</h2>
        </div>
        <!-- Content -->
        <div class="new-container">
            <!-- Box 1 -->
            <div class="zara">
                <img src="../clothing-store2/image/zara2.jpg" alt="zara1" height="220">
                <a href="zara.php"><button class="zarabtn">shop now</button></a>
            </div>       
            <!-- Box 2 -->
            <div class="nike">
                <img src="../clothing-store2/image/nike.jpg" alt="Nike" height="220">
                <a href="nike.php"><button class="nikebtn">shop now</button></a>

            </div>
            <!-- Box 3 -->
            <div class="adidas">
                <img src="../clothing-store2/image/adidas1.jpg" alt="adidas" height="220">
                <a href="adidas.php"><button class="addbtn">shop now</button></a>
            </div>
            

        </div>
    </section>
<!-- end Products -->
<!-- start about -->
<section class="aboutus reveal fade-right" id="aboutus">

    <div class="us">
        <i class="fas fa-address-card fa-lg"></i>
        <h1>About Us</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
            Numquam illo quisquam repellendus a labore accusantium mollitia exercitationem praesentium id ab, <br>
            aperiam eos est laboriosam debitis, blanditiis eum explicabo quae nemo.</p>
    </div>
</section>



<!-- end about -->
<!-- start contact -->

<section class="contact reveal fade-left" id="contact">
    
    <h1 class="heading"><i class="fas fa-id-card-alt"></i><br>contact us</h1>

    <div class="row">
        <form action="">
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="tel" placeholder="subject" class="box">
            <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </div>

</section>

<!-- end contact -->
<!-- start end -->
<section class="about reveal fade-bottom" id="about">
    <div class="heading">
        <i class="fas fa-truck"></i>
        <h2>Services</h2>
        <p>alwayes we can help you</p>
    </div>
    <div class="second-container">
        <div class="first">
            <i class="fas fa-plane"></i>
            <h2>Fast charging</h2>
            <p>Shipping all cities</p>
    
        </div>
    
        <div class="second">
            <i class="fas fa-headphones-alt"></i>
            <h2>The ease of shopping</h2>
            <p>Product details in size</p>
    
        </div>
    
        <div class="tired">
            <i class="fas fa-wallet"></i>
            <h2>Cash payment</h2>
            <p>Enjoy cash payment</p>
    
        </div>
    
        <div class="four">
            <i class="fas fa-check-circle"></i>
            <h2>Best Prices</h2>
            <p>Our prices don't compare.</p>
    
        </div>

    </div>
<!-- Footer -->
<section class="footer" id="footer">
    <div class="footer-box">
        <h2>clothing brand</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt amet minus mollitia impedit qui
            asperiores!</p>

    </div>
    <div class="footer-box">
        <h3>Services</h3>
        <li><a href="#">Product</a></li>
        <li><a href="#">Help & Support</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">FAQ</a></li>
    </div>
    <div class="footer-box">
        <h3>Product</h3>
        <li><a href="zara.php">T-shirt's</a></li>
        <li><a href="nike.php">Shoes's</a></li>
        <li><a href="zara.php">Shorts</a></li>
        <li><a href="adidas.php">Sneakers</a></li>
    </div>
    <div class="footer-box contact-info">
        <h3>Contact</h3>
        <span> Cairo, Egypt</span>
        <div class="social">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>



    </div>
</section>

<div class="copyright">
    <p>&#169; 2023 Created By , All Right Reserved.</p>
</div>
    
</section>
<!-- end -->

<script src="../clothing-store2/js/main.js"></script>

</body>

</html>