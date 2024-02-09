<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assests/css/style.css">

    <style>
      *{
    /* border: 2px solid red !important; */

      }
body{
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
}
.hovering-box:hover{
  transform: scale(1.1);
  transition: 0.5s;
}
.hovering-box:active{
  transform: scale(1.1);
  border: 1px solid purple;
  border-radius:30px;
}
.black{
  color:black;
}
.container{
    margin: auto;
    width: 90%;
    display: flex;
  align-items: center;
  justify-content: center;
    align-items: center;
    display: flex;
    text-align: center;
    justify-self: center;
    vertical-align: middle;
    flex-wrap: wrap;
    /* border: 3px solid black; */
    
}
.c{
    width: 150px;
    /* border: 2px solid black; */
    margin: 10px;
}
    </style>
</head>
<body>

   <hr>
   <center>
   <h2>Computer Details</h2>
   </center>
   <hr>

   <center>
   <div class="container">


<!-- ---------------------------------------------------------------------------------------- -->


<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labadministrator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql2 = "SELECT * from computers";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    


echo "<a class='hovering-box' href='computersDetails.php?computerId=$row[computerID]'>";

   echo " <center>";
   echo " <div class='c'>";
   echo "     <center>";
   echo "     <img src='https://icon-library.com/images/personal-computer-icon/personal-computer-icon-8.jpg' width='70' height='70' alt='comp'>";
   echo "     <hr>";
   echo "     <h4 class='black'>Computer Name :$row[computerName]</h4>";
   echo "     </center>";
   echo " </div>";
   echo " </center>";
echo " </a>";
 
 





  }
} else {
  echo "0 results";
}



?>









<!-- ---------------------------------------------------------------------------------------- -->
   
 


   </div>
   </center>

</body>
</html>