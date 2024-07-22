<!DOCTYPE html>

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


if(isset($_POST['contact'])){

$name    = $_POST['name'];
$message    = $_POST['message'];
$mobile   = $_POST['mobile'];



$sql = "INSERT INTO `contact` (`cid`,userName, `message`, `datey`, `mobile`) VALUES (NULL, '$name','$message', CURRENT_TIMESTAMP(), '$mobile');";

if ($conn->query($sql) === TRUE) {
    echo "<br><br><center><h3>Message Submitted</h2></center>";
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
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
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
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .form-group {
    margin-bottom: 20px;
  }
  .form-group label {
    display: block;
    margin-bottom: 5px;
  }
  .form-group input[type="text"],
  .form-group input[type="tel"],
  .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
  }
  .form-group textarea {
    height: 100px;
  }
  .form-group button {
    background-color: #4caf50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
  }
  .form-group button:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Contact Form</h2>
  <form id="contact-form" action="Contact.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="mobile">Mobile Number:</label>
      <input type="tel" id="mobile" name="mobile" required>
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
    </div>
    <div class="form-group">
      <button type="submit" name="contact">Submit</button>
    </div>
  </form>
</div>
<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
}
</script>
</body>
</html>
