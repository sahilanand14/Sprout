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
            <div class="logo-align"><a href="index.php"><img src="photos\sprout.png" width="90px"></a></div>
            <div id="navigation-bar">
             <div class="navigation-bar-links"><a href="index1.php"  class="navigation-bar-link">ALL PRODUCTS</a>
                </div>
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
                    <input  id="input" type="text" name="user_query" placeholder="Search brands and products">
                    <input class="search-icon" type="submit" name="search" value="search" style="height:40px;">
                </form>
                <!-- <div class="search-icon"><img src="photos\search-icon.jpg" height="38x"></div> -->
                <div id="profile-n-cart">
                     <div><?php   if(isset($_SESSION['customer_email']))
                    {
                        echo "<a  style='text-decoration:none;' href='customer/my_account.php'><i class='fa fa-address-book addressbook-icon' aria-hidden='true'></i></a></span>";
                    }
                    
                    else
                         echo "<a  style='text-decoration:none;' href='#' onClick='alert(\"Please login first\")'><i class='fa fa-address-book addressbook-icon' aria-hidden='true'></i></a></span>";



                    ?>
                    </div>
                    <div class="cart"><a href="cart.php"><i class="fa fa-shopping-cart cart-icon" aria-hidden="true"><span><?php items(); ?></span></i></a><span style="padding-left: 14px;"> <?php 
                     if(!isset($_SESSION['customer_email']))
                     {
                          echo " <button  class='add_cart_button button1'><a href='checkout.php' style='color: black; font-weight:600;text-decoration:none;'>Login</a></button>";


                    }
                    else
                    {

                        echo "<button  class='add_cart_button button1'><a href='logout.php'style=' font-weight:600;text-decoration:none;'>Logout</a></button>";
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
                        echo "<b>Welcome Guest!</b>";
                    }
                    else
                    {
                        echo "<b>Welcome:" .$_SESSION['customer_email']. "</b>";
                    }
                     
                     ?>
                     
                 </div>
             </div>


        </div>

           

        <!-- products from here -->
        <div id="products_box">
        <br>
         <form id="form1" action="cart.php" method="post" enctype="multipart/form-data">
             <table width="950" align="center" bgcolor="#0099cc">
                 <tr align="center">
                      
                     <td><b/>Product(s)</td>
                     <td><b/>Quantity</td>
                     <td><b/>Price</td>
                     <td><b/>Remove</td>
                    

                 </tr>
            
                 <?php 
                            $gross_total=0;
                            $total=0;
                            $ip_add=getRealIpAddr();
                             $sel_price="select * from cart where ip_add='$ip_add'";
                            $run_price=mysqli_query($db,$sel_price);
                            $myarray=array();$myarray2=array();
                            while($record=mysqli_fetch_array($run_price))
                {
            $pro_id=$record['p_id'];
            $pro_price="select * from products where product_id='$pro_id'";
            $run_pro_price=mysqli_query($con,$pro_price);
            while($p_price=mysqli_fetch_array($run_pro_price))
                        {
                                $product_price=array($p_price['product_price']);
                                array_push($myarray,$p_price['product_price']);
                                $product_title=$p_price['product_title'];
                                $product_image=$p_price['product_img1'];
                                $only_price=$p_price['product_price'];
                                $product_id=$p_price['product_id'];
                                array_push($myarray2,$product_id);

                                $values=array_sum($product_price);
                                $total +=$values;
                                $gross_total+=$p_price['product_price'];
                               
                         
                
     
 
                  ?>
                 <tr align="center">
                    
                     <td ><?php echo $product_title; ?><br><img src="admin_area/product_images/<?php echo $product_image;?>" heigth="80px;" width="80px;"></td>
                     <td><input type="text" name="qty[]" value="1" size="1" /></td>

                     <td><?php echo "Rs. ".$only_price;?></td>
                      <td><input type="checkbox" value="<?php echo $pro_id;?>" name="Remove[]"></td>
                     
                 </tr>
                 <?php }} ?>






                     <?php 
                        if(isset($_POST['update']))
                        {
                            $qty=$_POST['qty']; 
                            /*foreach ($qty as $value and $product_price as $price)
                            {   $total=$price*$value;
                                echo "$value"."quantity";
                            echo "$total"."total";
                            }*/

                            /*foreach ($myarray as $price)
                            {   //$total=$price*$value;
                                echo "$value"."quantity";
                            echo "$price"."price of product";
                            }*/

                                 
                          /* $arr=0; 
                           array_map(function($v1, $v2) use ($arr){
                                 echo $v1 ."quantity";
                             echo $v2 ."price of product";
                             $total1=$v1*$v2;
                             echo $total1."total";
                             $arr+=$total1;
                            
                            }, $qty, $myarray );
                            */



                            $it = new MultipleIterator();
                            $it->attachIterator(new ArrayIterator($qty));
                            $it->attachIterator(new ArrayIterator($myarray));
                            $it->attachIterator(new ArrayIterator($myarray2));
 
                            $gross_total=0;

                        foreach($it as $a) {
                            $total1=$a[0]*$a[1];
                            $gross_total+=$total1;
                            $insert_qty="update cart set qty='$a[0]' where ip_add='$ip_add' and p_id='$a[2]'";
                            $run_qty=mysqli_query($con,$insert_qty);
                                }





                             

                            /*foreach (array_combine($product_price, $qty) as $key => $value) {
                                 $total=$key*$value;
                                echo "$value"."quantity";
                            echo "$total"."total";

                                # code...
                            }*/
                            /*$insert_qty="update cart set qty='$value' where ip_add='$ip_add' and p_id=$pro_id";
                            $run_qty=mysqli_query($con,$insert_qty);
                            $total = $total*$qty;*/
                            // echo "$total"."total";
                        }


                     ?>








                 <tr align="center" >
                      <td></td>
                      <td></td>
                     <td ><b>Subtotal:</b></td>
                     <td ><b><?php echo "Rs. ".$gross_total; ?></b></td>
                 </tr>
                 <tr align="center">
                    <td></td>
                     <td ><input type="submit" name="update" value="Update Cart" /></td>
                     <td ><input type="submit" name="continue" value="Continue Shopping" /></td>
                     <td ><button><a href="checkout.php" style="text-decoration: none;color: black;">Checkout</a></button></td>

                 </tr>
             </table>
         </form>

         <?php
         if(empty($myarray2))
            echo "<script>var parent=document.getElementById('products_box');
         var child=document.getElementById('form1');
         parent.removeChild(child);
         var para = document.createElement('img');
         para.style.paddingLeft='218px';
         para.src='photos/emptycart.gif';


