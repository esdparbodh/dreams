<?php 
include('db.php');	


	$deduct_money=$_POST['deduct_money'];
	$balance=$_POST['balance'];
	$id=$_POST['id'];

	$total=$balance - $deduct_money;


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





