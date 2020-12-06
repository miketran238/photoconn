<?php

if(isset($_FILES['file']['name'])){
    include('db_connection.php');
    session_start();

   /* Getting file name */
   $filename = $_FILES['file']['name'];

   /* Location */
   $location = "upload/".$_SESSION['username']."/".$filename;
   $imageFileType = strtolower(pathinfo($location,PATHINFO_EXTENSION));

   /* Valid extensions */
   $valid_extensions = array("jpg","jpeg","png");

   $response = 0;
   /* Check file extension */
   if(in_array($imageFileType, $valid_extensions)) {
      /* Upload file */
      if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
         $response = $location;
      }
   }
   $response = "http://localhost/photoconn/".$response;
   $html = '
   <div class="col-sm-12 col-md-4">
   <a class="lightbox" href="'.$response.
   '
   ">
   <img src="'.$response.'" alt="Bridge">
   </a>
    </div>
   ';



   echo $html;
   exit;
}

echo 0;