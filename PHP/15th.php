<?php
    $isMale= true;
    $isTall= false;
    if($isMale && !$isTall) echo 'isMale is true and isTall is true';
    else if($isMale && $isTall) echo 'isMale is true and isTall is false';
    else echo 'isMale is false';
?>