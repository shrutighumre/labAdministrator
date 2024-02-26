<!DOCTYPE html>
<?php
 
include("../db/db.php");






?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with HTML and CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        caption {
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        button{
            padding: 10px;
        background-color: rgb(66, 157, 255);
        color: black;
        }
        button:hover{
            padding: 10px;
        background-color: rgb(248, 78, 78);
        color: black;
        }

        .t{
            background-color: rgb(251, 141, 141) !important;
            border: 2px solid red;
            /* display:none; */
        }
    </style>
</head>
<body>
    <br><br>
    <style>
        .btn{
    padding: 8px 20px !important;

}
    </style>
<center><a href="index.php" class='btn'><button class='btn'>back</button></a></center>
    <table style="width:90% !important; margin:auto;">
        <caption>Complaints</caption>
        <thead>
            <tr>
                <th>CID</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Person</th>
                <th>Time</th>

                <th>Method</th>

            </tr>
        </thead>
        <tbody>
        <?php
    
    $q1 = "select * from complaint";

    $exe1 = $conn->query($q1);

    if($exe1->num_rows>0){
        while ($row = $exe1->fetch_assoc()) {
            if($row["userType"]=="teacher")
            {

                echo "<tr class='t'>";
            }
            else{
                echo "<tr class=''>";

            }
            echo "           <td>$row[cid]</td>";
            echo "           <td>$row[uname]</td>";
            echo "           <td>$row[subject]</td>";
            echo "           <td>$row[complaint]</td>";
            echo "           <td>$row[userType]</td>";
            echo "           <td>$row[timey]</td>";
            echo "           <td><a href='deleteComplaint.php?id=$row[cid]'><button class='delete-btn'>Solved</button></a></td>";
            echo"       </tr>";
        }
    }else{
        echo "<h4 style='color:red'>No Student FOund !!! </h4>";
    }
    
    
    
    ?>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</body>
</html>
