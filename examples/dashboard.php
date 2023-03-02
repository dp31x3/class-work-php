<?php

print_r($_POST);

// if ($_GET['email'] && $_GET['password']is in our database) {
//     does ($_GET['password'] match database password)
// {log them in;}
// }


// if ($_POST['user'] && $_POST['Password']) {
// ($_POST['Password']);
// }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $password = $_POST['Password'];

    if (!empty($user) && !empty($password)) {
      echo "Welcome $user";
    } else {
      echo "Please enter both your username/email and password.";
    }
  }
?>
