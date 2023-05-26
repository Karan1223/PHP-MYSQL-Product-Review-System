<?php
// Initialize the session
session_start();
 

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="author" content="Amrita">
    <meta name="keywords" content="HTML, CSS, Homepage design">
    <meta name="descriptiosn" content="This is the homepage of shopLenses wesite.">
    <meta name="viewport" content="width=device-width initial-scale=0.1">
  
    <style>
        
        <?php include "./CSS/reset.css" ?>
        <?php include "./CSS/indexstyle.css" ?>
        
    </style>
    <link rel="shortcut icon" href="images/home/favicon.ico">
</head>

<body>
    <header>
        <img src="images/home/logo3.png" alt="Logo">
        <h3>ShopLens</h3>
        
        <nav>
            <ul id="navigation">
                
            <li><a href=""><?php echo "HELLO, ". htmlspecialchars($_SESSION["username"]); ?></a></li>
                <li><a href="welcome.php">HOME</a></li>
                <li><a href="product.php">SUNGLASSES</a></li>
                <li><a href="eyewear.php">EYEGLASSES</a></li>
                <li><a href="contact_lens.php">LENSES</a></li>
               
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                
            </ul>
            <ul id="icons">
                <li>
                    <a href=""><img src="https://img.icons8.com/ultraviolet/50/000000/like--v1.png" /></a>
                </li>

                <li>
                    <a href=""><img src="https://img.icons8.com/ultraviolet/50/000000/add-to-collection--v1.png" /></a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <!--Today deal-->

        <section id="intro-pic">
            <img src="images/home/todayOffer1.jpg" alt="Buy Now">
        </section>


        <!--Categories of items that customer can shop-->
        <h3>WHAT YOU CAN SHOP</h3>
        <section id="shop-categories">
            <div>
                <img src="images/home/sunglasses.jpg" alt="sunglasses" id="sunglass"><br><br><br>
                <p id="caption">Sunglasses</p><br>
                <p id="sub-caption">Browse Colorful Sunglasses</p><br>
                <div>
                    <a href="product.php">Shop Now</a>
                </div>
            </div>

            <div>
                <img src="images/home/eyeglasses.jpg" alt="eyeglasses" id="eyeglass"><br><br><br>
                <p id="caption">eyeglasses</p><br>
                <p id="sub-caption">Browse Galsses for Vision</p><br>
                <div>
                    <a href="eyewear.php">Shop Now</a>
                </div>
            </div>

            <div>
                <img src="images/home/fashion.jpg" alt="fashion glasses" id="fashion"><br><br><br>
                <p id="caption">Fashion</p><br>
                <p id="sub-caption">Browse Extra Colorful Vibe Glasses</p><br>
                <div>
                    <a href="product.php">Shop Now</a>
                </div>
            </div>

            <div>
                <img src="images/home/contactlenses.jpg" alt="contactlenses" id="contact"><br><br><br>
                <p id="caption">Contact Lenses</p><br>
                <p id="sub-caption">Shop Colorful Lenses</p><br>
                <div>
                    <a href="contact_lens.php">Shop Now</a>
                </div>
            </div>
        </section>

        <!--Information about popular designs-->
        <h3>POPULAR DESIGNS</h3><br><br>
        <section id="popular-designs">
            <div>
                <img src="images/home/aviator.jpg" alt="Aviator" id="aviator">
                <br><br>
                <p>
                    <a href="product.php">AVIATOR</a>
                </p>
            </div>

            <div>
                <img src="images/home/sqaure.jpg" alt="square" id="square">
                <br><br>
                <p>
                    <a href="product.php">SQUARE</a>
                </p>
            </div>

            <div>
                <img src="images/home/cateye.jpg" alt="cat eye" id="cateye">
                <br><br>
                <p>
                    <a href="eyewear.php">CAT EYE</a>
                </p>
            </div>
        </section>

        <!--Information about our website and what we offer-->
        <section id="aboutUs">
            <div>
                <img src="images/home/aboutus.jpg" alt="about us">
            </div>
            <div>
                <h3>Who we are</h3><br>
                <p>With a large number of people facing eye disorders. Our clear focus on providing a better vision to
                    millions with high-quality eye-wear at very affordable prices along with giving free eye checkups
                    and reaching a large part of the people in need. <br>
                    <br> Our endeavor is to enhance your vision clarity and make it easy for you to see the vivid shades
                    of the world. LET YOUR EYES TWINKLE!!!
                </p><br>
                <h3>Our Mission</h3><br>
                <p>
                    Keeping in mind the cause, our mission is to make a difference on the whole by providing vision
                    access to the underprivileged and beautifying lives. <br>
                    <br> We aim to become a unique identity in the industry by communicating our ideology of delivering
                    high quality eye-wear products to people without having them worry about their pockets.
                </p>
            </div>
        </section>
        <br><br>

        <!--sub navigation information-->
        <section id="sub-navigation">
            <div>
                <img src="https://img.icons8.com/ios/50/000000/phonelink-ring.png" />
                <p>TOLL FREE NUMBER</p><br>
                <a href="">1800-200-200 (9 AM- 9 PM Eastern Standard Time)</a>
            </div>

            <div>
                <img src="https://img.icons8.com/ios/50/000000/new-message.png" />
                <p>EMAIL</p><br>
                <a href="">support@shoplenses.com</a>
            </div>

            <div>
                <img src="https://img.icons8.com/ios/50/000000/complaint.png" />
                <p>COMPLAINTS</p><br>
                <a href="contactus.html">Register any complaint</a>
            </div>
        </section>
        <br><br>

        <!--information about our brands-->
        <h3>OUR BRANDS</h3><br><br>
        <img src="images/home/ourbrand.jpg" alt="Brand image" id="our-brand"><br><br><br><br>
        <section id="our-brands">
            <img src="images/home/dolcegabbana.jpg" alt="Dolce Gabbana" id="dc">
            <img src="images/home/versace" alt="versace" id="versace">
            <img src="images/home/gucci.png" alt="">
            <img src="images/home/oakley.png" alt="">
            <img src="images/home/tomford.png" alt="">
            <img src="images/home/rayban.png" alt="">
        </section>
        <br><br>
        <!--layout the sebscribe section where user can subscribe to our website-->
        <section id="subscribe">
            <div>
                <img src="https://img.icons8.com/clouds/100/000000/cloud-mail.png" />
                <p>Subscribe For Exciting Deals and Offers </p>
            </div>

            <div>
                <form action="index.html" name="Subscribe-form">
                    <input type="email" placeholder="Email" id="email-subscribe" required>
                    <input type="submit" value="Subscribe" id="submit-email" onclick="subscribe()">
                </form>
            </div>
            <script src="javascript/homejs.js"></script>
        </section>

        <p id="confirmation">
        </p>
    </main>

    <!--information about the footer section of the page-->
    <footer>
        <div id="social-media">
            <a href="https://www.facebook.com/login.php/" target="_blank">
                <img src="https://img.icons8.com/glyph-neue/64/000000/facebook.png" />
            </a>

            <a href="https://www.instagram.com/accounts/login/" target="_blank">
                <img src="https://img.icons8.com/glyph-neue/64/000000/instagram-new.png" />
            </a>

            <a href="https://twitter.com/i/flow/login" target="_blank">
                <img src="https://img.icons8.com/ios-filled/50/000000/twitter.png" />
            </a>
        </div>
        <div id="footer-navigation">
            <ul>SUNGLASSES
                <li><a href="sunglasses.html">Sunglasses for men</a></li>
                <li><a href="sunglasses.html">Sunglasses for women</a></li>
                <li><a href="sunglasses.html">Sunglasses for children</a></li>
                <li><a href="sunglasses.html">Sunglasses for beach</a></li>
            </ul>

            <ul>EYEGLASSES
                <li><a href="eyewear.html">Style for men</a></li>
                <li><a href="eyewear.html">Style for women</a></li>
                <li><a href="eyewear.html">Style for children</a></li>
                <li><a href="eyewear.html">Lightweight Styles</a></li>
            </ul>

            <ul>LENSES
                <li><a href="contact_lens.html">Contact Lenses</a></li>
                <li><a href="contact_lens.html">Color Lenses</a></li>
                <li><a href="contact_lens.html">Trending Lenses</a></li>
            </ul>

            <ul>TRENDING STYLES
                <li><a href="sunglasses.html">Aviator</a></li>
                <li><a href="sunglasses.html">Square</a></li>
                <li><a href="sunglasses.html">Cat Eye</a></li>
                <li><a href="sunglasses.html">Lightweight</a></li>
            </ul>

            <ul>INFORMATION
                <li><a href="contactus.html">Feedback</a></li>
                <li><a href="contactus.html">Complaint</a></li>
                <li><a href="">Track Order</a></li>
                <li><a href="">Student Discount</a></li>
            </ul>
        </div>

        <section id="rest-info">
            <div>
                <img src="images/home/mastercard.jpg" alt="master card">
                <img src="images/home/visa.jpg" alt="Visa">
                <img src="images/home/americanxpress.png" alt="america express">
                <br>
                <p>PAYMENT PARTNERS</p>
            </div>

            <div>
                <img src="images/home/dhl" alt="DHL">
                <img src="images/home/fedex.jpg" alt="FedEx">
                <br>
                <p>DELIVERY PARTNERS</p>
            </div>

            <div>
                <br>
                <a href="">Privacy Policy</a> |
                <a href="">Terms and Consitions of Use</a>
            </div>

        </section>
    </footer>

</body>

</html>