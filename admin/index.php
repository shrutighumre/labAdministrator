<!DOCTYPE html>
<html lang="en">
    <?php
    if(!isset($_COOKIE['adminID'])){
        header("Location:../");
    }
    include("../db/db.php");
    
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assests/css/style.css">

    <style>
        *{

            /* border: 1px solid red; */
        }
table *{
    text-align: center;
    /* justify-content:center ; */
    margin: auto;
}
table{
    width: 80%;
    margin: auto;
}

#body2{
    width: 100%;
}
    </style>
</head>
<body>
<!-- <nav class="bg">
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
   </nav> -->
   <!-- <hr>
 -->
 <center>
    <h2>Welcom to Admin panel </h2>
 </center>
<hr>
 <div id="main">
    <div id="menu">
<ul>
<a href="index.php"><li><img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/dashboard-127-464844.png" width="25" height="25" alt="">DashBoard</li></a>
<a href="profile.php"><li><img src="https://th.bing.com/th/id/OIP.ncOCV5LVCL8j70Edjgyn6QHaGy?rs=1&pid=ImgDetMain" width="25" height="25" alt="">Profile</li></a>
           <a href="../Computer.php"><li><img src="https://static.vecteezy.com/system/resources/previews/000/653/403/original/vector-computer-icon-image.jpg" width="25" height="25" alt="">Computers</li></a>
           <a href="Complaints.php"><li><img src="https://thumbs.dreamstime.com/b/complaint-rubber-stamp-grunge-design-dust-scratches-effects-can-be-easily-removed-clean-crisp-look-color-changed-110067304.jpg" width="25" height="25" alt="">Complaints</li></a>
           <a href="Contactus.php"><li><img src="https://www.clipartmax.com/png/middle/92-926082_contact-us-contact-us-icon-png.png" width="25" height="25" alt="">Contact US</li></a>
           <a href="notice.php"><li><img src="https://static.vecteezy.com/system/resources/previews/000/375/313/original/notice-pin-vector-icon.jpg" width="25" height="25" alt="">Notice</li></a>
           <a href="Contact.php"><li><img src="https://static.vecteezy.com/system/resources/previews/019/823/771/non_2x/timetable-icon-vector.jpg" width="25" height="25" alt="">TimeTable</li></a>
           <a href="viewStudent.php"><li><img src="https://th.bing.com/th/id/OIP.qgZzn3MB-dcUJM6Q1cZELQHaHa?rs=1&pid=ImgDetMain" width="25" height="25" alt="">View Student</li></a>

           <a href="logout.php"><li><img src="https://static.vecteezy.com/system/resources/previews/000/422/984/original/logout-icon-vector-illustration.jpg" width="25" height="25" alt="">logout</li></a>
</ul>
    </div>
    <div id="body2">


        <br><br><br>
        <center>
            <h3>Overall Count</h3>
        </center>
<table>

<?php
$totalTeacher = "select count(teacherID) as teacher from teachers ";
$res1 = $conn->query($totalTeacher);
$row1 = $res1->fetch_assoc();


$totalstudent = "select count(userID) as user from user ";
$res2 = $conn->query($totalstudent);
$row2 = $res2->fetch_assoc();

$totalComp = "select count(computerID) as comp from computers ";
$res3 = $conn->query($totalComp);
$row3 = $res3->fetch_assoc();


$totalComplaint = "select count(cid) as complaint from complaint ";
$res4 = $conn->query($totalComplaint);
$row4 = $res4->fetch_assoc();

// ------------------------------------------------------------------------------------------
$ktotalTeacher = "select count(teacherID) as teacher from teachers where DATE(timey)=CURDATE() ";
$kres1 = $conn->query($ktotalTeacher);
$krow1 = $kres1->fetch_assoc();


$ktotalstudent = "select count(userID) as user from user where DATE(times)=CURDATE() ";
$kres2 = $conn->query($ktotalstudent);
$krow2 = $kres2->fetch_assoc();


$ktotalCont = "select count(cid) as cont from contact where DATE(datey)=CURDATE() ";
$kres3 = $conn->query($ktotalCont);
$krow3 = $kres3->fetch_assoc();


$ktotalComplaint = "select count(cid) as complaint from complaint where DATE(timey)=CURDATE() ";
$kres4 = $conn->query($ktotalComplaint);
$krow4 = $kres4->fetch_assoc();
?>


    
  <tr>
    <th>Total Student</th>
    <th>Total Teacher</th>
    <th>Total Computer</th>
    <th>Total Complaints</th>
    <th>Total Contact us </th>
    <th>Total Notice</th>
    <th>Total TimeTable</th>




</tr>
<tr>
<td><?php echo $row2["user"] ?></td>
    <td><?php echo $row1["teacher"] ?></td>
    <td><?php echo $row3["comp"] ?></td>
    <td><?php echo $row4["complaint"] ?></td>

    <td>1</td>
    <td>1</td>
    <td>1</td>


</tr>

</table>


<br><br>
<center>
    <h3>Overall Count Today</h3>
</center>
<br>

<table>

    <tr>
      <th>Total Student</th>
      <th>Total Teacher</th>
      <th>Total Contact us </th>
      <th>Total Complaints</th>
      <th>Total Notice</th>
      <th>Total TimeTable</th>
  
  
  
  
  </tr>
  <tr>
    <td><?php if(isset($krow1["teacher"])){echo $krow1["teacher"];} else{echo "0";} ?></td>
    <td><?php if(isset($krow2["user"])){echo $krow2["user"];} else{echo "0";} ?></td>
    <td><?php if(isset($krow3["cont"])){echo $krow3["cont"];} else{echo "0";} ?></td>
    <td><?php if(isset($krow4["complaint"])){echo $krow4["complaint"];} else{echo "0";} ?></td>
    <td><?php if(isset($krow5["teacher"])){echo $krow5["teacher"];} else{echo "0";} ?></td>
    <td><?php if(isset($krow6["teacher"])){echo $krow6["teacher"];} else{echo "0";} ?></td>


  
  
  </tr>
  
  </table>

    </div>
 </div>
</body>
</html>