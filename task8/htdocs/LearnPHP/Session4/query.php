<?php
require_once 'login.php';
$conn = new mysqli($hn,$un,$pw,$db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM book";
$result = $conn->query($query);
if (!$result) die($conn->connect_error);

$rows = $result->num_rows;

for($j = 0; $j <$rows;$j++){
    $result->data_seek($j);
    echo 'Author: ' . $result->fetch_assoc()['author'] . '<br>';
    $result->data_seek($j);
    echo 'Title: ' . $result->fetch_assoc()['title'] . '<br>';
    $result->data_seek($j);
    echo 'Category: ' . $result->fetch_assoc()['type'] . '<br>';
    $result->data_seek($j);
    echo 'Year: '. $result->fetch_assoc()['year'] . '<br>';
    $result->data_seek($j);
    echo 'ISBN: ' . $result->fetch_assoc()['isbn'] . '<br>';
}
$result->close();
$conn->close();

