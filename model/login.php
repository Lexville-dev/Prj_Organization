<?php include "../includes/header.php";

if(isset($_POST['Login'])){

    $Name = $_POST['Name'];
    $Password = $_POST['Password'];

    $hash = $mysqli->query("SELECT Password FROM users WHERE Name = $Name");

      if(password_verify($Password, $hash)){
        echo "password is valid";
      } else{
        echo "password is invalid";
      }

}
