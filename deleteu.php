<?php
$link=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($link,"adminlogin")or die("unable to connect");
$id=$_GET["ID"];
mysqli_query($link,"DELETE FROM `userdata` WHERE ID=$id");
?>
<script type="text/javascript">
	alert('ONE RECORD IS DELETED ....OK');                    //alert msg for deleted record
	window.location="display_user.php";
</script>