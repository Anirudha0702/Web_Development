<?php
    $countryCapital=array("Italy"=>"Rome","Belgium"=>"Brussels","Denmark"=>"Copenhagen","Finland"=>"Helsinki","France"=>"Paris","Germany"=>"Berlin","Greece"=>"Athens","Netherlands"=>"Amsterdam","Portugal"=>"Lisbon","Spain"=>"Madrid");
    
    asort($countryCapital);

    echo "<h2>Sorted by capital</h2>";
    foreach($countryCapital as $country=>$capital){
        echo "$country=>$capital<br>";
    }
?>