<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>

<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="favicon.png" type="image/gif" sizes="16x16"> 

 <div class="row">
    <div class="logo">
    <a href="http://localhost/ecommerce/ecommerce/index.php"><img src="favicon.png"></a>
    </div>
    <ul class="main-nav">
    <li class="active"><a href="index.php">HOME</a></li> 
  </ul>
  </div>
</head>
<body>
		<div class="header">
		<h2>Login</h2>
		</div>
	
	<form method="post" action="account.php">
	<!-- display validation errors here -->
	<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter username" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter correct password" required>
		</div>
		<div class="input-group">
			<button type="submit" name="sign_in" class="btn">Sign In</button>
		</div>
		<p>
			Not yet registered? <a href="register.php">Sign Up</a>
	</form>

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


	<br></br>
	<br></br>
	<br></br>
	
</body>
</html>
