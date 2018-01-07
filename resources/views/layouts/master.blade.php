<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
{{--<title>@yield('title')</title>--}}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Codrops" />
    @include('layouts.includes.css')
    @yield('headAssets')

</head>

<body>
<header class="header">
   <div class="header-box">
     <div class="row">

        <div class="col-md-3">
<div class="toggle">
  <ul class="nav">
    <li><a href="Home.html"><img src="ASSETS FOLDER/registeration assets/assets/images/svg/user.svg" style="height:50px; width:30px;" /></a>
      <ul>
        <li><a href="select-type.blade.php">Register</a></li>
        <li><a href="login.blade.php">Log In</a></li>
      </ul>
    </li>
   </ul>
   </div>
       </div>

        	<div class="col-md-6">
  			<div class="sitetitle">
  				<h1><a href="Home.html">AZAM CLOTH MARKET</a></h1>
  				<p><a href="Home.html">5000 Shops 1 Address</a></p>
  			</div>
  			</div>
            <div class="col-md-3">
  			<div class="topcart">
  				<ul>
  					<li><a href="wishlist page.html"><img src="ASSETS FOLDER/registeration assets/assets/images/svg/starstar.svg" style="height:55px ; width:35px; padding-top:20px " /></a></li>
                  <li>  <img src="ASSETS FOLDER/registeration assets/assets/images/svg/line.svg" style="height: 60px ; width: 4px; padding-top:20px;" /></li>
  					<li><a href="Shopping Bag .html"><img src="ASSETS FOLDER/registeration assets/assets/images/svg/shopping-purse-icon.svg"  style="height:50px ; width:25px; padding-top:25px;" /></a></li>
  				</ul>
  			</div>
  			</div>
     </div>


<div class="menubar">
			<nav class="menu">
				<ul>
					<li class="drop-down">
						<a href="#">WHOLESALE SHOP</a>

						<div class="mega-menu fadeIn animated">
							<div class="mm-6column">
								<span class="left-images">
                                 <img src="ASSETS FOLDER/registeration assets/assets/images/nav img/male.jpg" style=" margin-top:10px; padding-left:10px;" />
						        </span>
							</div>

							<div class="mm-6column">
						       <span class="categories-list">
							    <img src="ASSETS FOLDER/registeration assets/assets/images/nav img/v.line.jpg" style="width:5px; height:400px;">
                                <img src="ASSETS FOLDER/registeration assets/assets/images/nav img/women.jpg" style="padding-left:45px;" />
                              </span>
							</div>
				      </div>
			        </li>

                    <li class="drop-down2">
						<a href="#">RETAIL SHOP</a>
					       <div class="mega-menu2 fadeIn animated">
							  <div class="mm-6column">
								  <span class="left-images">
								  <img src="ASSETS FOLDER/registeration assets/assets/images/nav img/male.jpg" style=" margin-top:10px; padding-left:10px;" />
			                      </span>
							  </div>
							<div class="mm-6column">
						       <span class="categories-list">
							    <img src="ASSETS FOLDER/registeration assets/assets/images/nav img/v.line.jpg" style="width:5px; height:400px;">
								<img src="ASSETS FOLDER/registeration assets/assets/images/nav img/women.jpg" style="padding-left:45px;" />
                               </span>
							</div>
					     </div>
		          </li>

					<li>
						<a href="#">SUPPLIER</a>
					</li>
					<li>
						<a href="#">HOW IT WORKS</a>
					</li>
					<li>
						<a href="enquiry.blade.php">ENQUIRY</a>
					</li>
					<li>
						<a href="#">Blog</a>

					</li>

         <li style="float:right; margin-right:13px; background:#000;">
         <form class="searchbox">
              <input type="search" placeholder="Search Here.." name="search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Here.. '"
               class="searchbox-input" onkeyup="buttonUp();" required >
              <input type="submit" class="searchbox-submit" value="GO">
              <span class="searchbox-icon"><img src="ASSETS FOLDER/registeration assets/assets/images/svg/magnifier-tool.svg" style="height:40px; width:20px;" /></span>
        </form>

          </li>

				</ul>
			</nav>
	 </div>


 </div>
</header>

    <!--Main Body-->
    @yield('pageContent')
    <!--Footer-->
<footer class="footer" >


                    <ul><b>KNOW MORE</b>
                     <li><a href="#">About us</a></li>
                      <li><a href="#">Catalogue Request &amp; Virtual Catalogue</a></li>
                      <li><a href="#">General Size Guide</a></li>
                     <li><a href="#">Size Guide</a></li>
  </ul>


                     <ul><b>KNOW MORE</b>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Catalogue Request &amp; Virtual Catalogue</a></li>
                      <li><a href="#">General Size Guide</a></li>
                     <li><a href="#">Size Guide</a></li>
                     </ul>


                 <ul><b>KNOW MORE</b>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Catalogue Request &amp; Virtual Catalogue</a></li>
                      <li><a href="#">General Size Guide</a></li>
                     <li><a href="#">Size Guide</a></li>
  </ul>


                    <ul><b>KNOW MORE</b>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Catalogue Request &amp; Virtual Catalogue</a></li>
                      <li><a href="#">General Size Guide</a></li>
                     <li><a href="#">Size Guide</a></li>
  </ul>


    <div class="f-second">
        <img class="foot1"  src="ASSETS FOLDER/registeration assets/assets/images/footer/foot.png" style="width:auto; height:auto;" >
    </div>
    <div class="f-third">
        <p class="paral">© Azam Cloth Market All Rights Reserved </p>


        <p class="para2"> POWERED BY : Hujwery Services </p>
    </div>
</footer>

@yield('footerAssets')
</body>
</html>
