<?php
include('db_connection.php');
session_start();
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['name']);
$db->close();
header("location: index.php");
?>