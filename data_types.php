<?php 
$x = 5;
var_dump($x);
echo "<br>";

$y = "Hello";
var_dump($y);
echo "<br>";

$z = true;
var_dump($z);
echo "<br>";

$f = 10.5432;
var_dump($f);
echo "<br>";

$arr = array(1,"heloo",3,4,5);
var_dump($arr);
echo "<br>";

/* Object */

class Car {
    public $color;
    public $model;

    public function _construct($color , $model){
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        return "My car is a" . $this->color . " and " . $this->model;
    }
}

$myCar = new Car("red" , "Volvo");
var_dump($myCar);
echo "<br>";

$my_Car = new Car("orange" , "BMW");
var_dump($my_Car);
echo "<br>";


echo var_dump($my_Car , $myCar);

echo "<br>";
$n = null;
var_dump($n);
echo "<br>";


$x = "Hello";
var_dump($x);
echo "<br>";


$x = 5;
$x = (string) $x;
var_dump($x);

?>