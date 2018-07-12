<?php 
include('db.php');	


	$add_money=$_POST['add_money'];
	$balance=$_POST['balance'];
	$id=$_POST['id'];

	$total=$balance + $add_money;


	$sql="UPDATE userlogin SET balance='$total' where id=$id";

			$query=mysql_query($sql);
			if($query)
			{
				header('refresh:0;ManagePartner.php');
			}
?>
<script>

	alert(<?php echo $total; ?>);
</script>





