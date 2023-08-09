<?php
class MyClass {
    private $changeColor = "red";

    // public function __construct() {
    //     echo "Object created.\n";
    // }

    public function returnColor(){
        echo $this->changeColor."\n";
    }

    // public function __destruct() {
    //     echo "Object deleted.\n";
    // }
}

$myObject = new MyClass();  // Object created.
$myObject->returnColor();         // Object deleted (due to destruct).
$myobject2 = clone $myObject;

var_dump($myobject2 === $myObject)."\n";
?>