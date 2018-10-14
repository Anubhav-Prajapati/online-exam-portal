<?php
	include "configAdmin.php";
?>
<?php
	if(!isset($_SESSION['adminName'])){
		header("location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="stylelogin.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<!-- <a href="logout.php"><input id="logout" type="button" name="logout" value="Logout" ></input></a>
 -->

<ul>
 
  <li><a href="addques.php" >Add Questions</a></li>
  <li><a href="ManageQues.php">Manage Questions</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li  style="float:right"><p style="color: white"><?php	echo "Welcome: " .$_SESSION['adminName'];?>&nbsp;&nbsp;&nbsp;</p></li>
</ul>

