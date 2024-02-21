<!DOCTYPE html>
<html lang="en">
<head>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labadministrator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


    # code...


if(isset($_POST['submit'])){

$name    = $_POST['name'];
$subject    = $_POST['subject'];
$complaint    = $_POST['complaint'];



$sql = "INSERT INTO complaint (cid, userID, userType, subject, complaint, timey,uname) VALUES (NULL, '$_COOKIE[teacherID]', 'teacher', '$subject','$complaint', current_timestamp,'$name');";

if ($conn->query($sql) === TRUE) {
    echo "<br><br><center><h3>Complaint Submitted</h2></center>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();





?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Complaint Form</h2>
        <form action="complaint.php" method="POST" >
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="subject">Subject:</label><br>
            <input type="text" id="subject" name="subject" required><br>

            <label for="complaint">Complaint:</label><br>
            <textarea id="complaint" name="complaint" rows="4" required></textarea><br>

            <!-- Hidden input for student value -->
            <!-- <input type="hidden" id="userType" name="user" value="student"> -->
            <!-- <input type="hidden" id="userID" name="id" value="<?php echo $_COOKIE['userID'] ?>"> -->


            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

<script>

    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
</script>
</html>
