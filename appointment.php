<?php
// Initialize the session
session_start();
 
$_SESSION['Oakley-001'] = "Oakley-001";
$_SESSION['Oakley-003'] = "Oakley-003";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Appointment</title>
    <meta charset="UTF-8">
    <meta name="author" content="Bharat">
    <meta name="keywords" content="HTML, CSS, Homepage design">
    <meta name="descriptiosn" content="This is the homepage of shopLenses wesite.">
    <meta name="viewport" content="width=device-width initial-scale=0.1">
    <style>
        
        <?php include "./CSS/reset.css" ?>
        <?php include "./CSS/appointment.css" ?>
        
    </style>
    <link rel="shortcut icon" href="images/home/favicon.ico">
</head>

<body>
    <header>
   
        <h3>ShopLenses</h3>
        <nav>
            <ul id="navigation">
            <li><a href=""><?php echo "HELLO, ". htmlspecialchars($_SESSION["username"]); ?></a></li>
                <li><a href="welcome.php">HOME</a></li>
                <li><a href="product.php">SUNGLASSES</a></li>
                <li><a href="eyewear.php">EYEGLASSES</a></li>
                <li><a href="contact_lens.php">LENSES</a></li>
                <li><a href="appointment.php">BOOK APPOINTMENT</a></li>
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
        <img id="doctor" src="images/appointment/eyedoctor.jpg" alt="Doctor">
        <section id="form">
            <h3>BOOK YOUR APPOINTMENT WITH CANADA'S BEST EYE SPECIALISTS</h3><br><br>

            <label class="person">First Name</label>
            <input type="text" id="fname" placeholder="Your first name here"><br><br>
            <label class="person" for="lname">Last Name</label>
            <input type="text" id="lname" placeholder="Your last name here"><br><br>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Your email here"><br><br>
            <label for="phone">Phone Number</label>
            <input type="number" id="phone" placeholder="Phone Number"><br><br>
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob"><br><br>
            <label for="rate" id="gender">Gender</label>
            <input type="radio" name="options" value="Male">Male
            <input type="radio" name="options" value="Female">Female
            <input type="radio" name="options" value="Others">Others <br><br>
            <label for="appoinmentDate">Schedule date</label>
            <input type="date" id="appointmentDate"><br><br>
            <br><br>
            <label for="type">Type</label>
            <select name="appointmentType" id="type" size="1" form="appointment" required>
                <option value="label">Select Appointment Type</option>
                <option value="Virtual">Virtual</option>
                <option value="in-person">In-person</option>
            </select><br><br>
            <label for="province">Province</label>
            <select name="state" id="province" size="1" form="appointment" required>
                <option value="label">Province</option>
                <option value="Alberta">Alberta</option>
                <option value="British Columbia">British Columbia</option>
                <option value="Manitoba">Manitoba</option>
                <option value="New Brunswick">New Brunswick</option>
                <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                <option value="Nova Scotia">Nova Scotia</option>
                <option value="Ontario">Ontario</option>
                <option value="Prince Edward Island">Prince Edward Island</option>
                <option value="Quebec">Quebec</option>
                <option value="Saskatchewan">Saskatchewan</option>
            </select><br><br>
            <label for="timeslot" id="timeslot">Pick timeslot</label>
            <select name="time" id="timeslot" size="1" form="appointment" required>
                <option value="label">Select time</option>
                <option value="10">10:00 am - 11:00 am</option>
                <option value="11">11:30 am - 12:30 pm</option>
                <option value="1">01:00 pm - 2:00 pm</option>
                <option value="3">03:00 pm - 4:00 pm</option>
                <option value="4">04:00 pm - 05:00 pm</option>
            </select><br><br>
            <input type="submit" value="Submit" onclick="openPopup()">
            <div class="popup" id="popup">
                <img src="images/home/greentick.png" alt="done">
                <h2>Thank You</h2><br>
                <p id="appointment-confirmation"></p>
                <button type="button" onclick="closePopup()" id="ok">OK</button>
            </div>

        </section>
        <script src="javascript/appointment.js"></script>

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