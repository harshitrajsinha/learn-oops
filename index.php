<?php
/*
# Different whitespace characters in PHP:

    $firstName = "Harshit";
    echo "Hello, World.\nWelcome\n"; //Use '\n' within strings, for MacOS use '\r'
    echo "Your name is ".$firstName.PHP_EOL; //Use PHP_EOL anyway (it is independent of OS)

    //Use < br> when inserting php code within HTML document.

*/

class MyClass {
    private $changeColor;

    public function __construct($newColor) {
        $this->changeColor = $newColor;
    }

    public function returnColor(){
        echo $this->changeColor.PHP_EOL;
    }

    public function __destruct() {
        echo "Object deleted.\n".$this->changeColor.PHP_EOL;
    }
}

$myObject = new MyClass("green");  // Object created.
$myObject2 = new MyClass("red");

$myObject->returnColor();
$myObject2->returnColor();

unset($myObject2);
sleep(2);

?>