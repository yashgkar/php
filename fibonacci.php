<html>
<head>
    Fibonacci Series<br>
</head>
<body>
    <?php
    $a=0;
    $b=1;

    for($d=1;$d<=10;$d++)
    {
        $c=$a+$b;
        echo $c."<br>";
        $a=$b;
        $b=$c;
    }    
    ?>

</body>
<!--
Author:- Yash Garudkar (B.E. Comp)
College:- SITRC
-->
</html>