<html>
    <head>
        <title>7th PHP Program</title>
    </head>
    <body>
        <form action="7th.php" method="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <br>
            <input type="submit">
        </form>
        Addition: <?php echo $_GET["num1"]+$_GET["num2"]?>
        <br>
        Substraction: <?php echo $_GET["num1"]-$_GET["num2"]?>
        <br>
        Multiplication: <?php echo $_GET["num1"]*$_GET["num2"]?>
        <br>
        Division: <?php echo $_GET["num1"]/$_GET["num2"]?>
    </body>
</html>
