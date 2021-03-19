<?php
$hn = 'localhost';
$db = 'classics';
$un = 'root';
$pw = '';

$conn = new mysqli($hn,$un,$pw,$db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM book";
$result = $conn->query($query);
if (!$result) die($conn->error);
