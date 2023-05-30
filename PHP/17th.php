<html>
    <head>
        <title>17th PHP Program</title>
    </head>
    <body>
        <form action="17th.php" method="post">
            Grade:<input type="text" name="grade">
            <br>
            <input type="submit">
        </form>
        <?php
            $grade=strtoupper($_POST["grade"]);
            switch ($grade) {
                case "A+":
                    echo "You did amazing!";
                    break;
                case "A":
                    echo "You did pretty good!";
                    break;
                case "B":
                    echo "You did good!";
                    break;
                case "C":
                    echo "You did poorly!";
                    break;
                case "D":
                    echo "You did very bad!";
                    break;
                case "F":
                    echo "You failed!";
                    break;
                default:
                    echo "Invalid Grade";
                    break;
            }
        ?>
    </body>
</html>
