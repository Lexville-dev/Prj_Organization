<?php
function OpenCon(){
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "zsG85Nu4P8gW5SC8";
 $db = "prj_organization";

 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 return $conn;
}
