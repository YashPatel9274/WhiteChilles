<?php include_once("connection.php");?>
<html>
<head>
<title>WelCome TO White Chilles</title>
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
<script src="js/jquery-1.10.2.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/valid.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script></head>
<body class="bg-info">
        <div class="navbar" >

<div id='home'class="container-fluid">
        
<marquee class="font-weight-bold" behavior="alternate" bgcolor="#7e0000" height="100"><font color=RED size="+10"><b><i>WHITE CHILLES</i></b></font></marquee>
</div>
<table align="center" class="table-border">
<tr><td>
<a href=index.php><button class="btn btn-danger">Home</button></a>|</td><td>
<a href=accommodation.php><button class="btn btn-danger">Accomodation</button></a>|</td><td>
<a href=aboutus.php><button class="btn btn-danger">About us</button></a>|</td>
<?php if(isset($_SESSION['adminid'])){?>
<td><a href=viewroom.php><button class="btn btn-danger" type="submit" name="view" id="view">View Room</button></a>|</td>
<td><a href=reservation.php><button class="btn btn-danger">Reservation</button></a>|</td>
<td><a href=viewbill.php><button class="btn btn-danger">Bills</button></a>|</td>
<td><a href=logout.php><button class="btn btn-danger">Logout</button></a> </td>
<?php }else{?>
<td><a href=login.php><button class="btn btn-danger">Login</button></a></td>
<?php }?>
</tr>
</table>
</div>