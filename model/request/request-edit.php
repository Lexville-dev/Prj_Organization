<?php include "../../includes/db_connection.php";
      session_start();

if (isset($_POST['edit'])){
    $id = $_POST['edit'];
    $result = $mysqli->query("SELECT * FROM request WHERE id = $id") or die($mysqli->error());

    if (count($result) == 1 ){

        $row = $result -> fetch_array();

        $Title = $_POST['Title'];
        $Priority = $_POST['Priority'];
        $Name = $_POST['Name'];
        $Contact_Number = $_POST['Contact_Number'];
        $Email = $_POST['Email'];
        $Content = $_POST['Content'];

        //  header("location: ../../admin/viewticket.php");

    }

};

if (isset($_POST['updateid'])){
  $id = $_POST['updateid'];

  $Title = $_POST['Title'];
  $Priority = $_POST['Priority'];
  $Name = $_POST['Name'];
  $Contact_Number = $_POST['Contact_Number'];
  $Email = $_POST['Email'];
  $Content = $_POST['Content'];

  $result = $mysqli->query("UPDATE request SET Title='$Title', Name='$Name', Contact_Number='$Contact_Number', Email='$Email', Content='$Content', Priority='$Priority' WHERE id= $id")
     or die ($mysqli->error);


       //header("location: ../../admin/viewticket.php");

};

if (isset($_POST['updateuser'])){
    $id = $_SESSION['id'];

    $Name = $_POST['Name'];
    $Phone_Number = $_POST['Phone_Number'];
    $Email = $_POST['Email'];
    $Admin = isset($_POST['Administrator']) ? 1 : 0;

    $result = $mysqli->query("UPDATE users SET Name='$Name', Phone_Number='$Phone_Number', Email='$Email', Admin='$Admin' WHERE user_id= $id")
       or die ($mysqli->error);
    header("location: ../../admin/viewticket.php");
  };
