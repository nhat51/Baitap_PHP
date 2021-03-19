<?php
    function e(){
        echo "This is e() ";
        echo '<br>';
    }
    function f(){
        echo  "This is f()";
        echo '<br>';
        return e();
    }
    function g(){
        echo "This is g()" ;
        echo '<br>';
        return f();
    }
    g();
    echo  "********\n";
    g()();
    echo  "*********\n";
    g()()();
?>
