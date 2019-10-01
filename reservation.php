<?php include_once("header.php");
if(isset($_SESSION["adminid"]))
	{
?>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<br><br><br><br><br>
<br><br>
<center>
<pre>Thank you for your interest in hotel <em><font color="#7c0000">White Chilles 
</font></em> please fill in your room requirement.</pre></center>
<form method="post" onsubmit="return validres(this);" action="addres.php">
<table width="100%" align=center class="alert table-hover bg-warning">
<tr>
<th align=center>CHECKIN DT   :</th>
<td align="left"><input type="date"class="form-control" name="indate" id="indate"></td>
</tr>
<tr>
<th align=center>CHECKOUT DT   :</th>
<td align="left"><input type="date" name="outdate" class="form-control"id="outdate"></td>
</tr>
<tr>
<th align=center>NO OF ROOMS   :</th>
<td align="left">
<div class="form-group ">
<select name=room class="form-control">
<?php
echo "<option value=0 id='seat'>PLEASE SELECT ROOM</option>";
for($i=1;$i<=30;$i++)
{
echo "<option value=$i id='room'>$i</option>";
}
?>
</select>
</div>
<p>Single(1-10)=800 RS.<br>
Double(11-20)=1500 RS.<br>
Family(21-30)=2500 RS.</p></td>
</tr>
<tr>
<th align=center>ID NO   :</th>
<td align="left"><input class="form-control" type=text name=id id="id" maxlength="12" onKeypress="goods='0123456789'; return limitchar(event);"></td>
</tr>
<tr>
<th align=center>FULL NAME   :</th>
<td align="left"><input class="form-control"type=text name=name id="name"maxlength="20" onKeypress="goods=' abcdefghijklmnopqrstuvwxyz'; return limitchar(event);"></td>
</tr>
<tr>
<th align=center>ADDRESS   :</th>
<td align="left"><input type="text" name=address class="form-control"size="30" maxlength="30"id="address"onKeypress="goods=' abcdefghijklmnopqrstuvwxyz,.&()[]{}1234567890'; return limitchar(event);"></td>
</tr>
<tr>
<th align=center>TELEPHONE   :</th>
<td align="left"><input type="text" name="number" size=10 id="number"maxlength="10" class="form-control"onKeypress="goods='0123456789'; return limitchar(event);" ></td>
</tr>
<tr>
<th align=center>EMAIL   :</th>
<td align="left"><input type="text" name="email" size=20 maxlength="50"id="email"class="form-control"onKeypress="goods=' abcdefghijklmnopqrstuvwxyz@.1234567890'; return limitchar(event);"></td>
</tr>
<tr>
<td align="right"><input class="alert btn-default" type="submit" name="submit" id="submit" value="Submit" /></td>
<td align="left"> <input class="alert btn-primary" type="reset" name="reset" id="reset" value="Reset" /></td>
</tr>
</table>
</form>
<?php 

    }
	else
	{?>
		<script>alert('LOGIN please');
		window.location.href="index.php";
		</script>
        
	<?php 	}
include_once("footer.php");?>