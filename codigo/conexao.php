<?php

$host   = "localhost";
$user   = "root";
$pass   = "1234";
$dbname = "aa";
$port   = 3306;

$conn   = new PDO("mysql:host=$host;port=$port;dbname=".$dbname,$user,$pass);

?>