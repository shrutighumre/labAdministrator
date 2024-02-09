<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assests/css/style.css">
    <title>LabXpert Admin Login</title>
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
        <form id="loginForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
<br><br>
            <button type="button" class="btn">Login</button>
            <br><br>

            <p><a href="#" id="forgotPwd">Forgot Password?</a></p>
            <!-- <p>Don't have an account? <a href="register.php">Sign Up</a></p> -->
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
