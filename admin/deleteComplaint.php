<?php
    include("../db/db.php");
    if(isset($_COOKIE['adminID'])){
    }else{
        header("Location:../");
    
    }

include("../db/db.php");

if(isset($_GET["id"])){
    $q2 = "delete from complaint where cid='$_GET[id]'";

if($conn->query($q2)){
    echo "Delete Succesfully";
header("Location:Complaints.php");
}
else{
    echo "Eroor Occured";
}

}

?>