<?php
$hn = 'localhost';
$db = 'starbucks';
$un = 'root';
$pw = '';

$conn = new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM coffee";
$result = $conn->query($query);
if(!$result) die($conn->connect_error);

$row = $result->num_rows;

for ($i = 0;$i< $row;$i++){
    $result->data_seek($i);
    echo  $result->fetch_assoc()['drinksName'] . '<br>';
    $result->data_seek($i);
    echo '<img src = ' . $result->fetch_assoc()['image'] .'>'. '<br>';
    echo '<br>';
}
$result->close();
$conn->close();

