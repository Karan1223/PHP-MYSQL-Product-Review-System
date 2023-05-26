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
    <title>Display Review</title>
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
<main>

<section id="feedback">
            <h3>Display your review based upon Product Name!</h3>
            <form method='post' action=''>
                
            <label class="person">&nbsp; &nbsp; &nbsp;Product Name</label>
            <input type="text" id="fname2" name="name" autofocus required placeholder="Enter product name here."><br><br>
            <input id="btn1" type="submit" value="Submit" onclick="openPopup2()">
            <h3>To Edit or Delete Review Click on the Buttons below.</h3>
            <div class="popup" id="popup">
                <img src="images/home/greentick.png" alt="done">
                <h2>Thank You</h2><br>
                <p id="appointment-confirmation"></p>
                <button type="button" onclick="closePopup()" id="ok">OK</button>
            </div>
</form>

<form method='post' action='editReview.php'>
<input class="btn" type="submit" value="Edit Review" onclick="openPopup2()">
</form>
<form method='post' action='deleteReview.php'>
<input class="btn" type="submit" value="Delete Review" onclick="openPopup2()">
</form>
<br> <br>



<?php
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
 
$name = $_POST['name'];
// Select all data from the review table
$sql = "SELECT * FROM review WHERE product_name = '$name'";
$result = mysqli_query($link, $sql);

// Display the data in an HTML table format
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Product Name</th><th>Rating</th><th>Comment</th><th>Posted At</th><th>Edited At</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["rating"] . "</td><td>" . $row["comment"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No Such Product Review Exists.<br>";
   echo  "<a href='review.php'>Post Review</a>";
}
}
// Close the database connection
mysqli_close($link);
?>

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
