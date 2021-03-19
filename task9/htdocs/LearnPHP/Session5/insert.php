<?php
    require_once 'login.php';
    $conn = new mysqli($hn,$un,$pw,$db);
     if($conn->connect_error) die($conn->connect_error);

     $query = "INSERT INTO coffee VALUES (666,'milo',NULL)";
     $result = $conn->query($query);
     if (!$result) die("Database access failed: " . $conn->error);

     echo "The Insert ID was: " .$conn->insert_id;

