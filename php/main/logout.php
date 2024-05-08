<?php

if(isset($_COOKIE['userid'])) {
    setcookie("userid", "", time() - 3600, "/");
} 

header("Location: login.php");

?>