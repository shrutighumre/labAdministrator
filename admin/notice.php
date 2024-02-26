<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notice Form</title>

<?php
    include("../db/db.php");
    if(isset($_COOKIE['adminID'])){
    }else{
        header("Location:../");
    
    }


if(isset($_POST['submit'])){

    $noticeHead    = $_POST['noticeHead'];
    $noticeBody    = $_POST['noticeBody'];
    
    
    
    $sql = "INSERT INTO notice (nid, heading, body, timey) VALUES (NULL,' $noticeHead', '$noticeBody' ,current_timestamp);";
    
    if ($conn->query($sql) === TRUE) {
        echo "<br><br><center><h3>Notice Added</h2></center>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }


?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    form
    {
        padding: 20px;

    }
    .container {
        /* max-width: 500px; */
        padding: 20px;
        width: 60%;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 10px;
    }
    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        resize: vertical;
    }
    .btn {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }
    .btn:hover {
        background-color: #0056b3;
    }
    .box{
        width: 200px;
    height: 400px;
    background-color: #f0f0f0;
    border: 2px solid #ccc;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    padding: 20px;
    text-align: center;
    overflow: hidden;
    text-align: left;
    margin:10px;
    }
</style>
</head>
<body>

<div class="container">
    <form id="noticeForm" method="post" action=""notice.php>
        <div class="form-group">
            <label for="noticeHead">Notice Head:</label>
            <input type="text" id="noticeHead" name="noticeHead" required>
        </div>
        <div class="form-group">
            <label for="noticeBody">Notice Body:</label>
            <textarea id="noticeBody" name="noticeBody" rows="5" required></textarea>
        </div>
        <button type="submit"  name="submit" class="btn">Submit</button>
    </form>
</div>

<hr>
<div class="main" style="display: flex; flex-wrap: wrap; justify-content: center;">
<?php 
$q1 = "select * from notice order by nid desc ";

$exe1 = $conn->query($q1);

if($exe1->num_rows>0){
    while ($row = $exe1->fetch_assoc()) {
       echo        " <div class='box' >";
       echo        " <div><h4>$row[heading]</h4></div><hr><div><p>$row[body]</p></div>";
       echo        " </div>";
    }
}else{
    echo "<h4 style='color:red'>No Student FOund !!! </h4>";
}


?>




    

</div>
</body>
</html>
