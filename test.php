<?php


class Foo
{
    protected $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function __toString()
    {
        return $this->title;
    }
}

$array = array(
    "monday" => "qsdqs"
    
);

echo implode(',', $array);
?>