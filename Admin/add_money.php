<?php 
include('db.php');
session_start();
	
	$sql="SELECT * FROM userlogin where id='{$_GET['id']}'";
		$query=mysql_query($sql);
		$row=mysql_fetch_object($query);
		$id=$row->id;
		$firstname=$row->firstname;		
		$balance=$row->balance;


?> 

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">  
<form action="add_fund.php" method="POST">
  <table style="text-align:center;" class="table">
    <thead>
      <tr>
        <th style="text-align:center;font-size:50px;"; colspan="2">ADD Fund In Wallet</th>        
      </tr>
    </thead>
    <tbody>
      <tr class="warning">
       	<td>Member Id</td>
        <td><?php echo "$id" ?></td>                  
        
      </tr>      
      <tr class="success">
        <td>First name</td>
        <td><?php echo "$firstname" ?></td>
        
      </tr>
      <tr class="danger">
        <td>Balance</td>
        <td><?php echo "$balance" ?></td>
       
      </tr>
      <tr class="info">
        <td>Amount To Add</td>
        <td><input type="text" name="add_money"></td>
           <td><input type="hidden" name="balance" value="<?php echo "$balance" ?>"></td>
           <td><input type="hidden" name="id" value="<?php echo "$id" ?>"></td>
        </tr>
       <tr class="active">

        <td>Narration</td>
        <td><textarea></textarea></td>
       
      </tr>
      <br><br><br>
      <tr >
        <td colspan="2"><input type="submit" name="submit" value="Add Fund Now" > </td>
            
      </tr>    
    
     </tbody>


  </table>
  </form>
</div>




</body>
</html>
