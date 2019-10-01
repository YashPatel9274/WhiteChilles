<?php 
include_once('header.php'); 
if(isset($_SESSION['adminid']))
	{
$sql='select * from bill order by billid;';
$rs=mysql_query($sql) or die(mysql_error());	
if($rs!=0)
	{
?>
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

<br><br><br><br><br>
<table class='alert bg-info'width='1000' border='3' align='center'>
  <tr>
    <td><div align='center'>BILLS</div></td>
  </tr>
</table>
  <?php while($data=mysql_fetch_assoc($rs))
{
	echo"
<br><div id='print'>
<table class='alert table-hover bg-danger' width=1000 border=3 align=center>
  <tr>
    <td colspan='4' align='center' >White Chilles</td>
  </tr>

<tr>  <td  colspan='2' align='center'>Bill Id:</td>
      <td colspan='2' align='center'>".$data['billid']."</td>
  </tr>
  <tr>
    <td  align=center>Admin Id</td>
    <td align='center'>".$data['adminid']."</td>
    <td align=center>Cust Id</td>
    <td align=center>".$data['id']."</td>
  </tr>
  <tr>
    <td  align=center>Cust Name</td>
<td align='center'>".$data['name']."</td>
  <td align=center>Mobile</td>
    <td align=center>".$data['mob']."</td>
    
  </tr>
  <tr>
    <td  align=center>In Date</td>
<td align='center'>".$data['indate']."</td>
    <td align=center>Out Date</td>
<td align=center>".$data['outdate']."</td>
  </tr>
  <tr>
    <td  align=center>Days</td>
<td align='center'>".$data['day']."</td>
    <td align=center>Room No</td>
<td align=center>".$data['room']."</td>
  </tr>
  <tr>
    <td  align=center>Bill Date</td>
<td align='center'>".$data['bdate']."</td>
    <td align=center>Price</td>
<td align=center>".$data['price']."</td>
  </tr>
<tr>
      <td height='150' colspan='4' align='center'><input class='alert btn-success'type='submit'name='print' onclick='printa(this)' id='print' value='Print'></td>
  </tr>
</table></div><br>";
}
	}

		}

	else
	{?>
		<script>alert('LOGIN please');
		window.location.href='index.php';
		</script>
        
	<?php 	} 
include_once('footer.php');?>