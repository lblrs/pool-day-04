<?php
$array = range(1, 10);

foreach ($array as $value) {
    if($value %2 == 0){
        echo $value, "\n";
    }
}
