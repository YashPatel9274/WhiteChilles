<?php include_once("header.php");
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
$bdate=$_SESSION['bdate'];
$price=$_SESSION['price'];
?>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<script>
function printa(obj)
{
	var pri=document.getElementById("print");
	var win=window.open('','print','','');
	win.document.write(pri.innerHTML);
	win.document.close();
	win.print() ;
	win.close();
}
</script>

<br><br><br><br><br><br><br><br><br><br>
<form method="post" action="index.php">
<div id='print'><table  width="90%" class="alert bg-info" align="center">
    <tr>
      <td colspan="4" align="center">Print Bill</td>
    </tr>
    <tr>
      <td align='center'>AdminId:</td>
      <td align="center"><?php echo $adminid;?></td>
      <td align="center">CustId:</td>
      <td align="center"><?php echo $id;?></td>
    </tr>
    <tr>
      <td align="center">CustNama:</td>
      <td align="center"><?php echo $name;?></td>
      <td align="center">CustMob:</td>
      <td align="center"><?php echo $mob;?></td>
    </tr>
    <tr>
      <td align="center">InDate:</td>
      <td align="center"><?php echo $indate;?></td>
      <td align="center">OutDate:</td>
      <td align="center"><?php echo $outdate;?></td>
    </tr>
    <tr>
      <td align="center">Day:</td>
      <td align="center"><?php echo $day;?></td>
      <td align="center">Room:</td>
      <td align="center"><?php echo $room;?></td>
    </tr>
    <tr>
      <td align="center">BillDate:</td>
      <td align="center"><?php echo $bdate;?></td>
      <td align="center">Price:</td>
      <td align="center"><?php echo $price;?></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input type="submit" name="confirm" class="alert btn-danger" id="print" value="Goto Home Page"></td>
      <td><input type=button name="print" class="alert btn-danger" id="printC" value="Print" onclick="printa(this)" style="float:right;"></td>
      
    </tr>
  </table></div>
</form>
<script>
function printa(obj)
{
	var pri=document.getElementById("print");
	var win=window.open('','print','','');
	win.document.write(pri.innerHTML);
	win.document.close();
	win.print() ;
	win.close();
}
</script>

<?php 

    }
	else
	{
?>
		<script>alert('LOGIN please');
		window.location.href="index.php";
		</script>
        
	<?php 	}
include_once("footer.php");?>