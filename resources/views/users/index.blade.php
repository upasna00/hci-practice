<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="fonts/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="fonts/slick/slick-theme.css"/>
<title>AlphaMeds - Order Medicines online</title>
</head>
<body>
<!-- Header Mobile -->
<div id="header-mobile">
    <div class="container-mobile">
    	<div id="first_part">
        	<div id="logo-mobile">
            	<img src="images/logo-mobile.png" />
            </div>
            <div id="first-two-part">
            	<a href="register"><img src="images/login-mobile.png" /></a>
            </div>
            <div class="clear"></div>
            <div id="part-two">
            	<div class="nav-mobile">
                <ul>
                	    <li><a href="otcPage">Over the Counter</a></li>
                        <li><a href="diabetesCategory">Diabetes</a></li>
                        <li><a href="personalCategory">Personal Care</a></li>
                        <li><a href="otcProducts">Respiratory Care</a></li>
                </ul>
                </div>
                
            </div>
        </div>
        
    </div>
    
</div>


<div id="header2-mobile">
	<div class="container-mobile">
        <div id="search-mobile">
            <input type="text" placeholder="Search medicine here" height="40px" style="background-image:url(images/search-bar.jpg); padding-left:10px"  />
        </div>
        <div id="go-button">
        	<img src="images/go-mobile.jpg" />
        </div>
        <div id="up-mobile">
        	<img src="images/up-mobile.jpg" />
        </div>
    </div>
</div>
<div class="container-mobile">
	<div id="helpline-mobile" style="text-align:center; height:30px; padding-top:10px;">
    	<img src="images/helpline-mobile.png" />
    </div>
</div>
<!--Header Mobile ends-->
<div id="header">
	<div id="navBar">
	<div class="container">
    	
        	<div id="logo"><a href="/"><img src="images/logo.png" /></a></div>
                <div class="nav">
                
                    <ul>
                        <li><a href="otcProducts">Over the Counter</a></li>
                        <li><a href="diabetesCategory">Diabetes</a></li>
                        <li><a href="personalCategory">Personal Care</a></li>
                        <li><a href="otcProducts">Respiratory Care</a></li>
                        <li id="login" style="float:right;">
                        <?php $user = Session::get('user');?>
                        @if(empty($user))

                            <a href="register"><img src="images/user-icon.png" />Login</a>
                        @endif
                         @if(!empty($user))
                            <div class="dropdownMenu">
                            <span><a href="register"><img src="images/user-icon.png" />{{$user}}</a></span>
                            <div class="dropdown-contentMenu">
                                <p><a href="myOrders" style="font-weight:normal;padding:10px">My Orders</a></p>
                                <p><a href="myPrescriptions" style="font-weight:normal;padding:10px">My Prescriptions</a></p>
                                <p><a href="accountSettings" style="font-weight:normal;padding:10px">Settings</a></p>
                                <p><a href="logout" style="font-weight:normal;padding:10px">Logout</a></p>
                            </div>
                            </div>
                        @endif
                        </li>
                        
                        
                    </ul>
                </div>
   
        </div>
    </div>
</div>

<div id="header2">
	<div class="container">
    	<div id="search">
        	<input type="text" placeholder="Search for medicine here" style="background-image:url(images/search_bg.jpg); height:30px; width:289px; font-size:16px; margin-top:6px; padding-left:18px; " /></div>&nbsp; &nbsp; 
            <a href="search"><img src="images/go-icon.jpg" style="padding-top:9px; " /></a>
             <a href="uploadPres"><img src="images/upload-prescription.jpg" style="padding-top:9px; padding-left:18px; " /></a>
             <img src="images/helpline.png" style=" padding-left:45px;" />
        </div>

</div>

<div id="billboard-mobile">
	<div class="container-mobile">
		<img src="images/billboard-mobile.jpg" />
    </div>
</div>

<div id="billboard">
	<div class="container">
		<img src="images/billboard.png" />
    </div>
