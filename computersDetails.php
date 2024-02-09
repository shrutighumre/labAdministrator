<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labadministrator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_GET['computerId'];

$sql2 = "SELECT * FROM `computers` WHERE computerID=$id;";
$result = $conn->query($sql2);





  // output data of each row
$row = $result->fetch_assoc();




 
 





  


// echo print_r($row);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
body{
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
}
a{
    color: white;
}
a:hover{
    color: white;
text-decoration: none;
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
    /* */
    margin: 10px;
}
    </style>


<style>
    .remove-blue{
        mix-blend-mode:overlay;
}
    /* Define the table style */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    /* Define the table row style */
    tr {
      display: inline-block;
      width: 30%;
      margin-right: 1%;
      background-color: #f2f2f2;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 2px 2px 5px #888888;
    }

    /* Define the table cell style */
    td {
      padding: 8px;
      text-align: center;
    }
    .main div p {
font-size: 20px;
margin: 5px;
    }

    .main{
        background-color: whitesmoke;
        border-radius: 20px;
    }
  </style>
</head>
<body>

   <hr>
   <center>
   <h2>Computer <?php echo "$row[computerName]" ?> DETAIL VIEW</h2>
   </center>
   <hr>




<!-- ---------------------------------------------------------------------------------------- -->










<!-- ---------------------------------------------------------------------------------------- -->
<br>
<br>
<br>

<div style="display: flex ; width: 90%; margin: auto; ">
<div class="main shadow2" style="width: 50%; margin: 5px;">


<!-- ----------------------------------------------------------------------------------------------- -->

<div style="display: flex; width: 100%; border-bottom: 1px solid black;">
<div style="width: 50%; text-align: center;"><b><p>Computer ID </p></b></div>
<div style="width: 50%; text-align: center;"><p><?php echo "$row[computerID]" ?></p></div>
</div>
<!-- ----------------------------------------------------------------------------------------------- -->
<div style="display: flex; width: 100%;border-bottom: 1px solid black;">
    <div style="width: 50%; text-align: center;"><b><p>Computer Name</p></b></div>
    <div style="width: 50%; text-align: center;"><p><?php echo "$row[computerName]"; ?></p></div>
    </div>
    <!-- ----------------------------------------------------------------------------------------------- -->
    <div style="display: flex; width: 100%;border-bottom: 1px solid black;">
        <div style="width: 50%; text-align: center;"><b><p>Computer Verion</p></b></div>
        <div style="width: 50%; text-align: center;"><p><?php echo "$row[computerVersion]" ?></p></div>
        </div>
        <!-- ----------------------------------------------------------------------------------------------- -->
        <div style="display: flex; width: 100%;border-bottom: 1px solid black;">
            <div style="width: 50%; text-align: center;"><b><p>Computer Ram</p></b></div>
            <div style="width: 50%; text-align: center;"><p><?php echo "$row[computerRam]" ?></p></div>
            </div>
            <!-- ----------------------------------------------------------------------------------------------- -->
            <div style="display: flex; width: 100%;border-bottom: 1px solid black;">
                <div style="width: 50%; text-align: center;"><b><p>Computer HDD</p></b></div>
                <div style="width: 50%; text-align: center;"><p><?php echo "$row[computerHdd]" ?></p></div>
                </div>
                <!-- ----------------------------------------------------------------------------------------------- -->
                <div style="display: flex; width: 100%;border-bottom: 1px solid black;">
                    <div style="width: 50%; text-align: center;"><b><p>Computer SSD</p></b></div>
                    <div style="width: 50%; text-align: center;"><p><?php echo "$row[computerSsd]" ?></p></div>
                    </div>
                    <!-- ----------------------------------------------------------------------------------------------- -->
                    <div style="display: flex; width: 100%;">
                        <div style="width: 50%; text-align: center;"><b><p>Computer 
                            processor
                        </p></b></div>
                        <div style="width: 50%; text-align: center;"><p><?php echo "$row[computerProcessor]" ?></p></div>
                        </div>
                        <!-- ----------------------------------------------------------------------------------------------- -->
                                                                                    


</div>

<div style="margin: 10px;">

<center>
<img class="" src="https://keys.direct/cdn/shop/articles/how-to-set-gif-as-wallpaper-windows-11-738426.jpg?v=1675627506" alt="">
</center>
</div>


</div>
<br>
<br>

<br><br>

<br><br>



<br><br>

<br>
<br>
<br>
<hr>

</body>
</html>