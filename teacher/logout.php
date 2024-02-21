<?php

unset($_COOKIE['adminID']);
setcookie('adminID', '', -1, '/');
header("LOcation:../");

?>