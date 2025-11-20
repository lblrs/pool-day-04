<?php
foreach($numList as $value) {
    if ($value %4 == 0) {
        echo $value,"\n";
        die;
    }
}