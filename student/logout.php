<?php

unset($_COOKIE['userID']);
setcookie('userID', '', -1, '/');
header("LOcation:../");

?>