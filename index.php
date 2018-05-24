<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");

require_once("class.user.php");
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'		=>	$_GET["id"],
				'item_name'		=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'		=>	$_GET["id"],
			'item_name'		=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<<<<<<< HEAD
	<title>FoodPack | ONLINE FOOD DELIVERY SYSTEM</title>
=======
	<title>Index-FoodPack </title>
>>>>>>> 717cecc790740d30dabd8167fa8ceec9d7cb9ec5
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" href="images/favicon.png"/>

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
<<<<<<< HEAD
							<h3 style="text-align: center; color: white">ONLINE FOOD DELIVERY SYSTEM</h3>
							<h1 class="to-animate">FoodPack</h1>
							<h2 class="to-animate">Order.Pay.Eat <span></span> <a href="http://freehtml5.co/" target="_blank"></a></h2>
							<h2 class="to-animate">CALL 1800 2525 4388 NOW!</h2>
=======
						<div align="left">
							<h1 class="to-animate">FoodPack</h1></div></br>
							<h2 class="to-animate">Order.Pay.Eat <span></span> <a href="http://freehtml5.co/" target="_blank"></a></h2>
							<h2 class="to-animate">Call 1800 2525 4388 now!</h2>
							<h2 class="to-animate">Welcome <?php print($userRow['user_name']); ?></h2>
>>>>>>> 717cecc790740d30dabd8167fa8ceec9d7cb9ec5
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
			
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="#" data-nav-section="home">Home</a>
						<a href="#" data-nav-section="about">About</a>
						<a href="#" data-nav-section="promotions">Promotions</a>
					</div>
					<div class="fh5co-logo">
<<<<<<< HEAD
						<a href="" data-nav-section="foodpack" >FoodPack</a>
=======
						<a href="index.html">FoodPack</a>
