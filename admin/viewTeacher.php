<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Student</title>

<?php
 
    include("../db/db.php");
    if(isset($_COOKIE['adminID'])){
    }else{
        header("Location:../");
    
    }




    ?>

<style>
    /* Basic reset */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        text-align: center !important;

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
    }
</style>
</head>
<body>
    <style>
        .btn{
    padding: 8px 20px !important;

}
    </style>
<center><a href="index.php" class='btn'><button class='btn'>back</button></a></center>
<table>
    <thead>
        <tr style="background-color: lightgreen;">
            <th>User ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Contact NO</th>
            <th>Email</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>


    <?php
    
    $q1 = "select * from teachers";

    $exe1 = $conn->query($q1);

    if($exe1->num_rows>0){
        while ($row = $exe1->fetch_assoc()) {
            echo "<tr>";
            echo "           <td>$row[teacherID]</td>";
            echo "           <td>$row[teacherName]</td>";
            echo "           <td>$row[teacherUniqueID]</td>";
            echo "           <td>$row[teacherContactNo]</td>";
            echo "           <td>$row[Email]</td>";
            echo "           <td><a href='deleteTeacher.php?id=$row[teacherID]'><button class='delete-btn'>Delete</button></a></td>";
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
