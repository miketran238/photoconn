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
      // $requestData = $requestResult->fetch_array();
      if (mysqli_num_rows($requestResult) > 0) {
        echo "<table border='1' >
        <tr>
        <td align=center><b>Request Type | </b></td>
        <td align=center><b> Location | </b></td>
        <td align=center><b> Date and Time</b></td></td>
        </tr>";

        while($requestData = mysqli_fetch_row($requestResult))
        {   
            echo "<tr>";
            echo "<td align=center>$requestData[2]</td>";
            echo "<td align=center>$requestData[3]</td>";
            echo "<td align=center>$requestData[4]</td>";
            echo "</tr>";
        }
        echo "</table>";
      } else {
        echo 0;
      }
      
  }
?>