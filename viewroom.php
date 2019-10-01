<?php include_once("header.php");
if(isset($_SESSION["adminid"]))
	{
?>
<br><br><br>
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

<script type="text/javascript">
function setroom(str)
{
	var obj= new XMLHttpRequest();
    obj.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status == 200)
        {
            document.getElementById("room").innerHTML=this.responseText;
        }
    };
    obj.open("GET","getroom.php?q="+str,true);
    obj.send();
}
</script>
<div id='print'>
<div class="col-md-2">
<input  type="date" onChange="setroom(this.value);">
<input type='button' name='print' onclick='printa(this)' id='print' value='print' class='alert btn-info'>
</div>
<div id="room" class=" col-md-10 bg-success">
</div>
</div>
<br><br><br><br><br><br><br><br>
<?php 
}
	else
	{?>
		<script>alert('LOGIN please');
		window.location.href="index.php";
		</script>
        
	<?php }
include_once("footer.php");?>