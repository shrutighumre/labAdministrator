<!DOCTYPE html>
<html lang="en">

<?php  

include("../db/db.php");
error_reporting(0);
    if(isset($_POST['register'])) { 

$uname = $_POST['uname'];
$email = $_POST['email'];
$std = $_POST['std'];
$pwd = $_POST['pwd'];
$div = $_POST['div'];

$userName = "labxpert@".$uname;

$query = "INSERT INTO `user` (`userID`, `uName`, `userPwd`, `email`, `std`, `divs`, `times`, `userName`) VALUES (NULL, '$uname', '$pwd', '$email', '$std', '$div', CURRENT_TIMESTAMP , '$userName ');";


$insert =  $conn->query($query);

if($insert===TRUE){
   $message =  "Account Had been created Succesfully !";
   
}
else{
    $message =  "0";

}


    } 
?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assests/css/style.css">
    <title>LabXpert- Student Login</title>
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

        .button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
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
        <form id="loginForm" method="post" action="register.php">
            <label for="username">Name:</label>
            <input type="text" id="username" name="uname" required>

            
            <label >Email:</label>
            <input type="email" id="password" name="email" required>
            <label for="username">Standard:</label>
            <br>

<select name="std" id="" style="width: 150px;">
    <option value="FYBSCIT">FYBSCIT</option>
    <option value="SYBSCIT">SYBSCIT</option>
    <option value="TYBSCIT">TYBSCIT</option>
   


</select>
<br>
            <label for="username">Division:</label>
            <br>

<select class="" name="div" id="" style="width: 150px;">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>

</select>
<br>

            <label for="username">password:</label>
            <input type="password" id="username" name="pwd" required>
            
            
<br><br>
            <button type="submit" name="register" class="btn">Create</button>
            <br><br>
<?php
if(isset($message)){
echo "<h3 style='color:green'>$message</h3><br><br>";
echo "<h3 style='color:green'>ID = $userName</h3><br><br>";
}
?>
            <p>Already have an account? <a href="login.php">Log in</a></p>
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
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>
