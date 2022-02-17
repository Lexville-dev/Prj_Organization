<?php include "../../includes/db_connection.php";

if (isset($_POST['read'])){
  $id = $_POST['read'];
    $mysqli->query("SELECT FROM request WHERE id = $id ") or die($mysqli->error);
} else{
  echo "blah";
}
