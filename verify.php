<?php
include_once("connection.php");
if(isset($_POST['login']))
{
	$adminid=$_POST['adminid'];
	$adminpsswrd=$_POST['adminpsswrd'];
	$adminpsswrd=md5($adminpsswrd);
	
	$sql="select *from admin where adminid='".$adminid."';";
	$rs=mysql_query($sql) or die(mysql_error());
		 $rw=mysql_fetch_assoc($rs);
		 $pwd=$rw['adminpsswrd'];
		
		 if($adminpsswrd==$pwd)
		 {
			$_SESSION['adminid']=$adminid;
		?>
		<script>alert('LOGIN Successfully');
		window.location.href="index.php";
		</script>
        
	<?php }
		 else
		 {?>
		<script>alert('LOGIN again please');
		window.location.href="login.php";
		</script>
        
	<?php }
}
?>