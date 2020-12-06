<?php
    include('db_connection.php');
    session_start();
    $dateTime = mysqli_real_escape_string($db, $_POST['mysqlTimeAndDate']);
    $reqType = mysqli_real_escape_string($db, $_POST['reqType']);
    $reqLoc = mysqli_real_escape_string($db, $_POST['reqLoc']);
    $username = $_SESSION['username'];
    $findUIDQuery = "SELECT * FROM users WHERE username='$username'";
    $uidResult = mysqli_query($db, $findUIDQuery);
    $datarow = $uidResult->fetch_array();
    if (mysqli_num_rows($uidResult) == 1) {
        $uid = $datarow['user_id'];
        // $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        // $query = "INSERT INTO users (username, email, password, type, 
        // firstname, lastname, phone) 
        //       VALUES('$username', '$email', '$password', $type, '$firstname', '$lastname', '$phone')";
        $query = "INSERT INTO request(u_id, reqType, reqLoc, dateTime) 
                            VALUES('$uid', '$reqType', '$reqLoc', '$dateTime' )";
        $results = mysqli_query($db, $query);
        echo 1;
    }

?>