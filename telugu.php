<?php
include "header.php";
include "menu.php";

$link=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($link,"adminlogin")or die("unable to connect");

?>
<div class="grid_10">
		<div class="box round first">
			<h2>Display Music's</h2>
			<div class="block">
			<?php
			include("pagination/function.php");
					$res=mysqli_query($link,"select * from music_add where music_lang='telagu' ");
			echo "<center>";
			echo "<table border='3' height='50%' width='50%'>";
			echo "<tr>";
			echo "<td>"; echo "ID";  echo "</td>";
			echo "<td>"; echo "Music Image";  echo "</td>";
			echo "<td>"; echo "Film Name";  echo "</td>";
			echo "<td>"; echo "Music_Langauge";  echo "</td>";
			
			
			echo "<td>"; echo "DELETE";  echo "</td>";
			echo "<td>"; echo "EDIT";  echo "</td>";
			echo "</tr>";
			
			while($row=mysqli_fetch_array($res))
			{
				echo "<tr>";
				echo "<td>";echo $row["ID"];echo "</td>";
				echo "<td>";?><img src="<?php echo $row["music_image"];?>" height="100" width="100"> <?php echo "</td>";
				echo "<td>";echo $row["film_name"];echo "</td>";
				echo "<td>";echo $row["music_lang"];echo "</td>";
				echo "<td>";?>  <a href="delete.php?ID=<?php echo $row["ID"]; ?>">DELETE</a><?php	echo "</td>";	
				echo "<td>";?>  <a href="edit.php?ID=<?php echo $row["ID"]; ?>">EDIT</a><?php	echo "</td>";				 
				echo "</tr>";
				
			}
			echo "</table>";
			echo "</center>";
			
			?>
			<ul class="pagination">
					
					</ul>
			



 
			</div>
		</div>




<?php
include "footer.php";
?>