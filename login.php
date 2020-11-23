<?php
    include('db_connection.php');
    session_start();
    $_SESSION['errors'] = array();
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    error_log("$username",0);
    error_log("$password",0);
    //$password = md5($password);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    $datarow = $results->fetch_array();
    if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $datarow['firstname'];
        $_SESSION['success'] = "You are now logged in";
        unset($_SESSION['errors']);
        echo 1;
    } else {
        array_push($_SESSION['errors'], "Wrong username/password combination");
        echo 0;
    }

?>