parent.appendChild(para);
        </script>";
         function updatecart()
         {

            global $con;
            if(isset($_POST['update']))
            {
                foreach ($_POST['Remove'] as $remove_id) {
                    $delete_products="delete from cart where p_id='$remove_id'";
                    $run_delete=mysqli_query($con,$delete_products);
                    if($run_delete)
                    {
                        echo "<script>window.open('cart.php','_self')</script>";
                    }

                
                }

            }
             if(isset($_POST['continue']))
                {
                    echo "<script>window.open('index1.php','_self')</script>";
                }
            }
           echo @$up_cart = updatecart();

         ?>
           
        </div>

        <!-- best deals  -->
        <!--        <div id="best-deals-container">
            <div class="best-deal"><img class="image" src="photos\women2.jpg" height="100px;">
                <div class="best-deals-textcontainer">
                    <div>ENJOY NOW!</div>
                    <div class="a">Best offers on jackets and apparels.</div>
                    <div>Shop Now! ></div>
                </div>
            </div>
            <div class="best-deal"><img class="image" src="photos\shoes2.jpg" height="100px;">
                <div class="best-deals-textcontainer">
                    <div>ENJOY NOW!</div>
                    <div class="a">Best offers on jackets and apparels.</div>
                    <div>Shop Now! ></div>
                </div>
            </div>
            <div class="best-deal"><img class="image" src="photos\accesories.jpg" height="100px;">
                <div class="best-deals-textcontainer">
                    <div>ENJOY NOW!</div>
                    <div class="a">Best offers on jackets and apparels.</div>
                    <div>Shop Now! ></div>
                </div>
            </div>
            <div class="best-deal"><img class="image" src="photos\women3.jpg" height="100px;">
                <div class="best-deals-textcontainer">
                    <div>ENJOY NOW!</div>
                    <div class="a">Best offers on jackets and apparels.</div>
                    <div>Shop Now! ></div>
                </div>
            </div>
            <div class="clear-containers"></div>
        </div>
       
          <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
   <!-- <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-26.3.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1150;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:16px;left:0px;width:980px;height:530px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
      <!-- <!-- <!--   <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:530px;overflow:hidden;">
            <div>
                <img data-u="image" src="photos/myntrabanner2.jpg" />
            </div>
            <div>
                <img data-u="image" src="photos/ba2.jpg" />
            </div>
            <div>
                <img data-u="image" src="photos/ba3.jpg" />
            </div>
            <div>
                <img data-u="image" src="photos/ba.jpg" />
            </div>
            <div>
                <img data-u="image" src="photos/ba4.jpg" />
            </div>
          
            --> 
            <!-- <a data-u="any" href="https://www.jssor.com" style="display:none">js slider</a>
        </div>
        <!-- Bullet Navigator -->

    <!-- </div> --> 
    <!-- #endregion Jssor Slider End -->
        <!-- <hr/> -->
        <!-- image slider -ends -->
        <!-- e-wallet container  -->
        <!-- <div id="mobikwick-container"> -->
            <!-- <h2>USE the MOBIKWIK WALLET ON MYNTRA AND GET 15% SUPERCASH</h2>
            <div id="mobikwick-background">
                <div id="mobikwick-left-container">SHOP FOR 1499 AND GET 10% DISCOUNT</div>
                <div id="mobikwick-right-container">SHOP FOR 2000 AND GET 20% DISCOUNT</div>
                <div class="clear-containers"></div>
            </div> -->
        <!-- </div> -->
        <!-- e-wallet container -ends -->
        <!-- discounts -->
       
       <!-- brands ends -->
        <!-- categories -->
        <!-- <div id="categories-container">
            <div id="categories-container-container">
                <div id="text-banner-container">
                    <div>ONLY THE BEST</div><span class="sub-heading">Popular categories that people like</span></div>
                <div id="men-women-container">
                    <div id="mens-section">
                        <div class="section-image"><img src="photos\men.jpg"></div>
                        <div class="section-list">
                            <div class="list-title">MEN'S
                                <div><span class="sub-heading">POPULAR</span></div>
                            </div>
                            <ul>
                                <li>T-Shirts</li>
                                <li>Casual Shirts</li>
                                <li>Jeans</li>
                                <li>Accessories</li>
                                <li>Casual Shoes</li>
                                <li>Sports Shoes</li>
                                <li>Innerwear</li>
                            </ul>
                        </div>
                        <div class="clear-containers"></div>
                    </div>
                    <div id="womens-section">
                        <div class="section-image"><img src="photos\women.jpg"></div>
                        <div class="section-list">
                            <div class="list-title">WOMEN'S
                                <div><span class="sub-heading">POPULAR</span></div>
                            </div>
                            <ul>
                                <li>Kurtas & Suits</li>
                                <li>Tops & Tees</li>
                                <li>Dresses</li>
                                <li>Accessories</li>
                                <li>Flats & Casual Shoes</li>
                                <li>Handbags & Wallets</li>
                                <li>Jewellery</li>
                            </ul>
                        </div>
                        <div class="clear-containers"></div>
                    </div>
                    <div class="clear-containers"></div>
                </div>
            </div>
        </div> -->
        <!-- categories -ends -->

        <!-- footer -->
        <div class="footer-container">
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
        <!--  footer -ends --> -->
    </div>
</body>

</html>