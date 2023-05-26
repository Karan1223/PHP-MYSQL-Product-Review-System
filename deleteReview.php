<?php

session_start();
// Connect to the database
require_once "config.php";


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete Review</title>
    <meta charset="UTF-8">
    <meta name="author" content="Amrita">
    <meta name="keywords" content="HTML, CSS, Homepage design">
    <meta name="descriptiosn" content="This is the homepage of shopLenses wesite.">
    <meta name="viewport" content="width=device-width initial-scale=0.1">
    <style>
        
        <?php include "./CSS/reset.css" ?>
        <?php include "./CSS/displayReview.css" ?>
        
    </style>
    <link rel="shortcut icon" href="images/home/favicon.ico">

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
                    <a href=""><img src="https://img.icons8.com/ultraviolet/50/000000/like--v1.png"/></a>
                </li>

                <li>
                    <a href=""><img src="https://img.icons8.com/ultraviolet/50/000000/add-to-collection--v1.png"/></a>
                </li>
            </ul>
        </nav>

    </header>
</head>

<body>
<!--     
    <div>

<form method='post' action=''>
<label for='name'>Product Name:</label>
<input type='text' name='name' id='name' /><br>
<label for='rating'>Rating:</label>
<select name='rating' id='rating'>
<option value='1'>1 star</option>
<option value='2'>2 stars</option>
<option value='3'>3 stars</option>
<option value='4'>4 stars</option>
<option value='5'>5 stars</option>
</select><br>
<label for='review'>Review:</label>
<textarea name='review' id='review'></textarea><br>
<input type='submit' value='Submit Review' />
</form>

<div> -->
<main>

<section id="feedback">
            <h3>Delete your review based upon Product Id!</h3>
            <form method='post' action=''>
                
            <label class="person">&nbsp; Product ID</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="fname2" name="pid" autofocus required placeholder="Enter product ID here."><br><br>
            <input type="submit" value="Submit" id="btn1" onclick="openPopup2()">
            <div class="popup" id="popup">
                <img src="images/home/greentick.png" alt="done">
                <h2>Thank You</h2><br>
                <p id="appointment-confirmation"></p>
                <button type="button"  onclick="closePopup()" id="ok">OK</button>
            </div>
</form>

<form method='get' action='displayReview.php'>
<input class="btn" type="submit" value="Display Review" onclick="openPopup2()">
</form>
        </section>
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
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

    $id = $_POST['pid'];

if ( empty($id)) {
    // Handle validation errors
    echo '<script>alert("Product ID is required")</script>';
} else {

   $sql = "DELETE FROM review WHERE id = '$id'";
    // Insert review into database
   // $sql = "INSERT INTO review (product_name, rating, comment) VALUES ('$name', '$rating', '$review_text')";

    if ($link->query($sql) === TRUE) 
    {
        echo '<script>alert("Review Deleted successfully")</script>';
    } else 
    {
        echo '<script>alert("Error Deleting Review.")</script>';
    }
}
}

// Close the database connection
mysqli_close($link);
?>