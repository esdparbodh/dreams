<?php
include('db.php');
session_start();

if(!$_SESSION['UserId'])
{
header('location:../index.html');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="js/pan_req.js"></script>
<style type="text/css">
  
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  
  width:90%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);

  text-align: center;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 15px 15px 15px 25px;
  text-align: center;
  font-weight: 500;
  font-size: 18px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px 15px 15px 25px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 18px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
</style>
</head>
<body>

<a style="float:right;" href="../logout.php"> Logout</a>
<form action="send_final_file.php" method="POST">
<section>
  <!--for demo wrap-->
  <h1>Check PAN Application Form Request</h1>
  <div class="tbl-header">
    <table style="margin-left:0;" cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th width="80">S.No.</th>    
          <th width="80">Acknowle dgement No.</th>
          <th width="80">Request By</th>
          <th width="80">Amount</th>
          <th width="80">Name On PAN</th>
          <th width="80">Mobile No.</th>
          <th width="80">Request On</th>
          <th width="80">Document PDF</th>         
          <th width="80">Check Form</th>
          <th width="80">Action</th>

        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  <form action="#" method="POST">
    <table style="margin-left:0;" cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php
          $sql="SELECT * FROM agent_reg";
          $query=mysql_query($sql);
          if(mysql_num_rows($query)>0)
          {
            while($row=mysql_fetch_object($query))
            {  

            $name= "$row->user_first $row->user_middle $row->user_last " ;

          
          ?>
          <tr>  
              <td width="80"><?php echo $row->id; ?></td>
              <td width="80"><?php echo $name ;?></td>
              <td width="80"><?php echo $name ;?></td>
              <td width="80"><?php echo $row->pan_fee;?></td>  
              <td width="80"><?php echo $row->name_on_pan;?></td>
              <td width="80"><?php echo $row->contact;?></td> 
              <td width="80"><?php echo $row->app_date;?></td>  
              <td width="80"><a href="agent/documents/<?php echo $row->file;?>" target="_blank">Download PDF</a></td> 
              
                  
            <td width="80"><a href="check form.php">Check Form</a></td>
             <td width="10"><a href="approve.php">Approve </a><hr><a href="">Reject</a></td>
      </tr>

        <?php
          }
        }
        
        ?>
                
      </tbody>
    </table>
    
  </div>
</section>
</form>

</body>
</html>
