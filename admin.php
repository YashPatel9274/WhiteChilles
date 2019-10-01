<?php
include_once("connection.php");
$adminid=$_POST['adminid'];
$adminname=$_POST['adminname'];
$adminaddr=$_POST['adminaddr'];
$adminmob=$_POST['adminmob'];
$adminmail=$_POST['adminmail'];
$adminpsswrd=$_POST['adminpsswrd'];
$adminpsswrd=md5($adminpsswrd);
$sql="select * from admin;";
$rs=mysql_query($sql) or die(mysql_error());
while($d=mysql_fetch_assoc($rs))
{
	if(($d['adminid']==$adminid)||($d['adminmob']==$adminmob)||($d['adminmail']==$adminmail))
	{
?>
		<script>alert('Duplicte Values.... Please Check it again');
		window.location.href="addadmin.php";
		</script>
        
	<?php }}
$sql="insert into admin values('".$adminid."','".$adminname."','".$adminaddr."','".$adminmob."','".$adminmail."','".$adminpsswrd."');";
$rs=mysql_query($sql) or die(mysql_error());
if($rs!=0)
{?>
		<script>alert('Now LOGIN please');
		window.location.href="login.php";
		</script>
        
	<?php 
}
 ?>