>>>>>>> 717cecc790740d30dabd8167fa8ceec9d7cb9ec5
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="menu">Menu</a>
						<a href="#" data-nav-section="account">Account</a>
						<a href="#" data-nav-section="order">Order</a>
				</div>
				
			</div>
		</div>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />


		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">About Us</h2>
				<p class="to-animate"><span class="firstcharacter">D</span>eliver the food to you when you are hungry. The solution to your transportation problem to get something to eat daily. We are trying our best to deliver the best and fresh dishes for you .
				</p>
			</div>
		</div>

		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">

					<div class="flexslider">
						<ul class="slides">
							
							<li>
								<blockquote>
									<p>&ldquo;Cooking is an art, but all art requires knowing something about the techniques and materials&rdquo;</p>
									<p class="quote-author">&mdash; Nathan Myhrvold</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Give a man food, and he can eat for a day. Give a man a job, and he can only eat for 30 minutes on break.&rdquo;</p>
									<p class="quote-author">&mdash; Lev L. Spiro</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Find something you’re passionate about and keep tremendously interested in it.&rdquo;</p>
									<p class="quote-author">&mdash; Julia Child</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Never work before breakfast; if you have to work before breakfast, eat your breakfast first.&rdquo;</p>
									<p class="quote-author">&mdash; Josh Billings</p>
								</blockquote>
							</li>
							
							
						</ul>
					</div>

				</div>
			</div>
		</div>

			
		<div id="fh5co-featured" data-section="promotions">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Promotion Items</h2>
						<p class="sub-heading to-animate"></p>
					</div>
				</div>
				<div class="row">
					<div class="fh5co-grid">
						<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/res_img_1.jpg)"></div>
							<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
								<h2>Fusilli Tomato Fried</h2>
								<span class="pricing">RM 7.50</span>
								<p>Pasta, salt, olive oil, garlic, cherry tomatoes, Parmesan</p>
							</div>
						</div>
						<div class="fh5co-v-half">
							<div class="fh5co-h-row-2 to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/res_img_2.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-left">
									<h2>Sausages Grill</h2>
									<span class="pricing">RM 7.90</span>
									<p>Ground meat, beef along with salt, other flavourings, and breadcrumbs, encased by a skin</p>
								</div>
							</div>
							<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/res_img_8.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-right">
									<h2>Beef Grilled</h2>
									<span class="pricing">RM11.90</span>
									<p>Onion, garlic, olive oil, vinegar, soy sauce</p>
								</div>
							</div>
						</div>

						<div class="fh5co-v-half">
							<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/res_img_7.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-right">
									<h2>Orange Juice</h2>
									<span class="pricing">RM 4.90</span>
									<p>Fresh orange fruits, sugar</p>
								</div>
							</div>
							<div class="fh5co-h-row-2 to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/res_img_6.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-left">
									<h2>Apple Juice</h2>
									<span class="pricing">RM 4.90</span>
									<p>Apple fruits and sugar</p>
								</div>
							</div>
						</div>
						<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/res_img_3.jpg)"></div>
							<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
								<h2>Beef Steak</h2>
								<span class="pricing">RM10.90</span>
								<p>Onion, garlic, olive oil, vinegar, soy sauce</p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

		<div id="fh5co-menus" data-section="menu">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Food Menu</h2>
						<p class="sub-heading to-animate"></p>
					</div>
				</div>
				<div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Main Menu</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/nasilemak2.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Nasi Lemak</h3>
											<p>Coconut rice, chilies, fried anchovies, peanut, sliced cucumber or tomato, egg</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 4.50
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/nasiayam.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Chicken Rice</h3>
											<p>Savory sweet chili sauce and rice, steamed/fried chicken with chicken soup</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 5.00
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/nasikerabu.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Nasi Kerabu</h3>
											<p>Prawn CrackeR, Boiled Salted Egg, Fish Stuffed Chilli, Turmeric Fried Fish, Fried Chicken</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 6.00
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/nasigoreng.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Nasi Goreng Ikan Bilis</h3>
											<p>Spring onions, ginger, dried chili, anchovies, cooked rice, Pepper, Salt</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 4.00
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Western</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_3.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Beef Steak</h3>
											<p>Onion, garlic, olive oil, vinegar, soy sauce and beef</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM10.90
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_4.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Tomato with Chicken</h3>
											<p>Garlic around the chicken, tomatoes, vinegar, and tomato paste</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 6.90
									</div> 
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_2.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Sausages</h3>
											<p>Ground meat, beef along with salt, other flavourings, and breadcrumbs, encased by a skin</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 7.90
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_8.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Beef Grilled</h3>
											<p>Onion, garlic, olive oil, vinegar, soy sauce and beef</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM11.90
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Soup/Porridge</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/vegesoup.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Vegetable Soup</h3>
											<p>Onion, celery, carrot, tomatoes</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 4.50
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/fishporridge.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Fish Porridge</h3>
											<p>Rice, fish, soy sauce, pepper, and sesame oil</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 3.50
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Seafood</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/prawntomyam.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Prawn Tomyam</h3>
											<p>Lemongrass, golden mushroom, prawns, tomyam paste, lime juice and chilli</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 7.90
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/thai tomyam.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Mixed Tomyam</h3>
											<p>Chicken, prawn, lemongrass, prawns, tomyam paste, lime juice and chilli</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 9.90
									</div> 
								</li>
								
							</ul>
						</div>
					</div>

					<div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Juices</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Watermelon Juice</h3>
											<p>Watermelon fruits and sugar</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 3.50
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_6.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Apple Juice</h3>
											<p>Apple fruits and sugar</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 4.90
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_7.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Orange Juice</h3>
											<p>Fresh orange fruits and sugar</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 2.90
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Carrot Juice</h3>
											<p>Carrot fruits and sugar</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 5.90
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Hot/Cold Drinks</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/coffee.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Hot Coffee</h3>
											<p>Coffee, creamer</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 1.60
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/hotchocolate.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Hot Chocolate</h3>
											<p>Chocolate, creamer</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 2.20
									</div> 
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/tea.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Iced Tea</h3>
											<p>Tea, Sugar and Ice</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 1.20
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/milo.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Iced Milo</h3>
											<p>Milo, Milk and Ice</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM 1.90
									</div>
								</li>
							</ul>
						</div>
					</div>
					
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
						<p><a href="#" class="btn btn-primary btn-outline">More Food Menu</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-events" data-section="account" style="background-image: url(images/notelogin.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2 to-animate">
						<h2 class="heading">My Account</h2>
						<p class="text-center to-animate"><a href="logout.php?logout=true" class="btn btn-primary btn-outline">Sign Out</a></p>
					</div>
<div id="content">
  <div>
    <div id="account">
      <div>
        <form action="#">
          
          <center>
            <div class="input-group">
			<label>Username </label>
			<input type="text" name="username" placeholder="Enter username" required>
		</div><br>
		<div class="input-group">
			<label>Password       </label>
			<input type="password" name="password" placeholder="Enter correct password" required>
		</div><br/>
		<div class="input-group">
			<button type="submit" name="sign_in" class="btn">Sign In</button>
		</div><br/>
		<p>
			Not yet registered? <a href="register.php">Sign Up</a>
         
          </center>
          
        </form>
      </div>
    </div>
  </div>
</div>
				</div>
				
						
					</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>

<<<<<<< HEAD

<<<<<<< HEAD
<div class="container" data-section="foodpack">
=======
=======
		
		<div id="fh5co-contact" data-section="order">
		<div class="container">
>>>>>>> 717cecc790740d30dabd8167fa8ceec9d7cb9ec5
			<h1><center>Select Order</center></h1>
			<h3><center>Select your product menu for</center></h3>
			<h4><center>Breakfast - Lunch - Dinner</center></h4>
			<br>

			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>

			<div class="col-md-4">
			<br>
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<h4 class="text-danger">RM <?php echo $row["price"]; ?></h4>
						<input type="text" name="quantity" value="1" class="form-control" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="test" />
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>RM <?php echo $values["item_price"]; ?></td>
						<td>RM <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">RM <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>

					<?php
					}
					?>
						
				</table>
			</div>
			<button type="submit" name="payment" class="btn">Make a payment</button>
		</div>
	</div>
