<?php
  include('db_connection.php');
  session_start();
  $_SESSION['errors'] = array();
  
  //Register functionality
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $phone = '';
  if ( isset($_POST['phonenumber'])) {
    $phone = $_POST['phonenumber'];
  }
  $type = 0; //Type of users. 0 is both. 1 is Photographer. 2 is Customer


  // if (isset($_POST['isPhotographer']) && $_POST['isPhotographer'] == 'Yes') {
  //   if (isset($_POST['isCustomer']) && $_POST['isCustomer'] == 'Yes') {
  //     $type = 0; #both photographers and customers
  //   } else {
  //     $type = 1; #photographers only
  //   }
  // } elseif (isset($_POST['isCustomer']) && $_POST['isCustomer'] == 'Yes') {
  //   $type = 2; #customers only
  // }

  if ($_POST['isPhotographer'] === 'true') {
      $type = 1; #photographers only
  } elseif ($_POST['isCustomer'] === 'true') {
    $type = 2; #customers only
  }
  error_log($_POST['isPhotographer'],0);
  error_log($_POST['isCustomer'],0);

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      #array_push($_SESSION['errors'], "Username already exists");
      #echo 3;
    }

    if ($user['email'] === $email) {
      #array_push($_SESSION['errors'], "Email already exists");
      #echo 4;
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($_SESSION['errors']) == 0) {
    //$password = md5($password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO users (username, email, password, type, 
      firstname, lastname, phone) 
            VALUES('$username', '$email', '$password', $type, '$firstname', '$lastname', '$phone')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $firstname;
    #$_SESSION['success'] = "You are now logged in";
    unset($_SESSION['errors']);
    echo 1; #No errors
  } 
  else {
    echo 0; 
  }
?>