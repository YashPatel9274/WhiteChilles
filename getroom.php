<style>
.bus{ background-position:center; text-align:center; margin:auto width:100%;float:left; }
.seat{ background-position:center; background:#CCC; float:left; margin:20px 20px 0 0; }
.red{background:red;}
</style> 
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
<div><a href='viewroom.php' class='close' data-dismiss='alert'>x</a>
<?php include_once("connection.php");
if(isset($_SESSION["adminid"]))
	{
	$date=$_GET['q'];
	$booked_seat=array();
	$dat=array();
	$msg="No Reserved Rooms Are Available....";
	$sql="select * from reservation;";
	$rs=mysql_query($sql) or die(mysql_error());
	while($data=mysql_fetch_assoc($rs))
	{
		if(strtotime($data['indate']) <= strtotime($date) && strtotime($data['outdate']) >= strtotime($date))
		{
			$booked_seat[]=$data['roomno'];
			$dat[]=$data;
			
		}
	}
	echo"<div id='print'><span class='bus '>";
	for($seat=01; $seat <=30 ;$seat++) 
	  { 
		if(in_array($seat,$booked_seat))
		{ 
		  $booked="red"; $book_seat="data-book='1'";
		  $msg="The Data Of Reserved Rooms Is:-"; 
		}
		else 
		{ 
		  $booked=""; 
		  $book_seat="";
		}
		echo "<div class='seat $booked' data-number='$seat' $book_seat >Room no:$seat<br><img src='images/hotel.png' width='90' height='90'></div>";
	  }
      echo"</span>";
	  echo"<pre>'".$msg."'</pre>";
	  echo"<br><table align='center'  width='100%' class='alert bg-info table-hover'>";
	  echo"<tr><td align='center'>INDATE</td>
			<td align='center'>OUTDATE</td>
			<td align='center'>ROOMNO</td>
			<td align='center'>ID</td>
			<td align='center'>NAME</td>
			<td align='center'>ADDRESS</td>
			<td align='center'>MOBILE</td>
			<td align='center'>EMAIL</td></tr>";
	  foreach($dat as $a)
	{
			echo"<tr><td align='center'>".$a['indate']."</td>
			<td align='center'>".$a['outdate']."</td>
			<td align='center'>".$a['roomno']."</td>
			<td align='center'>".$a['id']."</td>
			<td align='center'>".$a['name']."</td>
			<td align='center'>".$a['addr']."</td>
			<td align='center'>".$a['mobno']."</td>
			<td align='center'>".$a['email']."</td></tr>";
		}
		echo"</table></div>";
 }
	else
	{
?>
		<script>alert('LOGIN please');
		window.location.href="index.php";
		</script>
        
	<?php 	}
?>
</div>
  	  