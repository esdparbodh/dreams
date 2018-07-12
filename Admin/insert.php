<?php 
	include('db.php');
	session_start();
	$Member_Type=$_POST['Member_Type'];
		$Package=$_POST['Package'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$address=$_POST['address'];
		$country=$_POST['country'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$email=$_POST['email'];
		$mobile_number=$_POST['mobile'];
		$createdById =  $_SESSION['loggedInAdminId'];
		$sql="INSERT INTO userlogin(member_type,created_by_id,package,firstname,lastname,address,country,state,city,email,mobile_number) values('$Member_Type','$createdById','$Package','$firstname','$lastname','$address','$country','$state','$city','$email','$mobile_number')";
		
		$query=mysql_query($sql);
			if($query)
			{
				echo "<script type='text/javascript'> alert('data saved')</script>";
			
				header('refresh:0;url=AdminPanel.php');
			}	
			else{
			echo "<script type='text/javascript'> alert('data not saved')</script>";
			}

	
?>