>>>>>>> 4a82b0bf3e352778c9f8b26d75b64696691c717c
	<br />
<<<<<<< HEAD
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>

		
		<div id="fh5co-contact" data-section="contact">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Contact</h2>
						<a href="index.php"><img src="images/welcome_img.png" alt=""></a>
						<p class="sub-heading to-animate"></p>
					</div>

				</div>

				<div class="row">
					<div class="col-md-6 to-animate-2">
						<h3>Contact Info</h3>
						<ul class="fh5co-contact-info">
							<li class="fh5co-contact-address ">
								<i class="icon-home"></i>
								1345 FoodPack 56 Kuala Lumpur 56550, <br>Wilayah Persekutuan
							</li>
							<li><i class="icon-phone"></i> (+6) 03-888 6789</li>
							<li><i class="icon-envelope"></i>foodpack@hotmail.com</li>
							<li><i class="icon-globe"></i> <a href="http://freehtml5.co/" target="_blank">www.foodpack.com</a></li>
						</ul>
					</div>
					<div class="col-md-6 to-animate-2">
						<h3>Contact Form</h3>
						<div class="form-group ">
							<label for="name" class="sr-only">Name</label>
							<input id="name" class="form-control" placeholder="Name" type="text">
						</div>
						<div class="form-group ">
							<label for="email" class="sr-only">Email</label>
							<input id="email" class="form-control" placeholder="Email" type="email">
						</div>
						<div class="form-group">
							<label for="occation" class="sr-only">Product menu</label>
							<select class="form-control" id="occation">
								<option>Select product menu</option>
							  <option>Breakfast</option>
							  <option>Lunch</option>
							  <option>Dinner</option>
							</select>
						</div>
						<div class="form-group ">
							<label for="date" class="sr-only">Date</label>
							<input id="date" class="form-control" placeholder="Date &amp; Time" type="text">
						</div>


							
						<div class="form-group ">
							<label for="message" class="sr-only">Message</label>
							<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group ">
							<input class="btn btn-primary" value="Send Message" type="submit">
						</div>
						</div>
				</div>
			</div>
		</div>
		</div>
=======
>>>>>>> 717cecc790740d30dabd8167fa8ceec9d7cb9ec5

	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">&copy; 2018 FoodPack website. <br> Designed by <a href="http://freehtml5.co/" target="_blank">Foodpack</a> Delivery Food<a href="" target="_blank"> Online System</a> <br>Order.Pay.Eat<a href="http://handdrawngoods.com/store/tasty-icons-free-food-icons/" target="_blank"> foodpack</a>
					</p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social">
						<li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="js/moment.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

