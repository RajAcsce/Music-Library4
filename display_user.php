<?php
include "header.php";
include "menu.php";

$link=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($link,"adminlogin")or die("unable to connect");

?>
	<div class="grid_10">
		<div class="box round first">
			<h2>Display User's</h2>
			<div class="block">
			<?php
			$res = mysqli_query($link,"select * from userdata");
			echo "<table border='2' height='20%' width='20%'>";
			echo "<tr>";
			echo "<td style='font-weidht:bold'>";echo "<b>"; echo "ID";echo "</td>";
			echo "<td style='font-weidht:bold'>";echo "<b>"; echo "User Name";echo "</td>";
			echo "<td style='font-weidht:bold'>";echo "<b>"; echo "DELETE"; echo"</td>";
			echo "</tr>";
			while($row=mysqli_fetch_array($res))
			{
				echo "<tr>";
				echo "<td>";echo $row["ID"];echo "</td>";
				echo "<td>";echo $row["username"];echo "</td>";
				echo "<td>";?> <a href="deleteu.php?ID=<?php echo $row["ID"];?>">DELETE </a> <?php echo "</td>";
				echo "</tr>";
				
			}
			echo "</table>";
			?>
			
		</div>
	</div>








<?php
include "footer.php";

?>