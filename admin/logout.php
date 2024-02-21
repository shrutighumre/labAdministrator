<?php

unset($_COOKIE['teacherID']);
setcookie('teacherID', '', -1, '/');
header("LOcation:../");

?>