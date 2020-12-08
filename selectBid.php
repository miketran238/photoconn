<?php
  include('db_connection.php');
  session_start();
  $username = $_SESSION['username'];
  $req_id = mysqli_real_escape_string($db, $_POST['req_id']);
  $rate = mysqli_real_escape_string($db, $_POST['rate']);

  $findUIDQuery = "SELECT * FROM users WHERE username='$username'";
  $uidResult = mysqli_query($db, $findUIDQuery);
  #error_log("$findUIDQuery",0);
  #error_log("$uidResult",0);
  #echo $uidResult;
  $datarow = $uidResult->fetch_array();
  if (mysqli_num_rows($uidResult) == 1) {
      $uid = $datarow['user_id'];
      $query = "INSERT INTO bids (c_id, req_id, rate) 
            VALUES('$uid', '$req_id', '$rate')";
    mysqli_query($db, $query);
    error_log($query);
     echo 1;
  }
?>