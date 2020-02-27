<?php
include('db_connection.php');
session_start();
echo "Register";
    //receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $type = 0; //Type of users. 0 is both. 1 is Photographer. 2 is Customer
    $phone = '';
    if($_POST['phonenumber']) {
      $phone = $_POST['phonenumber'];
    }

    if(isset($_POST['isPhotographer']) && $_POST['isPhotographer'] == 'Yes') {
      if(isset($_POST['isCustomer']) && $_POST['isCustomer'] == 'Yes') {
        $type = 0;
      } else {
        $type = 1;
      }
    } elseif(isset($_POST['isCustomer']) && $_POST['isCustomer'] == 'Yes') {
      $type = 2;
    } else {
      array_push($errors, "Need to check at least one type of users");
    }
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      //$password = md5($password_1);//encrypt the password before saving in the database
      echo "No errors";
      $query = "INSERT INTO users (username, email, password, type, 
      firstname, lastname, phone) 
            VALUES('$username', '$email', '$password', $type, '$firstname', '$lastname', '$phone')";
      mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $firstname;
      $_SESSION['success'] = "You are now logged in";
      unset($_SESSION['errors']);
      header('location: profile.php');
    }
    else {
      if (count($errors) > 0) {
            foreach($errors as $error) {
                 echo $error;
             }
         }
    }
  
  ?>