<!DOCTYPE html>
<html lang="en">

<?php  

include("../db/db.php");
error_reporting(0);
    if(isset($_POST['register'])) { 

$uname = $_POST['uname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$cno = $_POST['cno'];

$userName = "labxpert@Teacher-".$uname;

$query = "INSERT INTO `teachers` (`teacherID`, `teacherName`, `teacherUniqueID`, `teacherContactNo`, `teacherPwd`, `Email`, `timey`) VALUES (NULL, '$uname', '$userName', '$cno', '$pwd', '$email', CURRENT_TIMESTAMP());";


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
        <h2 style="font-family: cursive;">LabXpert <br> Add Teacher</h2>
        <br>
        <hr>
        <br>
        <form id="loginForm" method="post" action="addTeachers.php">
            <label for="username">Name:</label>
            <input type="text" id="username" name="uname" required>

            
            <label >Email:</label>
            <input type="email" id="password" name="email" required>

<br>
            <label for="username">Contact No</label>
            <input type="tel" id="contact" name="cno" required>
            

<br>

            <label for="username">password:</label>
            <input type="password" id="username" name="pwd" required>
            
            
<br><br>
            <button type="submit" name="register" class="btn">Add Teacher</button>
            <br><br>
<?php
if(isset($message)){
echo "<h3 style='color:green'>$message</h3><br><br>";
echo "<h3 style='color:green'>ID = $userName</h3><br><br>";
}
?>
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
