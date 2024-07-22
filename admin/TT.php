<!DOCTYPE html>
<html lang="en">
<head>
<?php
 
 include("../db/db.php");
 

 if(isset($_POST['add'])){

    $standard    = $_POST['standard'];
    $subject    = $_POST['subject'];
    $division    = $_POST['division'];
    $start    = $_POST['start'];
    $end = $_POST['end'];
    $dayy = $_POST['dayy'];


    
    
    
    $sql = "INSERT INTO `tt` (`tid`, `subject`, `std`, `div`, `start`, `end`, `timey`,dayy) VALUES (NULL, '$subject', '$standard', '$division', '$start', '$end', CURRENT_TIMESTAMP(),'$dayy');";
    
    if ($conn->query($sql) === TRUE) {
        echo "<br><br><center><h3>TT Added</h2></center>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    // if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    
 
 
 
 
 
 ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meeting Scheduler Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
  }
  h2 {
    text-align: center;
  }
  label {
    display: block;
    margin-bottom: 5px;
  }
  select, input[type="time"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }

  tr{
    margin:20px !important;
  }
    /* Styles for table */
    table {
        width: 100%;
        border-collapse: collapse;
    }
     * {
        
        text-align: center;
        justify-content: center;
}
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    /* Hide delete button on smaller screens */
    .delete-btn ,  {
        /* display: none; */
        padding: 10px;
        background-color: rgb(248, 78, 78);
        color: black;
    }
.btn{
    padding: 8px 20px !important;

}
    /* Responsive styles */
    @media screen and (max-width: 600px) {
        /* Hide the table header */
        thead {
            display: none;
        }

        /* Show delete button and stack table cells */
        tr {
            display: block;
            margin-bottom: 20px;
        }

        td {
            display: block;
            text-align: center;
        }

        /* Show delete button on smaller screens */
        .delete-btn {
            /* display: inline-block; */
            /* margin-top: 5px; */
            color:black;
        }
</style>
</head>
<body>

<h2>Meeting Scheduler Form</h2>

<form id="meetingForm" action="TT.php" method="POST">

  <label for="standardDropdown">Standard:</label>
  <select id="standardDropdown" name="standard">
    <option value="select">Select Standard</option>
    <option value="FYBSCIT">FYBSCIT</option>
    <option value="SYBSCIT">SYBSCIT</option>
    <option value="TYBSCIT">TYBSCIT</option>
    <!-- <option value="1">FY</option>
    <option value="2">FY</option>
    <option value="3">FY</option>
    <option value="1">FY</option>
    <option value="2">FY</option>
    <option value="3">FY</option>
    <option value="1">FY</option>
    <option value="2">FY</option>
    <option value="3">FY</option> -->
    <!-- Add more options as needed -->
  </select>

  <label for="divisionDropdown">Division:</label>
  <select id="divisionDropdown" name="division">
    <option value="select">Select Division</option>
    <option value="A">Division A</option>
    <option value="B">Division B</option>
    <option value="C">Division C</option>
    <!-- Add more options as needed -->
  </select>

  <label for="subjectDropdown">Subject:</label>
  <select id="subjectDropdown" name="subject">
    <option value="select">Select Subject</option>
    <option value="SPM">SPM</option>
    <option value="AI">AI</option>
    <option value="English">English</option>
    <!-- Add more options as needed -->
  </select>

  <label for="timeSlotStart"> From Time Slot:</label>
  <input type="time" id="timeSlotStart" name="start"> 

  <label for="timeSlotStart"> To Time Slot:</label>
  <input type="time" id="timeSlotStart" name="end"> 

  <label for="date"> lec Date : </label>
  <input type="date" id="timeSlotStart" name="dayy"> 

  <input type="submit" name="add" value="Submit">
</form>



<table style="width:50% !important; margin:auto;">
        <thead>
            <tr>
                <th>Standard</th>
                <th>Subject</th>
                <th>Div</th>
                <th>From</th>
                <th>To</th>
                <th>day</th>
                



            </tr>
        </thead>
        <tbody>
        <?php
    
    $q1 = "select * , date(timey)  as t , time(start) as start2 from tt";

    $exe1 = $conn->query($q1);

    if($exe1->num_rows>0){
        while ($row = $exe1->fetch_assoc()) {
           
            echo "           <td>$row[std]</td>";
            echo "           <td>$row[subject]</td>";
            echo "           <td>$row[div]</td>";
            echo "           <td>$row[start2]</td>";
            echo "           <td>$row[end]</td>";
            echo "           <td>$row[dayy]</td>";
            // echo "           <td>$row[t]</td>";

            echo"       </tr>";
        }
    }else{
        echo "<h4 style='color:red'><center>No Today TimeTable FOund !!!</center> </h4>";
    }
    
    
    
    ?>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</body>
</html>
