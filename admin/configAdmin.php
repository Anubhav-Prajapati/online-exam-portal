<?php
	session_start();
	$host="localhost";
	$username="root";
	$password="";
	$dbname="exam";

	$conn=mysqli_connect($host,$username,$password,$dbname);
	if(!$conn)
	{
		die("error:" .mysqli_connect_error());
	}

	if(isset($_POST['login'])){

		$user=$_POST['username'];
		$pass=$_POST['password'];

		if(empty($user)||empty($pass))
		{
			echo "please fill all fields";
		}
		else{
			$sql="SELECT * FROM admin where adminName='".$user."'";
			$query=$conn->query($sql);
			$numofrow=$query->num_rows;
			if($numofrow>0){
				while($row=$query->fetch_assoc())
				{
					if($row['adminName']==$user&&$row['password']==$pass)
					{
						$_SESSION['adminName']=$row['adminName'];
						header("location: adminportal.php");
					}
					else
					{
						echo "wrong username/password";
					}
				}
			}
			else{
				echo "wrong username/password";
			}
		}
	}

	if(isset($_POST['submit'])){
		$ques=$_POST['ques'];
		$opt1=$_POST['opt1'];
		$opt2=$_POST['opt2'];
		$opt3=$_POST['opt3'];
		$opt4=$_POST['opt4'];
		$correctans=$_POST['correctans'];

		$sql="INSERT INTO questionset1(ques,opt1,opt2,opt3,opt4,correctans)
		VALUES('".$ques."','".$opt1."','".$opt2."','".$opt3."','".$opt4."','".$correctans."')";
		$query=$conn->query($sql);
		header("Location: addques.php");

	}

?>