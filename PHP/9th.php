<html>
    <head>
        <title>9th PHP Program</title>
    </head>
    <body>
    <form action="9th.php" method="post">
        Password:<input type="password" name="password">
        <br>
        <input type="submit">
    </form>
    <?php
        echo $_POST["password"];
    ?>
    </body>
</html>
