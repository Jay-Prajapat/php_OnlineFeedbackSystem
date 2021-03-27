<?php
include("configASL.php");
session_start();
if (!isset($_SESSION['aid'])) {
	header("location:index.php");
}
$aid = $_SESSION['aid'];
$x = "SELECT * FROM admin WHERE aid='$aid' ";
$y = mysqli_query($link,$x);
$name = mysqli_fetch_assoc($y);

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
			<span class="tag">STUDENT FEEDBACK SYSTEM</span>
	</div>
	<br>
	<br>
	<br>
	<br>

	<div >
		<br>
		<br>
		<h1 style="text-align: center;">Welcome Admin </h1>
		<br>
		<br>

		<table align="center" border="1">
		<tr>
			<td>
				<a href="feeds.php" >Feedback</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="manageFaculty.php" >Manage Faculty</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="changePass.php" >Change Password</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="logout.php" >Logout</a>
			</td>
		</tr>
		</table>
		


		

	</div>
</body>

</html>