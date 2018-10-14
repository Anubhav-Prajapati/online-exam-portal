<?php
	include 'configAdmin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="stylelogin.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<ul>

	  <li><a href="#">Add Questions</a></li>
	  <li><a href="ManageQues.php">Manage Questions</a></li>
	  <li><a href="logout.php">Logout</a></li>
	  <li  style="float:right"><p style="color: white"><?php	echo "Welcome: " .$_SESSION['adminName'];?>&nbsp;&nbsp;&nbsp;</p></li>
	</ul>
	<div id="main" style="padding: 135px 500px;margin: 0 auto;align-content: center;width: 100%; color: white;">
		<form action="configAdmin.php" method="post">
			<table>
				<tr><th>Question:</th><td><textarea name="ques" style="width: 273px; height: 151px"></textarea><br></td></tr>
				<tr><th>Option 1:</th><td><input type="text" name="opt1" style="width: 100%;" /></td></tr>
				<tr><th>Option 2:</th><td><input type="text" name="opt2" style="width: 100%;" /></td></tr>
				<tr><th>Option 3:</th><td><input type="text" name="opt3" style="width: 100%;" /></td></tr>
				<tr><th>Option 4:</th><td><input type="text" name="opt4" style="width: 100%;" /></td></tr>
				<tr><th>Correct Option:</th><td><input type="text" name="correctans" placeholder="E.g. A/B/C/D" style="width: 100%;"/></td></tr>
				<tr><th></th><td><a><input type="submit" name="submit" value="Submit" /></a></td></tr>
			</table>
		</form>
	</div>
</body>
</html>