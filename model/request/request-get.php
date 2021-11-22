<?php
include "../../includes/db_connection.php";

$conn = OpenCon();

$sql = "SELECT * FROM request";
$result = $conn->query($sql);
if($result->num_rows > 0){
while($row = $result->fetch_assoc()) {
