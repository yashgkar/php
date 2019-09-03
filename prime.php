<html>
<head>
    PHP For checking Prime Number or not<br>
    <br>
    <br>
</head>
<body>
    <?php
    $count=0;
    $n=5;
    for($i=2;$i<$n;$i++)
    {
        if($n%$i==0)
        {
            $count++;
            echo "<br>";
        }
    }
    if($count==0)
    {
        echo "Prime Number!";
    }
    else
    {
        echo "Not a prime number.";
    }
    ?>
</body>
</html>