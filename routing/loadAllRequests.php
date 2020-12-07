<?php
  include('../db_connection.php');
  session_start();
      $requestQuery = "SELECT * FROM request";
      $requestResult = mysqli_query($db, $requestQuery);                         
      $requestData = $requestResult->fetch_array();
      if (mysqli_num_rows($requestResult) > 0) {
        echo "<table border='1'>
        <tr>
        <td align=center><b>Request Type  </b></td>
        <td align=center><b> Location  </b></td>
        <td align=center><b> Date and Time</b></td></td>
        </tr>";

        while($data = mysqli_fetch_row($requestResult))
        {   
            echo "<tr>";
            echo "<td align=center>$data[2]</td>";
            echo "<td align=center>$data[3]</td>";
            echo "<td align=center>$data[4]</td>";
            echo "
            <td align=center><button class='chooseBid' value='$data[0]'>Choose this Request</button></td>";
            echo "</tr>";
        }
        // echo json_encode($requestData);
      } else {
        echo 0;
      }
      
  
  

?>