<?php
    include('db_connection.php');
    session_start();
    $username = $_SESSION['username'];
    $user_check_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user && $user["type"]){
      echo $user["type"];
    }
    else {
        echo -1;
    }
?>