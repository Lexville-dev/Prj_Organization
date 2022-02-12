<?php include "../../includes/db_connection.php";

if (isset($_GET['delete'])){
  $id = $_GET['delete'];
    $mysqli->query("DELETE FROM request WHERE id=$id") or die($mysqli->error);
}

 header("location: ../../admin/viewticket.php");
