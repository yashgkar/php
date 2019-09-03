<html>
<head>
    Star Pyramid<br>
</head>
<body>
    <?php
    $d=4;
    for($a=1;$a<=5;$a++)
    {
        for($c=$d;$c>0;$c--)
        {
            echo '&nbsp';
        }
        for($b=1;$b<=$a;$b++)
        {
            echo "*"."&nbsp";
        }
        echo "<br>";
        $d--;
    }
    $e=1;
    for($a=5;$a<=1;$a--)
    {
        for($b=5;$b>=$a;$b--)
        {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
<!--
Author:- Yash Garudkar (B.E. Comp)
College:- SITRC
-->
</html>