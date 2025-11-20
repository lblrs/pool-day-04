<?php
$days = array (
    "monday" => array(
                1 => "math",
                2 => "french",
    ),
    "tuesday" => array(
             "english",
             "history"
    ),
    "wednesday" => array(
            "french",
            "spanish",
            "sciences"
    ),
    "thursday" => array(
            "chemistry"
    ),
    "friday" => array(
        "philisophie",
        "math"
    )
    );


foreach ($days as $key => $value) { 
    echo $key, ": ";
    foreach ($value as $value2) {
        echo  "$value2, ";
    }
    echo "\n";
}