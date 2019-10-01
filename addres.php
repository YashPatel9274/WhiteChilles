<?php 
include_once("connection.php");
if(isset($_SESSION["adminid"]))
	{
$indate=$_POST["indate"];
$outdate=$_POST["outdate"];
$room=$_POST["room"];
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$mob=$_POST["number"];
$addr=$_POST["address"];
$indate1=strtotime($indate);
$outdate1=strtotime($outdate);
$f=0;
$sql="select * from reservation where roomno='".$room."';";
$rs=mysql_query($sql) or die(mysql_error());
while($data=mysql_fetch_assoc($rs))
{
	$indated=strtotime($data['indate']);
	$outdated=strtotime($data['outdate']);
	if(($indated<=$outdate1 || $outdate1<=$outdated) || ($indated<=$indate1 || $outdate1<=$indated))
	{
		$f=1;?>
		<script>alert('Already Booked');
		window.location.href="reservation.php";
		</script>
	<?php
    }
}
$indate1=strtotime($indate);
$outdate1=strtotime($outdate);
$day=$outdate1-$indate1;
$day=floor($day/(60*60*24));
$day=$day+1;
if($f==0)
{
$sqli="insert into reservation values('".$indate."','".$outdate."','".$room."','".$id."','".$name."','".$addr."','".$mob."','".$email."');";
$rsi=mysql_query($sqli) or die(mysql_error());
$_SESSION['id']=$id;
$_SESSION['name']=$name;
$_SESSION['mob']=$mob;
$_SESSION['indate']=$indate;
$_SESSION['outdate']=$outdate;
$_SESSION['room']=$room;
$_SESSION['day']=$day;
?>
		<script>alert('DATA saved successfully');
		window.location.href="bill.php";
		</script>
        
	<?php }}
	else
	{
?>
		<script>alert('LOGIN please');
		window.location.href="index.php";
		</script>
        
	<?php 	}
?>