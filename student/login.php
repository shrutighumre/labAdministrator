<!DOCTYPE html>
<html lang="en">






<?php  

include("../db/db.php");
error_reporting(0);
    if(isset($_POST['login'])) { 

$userName = $_POST['username'];
$pwd = $_POST['password'];



$query = "select * from user where userName='$userName' and userPwd='$pwd' ";
// echo "$query";
$fetch  = $conn->query($query);

if($fetch->num_rows > 0) {
    // echo "$data[userID]";
while($data = $fetch->fetch_assoc()){
    setcookie("userID", "$data[userID]" , time() + (86400 * 30*365), "/"); 
}

echo "Logged in";
header("LOcation:index.php");
  }
  
  else {
    echo "Incorrect UserName Or Password";
  }

    } 
?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assests/css/style.css">
    <title>LabXpert- Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2 style="font-family: cursive;">LabXpert</h2>
        <br>
        <form id="loginForm" method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
<br><br>
            <button type="submit" name="login" class="btn">Login</button>
            <br><br>

            <p><a href="#" id="forgotPwd">Forgot Password?</a></p>
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        </form>
    </div>

    <script>
        function login() {
            // Add your login logic here
            alert('Login button clicked!');
        }

        document.getElementById('forgotPwd').addEventListener('click', function () {
            // Add your forgot password logic here
            alert('Forgot Password link clicked!');
        });
    </script>

</body>

</html>
