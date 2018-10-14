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
	}/*
	else{
		echo "conn successfull";
	}*/

	if(isset($_POST['signup'])){

		if(empty($_POST['username'])||empty($_POST['password'])||empty($_POST['confirm_password'])||empty($_POST['email'])||empty($_POST['phoneNo'])){
			echo "Please fill all fields";
		}
		else{
			$sql="INSERT INTO userdata(username,password,repassword,email,phone)
			VALUES('".$_POST['username']."','".$_POST['password']."','".$_POST['confirm_password']."','".$_POST['email']."','".$_POST['phoneNo']."')";
			$query=$conn->query($sql);
			if(!$query){
				echo "something wrong happen please go back and fill the form again";
			}
			else{
				header("location: login.php");
			}
		}
	}

	if(isset($_POST['login'])){

		$user=$_POST['username'];
		$pass=$_POST['password'];

		if(empty($user)||empty($pass))
		{
			echo "please fill all fields";
		}
		else{
			$sql="SELECT * FROM userdata where username='".$user."'";
			$query=$conn->query($sql);
			$numofrow=$query->num_rows;
			if($numofrow>0){
				while($row=$query->fetch_assoc())
				{
					if($row['username']==$user&&$row['password']==$pass)
					{
						$_SESSION['username']=$row['username'];
						header("location: examportal.php");
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

?>