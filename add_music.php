<?php
session_start();
if($_SESSION["admin"]=="")
{
?>
<script type="text/javascript">
	window.location="mylogin.php";
	</script>

<?php
}	

	include "header.php";
	include "menu.php";
?>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"adminlogin");
?>
     
        <div class="grid_10">
            <div class="box round first">
                <h2>
                    ADD_MUSIC</h2>
                <div class="block">
                   <form name="form1" action="" method="post" enctype="multipart/form-data">
					<table border="1" height="50%" width="50%">
					<tr>
					<td><b>Movie Name::</b></td>
					<td><input type="text" name="moname" required ></td>
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
					<td><input type="file" name="mimage" required></td>
					</tr>
					
					<tr>
					<td><b>Music Title1::</b></td>
					<td><input type="text" name="mt1" required ></td>
					
					<td><b>Audio1::</b></td>
					<td><input type="file" name="a1" required></td>
					</tr>
					<tr>
					<td><b>Music Title2::</b></td>
					<td><input type="text" name="mt2"></td>
					
					<td><b>Audio2::</b></td>
					<td><input type="file" name="a2"></td>
					</tr>
					<tr>
					<td><b>Music Title3::</b></td>
					<td><input type="text" name="mt3"></td>
					
					<td><b>Audio3::</b></td>
					<td><input type="file" name="a3" ></td>
					</tr>
					<tr>
					<td><b>Music Title4::</b></td>
					<td><input type="text" name="mt4" ></td>
					
					<td><b>Audio4::<b/></td>
					<td><input type="file" name="a4" ></td>
					</tr>
					<tr>
					<td><b>Music Title5::</b></td>
					<td><input type="text" name="mt5" ></td>
					
					<td><b>Audio5::</b></td>
					<td><input type="file" name="a5" ><br><br></td>
					</tr>	
					<tr>
					<td colspan="4" align="center"><input type="submit" name="submit1" value="upload" size="30px"></td>
				</tr>
					
					
					</table>
					
					
					</form>
<?php
if(isset($_POST["submit1"]))
{
   $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["mimage"]["name"];
   $dst="./music_image/".$v3.$fnm;
   $dst1="music_image/".$v3.$fnm;
   move_uploaded_file($_FILES["mimage"]["tmp_name"],$dst);

  
   $fnm1=$_FILES["a1"]["name"];
   $fnm2=$_FILES["a2"]["name"];
   $fnm3=$_FILES["a3"]["name"];
   $fnm4=$_FILES["a4"]["name"];
   $fnm5=$_FILES["a5"]["name"];
   
   $dst2="./audio21/".$fnm1;
   $dst3="./audio22/".$fnm2;
   $dst4="./audio23/".$fnm3;
   $dst5="./audio24/".$fnm4;
   $dst6="./audio25/".$fnm5;
   
   move_uploaded_file($_FILES["a1"]["tmp_name"],$dst2);
   move_uploaded_file($_FILES["a2"]["tmp_name"],$dst3);
   move_uploaded_file($_FILES["a3"]["tmp_name"],$dst4);
   move_uploaded_file($_FILES["a4"]["tmp_name"],$dst5);
   move_uploaded_file($_FILES["a5"]["tmp_name"],$dst6);

mysqli_query($link,"INSERT INTO music_add(`ID`, `film_name`, `music_lang`, `music_image`, `music_title1`, `audio1`, `music_title2`, `audio2`, `music_title3`, `audio3`, `music_title4`, `audio4`, `music_title5`, `audio5`) VALUES ('','$_POST[moname]','$_POST[lang]','$dst1','$_POST[mt1]','$dst2','$_POST[mt2]','$dst3','$_POST[mt3]','$dst4','$_POST[mt4]','$dst5','$_POST[mt5]','$dst6')");

}




?>							
					
                </div>
            </div>
            
        
<?php
	include "footer.php";
?>