<html>
    <head>
        <title>12th PHP Program</title>
    </head>
    <body>
        <form action="12th.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>
        <?php
            $grades=array("Jim"=>"A+","Pam"=>"B-","Oscar"=>"C+");
            echo $grades[$_POST["student"]];
        ?>
    </body>
</html>

