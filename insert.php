<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labadministration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

for ($count=1; $count <= 61 ; $count++) { 
    # code...

$sql = "INSERT INTO `computers` ( `computerNumber`, `computerName`, `computerProcesssor`, `computerRam`, `computerHdd`, `computerVersion`, `computerSsd`) VALUES ( 'PC ".$count."', 'LAB1-PC".$count."', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 10 Pro', 'NO');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
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