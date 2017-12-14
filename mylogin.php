<?php
session_start();
$conn=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($conn,"adminlogin")or die("unable to connect");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" name="form1" method="post" action="">
    <p><input type="text" placeholder="Username" name="u1" required pattern="[A-Za-z]+" title="Please Enter Valid Username[A-Za-z only] "></p>
    <p><input type="password" placeholder="Password" name="p1" required ></p>
    <p><input type="submit" value="Log in" name="sub1"></p>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<?php
if(isset($_POST["sub1"]))
{
	//echo "hello";
	$res = mysqli_query($conn,"select * from alogin where username='$_POST[u1]' && password='$_POST[p1]'");
	while($row=mysqli_fetch_array($res))
	{
		$_SESSION["admin"]=$row["username"];
		?>
		
	<script type="text/javascript">
	window.location="home.php";
	</script>
	<?php
	}
}

?>
  </body>
</html>