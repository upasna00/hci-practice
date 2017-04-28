<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/otc-products.css" />
<link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<title>Over the counter - Products page</title>
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
            <a href="uploadPres"><img src="images/go-icon.jpg" style="padding-top:9px; " /></a>
             <a href="uploadPres"><img src="images/upload-prescription.jpg" style="padding-top:9px; padding-left:18px; " /></a>
             <img src="images/helpline.png" style=" padding-left:45px;" />
        </div>
	</div>
</div>
<br />
<div class="container-manual">
	<div id="heading">Health Care Products</div>
    <div class="row">
    	<br/>
    	<div class="col-lg-3">
        	<img src="images/filter_by_brand.jpg" />
        	<div id="brand-names" style="padding-left:10px; padding-top:8px;">
            	<input type="checkbox" />&nbsp;&nbsp;&nbsp;Abraxane <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;Axiom <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;Abraxane <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;Herbal Life <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;Oziva <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;Protinex <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;Zenith Nutrition <br />
            </div>
            <br />
            <br/>
            <img src="images/price-filter.jpg" />
            <div id="price-names" style="padding-left:10px; padding-top:8px;">
            	<input type="checkbox" />&nbsp;&nbsp;&nbsp;$10 - $ 20 <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;$20 - $ 40 <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;$40 - $ 60 <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;$60 - $ 80 <br />
                <input type="checkbox" />&nbsp;&nbsp;&nbsp;Above $80 <br />
                
            </div>
        </div> 
        
  
        <div class="col-lg-9 ">
        <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                <div class="w3-container">
                    <span class="w3-button w3-display-topright">&times;</span>
                   @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                 @endif
                </div>
                </div>
            </div>
            @foreach($products as $product)
            <div class="col-lg-4 ">
            <div id="product1">
            	<a href="#"><img src="images/{{$product->Pimage}}" style="padding-top:6px;"  /><br/>
                 
                <b style="font-size:14px;">{{$product->pName}}</b><br/>
                 {{$product->pDesc}}<br />
                <b style="font-size:18px;">$ {{$product->pPrice}} </b><br /></a>
                @if($product->pPrice<=12)
                    <a href="checkout"><img src="images/add-to-cart.jpg" / style="padding-top:10px;"> </a>                       
                @endif
                @if($product->pPrice>12)
                    <a href="uploadPres"><img src="images/upload-prescription-products-page.jpg" / style="padding-top:10px;"> </a>                       
                @endif
            </div>   
            </div>
            @endforeach  
        </div>  
    </div>	
      
</div>
<br /><br /><br />
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
<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">
		$(document).ready(function(){
		
		});
	</script>

</body>
</html>