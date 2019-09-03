<html>
    <head>
    </head>
    <body>
        <?php
            echo $_SERVER['PHP_SELF']."<br>";
            echo $_SERVER['SERVER_NAME']."<br>";
            echo $_SERVER['HTTP_HOST'];
            
        ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SERVER']?>">
        Enter Name:<input type='text' name='name'>
        <button type='submit' name='submit'>Submit</button>
        </form>
    </body>
</html>