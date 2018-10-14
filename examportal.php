<?php
	include "config.php";
?>
<?php
	if(!isset($_SESSION['username'])){
		header("location: index.php");
	}
?>
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="stylesignup.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="overflow: hidden;">  
<div id="nav">
<ul>

  <li><a href="examportal.php">Select Question Set</a></li>
  <!-- <li><a href="#contact"></a></li> -->
  <li><a href="logout.php">Logout</a></li>
  <li  style="float:right"><p style="color: white"><?php	echo "Welcome: " .$_SESSION['username'];?>&nbsp;&nbsp;&nbsp;</p></li>
</ul>
</div>

<din id="container" style="padding: 50px;">
	<div id="link_container">
		<div id="link" style="text-align:  center;padding: 150px;margin:0 auto; width: 60%;">
			<a href="quesSet1.php"><h3>Select Ques Set 1</h3></a>

			<a href="quesSet2.php"><h3>Select Ques Set 2</h3></a>

			<a href="quesSet3.php"><h3>Select Ques Set 3</h3></a>

			<a href="quesSet4.php"><h3>Select Ques Set 4</h3></a>
		</div>
	</div>
</din>

</body>
</html>