<?php
    if(isset($_COOKIE['Name'])){
        $last = $_COOKIE['Name'];
        echo "Welcome back! <br> Your Name is ". $last;
    }
    else{
        echo "Welcome to our site";
    }
?>