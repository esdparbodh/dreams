<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Distributor Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Distributor/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Distributor/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Distributor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Distributor/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Distributor/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Distributor/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Distributor/css/util.css">
	<link rel="stylesheet" type="text/css" href="Distributor/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">

		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Distributor/images/img-01.png" alt="IMG">
				</div>

				<form action="" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Distributor Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="submit" value="Login" >
					</div>				
					
				</form>
			</div>
		</div>
	</div>
	<?php
	$memberType = urldecode($_GET['member_type']);
	
	if (isset($_POST['submit']))
		{	  
			include("db.php");

			$memberType = urldecode($_GET['member_type']);

			$username=$_POST['username'];
			$password=$_POST['password'];

			$_SESSION['login_user']=$username;
			 $sql = "SELECT * FROM userlogin WHERE username='$username' and password='$password' and member_type='$memberType' ";
			$query = mysql_query($sql);
			
			 if (mysql_num_rows($query) != 0)
			{
				$row=mysql_fetch_object($query);
				$id=$row->id;

				$_SESSION["UserId"] = $id;

				?>
			 	<script language='javascript' type='text/javascript'>
			 
			  		  location.href="DistributorPanel.php";
			   </script>
			  <?php 	
			  }
			 else
			{
			 echo "<script type='text/javascript'>alert('User Name Or Password Incorrect')</script>";
			 }
		}		
	?>		
	

	
<!--===============================================================================================-->	
	<script src="Distributor/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Distributor/vendor/bootstrap/js/popper.js"></script>
	<script src="Distributor/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Distributor/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Distributor/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="Distributor/js/main.js"></script>



</body>
</html>