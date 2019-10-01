<?php
include_once("connection.php");
if(isset($_SESSION["adminid"]))
	{
$adminid=$_SESSION['adminid'];
$id=$_SESSION['id'];
$name=$_SESSION['name'];
$mob=$_SESSION['mob'];
$indate=$_SESSION['indate'];
$outdate=$_SESSION['outdate'];
$day=$_SESSION['day'];
$room=$_SESSION['room'];
$bdate=date('d/m/Y');
$_SESSION['bdate']=$bdate;
if($room>=1&&$room<=10)
{$price=800;}
else if($room>=11&&$room<=20)
{$price=1500;}
else if($room>=21&&$room<=30)
{$price=2500;}
$price=$price*$day;
$_SESSION['price']=$price;
$sql="insert into `bill`(`adminid`, `id`, `name`, `mob`, `bdate`, `indate`, `outdate`, `day`, `room`, `price`) values('".$adminid."','".$id."','".$name."','".$mob."','".$bdate."','".$indate."','".$outdate."','".$day."','".$room."','".$price."');";
    $rs=mysql_query($sql) or die(mysql_error());
    if($rs!=0)
    {
?>
		<script>alert('BILL Saved');
		window.location.href="confbill.php";
		</script>
        
	<?php    }
 
    }
	else
	{
?>
		<script>alert('LOGIN please');
		window.location.href="index.php";
		</script>
        
	<?php 	}
 ?>
