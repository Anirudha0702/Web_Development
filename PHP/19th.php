<html>
    <head>
        <title>19th PHP Program</title>
    </head>
    <body>
        <?php
            include "Article_Header.php";
            $title= "My First Post";
            $author= "Rajdeep";
            $wordCount= 400;
            echo "<h1>$title</h1>";
            echo "<h2>$author</h2>";
            echo "<h3>This article has $wordCount words</h3>";
        ?>
    </body>
</html>
