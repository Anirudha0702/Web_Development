<html>
    <head>
        <title>8th PHP Program</title>
    </head>
    <body>
        <form action="8th.php" method="get">
            Colour Name:<input type="text" name="name">
            <br>
            Plural Noun:<input type="text" name="pNoun">
            <br>
            Celebrity:<input type="text" name="celeb">
            <br>
            <input type="submit">
        </form>
        <?php
            $name=$_GET["name"];
            $pNoun=$_GET["pNoun"];
            $celeb=$_GET["celeb"];
            echo "Roses are red <br>";
            echo "$pNoun are blue <br>";
            echo "I love $celeb <br>";
            echo "$name loves too";
        ?>
    </body>
</html>
