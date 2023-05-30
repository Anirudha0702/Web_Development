<html>
    <head>
        <title>11th PHP Program</title>
    </head>
    <body>
        <form>
            Apple:<input type="checkbox" name="fruits[]" value="Apple"><br>
            Mango:<input type="checkbox" name="fruits[]" value="Mango"><br>
            Orange:<input type="checkbox" name="fruits[]" value="Orange"><br>
            <input type="submit">
        </form>
        <?php
            $fruits=$_GET["fruits"];
            echo $fruits[0];
            echo $fruits[1];
            echo $fruits[2];
        ?>
    </body>
</html>
