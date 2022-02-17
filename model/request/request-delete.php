<?php include "../../includes/db_connection.php";

if (isset($_POST['delete'])){
  $id = $_POST['delete'];
    $mysqli->query("DELETE FROM request WHERE id=$id") or die($mysqli->error);
} else{
  echo "blah";
}

    header("location: ../../admin/viewticket.php");
