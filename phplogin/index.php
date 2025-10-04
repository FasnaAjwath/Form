<?php
    include("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id = "form">
        <h1>Login Form</h1>
        <form  action = "login.php" name = "form" onsubmit = "return invalid()" method = "POST">
            <label for="">Username: </label>
            <input type="text" id = "user" name = "user"><br><br>
            <label for="">Password: </label>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" id = "btn" name = "submit" value = "Login">
        </form>
    </div>
    <script>
        function invalid() {
            var user = document.getElementById("user").value;
            var password = document.getElementById("password").value;
            if (user.length == 0 && password.length == 0) {
                alert("Username and password must be filled out");
                return false;
            }
            else{
                if(user.length == 0) {
                    alert("Username must be filled out");
                    return false;
                }
                if(password.length == 0) {
                    alert("Password must be filled out");
                    return false;
                }
            }
            //return true;
        }
    </script>
</body>
</html>