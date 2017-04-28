<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/account-settings.css" />
<link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon"/>
<title>Account Settings</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
<div id="header">
	<div id="navBar">
	<div class="container-manual">
    	
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
	<div class="container-manual">
    	<div id="search">
        	<input type="text" placeholder="Search for medicine here" style="background-image:url(images/search_bg.jpg); height:30px; width:289px; font-size:16px; margin-top:6px; padding-left:18px; " /></div>&nbsp; &nbsp; 
            <a href="search"><img src="images/go-icon.jpg" style="padding-top:9px; " /></a>
             <a href="uploadPres"><img src="images/upload-prescription.jpg" style="padding-top:9px; padding-left:18px; " /></a>
             <img src="images/helpline.png" style=" padding-left:45px;" />
        </div>

</div>
<div class="container-manual">
	<div id="heading">MY ACCOUNT</div>
    <br/>
    <div class="row">
            <div class="col-lg-4 col-md-4">
                <a href="accountSettings"><img src="images/nav-account-settings-bold.jpg" /></a>
                <a href="myOrders"><img src="images/nav-myorders-bold.jpg" /></a>
                <a href="myPrescriptions"><img src="images/nav-presc.jpg" /></a>
                <br/><br/><br/>
            	<img src="images/advertisements.jpg" />
            </div>
            <div class="col-lg-8 col-md-8">
            <span style="font-size:15px;"><b>Name</span></b> <br />
                <input type="text" value="John Smith" placeholder="Name*" style="width:279px; height:36px; font-size:15px;"  /><br /><br />
                <span style="font-size:15px;"><b>Email</span></b> <br />
                <input type="text" value="john_smith@gmail.com" placeholder="Mail*" style="width:279px; height:36px; font-size:15px;"  />
                <br /><br />
                <span style="font-size:15px;"><b>Change Password</span></b> <br />
                <input type="password"  style="width:279px; height:36px; font-size:15px;"  />
                <br /><br />
                <span style="font-size:15px;"><b>Confirm Password</span></b> <br />
                <input type="password"  style="width:279px; height:36px; font-size:15px;"  /><br /><br />
                <a href="#"><img src="images/submit-button.jpg" /></a>
                
            </div>
        </div>   
</div>
<br/><br/><br/><br/><br/>
<div id="footer">
	<div class="container">
    	<div id="copyright">
    		<div id="footer">
    	<img src="images/copyright.png" style="padding-top:20px; text-align:center; margin:0 auto;" />
        <div id="footer_navBar">
    	<ul>
        	<li><a href="/">Home</a></li>
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
</body>
</html>
