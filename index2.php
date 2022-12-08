<?php

// BEFORE TO ADD __construct()
class Animal {
    var $name;
    var $race;
    var $age;
    var $color;

}

$cat = new Animal;

$cat -> name ="luna";
$cat -> race ="russian";
$cat -> age ="2";
$cat -> color ="Black";

$dog = new Animal;

$dog -> name ="benny";
$dog -> race ="alaska";
$dog -> age ="1";
$dog -> color ="Black and White";



// AFTER TO ADD __construct()
class Car
{
    var $model;
    var $color;
    var $doors;

    function __construct($xmodel, $xcolor, $xdoors)
    {
        $this->model = $xmodel;
        $this->color = $xcolor;
        $this->doors = $xdoors;
    }
}

$nissan = new Car("Micra", "Red", 2);
$toyota = new Car("Yares", "Black", 4);

echo $nissan->model;





?>