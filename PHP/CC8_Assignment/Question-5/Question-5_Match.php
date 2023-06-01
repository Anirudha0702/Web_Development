<?php
        $username=$_POST["username"];
        $password=$_POST["password"];
        if($username=="rajdeep298" && $password=="Rajdeep@2023"){
            echo "Welcome @".$username."<br>";
            echo "Login time:".date("h:i:sa d-m-y");
        }
        else{
            echo "Invalid username or password";
        }
?>