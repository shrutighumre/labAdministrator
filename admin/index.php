<!DOCTYPE html>
<html lang="en">
    <?php
    if(!isset($_COOKIE['adminID'])){
        header("Location:../");
    }
    
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assests/css/style.css">

    <style>

    </style>
</head>
<body>
<nav class="bg">
   <center style="width: 100%;">
   <ul class="ul2"  style="width: 100%; justify-content: center;text-align: center;">

           <a href="DashBoard.php"><li>DashBoard</li></a>
           <a href="../Computer.php"><li>Computers</li></a>
           <a href="Complaints.php"><li>Complaints</li></a>
           <a href="Contact.php"><li>Contact US</li></a>
           <a href="profile.php"><li>profile</li></a>
           <a href="logout.php"><li>logout</li></a>

       </ul>
       </center>
   </nav>
   <hr>

</body>
</html>