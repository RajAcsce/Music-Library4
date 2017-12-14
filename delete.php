<?php
$link=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($link,"adminlogin")or die("unable to connect");
$id=$_GET["ID"];
$res=mysqli_query($link,"select * from music_add where ID=$id"); //deleting image from folde
while($row=mysqli_fetch_array($res))
{
	$img=$row["music_image"];
	$a1=$row["audio1"];
	$a2=$row["audio2"];
	$a3=$row["audio3"];
	$a4=$row["audio4"];
	$a5=$row["audio5"];

}
unlink($img);        
unlink($a1); 
unlink($a2);                                               
unlink($a3);                                               
unlink($a4);                                               
unlink($a5);                                                                                             //unlink the image from folder
                                                      //unlink the image from folder

mysqli_query($link,"delete from music_add where ID=$id");
?>
<script type="text/javascript">
	alert('ONE RECORD IS DELETED ....OK');                    //alert msg for deleted record
	window.location="display_music.php";
</script>





