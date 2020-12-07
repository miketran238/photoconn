<?php
  include('../db_connection.php');
  session_start();
  $username = $_SESSION['username'];
  $findUIDQuery = "SELECT * FROM users WHERE username='$username'";
  $uidResult = mysqli_query($db, $findUIDQuery);
  #error_log("$findUIDQuery",0);
  #error_log("$uidResult",0);
  #echo $uidResult;
  $datarow = $uidResult->fetch_array();
  if (mysqli_num_rows($uidResult) == 1) {
      $uid = $datarow['user_id'];
      $requestQuery = "SELECT * FROM request WHERE u_id='$uid'";
      $requestResult = mysqli_query($db, $requestQuery);                         
      $requestData = $requestResult->fetch_array();
      if (mysqli_num_rows($requestResult) > 0) {
        
        $req_id = $requestData['request_id'];
        $bidQuery = "SELECT * FROM bids WHERE req_id='$req_id'";
        $bidResult = mysqli_query($db, $bidQuery);                         
        #$bidData = $bidResult->fetch_array();
        if (mysqli_num_rows($bidResult) > 0) {
            echo "<table border='1' >
                <tr>
                <td align=center><b>Name </b></td>
                <td align=center><b> Rate (per hr) </b></td>
                <td align=center><b> Contact </b></td>
                </tr>";
            while($bidData = mysqli_fetch_row($bidResult))
            {   
                $photographerId = $bidData[1];
                $rate = $bidData[6];
                $photographerQuery= "SELECT * FROM users WHERE user_id='$photographerId'";
                $photographerResult = mysqli_query($db, $photographerQuery);
                #echo $photographerQuery;
                $photographerData = $photographerResult->fetch_array();  
                echo "<tr>";
                echo "<td align=center>$photographerData[3] $photographerData[4] </td>";
                echo "<td align=center>$ $rate </td>";
                echo "<td align=center>$photographerData[7]";
                echo "<td align=center><a href=''> Profile </a></td>";
                echo "</tr>";
            }
        } 
        else {
            echo 0;
        }
    
      }
      
  }
?>