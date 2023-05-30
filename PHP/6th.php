<html>
    <head>
        <title>6th PHP Program</title>
    </head>
    <body>
            <form action="6th.php" method="get">
                Name:<input type ="text" name="name">
                <br>
                Age:<input type ="number" name="age">
                <br>
                <input type="submit">
            </form>
            <br>
            Your Name is: <?php echo $_GET["name"] ?>
            <br>
            Your Age is: <?php echo $_GET["age"] ?>
    </body>
</html>