</div>
<!-- Why choose us mobile -->
<div id="choose-mobile">
	<div class="container-mobile">
        <div id="heading-mobile">
            WHY CHOOSE US?
        </div>	
    
    <div id="content-mobile">No more running from one chemist store to another when in need of medicines! AlphaMeds brings to you an online medicine store, which can be accessed for all health needs. With AlphaMeds, you don’t just buy medicine online, but can also book appointment with the best doctors nearby. We are focused towards making healthcare accessible and affordable, and so give you plenty of options in terms of medicine substitutes.</div>
</div>
</div>
<!-- Why choose us mobile ends -->

<div id="howToOrder">
	<div class="container">
        <div id="heading">
            HOW TO ORDER MEDICINE
        </div>	
        <div id="how-to-order">	
        	<img src="images/how-to-order.jpg" />
        </div>
        <div id="heading2">
            WHY CHOOSE US?
        </div>	
         <div id="content">	
        	No more running from one chemist store to another when in need of medicines! AlphaMeds brings to you an online medicine store, which can be accessed for all health needs. With AlphaMeds, you don’t just buy medicine online, but can also book appointment with the best doctors nearby. We are focused towards making healthcare accessible and affordable, and so give you plenty of options in terms of medicine substitutes.
        </div>
        
    </div>
    
</div>

<div id="testimonials">
	<div class="container">
	<div id="heading3">WHAT OUR CUSTOMERS THINK</div>
    <div class="carousel">
          <div><img src="images/review1.jpg" /></div>
          <div><img src="images/review2.jpg" /></div>
          <div><img src="images/review3.jpg" /></div>
          
        </div>
     </div>
</div>
<div class="clear"></div>

<div id="fc-mobile">
	<div class="container-mobile">
	<div id="heading-mobile"> FEATURED CATEGORIES</div>
    <a href="otcProducts"> <div id="otc" style="font-weight:bold; font-size:18px;" ><img src="images/category1.jpg" /><br/>
     Over the counter</div></a>
     <a href="diabetesCategory"><div id="diabetes" style="font-weight:bold; font-size:18px;" ><img src="images/category2.jpg" /><br/>
     Diabetes   </div></a>
     <a href="personalCategory"><div id="personalCare" style="font-weight:bold; font-size:18px;" ><img src="images/category3.jpg" /><br/>
     Personal Care</div></a>
     <a href="otcProducts"><div id="respiratoryCare" style="font-weight:bold; font-size:18px;" ><img src="images/category4.jpg" /><br/>
     Respiratory Care</div></a>
     </div>	
     </div>
</div>

<div id="featured_categories">
	<div id="heading4">FEATURED CATEGORIES</div>
    <div class="container">
    	<a href="otcProducts"><div id="category1">
        	<img src="images/category1.jpg" />
            <div id="title1">Over the Counter</div>
        </div></a>
        <a href="diabetesCategory"><div id="category2">
        	<img src="images/category2.jpg" />
            <div id="title2">Diabetes</div>
        </div></a>
        <a href="personalCategory"><div id="category3">
        	<img src="images/category3.jpg" />
            <div id="title3">Personal Care</div>
        </div></a>
        
        <a href="otcProducts"><div id="category4">
        	<img src="images/category4.jpg" />
            <div id="title4">Respiratory Care</div>
        </div></a>
          
    </div>
</div>

<div id="footer">
	<div class="container">
    	<div id="copyright">
    		<div id="footer">
    	<img src="images/copyright.png" style="padding-top:20px; text-align:center; margin:0 auto;" />
        <div id="footer_navBar">
    	<ul>
        	<li><a href="/">Home</a></li>
            <li><a href="/aboutUs">About Us</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/contactUs">Contact Us</a></li>
            <li><a href="/">Terms & Conditions</a></li>
        </ul>    
    </div>
    </div>
        </div>
    </div>
</div>
<div id="footer-mobile">
<img src="images/copyright.png" style="margin:0 auto; padding-top:15px;" />
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="fonts/slick/slick.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
		$('.carousel').slick({
			dots:true,
			arrows:false,
			autoplay:true,
			autoplaySpeed: 3000
		});
		});
        if(jQuery('body').hasClass('logged-in')) {
                console.log("userefierferife");
        }
	</script>
</body>
</html>
