<html>
<head>
<h1>Even/Odd</h1><br>
</head>
<body>
    <?php
        function checkEO($x,$y)
        {
            if($x%2==0)
            {
                echo "x = ".$x." is an Even number<br>";
            }
            else
            {
                echo "x = ".$x." is an Odd number<br>";
            }
            if($y%2==0)
            {
                echo "y = ".$y." is an Even number<br>";
            }
            else
            {
                echo "y = ".$y." is an Odd number<br>";
            }
            if($x==$y)
            {
                echo $x." is equal to ".$y."<br>";
            }
            else
            {
                echo $x." isn't equal to ".$y."<br>";
            }
        }
        if(isset($_POST['check']))  
        {
            checkEO($_POST['valuex'],$_POST['valuey']);  
        }  
        
    ?>
    <form method="post">
    Value of x :<input type="text" name="valuex"><br>
    Value of y :<input type="text" name="valuey"><br>

    <input type="submit" name="check" value="Check">
    </form>
</body>
<!--
        Author: Yash Garudkar
        Email: yashgarudkar@gmail.com
-->
</html>