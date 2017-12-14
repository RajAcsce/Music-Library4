<?php
include "header.php";
include "menu.php";
$link=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($link,"adminlogin")or die("unable to connect");
$id=$_GET["ID"];
$res=mysqli_query($link,"select * from music_add where ID=$id");
while($row=mysqli_fetch_array($res))
{
	
	$mname=$row["film_name"];
	$mlang=$row["music_lang"];
	$mimage=$row["music_image"];
	$mt1=$row["music_title1"];
	$a11=$row["audio1"];
	$mt2=$row["music_title2"];
	$a12=$row["audio2"];
	$mt3=$row["music_title3"];
	$a13=$row["audio3"];
	$mt4=$row["music_title4"];
	$a14=$row["audio4"];
	$mt5=$row["music_title5"];
	$a15=$row["audio5"];
	
	
	
}
?>
<div class="grid_10">
		<div class="box round first">
			<h2>Edit Music's</h2>
			<div class="block">
				<form name="form1" action="" method="post" enctype="multipart/form-data">
					<table border="1">
					<tr>
					<td colspan="2" align="center">
						<img src="<?php echo $mimage;?>" height="200" width="200">
					</td>
					</tr>
					<tr>
					<td><b>Movie Name::</b></td>
					<td><input type="text" name="moname" value="<?php echo $mname; ?>"></td>
					</tr>
					
					<tr>
					<td><b>Music Language::</b></td>
					<td>
					<select name="lang" required>
					<option value="">Select Language</option>
					<option value="English">English</option>
					<option value="Hindi">Hindi</option>
					<option value="Kannada">Kannada</option>
					<option value="Marathi">Marathi</option>
					<option value="Telagu">Telugu</option>

					</select>
					</td>
					</tr>
					<tr>
					<td><b>Music Image::</b></td>
					<td><input type="file" name="mimage" value="<?php echo $mimage ?>" required></td>
					</tr>
					
					<tr>
					<td><b>Music Title1::</b></td>
					<td><input type="text" name="mt1" value="<?php echo $mt1 ?>" ></td>
					
					<td><b>Audio1::</b></td>
					<td><input type="file" name="a1" value="<?php echo $a11 ?>"></td>
					</tr>
					<tr>
					<td><b>Music Title2::</b></td>
					<td><input type="text" name="mt2" value="<?php echo $mt2 ?>"></td>
					
					<td><b>Audio2::</b></td>
					<td><input type="file" name="a2" value="<?php echo $a12 ?>"></td>
					</tr>
					<tr>
					<td><b>Music Title3::</b></td>
					<td><input type="text" name="mt3" value="<?php echo $mt3 ?>"></td>
					
					<td><b>Audio3::</b></td>
					<td><input type="file" name="a3" value="<?php echo $a13 ?>"></td>
					</tr>
					<tr>
					<td><b>Music Title4::</b></td>
					<td><input type="text" name="mt4" value="<?php echo $mt4 ?>"></td>
					
					<td><b>Audio4::<b/></td>
					<td><input type="file" name="a4" value="<?php echo $a14 ?>" ></td>
					</tr>
					<tr>
					<td><b>Music Title5::</b></td>
					<td><input type="text" name="mt5" value="<?php echo $mt5 ?>"></td>
					
					<td><b>Audio5::</b></td>
					<td><input type="file" name="a5" value="<?php echo $a15 ?>"><br><br></td>
					</tr>	
					<tr>
						<td colspan="2" align="center"><input type="submit" name="update1" value="update"></td>
					</tr>
					</table>
					
			</div>
		</div>
		<?php
		if(isset($_POST["update1"]))
		{
			$fnm=$_FILES["mimage"]["name"];
			
			if($fnm=="")
			{
				mysqli_query($link,"update music_add set film_name='$_POST[moname]',music_lang='$_POST[lang]',music_image='$dst1',music_title1='$_POST[mt1]',audio1='$dst2',music_title2='$_POST[mt2]',audio2='$dst3',music_title3='$_POST[mt3]',audio3='$dst4',music_title4='$_POST[mt4]',audio4='$dst5',music_title5='$_POST[mt5]',audio5='$dst6' where ID=$id ");
				
	
			}
			else
			{
				$v1=rand(1111,9999);
				$v2=rand(1111,9999);
   
				$v3=$v1.$v2;
   
				$v3=md5($v3);
   
   
				$fnm=$_FILES["mimage"]["name"];
				$dst="./music_image/".$v3.$fnm;
				$dst1="music_image/".$v3.$fnm;
				move_uploaded_file($_FILES["mimage"]["tmp_name"],$dst);
   
				mysqli_query($link,"update music_add set film_name='$_POST[moname]',music_lang='$_POST[lang]',music_image='$dst1',music_title1='$_POST[mt1]',audio1='$dst2',music_title2='$_POST[mt2]',audio2='$dst3',music_title3='$_POST[mt3]',audio3='$dst4',music_title4='$_POST[mt4]',audio4='$dst5',music_title5='$_POST[mt5]',audio5='$dst6' where ID=$id ");
				
				
			}
			?>
			<script type="text/javascript">
				alert('ONE RECORD IS UPDATED ....OK');                    //alert msg for edting record
				window.location="display_music.php";
			</script>
			
			<?php
			
		}
		?>
		
		
		
<?php
include "footer.php";
?>