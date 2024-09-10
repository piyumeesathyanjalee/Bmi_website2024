<?php
    include("dbconection.php");
?>

<!DOCTYPE html>
<head>
    <title>Document</title>
<link rel="stylesheet" href="../css/stylelog.css"/>
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="logindata.php" onsubmit="return isvalid()" method="POST">
            <label>Username:</label>
            <input type="text" id="user" name="user">
            <br><br>
            <label>Password:</label>
            <input type="password" id="pass" name="pass">
            <br><br>
            <input type="submit" id="btn" value="Login" name="submit"/>
            
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.user.value;
            if(user.length=="" && pass.length==""){
                alert("Username and password field is empty!!!");
                return false
            }
            else{
                if(user.length==""){
                alert("Username is empty!!!");
                return false
            }
            if(pass.length==""){
                alert("password is empty!!!");
                return false
            }
        }
    }
    </script>
</body>
</html>


