<html>
    <head>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        Enter Name:<input type='text' name='name'>
        <input type='submit' value='Submit'>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                $name1=$_REQUEST['name'];
                if(empty($name1))
                {
                    echo "Empty";
                }
                else
                {
                    echo "<br>".$name1;
                }
            }
        ?>
        
    </body>
</html>