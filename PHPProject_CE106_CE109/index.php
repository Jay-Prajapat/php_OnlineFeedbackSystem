<?php
include("configASL.php");
session_start();
if(isset($_SESSION['aid']))
{
	header("location:home.php");
}
if(!empty($_POST))
{
	$aid=($_POST['aid']);
	$pass=($_POST['pass']);
	$sql=("select * from admin where aid='$aid' and password='$pass' limit 1");
	$result=mysqli_query($link,$sql);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['aid']=$_POST['aid'];
		header("location:home.php");
	}
	else
	{
		?>
        <script type="text/javascript">
		alert("Incorrect Admin ID or Password");
		</script>
      <?php
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Feedback System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="topHeader">
	
    <span class="tag">ONLINE FEEDBACK SYSTEM</span>
</div>
<br>
<br>
<br>
<br>

<div id="content" align="center">
<br>
<br>
<span class="SubHead">Admin Login</span>
<form method="post" action="" >
<div id="table">
	<div class="tr">
		<div class="td">
        	<label>Admin ID : </label>
        </div>
        <div class="td">
			<input type="text" name="aid" size="25" required />
        </div>
    </div>
    <div class="tr">
		<div class="td">
        	<label>Password : </label>
        </div>
        <div class="td">
			<input type="passwor" name="pass" size="25" required />
        </div>
    </div>
</div>
		
        <div class="tdd">
        	<input type="submit" value="Login" />
        </div>
    
    <br>
</div>
</form>
<br>

<center>
<span class="SubHead" style="font-weight:100;">Student Feedback <a href="feedback.php" class="link">Click Here</a></span>

</center>
</body>
</html>