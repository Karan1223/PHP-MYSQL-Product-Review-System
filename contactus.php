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
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="author" content="Bharat">
    <meta name="keywords" content="HTML, CSS, Homepage design">
    <meta name="descriptiosn" content="This is the homepage of shopLenses wesite.">
    <meta name="viewport" content="width=device-width initial-scale=0.1">
    <style>
        
        <?php include "./CSS/reset.css" ?>
        <?php include "./CSS/contactstyle.css" ?>
        
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
        <section id="contact">
            <h3>Have Questions? We are here to help you!</h3>
            <label class="person">First Name</label>
            <input type="text" id="fname" autofocus placeholder="Your first name here"><br><br>
            <label class="person">Last Name</label>
            <input type="text" id="lname" required placeholder="Your last name here"><br><br>
            <label>Email</label>
            <input type="email" id="email" required placeholder="Your email here"><br><br>
            <label for="department">Query about</label>
            <input type="checkbox" id="department">Sunglasses
            <input type="checkbox" id="department">Eyeglasses
            <input type="checkbox" id="department">Lenses
            <input type="checkbox" id="department">Others <br><br>
            <label class="desc">Your Query</label>
            <div class="descc">
                <input type="text" id="description" placeholder="Type your query here..."><br><br>
            </div>
            <input type="submit" value="Submit" onclick="openPopup()">
            <div class="popup" id="popup">
                <img src="images/home/greentick.png" alt="done">
                <h2>Thank You</h2><br>
                <p id="appointment-confirmation"></p>
                <button type="button" onclick="closePopup()" id="ok">OK</button>
            </div>
        </section>

        <section id="feedback">
            <h3>Your feedback matters a lot!</h3>
            <label class="person">First Name</label>
            <input type="text" id="fname2" autofocus required placeholder="Your first name here"><br><br>
            <label class="person">Last Name</label>
            <input type="text" id="lname2" required placeholder="Your last name here"><br><br>
            <label>Email</label>
            <input type="email" id="email2" required placeholder="Your email here"><br><br>
            <label>Age</label>
            <input type="text" id="age" required placeholder="Your age here"><br><br>
            <label for="rate">Rate our service</label>
            <input type="radio" name="options" id="1">Very Poor
            <input type="radio" name="options" id="2">Poor
            <input type="radio" name="options" id="3">Average
            <input type="radio" name="options" id="4">Good
            <input type="radio" name="options" id="5">Excellent <br><br>
            <label class="desc">Comments</label>
            <div class="descc">
                <input type="text" id="description2" placeholder="Type your comment here..."><br><br>
            </div>
            <input type="submit" value="Submit" onclick="openPopup2()">
            <div class="popup" id="popup">
                <img src="images/home/greentick.png" alt="done">
                <h2>Thank You</h2><br>
                <p id="appointment-confirmation"></p>
                <button type="button" onclick="closePopup()" id="ok">OK</button>
            </div>
        </section>
        <script src="javascript/contactUs.js"></script>

        
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

        <!--information about our brands-->
        <h3>OUR BRANDS</h3>
        <section id="our-brands">
            <img src="images/home/dolcegabbana.jpg" alt="Dolce Gabbana" id="dc">
            <img src="images/home/versace" alt="versace" id="versace">
            <img src="images/home/gucci.png" alt="">
            <img src="images/home/oakley.png" alt="">
            <img src="images/home/tomford.png" alt="">
            <img src="images/home/rayban.png" alt="">
        </section>
        <br><br>
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