<?php include "../../includes/db_connection.php";

if (isset($_POST['submit'])){
      $Title = $_POST['Title'];
      $Priority = $_POST['Priority'];
      $Name = $_POST['Name'];
      $Contact_Number = $_POST['Contact_Number'];
      $Email = $_POST['Email'];
      $Content = $_POST['Content'];

      $mysqli->query("INSERT INTO request (Title, Priority, Name, Contact_Number, Email, Content) VALUES('$Title', '$Priority', '$Name', '$Contact_Number', '$Email', '$Content')") or
          die($mysqli->error);

      header("location: ../../views/dashboard.php");
}

if (isset($_POST['AddUser'])){

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $RepeatPassword = $_POST['RepeatPassword'];


    if($Password === $RepeatPassword){

            $Password = password_hash($Password, PASSWORD_BCRYPT);

      $mysqli->query("INSERT INTO users (Name, Email_Address, Password) VALUES('$Name', '$Email', '$Password')") or
          die($mysqli->error);
                header("location: ../../views/dashboard.php");
        }
  else{
    echo "The passwords do not match, please try again";
  }
}
