<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>

<title>LOGOUT</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="logosystem2.png" type="image/gif" sizes="16x16"> 

 <div class="row">
    <div class="logo">
    <a href="http://localhost/internshipsystem/homepage.php"><img src="logosystem2.png"></a>
    </div>
    <ul class="main-nav">
    <li class="active"><a href="homepage.php">HOME</a></li> 
  </ul>
  </div>
</head>
<body>
		<div class="header">
		<h2>Logout</h2>
		</div>
	
	<form method="post" action="signin.php">
	<!-- display validation errors here -->
	<?php include('errors.php'); ?>
		<div class="input-group">
			<p>To login again, please enter your username and password below :</p>
			<br>
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
	<br></br>
	</br>

	<div class="footer">
		    <div class="container">
				 		
				<center><h2>CONTACT US</h2></center>

				   <center> 
				   <table style="width:80%"; align="center">
					   
					<tr>
					    <th>COORDINATOR</th>
						<th><strong>FAKULTI EKOLOGI MANUSIA</strong></th>
						<th><strong>UNIT PENDIDIKAN LUAR</strong></th>
					 </tr>

					<tr  align="center">
						<th><stong>INDUSTRIAL TRAINING</stong></th>
					    <td>Universiti Putra Malaysia</td>
					    <th><strong>DAN LATIHAN INDUSTRI</strong></th>
					</tr>
				            
					<tr  align="center">
						<td>Cik Suzelin binti Samsi</td>
						<td>Selangor Darul Ehsan</td>
						<td>Fakulti Ekologi Manusia</td>
					</tr>
							
					<tr  align="center">
						<td>suzelin@upm.edu.my</td>
						<td>43400 UPM Serdang</td>
						<td>Universiti Putra Malaysia</td>
					</tr>

					<tr  align="center">
						<td>Phone number : 019-237 4409</td>	
						<td>Telephone : +603-8946 7051</td>
						<td>43400 UPM Serdang, Selangor D.E.</td>
					</tr>

					<tr  align="center">
						<td>More Details?</td>
						<td>Faks : +603-8943 5385</td>
						<td>Telephone : 03-89467147/7885</td>
						<td></td>
					</tr>

					<tr  align="center">
						<td>Click <a href="contactform.php">Contact Here</a></td>
						<td>dean.eco@upm.edu.my</td>
						<td>Faks : 03-86567006</td>
					</tr>

				</table>
				</center>
				

			</div>
	     </div>

		<div class="copy">
		    <center><p>&copy; 2017 e-ITinfo System. All Rights Reserved | Design by <a href="homepage.php">Developer BSPMTM</a></p></center>
		</div>

</body>
</html>
