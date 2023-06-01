<?php
    $q4=array(5=>"yellow",14=>"blue",3=>"green",22=>"white");

    echo key($q4)."=>".current($q4)."<br>";//printing first element

    echo "Printing all elements<br>";
    foreach($q4 as $key=>$value){
        echo $key."=>".$value."<br>";
    }

    $q4[14]="red";//inserting new element

    unset($q4[22]);//deleting last element

    echo "Printing all elements after deletion<br>";
    foreach($q4 as $key=>$value){
        echo $key."=>".$value."<br>";
    }
?>