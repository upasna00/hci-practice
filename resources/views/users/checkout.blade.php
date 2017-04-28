<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Checkout</title>
<link rel="stylesheet" href="css/checkout.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon"/>
<script type="text/javascript" src="js/checkout.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>
<div id="header">
	<div class="container-manual">
	<div id="navigationBar">
	
    	
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
</div>
<br/>

<div class="container">
	<div id="heading">CHECKOUT</div>
        <form action="{{ url('thankyou') }}" method="post" role="form" data-toggle="validator">
    <br/>
            <div class=""><b style="font-size:20px;">Shipping Information</b></div>
        <div>
          	<div class="row">
               <div class="col-lg-6">
                	<br/><br/>
                	<input type="text" placeholder="Name*" style="width:279px; height:36px;"  class="form-control" required>
                    <br/><br/>
                    <input type="email" placeholder="Email*"  class="form-control" style="width:279px; height:36px;" required>
                    <br/><br/>
                    <input type="number" placeholder="Phone Number*" class="form-control" style="width:279px; height:36px; " required>
                </div>
                <div class="col-lg-6">
                	<br/><br/>
                    <input type="number" placeholder="Zip Code*" class="form-control" style="width:279px; height:36px; " required>
                     <br/><br/><textarea placeholder="Address*" class="form-control" style="width:280px; height:85px;" required></textarea>
                     <br/><br/>
                </div>
            </div>
        </div>
        <br/>
     <br/>
        <div class=""><b style="font-size:20px;">Payment</b></div>
        <div class="">
          	<div class="row">
            	<div class="col-lg-6">
                	<br/><br/>
                	<input type="text" placeholder="Your 16 digit card number" style="width:279px; height:36px;" class="form-control"/>
                    <br/><br/>
                    <p>Date of Expiry<br /></p>
                     <input type="date" name="bday" min="2000-01-02" class="form-control"><br>
                     <br/>
                     <input type="number" placeholder="CVV " class="form-control" required>                               
                </div>
                
            </div>
		</div>	
        <br />
        <br />
        <input type ="submit" class= "btn btn-primary"/>
    </form>
</div>
<br /><br />
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
<script></script>
</body>
</html>
