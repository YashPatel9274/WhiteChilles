<?php
include_once("connection.php");
if(isset($_SESSION["adminid"]))
{
	session_destroy();
	unset($_SESSION["adminid"]);
?>
		<script>alert('LOGOUT Successfully');
		window.location.href="index.php";
		</script>
        
	<?php }

?>
