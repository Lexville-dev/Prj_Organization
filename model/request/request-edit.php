<?php include "../../includes/db_connection.php";

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
};

  header("location: ../../admin/viewticket.php");
