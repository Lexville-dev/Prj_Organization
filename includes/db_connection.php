<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "zsG85Nu4P8gW5SC8";
 $db = "prj_organization";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

 $username = "root";
 $password = "zsG85Nu4P8gW5SC8";
 $database = "prj_organization";
 $mysqli = new mysqli("localhost", $username, $password, $database);

?>
