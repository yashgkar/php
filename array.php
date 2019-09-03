<html>
<head>
 <h1>Array Manipulation</h1>
</head>
<body>
    <?php
        $a=array ("Yash G","Yash K");
        echo "Name: ".$a[0]."<br>Name: ".$a[1]."<br>";
        $b=array("nsk"=>"Nashik","mum"=>"Mumbai");
        echo "Hello ".$a[0]. " and ".$a[1]. " to the city of ".$b["nsk"].".";
        echo "<br> Available Cities :<br>";
        foreach($b as $x => $x_val)
        {
            echo $x_val."<br>";
        }
        $val="G";
        switch($val)
        {
            case "R":
                echo "RED";
            case "G":
                echo "GREEN";
            default:
            echo "No value Given!";

        }

    ?>

</body>
<!--
        Author: Yash Garudkar
        Email: yashgarudkar@gmail.com
-->
</html>