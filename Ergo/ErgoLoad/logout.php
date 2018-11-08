<?php

//Logout
session_start();
session_destroy();

//Header(login.php)
header('Location:login.php');
?>