<?php
header('Content-Type: application/json');

$host = "localhost";
$db_user = "root";
$db_pass = null;
$db_name = "news";

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_error){
  die("Connection failed: ". $mysqli->connect_error);
}


