<?php
include "../../includes/db_connection.php";

  $sql = "DELETE * FROM request WHERE id = ?";
    if($stmt = $conn ->prepare($sql)){

    }

$conn = OpenCon();
