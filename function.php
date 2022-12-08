<?php


function add($x, $y)
{
    $result = $x + $y;
    return $result;
};


function hello($name)
{
    if ($name === "ahmed") {
        echo "hello " . $name;
    } else {
        echo "bye " . $name;
    }
};


hello("ahmed");
echo "<br>";
echo add(2,3);

?>