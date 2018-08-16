<?php 
 session_start();
 include("includes/db.php");
 include("../functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" type="text/css" href="myntra1.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="fixed-header">
            <div class="logo-align"><a href="../index.php"><img src="../photos\sprout.png" width="90px"></a></div>
            <div id="navigation-bar">
             <div class="navigation-bar-links"><a href="../index1.php"  class="navigation-bar-link">ALL PRODUCTS</a>
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
                <form method="get" action="../results.php" enctype="multipart/form-data" style="float: left;">
                    <input  id="input" type="text" name="user_query" placeholder="Search brands & products">
                    <input class="search-icon" type="submit" name="search" value="search" style="height:40px;">
                </form>
                <!-- <div class="search-icon"><img src="photos\search-icon.jpg" height="38x"></div> -->
                <div id="profile-n-cart">
                    <div><?php   if(isset($_SESSION['customer_email']))
                    {
                        echo "<a  style='text-decoration:none;' href='my_account.php'><i class='fa fa-address-book addressbook-icon' aria-hidden='true'></i></a></span>";
                    }
                    
                    else
                         echo "<a  style='text-decoration:none;' href='#' onClick='alert(\"Please login first\")'><i class='fa fa-address-book addressbook-icon' aria-hidden='true'></i></a></span>";



                    ?>
                    </div>
                    <div class="cart"><a href="../cart.php"><i class="fa fa-shopping-cart cart-icon" aria-hidden="true"><span><?php items(); ?></span></i></a><span style="padding-left: 14px;"> <?php 
                     if(!isset($_SESSION['customer_email']))
                     {
                          echo " <button  class='add_cart_button button1'><a href='../checkout.php' style=' font-weight:600;text-decoration:none;'>Login</a></button>";


                    }
                    else
                    {

                        echo "<button  class='add_cart_button button1'><a href='../logout.php' style=' font-weight:600;text-decoration:none;'>Logout</a></button>";
                    }
                     ?></span></div>
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
                        echo "<b>Welcome Guest!</b>&nbsp;&nbsp;";
                    }
                    else
                    {
                        echo "<b>Welcome:&nbsp;&nbsp;" .$_SESSION['customer_email']. "</b>";
                    }
                     
                     ?>
                     
                   <!--   <span>-Total Items:<?php items(); ?> 

                     </span>
  -->
                 </div>
             </div>


        </div>



<div style="width:70%;padding-top: 100px;" class="container">
  <div class="row">
    
       <h2>SHIPPING DETAILS</h2>
        
        <div class="form-group col-md-12 bg-primary">
            <label class="control-label" for="billinginformation">Shipping Information</label>
        </div>
        
        <div class="shipping-info">
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="firstname">First Name</label>
              <div class="controls">
                <input id="firstname" name="firstname" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="lastname">Last Name</label>
              <div class="controls">
                <input id="lastname" name="lastname" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="shippingaddress1">Shipping Address 1</label>
              <div class="controls">
                <input id="shippingaddress1" name="shippingaddress1" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <label class="control-label" for="shippingaddress2">Shipping Address 2</label>
              <div class="controls">
                <input id="shippingaddress2" name="shippingaddress2" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="shippingcountry">Shipping Country</label>
              <div class="controls">
                 <div class="controls">
                    <select id="shippingcountry" name="shippingcountry" class="input-xlarge">
                      <option>Please Select</option>
                      <option>Australia</option>
                    </select>
                  </div>
              </div>
            </div>
            
             <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="shippingstate">Shipping State</label>
              <div class="controls">
                <select id="shippingstate" name="shippingstate" class="input-xlarge">
                  <option>Please Select</option>
                  <option>Australian Capital Territory</option>
                  <option>New South Wales</option>
                  <option>Northern Territory</option>
                  <option>Queensland</option>
                  <option>South Australia</option>
                  <option>Tasmania</option>
                  <option>Victoria</option>
                  <option>Western Australia</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="shippingcity">Shipping City</label>
              <div class="controls">
                <input id="shippingcity" name="shippingcity" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="postcode">Post Code</label>
              <div class="controls">
                <input id="postcode" name="postcode" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <hr/>
            
            
            
            
            <div class="form-group col-md-12 bg-primary">
                <label class="control-label" for="contactinformation">Contact Information:</label>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="emailaddress">Email Address</label>
              <div class="controls">
                <input id="email" name="email" type="email" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <label class="control-label" for="phone">Phone</label>
              <div class="controls">
                <input id="phone" name="phone" type="number" placeholder="" class="form-control" required="">
              </div>
            </div>
            
           
            
            
           
            
            <div class="form-group col-md-12">
                <div class="control-group confirm-btn">
                  <label class="control-label" for="placeorderbtn"></label>
                  <div class="controls">
                    <button id="placeorderbtn" name="placeorderbtn"  onclick="hello()"  class="btn btn-primary">SUBMIT</button>
                  </div>
                </div>
            </div>
            
        </div>
  </div>
</div>
<script >function hello()
{
  alert('DETAILS SUCCESSFULLY SUBMITTED');
  window.open('my_account.php','_self')
  }
  </script>


<style>h2.bg-success{
    padding: 15px;
}

.required-lbl{
    color: red;
}

label[for="billinginformation"]{
    display: inline;
    float: left;
    margin:0px 45px 0px 0px;
}

.card-expiry{
    padding-left: 0px;
}

.confirm-btn{
    float:right;
}

.bg-primary{
    padding: 10px;
}

label{
    margin-bottom :0px;
}</style>
</body>
</html>