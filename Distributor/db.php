<?php
	$con=mysql_connect('localhost','root','') 
		or die ('Error connect to database');
		mysql_select_db('dream_comes_true',$con)
		or die('Error to select db');
?>