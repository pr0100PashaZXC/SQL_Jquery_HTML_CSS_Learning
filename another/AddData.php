<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die("Fatal error");

$query = "INSERT INTO cats VALUES(NULL, 'Lion', 'Leo', 4)";
$result = $conn->query($query);
if (!$result) die ("Сбой");
?>