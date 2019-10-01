<?php include_once("header.php"); ?>
<br><br><br><br><br>

<form onSubmit="return validadmin(this);" enctype="multipart/form-data" name="addadmin" method="post"  action="admin.php">
<table class="table table-hover bg-primary"  width="400" border="5" align="center">
<tr>
<th colspan="2" scope="col"><div align="center">REGISTER</div></th>
</tr>
<tr>
<td width="214"><div align="center">ADMIN ID</div></td>
<td width="162"><div align="center">
<input type="text" name="adminid"maxlength="12" id="adminid"class="form-control" onKeypress="goods='0123456789'; return limitchar(event);">

</div></td> 
</tr>
<tr>
<td><div align="center">ADMIN NAME</div></td>
<td><div align="center">
<input type="text" name="adminname"maxlength="20" class="form-control"id="adminname" onKeypress="goods=' abcdefghijklmnopqrstuvwxyz'; return limitchar(event);">
</div></td>
</tr>
<tr>
<td><div align="center">ADMIN ADDRESS</div></td>
<td><div align="center">
<input type="text" name="adminaddr"class="form-control"maxlength="50" id="adminaddr" onKeypress="goods=' abcdefghijklmnopqrstuvwxyz,.&()[]{}1234567890'; return limitchar(event);">

</div></td>
</tr>
<tr>
<td><div align="center">ADMIN MOBILENO</div></td>
<td><div align="center">
<input type="text" name="adminmob" id="adminmob" class="form-control"maxlength="10"onKeypress="goods='0123456789'; return limitchar(event);">

</div></td>
</tr>
<tr>
<td><div align="center">ADMIN MAIL</div></td>
<td><div align="center">
<input type="text" name="adminmail" id="adminmail"class="form-control"maxlength="50"onKeypress="goods=' abcdefghijklmnopqrstuvwxyz@.1234567890'; return limitchar(event);">

</div></td>
</tr>
<tr>
<td><div align="center">ADMIN&nbsp;PASSWORD</div></td>
<td><div align="center">
<input type="password" name="adminpsswrd"class="form-control" id="adminpsswrd"maxlength="20">

</div></td>
</tr>
<tr>
<td colspan="2"><div align="center">
<input class="btn btn-warning" type="submit" name="submit" value="submit" id="submit">

<input class="btn btn-success" type="reset" name="reset" id="reset" value="reset">
</div></td>
</tr>

</table> 

</form>
<?php include_once("footer.php");?>
