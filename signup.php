<?php
    include "config.php";
?>
<?
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="stylesignup.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="signupbox">
        <img src="images/images.png" class="user">
        <form method="POST" action="config.php">
            <h2>Signup Here</h2>
            <div class="inputbox">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" name="username" placeholder="Enter Username" style="font-family:Buxton Sketch;color:wheat;">
                
            </div>

            <div class="inputbox">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="email" name="email" placeholder="E-mail id" style="font-family:Buxton Sketch;color:wheat;">
            </div>
            <div class="inputbox">
                <span><i class=" fa fa-mobile " aria-hidden="true "></i></span>
                <input type="text" name="phoneNo" placeholder="Enter your phone number" onkeypress="return isNumberKey(event)" style="font-family:Buxton Sketch;color:wheat;">
            </div>

            <div class="inputbox">
                <span><i class=" fa fa-lock " aria-hidden="true "></i></span>
                <input type="password" name="password" placeholder="Create password" id="txtPassword" style="font-family:Buxton Sketch; color:wheat;">
            </div>

            <div class="inputbox">
                <span><i class=" fa fa-lock " aria-hidden="true "></i></span>
                <input type="password" name="confirm_password" placeholder="Re-Enter your password" id="txtConfirmPassword" style="font-family:Buxton Sketch; color:wheat;">
            </div>

            <div>
                <input type="submit" name="signup" value="Sign Up"/> 
                <p>Already a user! <a href="login.php">Login here</a></p>
            </div>
        </form>
    </div>

     <script type="text/javascript">
        window.onload = function () {
            var txtPassword = document.getElementById("txtPassword");
            var txtConfirmPassword = document.getElementById("txtConfirmPassword");
            txtPassword.onchange = ConfirmPassword;
            txtConfirmPassword.onkeyup = ConfirmPassword;
            function ConfirmPassword() {
                txtConfirmPassword.setCustomValidity("");
                if (txtPassword.value != txtConfirmPassword.value) {
                    txtConfirmPassword.setCustomValidity("Passwords do not match.");
                }
            }
        }

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57)) {
                alert("Enter Number");
                return false;
            }
            return true;
        }
</script>
</body>

</html>