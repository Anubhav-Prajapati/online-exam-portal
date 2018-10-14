<?php
    include "configAdmin.php";
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 
</head>

<body>
    <div id="overlay">
        <div class="loginbox">
            <img src="images.png" class="user">
            <!-- <span><i class="fas fa-graduation-cap" id="icon" style="font-size: 50px;"></i></span> -->
            <form action="configAdmin.php" method="post">
                <h2>Admin</h2>
                <div class="inputbox">
                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" name="username" placeholder="Username" required="required" style="font-family:Buxton Sketch; color:wheat;">
                    
                </div>

                <div class="inputbox">
                    <span><i class=" fa fa-lock " aria-hidden="true "></i></span>
                    <input type="password" name="password" required="required" placeholder="Password" style="font-family:Buxton Sketch; color:wheat;">
                </div>

                <div>
                    <input type="submit" name="login" value="Login" onclick="return off()"> </br><br>
                </div>
            </form>
        </div>
    
</body>

</html>