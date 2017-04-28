<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="css/aboutUs.css" />

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
                	<li>OTC</li>
                    <li>Diabetes</li>
                    <li>Personal Care</li>
                    <li>Respiratory Care</li>
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
                        <div id="login" style="float:right;"> 
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
</div>
<!--mobile content starts-->

<div class="container-mobile">
	<div id="about-us-mobile">ABOUT US</div>
    <div id="heading1-mobile" style="padding-top:10px"><b>Who we are - America’s most convenient online pharmacy</b></div>
    <div id="content1-mobile" style="padding-top:10px">AlphaMeds, Here for Life, is one of India’s most trusted pharmacies, with over 100 years’ experience in dispensing quality medicines. At Alphameds, we help you look after your own health effortlessly as well as take care of loved ones wherever they may reside in United States. You can buy and send medicines from any corner of the country - with just a few clicks of the mouse. </div>

<br />
<br />
<div id="heading1-mobile" style="padding-top:10px"><b>What we do – Offer fast online access to medicines with convenient home delivery</b></div>
<div id="content1-mobile" style="padding-top:10px">AlphaMeds, Here for Life, is one of India’s most trusted pharmacies, with over 100 years’ experience in dispensing quality medicines. At Alphameds, we help you look after your own health effortlessly as well as take care of loved ones wherever they may reside in United States. You can buy and send medicines from any corner of the country - with just a few clicks of the mouse. </div>
</div>

<!--mobile content ends-->

<div id="heading-aboutUs">
	<div class="container">
		ABOUT US
        <div id="sub-heading">
        	Who we are - America’s most convenient online pharmacy.
        </div>
        <div id="content1">
        	AlphaMeds, Here for Life, is one of India’s most trusted pharmacies, with over 100 years’ experience in dispensing quality medicines. At Alphameds, we help you look after your own health effortlessly as well as take care of loved ones wherever they may reside in United States. You can buy and send medicines from any corner of the country - with just a few clicks of the mouse. 
        </div><br/>
         <div id="sub-heading">
        	What we do – Offer fast online access to medicines with convenient home delivery.
        </div>
        <div id="content1">
        	At AlphaMeds, we make a wide range of prescription medicines and other health products conveniently available all across United States. Even second and third tier cities and rural villages can now have access to the latest medicines. Since we also offer generic alternatives to most medicines, online buyers can expect significant savings. 
        </div><br/><br/>
        <div id="usp">
        	<div id="one"><img src="images/convenience.png" /></div>
            <div id="two"><img src="images/one-stop.png" /></div>
            <div id="three"><img src="images/trust.png" /></div>
            
        </div>
    </div>
</div>
<div class="clear"></div>
<br/>
<br/>
<div id="footer">
	<div class="container">
    	<div id="copyright">
    		<div id="footer">
    	<img src="images/copyright.png" style="padding-top:20px; text-align:center; margin:0 auto;" />
        <div id="footer_navBar">
    	<ul>
        	<li><a href="">Home</a></li>
            <li><a href="aboutUs">About Us</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="contactUs">Contact Us</a></li>
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
</body>
</html>
