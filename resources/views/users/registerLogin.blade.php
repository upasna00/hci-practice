
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/register-login.css" />
 
<link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon"/>
<title>Register or Login</title>
</head>
<body>
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
                        <a href="register"><img src="images/user-icon.png" />Login</a>
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

<div class="container">
	<div id="heading">Register / Login </div>
    <div id="content-box">
    	<div id="left">
         @if(session()->has('register'))
            <div class="row" style="color:red; padding:10px;">
                {!! session()->get('register') !!}
            </div>
        @endif
          <form action="{{ url('register') }}" method="post">
           {!! csrf_field() !!} 
        	<div id="heading-register" style="padding-top:15px; font-size:20px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Register your account</b><br /><br/>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" style="width:257px; height:22px; padding-left:8px;" name ="name" placeholder="Select a username"  /><br />&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" style="width:257px; height:22px; padding-left:8px;" name="pass1" placeholder="Password" /><br />&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" style="width:257px; height:22px; padding-left:8px;" name="pass2" placeholder="Confirm Password"/></div>
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="submit" class= "btn btn-primary"/>
             </div>
        </form>
        <div id="right">
        @if(session()->has('warning'))
            <div class="row" style="color:red; padding:10px;">
                {!! session()->get('warning') !!}
            </div>
        @endif
         <form action="{{ url('login') }}" method="post">
          {!! csrf_field() !!} 
        	<div id="heading-register" style="padding-top:15px; font-size:20px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Login to your account</b><br /><br/>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" style="width:257px; height:22px; padding-left:8px;" name ="uname" placeholder="Type your username"  /><br />&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" style="width:257px; height:22px; padding-left:8px;" name="password" placeholder="Password"/><br />&nbsp;&nbsp;&nbsp;&nbsp;</div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><span>forgot password?</span></u></a>
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="submit" class= "btn btn-primary"/>
           </form>
            
             </div>
        </div>
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
