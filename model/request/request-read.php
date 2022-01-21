<?php

$conn = OpenCon();

$sql = "SELECT * FROM request WHERE id = ?";
$result = $conn->query($sql);
if($result->num_rows > 1){
while($row = $result->fetch_assoc()) {

  }
}
$conn->close();
