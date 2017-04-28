<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/contactUs.css" />
<link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon"/>
</head>

<body>

<!-- Mobile Code -->
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
        	<a href="uploadPres"><img src="images/up-mobile.jpg" /></a>
        </div>
    </div>
</div>

<div class="container-mobile">
	<div id="contactUs-heading">CONTACT US</div>
    <div id="box-mobile" style="margin-top:10px; background-color:#eeeeee; height:270px; width:100%; padding-top:10px;">
    &nbsp;&nbsp;&nbsp;&nbsp;Name &nbsp;&nbsp;&nbsp; <input type="text" /><br/><br/>&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;&nbsp; <input type="text" /> <br/><br/>&nbsp;&nbsp;&nbsp; Type your message here <br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea style="width:170px; height:70px;"></textarea><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/submit-button.jpg" />
    	
    </div>
</div>

<!-- Mobile code ends -->

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
                        <div id="login" style="float:right;"><li>
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
                        
                        </li></div>
                         
                        
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

<div class="container">
	<div id="heading-contactUs">CONTACT US</div>
    <div id="content" style="padding-top:10px">​At AlphaMeds we do our best to get back to you within the shortest time possible. Please feel free to contact us by filling out the form below:</div>
	<div id="box" style="background-color:#EEEEEE; width:100%; margin:0 auto; height:370px; margin-top:20px;" >
    	<br/>&nbsp;&nbsp;&nbsp;Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  style="background-image:url(images/name-textbox.jpg); width:257px; height:30px; font-size:14px;" /><br/><br/>&nbsp;&nbsp;&nbsp;E-Mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  style="background-image:url(images/name-textbox.jpg); width:257px; height:30px; font-size:14px;" /><br/><br/>&nbsp;&nbsp;&nbsp; Type your message here<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea style="width:257px; height:121px;"></textarea><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="#"> <img src="images/submit-button.jpg" /></a>
 
    </div>
</div>
<br /><br/><br /><br/>
<div id="footer">
	<div class="container">
    	<div id="copyright">
    		<div id="footer">
    	<img src="images/copyright.png" style="padding-top:20px; text-align:center; margin:0 auto;" />
        <div id="footer_navBar">
    	<ul>
        	<li><a href="index">Home</a></li>
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
