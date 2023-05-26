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
    <title>Contact Lenses</title>
    <meta charset="UTF-8">
    <meta name="author" content="Amrita">
    <meta name="keywords" content="HTML, CSS, Homepage design">
    <meta name="descriptiosn" content="This is the homepage of shopLenses wesite.">
    <meta name="viewport" content="width=device-width initial-scale=0.1">
    <style>
        
        <?php include "./CSS/reset.css" ?>
        <?php include "./CSS/contact_lens.css" ?>
        
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
            <img src="images/lens/contactlensbanner.jpg" alt="sunglass">
        </section>

        
        <!--Product list-->
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
            <!--Side Menu-->
            <p>Price Range</p>
            <ul>
                <li><div class="form-check"> <input type="checkbox" id="check" onclick="checkfunction1()">
                   
                    <label class="form-check-label" for="flexCheckChecked"> $20-$30 </label> </div></li>
                    
                    <li><div class="form-check"> <input type="checkbox" id="check1" onclick="checkfunction2()"> 
                        <label class="form-check-label" for="flexCheckChecked"> $30-$40 </label> </div></li>

                         <li><div class="form-check"> <input type="checkbox" id="check2" onclick="checkfunction3()"> 
                    <label class="form-check-label" for="flexCheckChecked"> $40-$50 </label> </div></li>

                    <li><div class="form-check"> <input type="checkbox" id="check3" onclick="checkfunction4()"> 
                        <label class="form-check-label" for="flexCheckChecked"> $50-$60 </label> </div></li>

                        <li><div class="form-check"> <input type="checkbox" id="check4" onclick="checkfunction5()"> 
                            <label class="form-check-label" for="flexCheckChecked"> $60-$70 </label> </div></li>
                
            </ul>
            

        </section> 
        <!--Main grid section-->
        <section class="vertical-2">
        <div class="grid">
            <div class="col">
              
              <a href="contact_lens.html"><img src="images/lens/blue.webp" alt="Contact lens"></a>
              <div class="col_bot">
              <p> <b>$70.12</b></p>
              <h5>Modern Blue</h5>
              </div>
              <div class="cs_button"  data-modal="myBtn">
                 Buy Now
            </div>
            <div class="cs_button"  data-modal="myBtn">
                 <a href="lensreview.php?id=1">Post Review</a>
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
                    <img src="images/lens/blue.webp" alt="Contact lens">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Modern Blue</h1>
                    <hr>
                    <br>
                    <p> An icy take on the popular blue eyes, the Modern Blue colored contact lenses
                        feature a glacial blue shade that's perfect for a striking, piercing look. 
                        The color might be on the slightly brighter spectrum, light streaks bring home the 
                        design to a natural effect by allowing some of your natural eye color to peek through.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $70.12</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
                
                <a href="contact_lens.html"><img src="images/lens/brown.webp" alt="Contact lens"></a>
                <div class="col_bot">
                <p> $47.12</p>
              <h5>Toffee Brown</h5>
            </div>
            <div class="cs_button" data-modal="myBtn_2">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="lensreview.php?id=2">Post Review</a>
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
                    <img src="images/lens/brown.webp" alt="Contact lens">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Toffee Brown</h1>
                    <hr>
                    <br>
                    <p> A light, warm brown color designed to blend naturally on any eye color, the Toffee Brown 
                        colored contact lenses are best for those who want to enhance their eyes effortlessly. Light 
                        to translucent streaks allow your natural eye color to peak through for an elevated organic look.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $47.12</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
           </div>


            <div class="col">
                
                <a href="contact_lens.html"><img src="images/lens/green.webp" alt="Contact lens"> </a>
                <div class="col_bot">
                <p> $26.00</p>
              <h5>Lush Green</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_3">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="lensreview.php?id=3">Post Review</a>
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
                    <img src="images/lens/green.webp" alt="sunglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Lush Green</h1>
                    <hr>
                    <br>
                    <p> Look as refreshing as a spring day with these gorgeous green contacts! 
                        These prescription colored contacts are suitable for any day outing for a sweet, innocent 
                        look and when paired with dark make-up you'll be seducing with your stare like never before. 
                        Lovely and chic, these green contacts are a must for any occasion.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $26.00</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
                
                <a href="contact_lens.html"><img src="images/lens/freshlook-hazel.webp" alt="Contact lens"></a>
                <div class="col_bot">
                <p> $40.22</p>
              <h5>Libre Hazel</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_4">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="lensreview.php?id=4">Post Review</a>
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
                    <img src="images/lens/freshlook-hazel.webp"alt="Contact lens">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Libre Hazel</h1>
                    <hr>
                    <br>
                    <p> Lustrous and divine, these brown coloured contacts may just be the ultimate lovechild of 
                        eyewear and jewelry in two spheres. Its deep brown lens is carefully adorned with full 
                        streaks of golden hazel tones for a metallic brown look. A glimmering piece on its own, 
                        your highlight might have just found its partner-in-crime.
                        
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $40.22</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
                
                <a href="contact_lens.html"> <img src="images/lens/grey1.jpg" alt="sunglass"></a>
                <div class="col_bot">
                <p>$69.76</p>
              <h5>Classy Grey</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_5">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="lensreview.php?id=5">Post Review</a>
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
                    <img src="images/lens/grey1.jpg" alt="sunglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Classy Grey</h1>
                    <hr>
                    <br>
                    <p> Sharp and striking grey hues are what makes the ultimate mysterious look. 
                        For the Mist Grey colored contact lenses, pouring in the perfect shade of grey is just 
                        the first step. Translucent streaks help create the realistic silhouette as they allow 
                        your natural eye colors to play into the cloudy grey shades.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price:$69.76</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
               
                <a href="contact_lens.html"><img src="images/lens/Pink.webp " alt="sunglass"></a>
                <div class="col_bot">
                <p> $32.22</p>
              <h5>Luxury Pink</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_6">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="lensreview.php?id=6">Post Review</a>
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
                    <img src="images/lens/Pink.webp " alt="sunglass">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Luxury Pink</h1>
                    <hr>
                    <br>
                    <p> If you love pink - and a natural eye look - Destiny Pink colored contacts are made for you!
                        You will love the simplicity and natural look of the DNA Destiny colored contacts inspired by BTS themselves!
                         Three gorgeous color tones blend to create a realistic (only better) appearance.
                         
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $32.22</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>

           
            </div>


            <div class="col">
                
                <a href="contact_lens.html"><img src="images/lens/Violet.webp" alt="sunglass"></a>
                <div class="col_bot">
                <p> $32.22</p>
              <h5>Neo Violet</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_7">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="lensreview.php?id=7">Post Review</a>
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
                    <img src="images/lens/Violet.webp"alt="Contact lens">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Neo Violet</h1>
                    <hr>
                    <br>
                    <p>NEO Sunflower purple contacts achieves 2 effects: first, making your iris clear 
                        and crisp thanks to the limbal ring; seocnd, givin gyour eyes a truly feminine look 
                        with the splash of vivid violet!
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $32.22</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
                
                <a href="contact_lens.html"><img src="images/lens/aqua.webp" alt="sunglass"></a>
                <div class="col_bot">
                <p> $56.45</p>
              <h5>Elite Aqua</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_8">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="lensreview.php?id=8">Post Review</a>
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
                    <img src="images/lens/aqua.webp"alt="Contact lens">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Elite Aqua</h1>
                    <hr>
                    <br>
                    <p> Elite II Aqua lenses blend three beautiful tones of green to give you the rarest natural eye color -
                         as naturally has possible.Elite II 3-tone lenses are among the most comfortable colored contacts available! 
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price: $56.45</p>
                    <br>
                    <button class="col_md7btn"> Add to Cart</button>

                </div>
            </div>
            
            </div>
  
        </div>
            </div>


            <div class="col">
               
                <a href="sunglass.html"><img src="images/lens/black.webp" alt="sunglass"></a>
                <div class="col_bot">
                <p>$43.45</p>
              <h5>Jazz Black</h5>
              </div>
              <div class="cs_button" data-modal="myBtn_9">
                Buy Now
           </div>
           <div class="cs_button"  data-modal="myBtn">
                 <a href="lensreview.php?id=9">Post Review</a>
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
                    <img src="images/lens/black.webp"alt="Contact lens">

                </div>
                <div class ="col_md7">
                    <h1 class="modal_head">Jazz Black</h1>
                    <hr>
                    <br>
                    <p> If what you’re looking for a no-frills way to highlight your natural, innocent beauty, 
                        look no further than these Clalen Iris Black contacts! The design is a simple, classic single-tone 
                        enlargement ring that adds a very slight definition and enlargement to your iris. 
                        These are the perfect pick for wearers who prioritize comfort above all.
                    </p>
                    <br>
                    
                    <p class ="col_md7p">Price:$43.45</p>
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
<script src="javascript/lens.js"> </script>
</body>



</html>