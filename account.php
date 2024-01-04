
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naj-india | Ecommerce Website Design</title>
      <link rel="stylesheet" href="style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      <div class="container">
          <div class="navbar">
      <div class="logo">
		<a href="index.html"><img src="images/logo.png" width="125px"></a>
      </div>
        <nav>
            <ul id="MenuItems">
                <li><a href ="index.html">Home</a></li>
                <li><a href ="product.html">Products</a></li>
                <li><a href ="about.html">About</a></li>
                <li><a href ="contact.html">Contact</a></li>
                <li><a href ="account.php">Account</a></li>
				<li><a href ="cart.html">cart</a></li>
            </ul>
        </nav>
        <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon"
		onclick="menutoggle()">
      </div>    
    </div>

<!---------account-page------------>
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="images/image1.png" width="100%">
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span onclick="login()">Login</span>
							<span onclick="register()">Register</span>
							<hr id="Indicator">
						</div>
	
						<form id="LoginForm" action="login.php"  method="POST">
							<input type="text" name="username" required placeholder="Username">
							<input type="password" name="password" required placeholder="Password">
							<input type="submit" name="" value="Login" class="btn">
							<a href="">Forgot password</a>
						</form>
						
						<form id="RegForm" action="Register.php" method="POST">
							<input type="text" name="username" required placeholder="Username">
							<input type="email" name="mail" required placeholder="Email">
							<input type="password" name="password" required placeholder="Password">
							<input type="submit" value="Register" class="btn">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>  
<!----------footer---------->
	  <div class="footer">
		  <div class="container">
			  <div class="row">
				  <div class="footer-col-1">
					  <h3>Download Our App</h3>
					  <p>Download App for Android and ios mobile phone.</p>
					  <div class="app-logo">
						  <img src="images/play-store.png">
						  <img src="images/app-store.png">
					  
					  </div>
				  </div>
				  <div class="footer-col-2">
					  <img src="images/logo-white.png">
					  <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
				  </div>
				  <div class="footer-col-3">
					  <h3>Useful Links</h3>
					  <ul>
						  <li>Coupons</li>
						  <li>Blog Post</li>
						  <li>Return Policy</li>
						  <li>Join Affiliate</li>
					  </ul>
				  </div>
				  
				  <div class="footer-col-4">
					  <h3>Follow Us</h3>
					  <ul>
						  <li>Facebook</li>
						  <li>Twitter</li>
						  <li>Instagram</li>
						  <li>YouTube</li>
					  </ul>
				  </div>
			  
			  </div>
			  <hr>
			  <p class="copyright">Copyright 2023 - Naj india Official</p>
		  
		  </div>
	  
	  </div>
<!----------js for toggle menu----------->
	  <script>
		  var MenuItems = document.getElementById("MenuItems");
		  
	      MenuItems.style.maxHeight = "0px";
		  
		  function menutoggle(){
			  if(MenuItems.style.maxHeight == "0px")
				  {
					  MenuItems.style.maxHeight = "200px";
			      }
			  
			  else
				  {
					  MenuItems.style.maxHeight = "0px";
			      } 
		  }
	  </script>
	  
<!----------js for toggle Form----------->
	  <script>
		  var LoginForm = document.getElementById("LoginForm")
		  var RegForm = document.getElementById("RegForm")
		  var Indicator = document.getElementById("Indicator")
		  
		  function register(){
			  RegForm.style.transform = "translateX(0px)";
			  LoginForm.style.transform = "translateX(0px)";
			  Indicator.style.transform = "translateX(100px)";
		  }
		  
		  function login(){
			  
			  RegForm.style.transform = "translateX(300px)";
			  LoginForm.style.transform = "translateX(300px)";
			  Indicator.style.transform = "translateX(0px)";
		  }
		  
	  </script>
      
</body>
</html>









