<HTML>
<head>
    <title>Static Variable</title>
</head>
<body>
<?php
    function decrement(){
        static $static_int1 = 99;
        $static_int1--;
        echo "The decrement value is $static_int1";
    }
    decrement();
?>
</body>
</HTML>