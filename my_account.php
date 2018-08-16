 <?php 
 session_start();
 include("includes/db.php");
 include("functions/functions.php");
?>
    <html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="myntra1.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
   
</head>

<body>
    <div>
        <!-- header -->
        <div id="fixed-header">
            <div class="logo-align"><a href="index.php"><img src="photos\MyntraLogo.jpg" width="90px"></a></div>
            <div id="navigation-bar">
                <div class="navigation-bar-links"><span class="navigation-bar-link">CATEGORIES</span>
                    <div class="dropdown-content">
                         <div class="dropdown-categories"> 
                            <ul>
                             
                               <?php getCats();?>
                            </ul>
                            <!-- <div><span class="dropdown-categories-title">Bottomwear</span>
                                <ul>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="">Casual Trowsers</a></li>
                                    <li><a href="">Formal Trousers</a></li>
                                    <li><a href="">Shorts</a></li>
                                    <li><a href="">Track Pants</a></li>
                                </ul>
                            </div> -->
                         </div>
                       <!--  <div class="dropdown-categories"><span class="dropdown-categories-title">Sports & Active Wear</span>
                            <ul>
                                <li><a href="#">Sports Shoes</a></li>
                                <li><a href="#">Sports Equipment</a></li>
                                <li><a href="#">Track Pants</a></li>
                                <li><a href="#">Sports Accesories</a></li>
                                <li><a href="#">Smart Wearable</a></li>
                                <li><a href="#">Swimwear</a></li>
                            </ul>
                            <div><span class="dropdown-categories-title">Indian & Festive Wear</span>
                                <ul>
                                    <li><a href="#">Kurtas</a></li>
                                    <li><a href="#">Sherwanis</a></li>
                                    <li><a href="#">Nehru Jackets</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Footwear</span>
                            <ul>
                                <li><a href="#">Casual Shoes</a></li>
                                <li><a href="#">Sports Shoes</a></li>
                                <li><a href="#">Formal Shoes</a></li>
                                <li><a href="#">Sandals & Floaters</a></li>
                                <li><a href="#">Flip Flop</a></li>
                                <li><a href="#">Socks</a></li>
                            </ul>
                            <div><span class="dropdown-categories-title">Headphones & Earphones</span>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Fashion Accessories</span>
                            <ul>
                                <li><a href="#">Wallets</a></li>
                                <li><a href="#">Belts</a></li>
                                <li><a href="#">Ties,Cufflinks & Pocket Squares</a></li>
                                <li><a href="#">Accesory Gift Set</a></li>
                                <li><a href="#">Helmets</a></li>
                                <li><a href="#">Phone Cases</a></li>
                                <li><a href="#">Rings & Wristwear</a></li>
                            </ul>
                        </div> -->
                        <div class="clear-containers"></div>
                    </div>
                </div>
                 <div class="navigation-bar-links"><span class="navigation-bar-link">TOP BRANDS</span>
                    <div class="dropdown-content">
                        <div class="dropdown-categories">
                            <ul>
                                <?php getBrands();?>
                            </ul>
                           <!-- <div><span class="dropdown-categories-title">Bottomwear</span>
                                <ul>
                                    <li>Jeans</li>
                                    <li>Casual Trowsers</li>
                                    <li>Formal Trousers</li>
                                    <li>Shorts</li>
                                    <li>Track Pants</li>
                                </ul>
                            </div>-->
                        </div>
                       <!-- <div class="dropdown-categories"><span class="dropdown-categories-title">Sports & Active Wear</span>
                            <ul>
                                <li>Sports Shoes</li>
                                <li>Sports Equipment</li>
                                <li>Track Pants</li>
                                <li>Sports Accesories</li>
                                <li>Smart Wearable</li>
                                <li>Swimwear</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Indian & Festive Wear</span>
                                <ul>
                                    <li>Kurtas</li>
                                    <li>Sherwanis</li>
                                    <li>Nehru Jackets</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Footwear</span>
                            <ul>
                                <li>Casual Shoes</li>
                                <li>Sports Shoes</li>
                                <li>Formal Shoes</li>
                                <li>Sandals & Floaters</li>
                                <li>Flip Flop</li>
                                <li>Socks</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Headphones & Earphones</span>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Fashion Accessories</span>
                            <ul>
                                <li>Wallets</li>
                                <li>Belts</li>
                                <li>Ties,Cufflinks & Pocket Squares</li>
                                <li>Accesory Gift Set</li>
                                <li>Helmets</li>
                                <li>Phone Cases</li>
                                <li>Rings & Wristwear</li>
                            </ul>
                        </div> -->
                        <div class="clear-containers"></div>
                    </div>
                </div>
                <div class="navigation-bar-links"><span class="navigation-bar-link"><a href="my_account.php">MY ACCOUNT</a></span>
                    <div class="dropdown-content">
                        <div class="dropdown-categories">
                            <ul>
                                
                            </ul>
                           <!-- <div><span class="dropdown-categories-title">Bottomwear</span>
                                <ul>
                                    <li>Jeans</li>
                                    <li>Casual Trowsers</li>
                                    <li>Formal Trousers</li>
                                    <li>Shorts</li>
                                    <li>Track Pants</li>
                                </ul>
                            </div>-->
                        </div>
                       <!-- <div class="dropdown-categories"><span class="dropdown-categories-title">Sports & Active Wear</span>
                            <ul>
                                <li>Sports Shoes</li>
                                <li>Sports Equipment</li>
                                <li>Track Pants</li>
                                <li>Sports Accesories</li>
                                <li>Smart Wearable</li>
                                <li>Swimwear</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Indian & Festive Wear</span>
                                <ul>
                                    <li>Kurtas</li>
                                    <li>Sherwanis</li>
                                    <li>Nehru Jackets</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Footwear</span>
                            <ul>
                                <li>Casual Shoes</li>
                                <li>Sports Shoes</li>
                                <li>Formal Shoes</li>
                                <li>Sandals & Floaters</li>
                                <li>Flip Flop</li>
                                <li>Socks</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Headphones & Earphones</span>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Fashion Accessories</span>
                            <ul>
                                <li>Wallets</li>
                                <li>Belts</li>
                                <li>Ties,Cufflinks & Pocket Squares</li>
                                <li>Accesory Gift Set</li>
                                <li>Helmets</li>
                                <li>Phone Cases</li>
                                <li>Rings & Wristwear</li>
                            </ul>
                        </div> -->
                        <div class="clear-containers"></div>
                    </div>
                </div>
               <!--  <div class="navigation-bar-links"><span class="navigation-bar-link">Kids</span>
                    <div class="dropdown-content">
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Topwear</span>
                            <ul>
                                <li>T-shirts</li>
                                <li>Casual shirts</li>
                                <li>Formal Shirts</li>
                                <li>Sweaters & Sweatshirts</li>
                                <li>Jackets</li>
                                <li>Blazers & Coats</li>
                                <li>Suits</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Bottomwear</span>
                                <ul>
                                    <li>Jeans</li>
                                    <li>Casual Trowsers</li>
                                    <li>Formal Trousers</li>
                                    <li>Shorts</li>
                                    <li>Track Pants</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Sports & Active Wear</span>
                            <ul>
                                <li>Sports Shoes</li>
                                <li>Sports Equipment</li>
                                <li>Track Pants</li>
                                <li>Sports Accesories</li>
                                <li>Smart Wearable</li>
                                <li>Swimwear</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Indian & Festive Wear</span>
                                <ul>
                                    <li>Kurtas</li>
                                    <li>Sherwanis</li>
                                    <li>Nehru Jackets</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Footwear</span>
                            <ul>
                                <li>Casual Shoes</li>
                                <li>Sports Shoes</li>
                                <li>Formal Shoes</li>
                                <li>Sandals & Floaters</li>
                                <li>Flip Flop</li>
                                <li>Socks</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Headphones & Earphones</span>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Fashion Accessories</span>
                            <ul>
                                <li>Wallets</li>
                                <li>Belts</li>
                                <li>Ties,Cufflinks & Pocket Squares</li>
                                <li>Accesory Gift Set</li>
                                <li>Helmets</li>
                                <li>Phone Cases</li>
                                <li>Rings & Wristwear</li>
                            </ul>
                        </div>
                        <div class="clear-containers"></div>
                    </div>
                </div> -->
               <!--  <div class="navigation-bar-links"><span class="navigation-bar-link">Home & Living</span>
                    <div class="dropdown-content">
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Topwear</span>
                            <ul>
                                <li>T-shirts</li>
                                <li>Casual shirts</li>
                                <li>Formal Shirts</li>
                                <li>Sweaters & Sweatshirts</li>
                                <li>Jackets</li>
                                <li>Blazers & Coats</li>
                                <li>Suits</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Bottomwear</span>
                                <ul>
                                    <li>Jeans</li>
                                    <li>Casual Trowsers</li>
                                    <li>Formal Trousers</li>
                                    <li>Shorts</li>
                                    <li>Track Pants</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Sports & Active Wear</span>
                            <ul>
                                <li>Sports Shoes</li>
                                <li>Sports Equipment</li>
                                <li>Track Pants</li>
                                <li>Sports Accesories</li>
                                <li>Smart Wearable</li>
                                <li>Swimwear</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Indian & Festive Wear</span>
                                <ul>
                                    <li>Kurtas</li>
                                    <li>Sherwanis</li>
                                    <li>Nehru Jackets</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Footwear</span>
                            <ul>
                                <li>Casual Shoes</li>
                                <li>Sports Shoes</li>
                                <li>Formal Shoes</li>
                                <li>Sandals & Floaters</li>
                                <li>Flip Flop</li>
                                <li>Socks</li>
                            </ul>
                            <div><span class="dropdown-categories-title">Headphones & Earphones</span>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-categories"><span class="dropdown-categories-title">Fashion Accessories</span>
                            <ul>
                                <li>Wallets</li>
                                <li>Belts</li>
                                <li>Ties,Cufflinks & Pocket Squares</li>
                                <li>Accesory Gift Set</li>
                                <li>Helmets</li>
                                <li>Phone Cases</li>
                                <li>Rings & Wristwear</li>
                            </ul>
                        </div>
                        <div class="clear-containers"></div>
                    </div>
                </div> -->
            </div> 
            <div id="search-container">
                <!-- <input id="input" type="text" placeholder="Search" /> -->
                <form method="get" action="results.php" enctype="multipart/form-data" style="float: left;">
                    <input  id="input" type="text" name="user_query" placeholder="Search">
                    <input class="search-icon" type="submit" name="search" value="search" style="height:40px;">
                </form>
                <!-- <div class="search-icon"><img src="photos\search-icon.jpg" height="38x"></div> -->
                <div id="profile-n-cart">
                    <div><a href="loginform.html"><i class="fa fa-address-book addressbook-icon" aria-hidden="true"></i></a>
                    </div>
                    <div><a href="cart.php"><i class="fa fa-shopping-cart cart-icon" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div class="clear-containers"></div>
        </div>
        <!-- header -ends-->

        <div id="subheader">
                    <?php 
                    cart();
                    ?>
             <div id="headline">
                 <div id="headline_content">

                 <?php

                    if(!isset($_SESSION['customer_email']))
                    {
                        echo "<b>Welcome Guest</b><b>Shopping Cart </b>";
                    }
                    else
                    {
                        echo "<b>Welcome:" .$_SESSION['customer_email']. "</b>"."<b> Your Cart </b>";
                    }
                     
                     ?>
                     
                   
                     <?php 
                     if(!isset($_SESSION['customer_email']))
                     {
                          echo " <a href='checkout.php' style='color: black; font-weight:600;text-decoration:none;'>Login</a>";


                    }
                    else
                    {

                        echo "<a href='logout.php' style='font-weight:600;text-decoration:none;'>Logout</a>";
                    }
                     ?></span>

                 </div>
             </div>


        </div>
