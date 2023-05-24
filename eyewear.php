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
    <title>Eyeglasses</title>
    <meta charset="UTF-8">
    <meta name="author" content="Amrita">
    <meta name="keywords" content="HTML, CSS, Homepage design">
    <meta name="descriptiosn" content="This is the homepage of shopLenses wesite.">
    <meta name="viewport" content="width=device-width initial-scale=0.1">
    <style>
        
        <?php include "./CSS/reset.css" ?>
        <?php include "./CSS/eyeglass.css" ?>
        
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
                    <a href=""><img src="https://img.icons8.com/ultraviolet/50/000000/like--v1.png"/></a>
                </li>

                <li>
                    <a href=""><img src="https://img.icons8.com/ultraviolet/50/000000/add-to-collection--v1.png"/></a>
                </li>
            </ul>
        </nav>

    </header>
    <main>
        <!--Today deal-->
        <section id="intro-pic">
            <img src="images/eyewear/banner2.jpg" alt="eyeglass">
        </section>

        
        <!--Product list--> <!--side menu-->
       <section class="vertical" >
           <p>Sunglasses</p>
            <ul>
                <li><a href="sunglass.html">Men</a></li>
                <li><a href="sunglass.html">Women</a></li>
                
            </ul>

            <p>Eyelasses</p>
            <ul>
                <li><a href="eyewear.html">Men</a></li>
                <li><a href="eyewear.html">Women</a></li>
                
            </ul>

            <p>Contact Lenses</p>
            <ul>
                <li><a href="contact_lens.html"> Brown</a></li>
                <li><a href="contact_lens.html">Grey</a></li>
                <li><a href="contact_lens.html">Aqua</a></li>
                <li><a href="contact_lens.html">Blue</a></li>
                <li><a href="contact_lens.html">Pink</a></li>
                <li><a href="contact_lens.html">Hazel</a></li>
                
            </ul>

            <p>Price Range</p>
            <ul>
                <li><div class="form-check"> <input type="checkbox" id="check" onclick="checkfunction1()">
                    <label class="form-check-label" for="flexCheckChecked"> $50-$100 </label> </div></li>
                    
                    <li><div class="form-check"> <input type="checkbox" id="check1" onclick="checkfunction2()">
                        <label class="form-check-label" for="flexCheckChecked"> $100-$200 </label> </div></li>

                         <li><div class="form-check"> <input type="checkbox" id="check2" onclick="checkfunction3()">
                    <label class="form-check-label" for="flexCheckChecked"> $200-$300 </label> </div></li>

                    <li><div class="form-check"> <input type="checkbox" id="check3" onclick="checkfunction4()">
                        <label class="form-check-label" for="flexCheckChecked"> $300-$400 </label> </div></li>

                        <li><div class="form-check"> <input type="checkbox" id="check4" onclick="checkfunction5()">
                            <label class="form-check-label" for="flexCheckChecked"> $400-$800 </label> </div></li>
                
            </ul>
            

        </section> 

         <!--Main Grid Portion-->
        <section class="vertical-2">
        <div class="grid">
            <div class="col">
              
              <a href="eyewear.html"><img src="images/eyewear/fr1.jpg" alt="eyeglass"></a>
              <div class="col_bot">
              <p> <b>$100.78</b></p>
              <h5>Model Tom Ford-051</h5>
              </div>
              <div class="cs_button"  data-modal="myBtn">
                 Buy Now
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="review.php?id=10">Post Review</a>
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="displayReview.php">View Review</a>
            </div>
             
             <!-- The Modal -->
        <div id="myBtn" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <div class ="col_md5">
                    <img src="images/eyewear/fr1.jpg" alt="eyeglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Model Tom Ford-051</h1>
                    <hr>
                    <br>
                    <p> Influenced by sport and pop-culture, Frogskins™ Lite is the next evolution of the brand’s most iconic lifestyle eyeglass, 
                        the Frogskins™. Sporting a classic semi-rimless frame design, it features Tom Ford®’s leading performance
                        technology to keep up with every on-the-go adventure.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $100.78</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
                
                <a href="eyewear.html"><img src="images/eyewear/fr2.jpg" alt="eyeglass"></a>
                <div class="col_bot">
                <p> $80.12</p>
              <h5>Model D & G-102</h5>
            </div>
            <div class="cs_button" data-modal="myBtn_2">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="review.php?id=11">Post Review</a>
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="displayReview.php">View Review</a>
            </div>
            
             <!-- The Modal -->
        <div id="myBtn_2" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <div class ="col_md5">
                    <img src="images/eyewear/fr2.jpg" alt="eyeglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Model D & G-102</h1>
                    <hr>
                    <br>
                    <p> Easily recognizable by gleaming gold-toned Greca details at the temples,
                         these bold eyeglasses channel signature Dolce Gabbana glamour. The statement pair feature a black frame 
                         and dark grey lenses. Greca detail and brand logo engraved on the temple for a luxury finish. 
                         
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $80.12</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
           </div>


            <div class="col">
                
                <a href="eyewear.html"><img src="images/eyewear/frame9.jpg" alt="eyeglass"> </a>
                <div class="col_bot">
                <p> $90.00</p>
              <h5>Model Tommy Hilfiger-333</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_3">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="review.php?id=12">Post Review</a>
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="displayReview.php">View Review</a>
            </div>

            <!-- The Modal -->
        <div id="myBtn_3" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <div class ="col_md5">
                    <img src="images/eyewear/frame9.jpg" alt="eyeglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Model Tommy Hilfiger-333</h1>
                    <hr>
                    <br>
                    <p> Holbrook is a timeless, classic design fused with modern Oakley technology.
                         Inspired by the screen heroes from the 1940s, 50s, and 60s, this design epitomizes 
                         the spirit of exploration and adventure. The iconic American frame design is accented by metal 
                         rivets and Tommy Hilfiger icons.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $90.00</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
                
                <a href="eyewear.html"><img src="images/eyewear/prada2.jpg" alt="eyeglass"></a>
                <div class="col_bot">
                <p> $234.78</p>
              <h5>Model Tommy Hilfiger-014</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_4">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="review.php?id=13">Post Review</a>
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="displayReview.php">View Review</a>
            </div>

            <!-- The Modal -->
        <div id="myBtn_4" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <div class ="col_md5">
                    <img src="images/eyewear/prada2.jpg" alt="eyeglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Model Tommy Hilfiger-014</h1>
                    <hr>
                    <br>
                    <p> One of the most iconic shapes, now with a brand new look: Wayfarer goes lens-over-frame with Blaze.

                        The new Blaze lens-over-frame gives this model e a futuristic attitude, while transparent frame enhance its elegance. 
                        This combination results in a catchy, daring and illuminating effect.
                        
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $234.78</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
                
                <a href="eyewear.html"> <img src="images/eyewear/rayban.jpg" alt="eyeglass"></a>
                <div class="col_bot">
                <p>$234.78</p>
              <h5>Model RayBan-785</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_5">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="review.php?id=14">Post Review</a>
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="displayReview.php">View Review</a>
            </div>

            <!-- The Modal -->
        <div id="myBtn_5" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <div class ="col_md5">
                    <img src="images/eyewear/rayban.jpg" alt="eyeglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Model RayBan-785</h1>
                    <hr>
                    <br>
                    <p> One of the most iconic shapes, now with a brand new look: Wayfarer goes lens-over-frame with Blaze.

                        The new Blaze lens-over-frame gives this model e a futuristic attitude, while transparent frame enhance its elegance. 
                        This combination results in a catchy, daring and illuminating effect.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price:$234.78</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
               
                <a href="eyewear.html"><img src="images/eyewear/frr7.jpg" alt="eyeglass"></a>
                <div class="col_bot">
                <p>$212.99</p>
              <h5>Model D & G-056</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_6">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="review.php?id=15">Post Review</a>
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="displayReview.php">View Review</a>
            </div>
            <!-- The Modal -->
        <div id="myBtn_6" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <div class ="col_md5">
                    <img src="images/eyewear/frr7.jpg" alt=" sunglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Model D & G-056</h1>
                    <hr>
                    <br>
                    <p> Straight from the ‘90s vault, the Frank vintage frame is perfect for adding a touch of edge to any look. 
                        Available in gold, black, and silver metal frames, coupled with acetate temple tips for a sleek finish,
                        it comes in a variety of lens options, ranging from classic colours to contemporary polar blue and purple.
                         
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price:$212.99</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>

           
            </div>


            <div class="col">
                
                <a href="eyewear.html"><img src="images/eyewear/fr8.png" alt="eyeglass"></a>
                <div class="col_bot">
                <p> $212.99</p>
              <h5>Model D & G-137</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_7">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="review.php?id=16">Post Review</a>
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="displayReview.php">View Review</a>
            </div>
            <!-- The Modal -->
        <div id="myBtn_7" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <div class ="col_md5">
                    <img src="images/eyewear/fr8.png" alt="eyeglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Model D & G-137</h1>
                    <hr>
                    <br>
                    <p> The evolution of an icon &#8211; these Aviator sunglasses rework Dolce Gabbana &#8217;s signature pilot 
                        silhouette with sleek gold-tone metalwork and green lenses, discreetly marked with the brand&#8217;s 
                        logo. The high double nose bridge adds nonchalant appeal to these supremely functional frames, set for legendary status.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $212.99</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
                
                <a href="eyewear.html"><img src="images/eyewear/prada3.jpg" alt="eyeglass"></a>
                <div class="col_bot">
                <p> $200.23</p>
              <h5>Model Tom Ford-858</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_8">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="review.php?id=17">Post Review</a>
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="displayReview.php">View Review</a>
            </div>
            <!-- The Modal -->
        <div id="myBtn_8" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <div class ="col_md5">
                    <img src="images/eyewear/prada3.jpg" alt="eyeglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Model Tom Ford-858</h1>
                    <hr>
                    <br>
                    <p> Discover the new Tom Ford Eyewear style in a campaign featuring Cole Sprouse. 
                        Metal accents and the iconic Medusa for a daring and luxury cosmopolitan design.
                        One of the most iconic shapes, now with a brand new look.The high double nose bridge 
                        adds nonchalant appeal.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $200.23</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
               
                <a href="eyewear.html"><img src="images/eyewear/prada.webp" alt="eyeglass"></a>
                <div class="col_bot">
                <p> $150.67</p>
              <h5>Model Prada-239</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_9">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="review.php?id=18">Post Review</a>
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="displayReview.php">View Review</a>
            </div>
            <!-- The Modal -->
        <div id="myBtn_9" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <div class ="col_md5">
                    <img src="images/eyewear/prada.webp" alt="eyeglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Model Prada-239</h1>
                    <hr>
                    <br>
                    <p> Timeless icons with an eye for fiercely modern detail, evolving classic silhouettes with the New Cat-eye, New Caravan 
                        and New Round through premium engravings and Chromance lenses. On since 1989, the Round was immortalised by the 
                        countercultural thinkers of the past Today it stands strong and subtle with premium engravings and a wide selection 
                        of crystal lenses.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $150.67</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>
           
        </div>
        
        
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
                <a href="">Register any complaint</a>
            </div>
        </section>
        <br><br>

       
        <br><br>
    </main>

    <!--information about the footer section of the page-->
    <footer>
        <div id="social-media">
            <a href="https://www.facebook.com/login.php/" target="_blank">
                <img src="https://img.icons8.com/glyph-neue/64/000000/facebook.png"/>
            </a>
            
            <a href="https://www.instagram.com/accounts/login/" target="_blank">
                <img src="https://img.icons8.com/glyph-neue/64/000000/instagram-new.png"/>
            </a>
            
            <a href="https://twitter.com/i/flow/login" target="_blank">
                <img src="https://img.icons8.com/ios-filled/50/000000/twitter.png"/>
            </a>
        </div>
        <div id="footer-navigation">
            <ul>SUNGLASSES
                <li><a href="sunglass.html">Sunglasses for men</a></li>
                <li><a href="sunglass.html">Sunglasses for women</a></li>
                <li><a href="sunglass.html">Sunglasses for children</a></li>
                <li><a href="sunglass.html">Sunglasses for beach</a></li>
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
                <li><a href="">Aviator</a></li>
                <li><a href="">Square</a></li>
                <li><a href="">Cat Eye</a></li>
                <li><a href="">Lightweight</a></li>
            </ul>

            <ul>INFORMATION
                <li><a href="">Feedback</a></li>
                <li><a href="">Complaint</a></li>
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
    
    

<script src="javascript/eyewear.js"></script>


  
</body>



</html>