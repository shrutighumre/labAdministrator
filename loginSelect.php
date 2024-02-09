<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assests/css/style.css">

</head>
<body>
    

<STYle>
    .A{box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; */
        /* box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; */
background-color: #d9d9d9;
margin: 20px;
padding: 20px;
text-align: center;
color: black  ;
border-radius: 15px;
/* border: 2px solid black; */
}

.A * {
    color: black;
}

.A button {
    width: 200px;
}
</STYle>

<br><br><br>
<br><br><br>
<br><br><br>

<center><img style="mix-blend-mode:multiply ;" src="assests/img/login.jpeg" width="70" height="70" alt=""></center>
<!-- <br><br><br><br><br><br> -->
<div class="MAIN" style="justify-content: center;display: flex;">
    <div  class="A" >
        <div>
           <h2>Student</h2> <hr>
            <div>
                <br>
                <a href="student/login.php"><button class="button">Login</button></a><br><br>
                                <a href="student/register.php"><button class="button">Create Account</button></a>
            </div>
        </div>
    </div>
    <div  class="A">
        <div>
            <h2>Teacher</h2> <hr>
            <div>
                <br>
                <br>
                <a href="teacher/login.php"><button class="button">Login</button></a><br>
            </div>
        </div>
    </div>

    <div class="A">
        <div>
           <h2>Admin</h2><hr>
            <div>
                <br><br>
                <a href="admin/login.php"><button class="button">Login</button></a><br><br>
                                <!-- <a href=""><button class="button">Create Account</button></a> -->
            </div>
        </div>
    </div>
</div>


</body>
</html>