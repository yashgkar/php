<html>
    <head>
    
    </head>
    <body>
        <?php
            $a=10;
            $b=5;
            function fun()
            {
                $GLOBALS['z']=$GLOBALS['a']+$GLOBALS['b'];
                echo $GLOBALS["z"];
            }
            fun();
        ?>

    </body>


</html>