<?php
ob_start();
include("config.php");
session_start();
unset($_SESSION["mysession"]);
header('location:index.php');
session_destroy();
?>
