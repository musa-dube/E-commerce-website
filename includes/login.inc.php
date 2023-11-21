<?php
include "db.inc.php";

session_start();

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST["email"];
  $password = $_POST["customerPassword"];

  $verify = "SELECT * FROM customers WHERE email='$email' AND customerPassword='$password'";
  $outcome = mysqli_query($pdo, $verify);

// check if there is a row is returned
  if (mysqli_num_rows($outcome) > 0) {
    $_SESSION['email'] = true;

    header("Location: index.php");
// redirect to home page
   
    exit();
  } else {
    $error = "Incorrect email or password";
    echo "Incorrect password or email, please try again";
  }
  mysqli_close($pdo);
}
?>
