<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assests/css/style.css">
    <title>LabXpert- Login</title>
   
</head>

<body>
    <style>
        /* table *{
padding: 20px 50px;
text-align: center;
        } */

        /* table{
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;
        } */

        div{}
    </style>

<div><center>
   <h1 style="font-size: 60px;">Welcome to  <span style="font-family: cursive;">LabXpert </span></h1>
</center></div>   
<hr>

<div style="width: 100% ;margin: auto; overflow: scroll;">
    <nav style="width: 80% ;margin: auto;">
        
        <center style="display: flex; justify-content: center;"> 
        <a  class="btn" style="margin: 10px;" href="profile.php"><li>Profile</li></a>
        <a  class="btn" style="margin: 10px;" href="complaint.php"><li>Complaints</li></a>
        <a  class="btn" style="margin: 10px;" href="../Computer.php"><li>Computer Details</li></a>
        <a  class="btn"  style="margin: 10px;" href="logout.php"><li>Logout</li></a>
        </center></nav>
</div>

<hr>
<br><br>
<div class="mob-block" style="width: 100%; display: flex; justify-content: space-around; overflow: hidden;">

    <div style="" class="mob-50">
    
    <table style="width: 60%; justify-content: center; text-align: center; margin: auto;margin-top: 10%;">
        <tr>
            <th>Sr.No</th>
            <th>Std</th>

            <th>Timing</th>

        </tr>
        <tr>
            <td>TYBSCIT</td>
            <td>7:00-9:00 am</td>
            <td>7:00-9:00 am</td>
        </tr>
        <tr>
            <td>TYBSCIT</td>
            <td>7:00-9:00 am</td>
            <td>7:00-9:00 am</td>
        </tr>
        <tr>
            <td>TYBSCIT</td>
            <td>7:00-9:00 am</td>
            <td>7:00-9:00 am</td>
        </tr>
        <tr>
            <td>TYBSCIT</td>
            <td>7:00-9:00 am</td>
            <td>7:00-9:00 am</td>
        </tr>
        <tr>
            <td>TYBSCIT</td>
            <td>7:00-9:00 am</td>
            <td>7:00-9:00 am</td>
        </tr>

       


      

    </table>
    </div>


    <div style="overflow: scroll !important; height: 550px !important;" class="mob-50" >
    
       <?php
       
       
       for ($i=0; $i < 2; $i++) { 
        echo "<div style='margin-top: 10px !important;width: 90%; margin: auto; box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px; padding: 10px; background-color: rgb(255, 255, 255) !important; border-radius: 15px;'>";
        echo "       <h3>🔔Notice on ..</h3>";
        echo "       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur perspiciatis repellendus suscipit totam voluptas assumenda reprehenderit nisi incidunt velit accusamus.</p>";
        echo "       </div>";
       }
       ?>

       

               

        
    </div>


</div>
<footer>
    
    <center style="color: wheat !important;">@ all Copyrigth Reserved. 2024-2025</center>
</footer>
</body>

</html>
