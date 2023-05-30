<html>
    <head>
        <title>16th PHP Program</title>
    </head>
    <body>
        <form action="16th.php" method="post">
            First_Num:<input type="number" name="num1">
            <br>
            Second_Num:<input type="number" name="num2">
            <br>
            Operation:<input type="text" name="op">
            <br>
            <input type="submit">
        </form>
        <?php
                $num1=$_POST["num1"];
                $num2=$_POST["num2"];
                $op=$_POST["op"];
                if($op=="+"){
                    echo $num1+$num2;
                }
                elseif($op=="-"){
                    echo $num1-$num2;
                }
                elseif($op=="*"){
                    echo $num1*$num2;
                }
                elseif($op=="/"){
                    echo $num1/$num2;
                }
                else{
                    echo "Invalid Operation";
                }
            ?>
    </body>
</html>