<style>
.vertical-menu {
    width: 200px;
   margin-top: 137px;
    margin-right: -8px;
    position: fixed;
    right: 0;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
</style>



<div class="vertical-menu">
  <span class="active" >MANAGE ACCOUNT:</span>
  <a href="#">My orders</a>
  <a href="#">Edit profile</a>
  <a href="#">change Password</a>
  <a href="#">Delete account</a>
   <a href="#">Logout</a>
</div>

           

        <!-- products from here -->
        <div style="margin-top:60px ;text-align: center;width: 86.5%;">
        <h2 style="color: #FC9;">Manage your account here</h2>
        <?php   getDefault();  ?>

        <?php 
        if(!isset($_GET['my_orders']))
        {
            include("my_orders.php");
        }

         ?>

          
           
        </div>

        
        <!-- footer -->
       <!--  <div class="footer-container">
            <div>
                <div class="generic-info-container">
                    <div class="shoplinks"><span class="generic-info-heading">ONLINE SHOPPING</span>
                        <ul>
                            <li>Men</li>
                            <li>Women</li>
                            <li>Kids</li>
                            <li>Home & Living</li>
                            <li>Gift Cards</li>
                        </ul>
                    </div>
                    <div class="useful-links"><span class="generic-info-heading">USEFUL LINKS</span>
                        <ul>
                            <li>Contact Us</li>
                            <li>FAQ</li>
                            <li>T&C</li>
                            <li>Terms Of Use</li>
                            <li>Track Orders</li>
                            <li>Shipping</li>
                            <li>Cancellation</li>
                            <li>Returns</li>
                            <li>Whitehat</li>
                        </ul>
                    </div>
                    <div class="mobile-app"><span class="generic-info-heading">EXPERIENCE MYNTRA APP ON MOBILE</span>
                        <div><img src="photos\googleplay.png" height="121px;">
                            <img height="123px;" src="photos\appstore.png">
                        </div>
                        <div class="keep-in-touch"><span class="generic-info-heading">KEEP IN TOUCH</span>
                            <div><i class="fa fa-facebook-official" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-youtube-square" aria-hidden="true"></i><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <div class="commitments">
                        <div>
                            <div class="icons"><i class="fa fa-handshake-o" aria-hidden="true"></i>
                            </div>
                            <div><b>100% ORIGINAL</b> gurantee for all products at myntra.com</div>
                        </div>
                        <div>
                            <div class="icons"><i class="fa fa-retweet" aria-hidden="true"></i></div>
                            <div><b>Return within 30days</b> of placing your order</div>
                        </div>
                        <div>
                            <div class="icons"><i class="fa fa-truck" Make up Dresses For Girls aria-hidden="true"></i></div>
                            <div><b>Get free delivery</b> for every order above Rs.1199</div>
                        </div>
                    </div>
                    <div class="clear-containers"></div>
                </div>
                <div class="Popular-searches">
                    <hr style="margin-left: 150px;">
                    <h3>POPULAR SEARCHES
                </h3>
                    <p></p>
                    <div class="search-links"><a href="">Make up</a>
                        <a href="">Dresses For Girls </a>
                        <a href="">T-shirts</a>
                        <a href="">Sandals</a>
                        <a href="">Headphones</a>
                        <a href="">Baby Dolls</a>
                        <a href="">Blazers For Men</a>
                        <a href="">handbags</a>
                        <a href="">Ladies Watches</a>
                        <a href="">One Piece Dress</a>
                        <a href="">Bags</a>
                        <a href="">Sport</a>
                        <a href="">Shoes</a>
                        <a href="">Reebok Shoes</a>
                        <a href="">Puma Shoes</a>
                        <a href="">Boxers</a>
                        <a href="">Wallets</a>
                        <a href="">Tops</a>
                        <a href="">Ear Rings</a>
                        <a href="">Fastrack Watches</a>
                        <a href="">Kurtis</a>
                        <a href="">Nike</a>
                        <a href="">Smart Watches</a>
                        <a href="">Titan Watches</a>
                        <a href="">Watches</a>
                        <a href="">Saree</a>
                        <a href="">Bikini</a>
                        <a href="">Dresses</a>
                        <a href="">Lehengas</a>
                        <a href="">Nike Shoes</a>
                        <a href="">Jwellery</a>
                        <a href="">Blouse </a>
                        <a href="">Gowns</a>
                        <a href="">Rings</a>
                        <a href="">Bras</a>
                        <a href="">Shoes For Men</a>
                        <a href="">Adidas Shoes</a>
                        <a href="">Woodland Shoes</a>
                        <a href="">Suits</a>
                        <a href="">Forever 21</a>
                        <a href="">Arrow</a>
                        <a href="">Mango</a>
                        <a href="">Ear Rings</a>
                    </div>
                    <div class="popular-searches-footer"><span>In case of any concern,<strong> Contact Us</strong></span>
                        <span><i class="fa fa-copyright" aria-hidden="true"></i> 2017 www.myntra.com.All rights reserved</span>
                        <span>A Flipkart Company</span></div>
                </div>
                <hr/>
                <div class="Registered-Office-Address">
                    <h3>Registered Office Address</h3>
                    <div>
                        <div class="left-container">3rd Floor, A Block, AKR Tech Park, 7th Mile, Krishna Reddy Industrial Area, Kudlu Gate, Bangalore – 560068 </div>
                        <div class="right-container">
                            CIN: U72300KA2007PTC041799 Telephone: +91-80-43541999</div>
                    </div>
                </div>
                <hr/>
                <div class="online-shopping">
                    <h3>Online Shopping : Convenient shopping experience at an affordable price!</h3>
                    <p>Fashion has taken today’s youth by surprise, and the availability of numerous options just leaves them spoilt of choice. Online stores fuel fashion by making the latest trending dresses, accessories, and apparels available to you within a few clicks. Shopping is no longer a day long affair with online shopping sites offering convenience of easy shopping facility from your home, anywhere and anytime you wish. Online shopping presents a large variety of quality products to choose from. With our fast changing lifestyle, online shopping offers fast, easy & a money saving solution giving you a very interesting shopping experience. Moreover, at your service round the clock, online shopping sites offers you feasibility to order any products anytime.</p>
                    <h3>Myntra : The trailblazer of online fashion destination!</h3>
                    <p>The leader in fashion online shopping has stamped its mark throughout India. With an aim to redefine the fashion arena in India, Myntra has everything to offer, ranging from all kinds of men’s and women’s apparels to accessories. Featuring some of the best deals in the realm of fashion accessories and trending gears, you may attractive discounts and shop till you drop at end of the season sales. To make shopping convenient, Myntra provides easy payment facility through Cash on Delivery, Card on Delivery, and similar payment options. And to get your purchased apparel on time, it boasts an efficient network of delivery. You can also easily make a wishlist and shortlist items for future puchases. Whether it is clothing, footwear, jewelry, accessories and cosmetics, we showcase the most elite brands in the world. Now, if you did not like the purchased product, then shop something else through our easy return or exchange policy. Explore the latest collections of top brands like United Colors of Benetton, Arrow, Esprit, French Connection, Adidas, Reebok, Nike, Clarks, Burberry, Calvin Klein and many others.
                    </p>
                    <h3>Avail added online shopping benefits
                  </h3>
                    <p>With a variety of products and their information available in the most user-friendly way on Myntra, you get a chance to analyze the product you want to buy according to your terms. You can shop in complete privacy and get easy replacement and returns as well. You can choose your desired product and order it on Myntra. Our team will leave no stone unturned to deliver it right at your doorstep anywhere in India at the promised time. You just need to pay for the product, while we ensure free shipping on almost everything. To offer you a safe and risk-free online shopping experience, we have COD facility as well. Now, you can buy gifts for your loved ones and avail our special gift-wrap facility at a nominal cost on Myntra.</p>
                    <h3>Myntra.com : the 24 x7 one stop Fashion & Lifestyle store for everyone
                  </h3>
                    <p>We, at Myntra, have all that you need to spruce up your fashion quotient. From an extensive range of men’s shirts, western dresses for women, funky clothes for kids and matching footwear, sports shoes and accessories for everyone, we cater to a diversity of choices of online shoppers in India under one umbrella. So, don’t lose out on your chance to buy your desired piece of apparel and avail our attractive discounts!</p>
                </div>
            </div>
        </div>
        <!--  footer -ends --> 
    </div>
</body>

</html>