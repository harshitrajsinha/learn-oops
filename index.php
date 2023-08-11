<?php
/*
# Different whitespace characters in PHP:

    $firstName = "Harshit";
    echo "Hello, World.\nWelcome\n"; //Use '\n' within strings, for MacOS use '\r'
    echo "Your name is ".$firstName.PHP_EOL; //Use PHP_EOL anyway (it is independent of OS)

    //Use < br> when inserting php code within HTML document.

*/

class MyClass {
    static $changeColor;

    public function __construct() {
        self::$changeColor = 'red';
    }


    // public function __destruct() {
    //     echo "Object deleted.\n".$this->changeColor.PHP_EOL;
    // }
}

$newInstance = new MyClass();

echo MyClass::$changeColor.PHP_EOL;

?>