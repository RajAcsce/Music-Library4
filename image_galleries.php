<?php
include"header.php";
include "menu.php";

$link=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($link,"adminlogin")or die("unable to connect");
?>
<div class="grid_10">
		<div class="box round first">
			<h2>Image Galleries</h2>
			<div class="block">
			<?php
				$res = mysqli_query($link,"select * from music_add");
				while($row=mysqli_fetch_array($res))
			{
			
			?>
			<img src="<?php echo $row["music_image"];?>" height="200" width="200">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<?php





			}












				?>
			</div>
		</div>


<?php
include"footer.php";
?>