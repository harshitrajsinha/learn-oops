# TERMS
- $this keyword
- Abstract classes
- Autoloading
- Classes, properties, methods
- Class constants
- Constructors & destructors
- Inheritance
- Interfaces
- Magic methods
- Namespaces
- Static properties, methods
- Traits

# Syntax:
<!-- <?php
class className{

    public $classProperty;
    
}

$someClassInstance = new className();
$someClassInstance->classProperty = 'someValue';
$someClassInstance->classMethod()
?> -->

# How to delete an object:
An object in PHP is deleted using a combination of unset() and __destruct() [Assinging 'null' to an object just removes the reference but does not delete it]
unset() is used to remove references to objects and make them eligible for garbage collection, __destruct() is an opportunity to perform cleanup actions before the object is actually removed from memory by the garbage collector.

When we do not use either of unset() and __destruct(), object gets deleted automatically and clean up is performed and the order of deletion of object is of the order in which they were created. __destruct() is defined in order to specifically perform any further operation after deletion of object, such as to print that object has been deleted.
unset() is used to specifically destroy any object. Use unset() when we want to destroy any object in-between the code and not at last OR use in order to change the order of object destruction. For example - if $obj1 and $obj2 are created resp. and use of unset($obj2) will instruct the program to destroy and perform clean up for $obj2 first and then at the end of program when $obj1 is not reachable, automatically destroy $obj1 and perform cleanup.

TOPIC: Cloning vs Assigning an object to an instantiated object

<!-- <?php

    $obj1 = new someClass();

    $obj2 = $obj1;
    echo ($obj2 === $obj1) [output: 1/true]

    $obj3 = clone $obj1;
    var_dump($obj3 === $obj1) [output: bool(false)]
?> -->

TOPIC: Static properties and methods in PHP

Static properties are shared among all instances whereas a non-static property is unique for each instance.
Within a class, we can access static property using either class name or 'self' keyword.

<!-- <?php 

class MyClass {
    static $changeCounter = 0;

    public function __construct() {
        self::$changeCounter++;     
        //MyClass::$changeCounter++; ('self' keyword can be used only within class, like 'this' keyword)
    }

}

$newInstance = new MyClass();
echo MyClass::$changeCounter.PHP_EOL; //output : 1 (Accessed using class name, not instance)

$newInstance2 = new MyClass();
echo MyClass::$changeCounter.PHP_EOL; //output : 2 (Accessed using class name, not instance)

$newInstance3 = new MyClass();
echo MyClass::$changeCounter.PHP_EOL; //output : 3 (Accessed using class name, not instance)

NOTE: If same code had been written using non-static property and printed after each instantiation, then each output would have been 3

?> -->
Static methods are same like static property, shared among all instance (public static function funName(){})

TOPIC: Class constant: 
Constants associated with a class. It is like static properties, within class, can be accessed using 'self' keywrod and outside class, class-name followed by scope resolution operator followed by constant name. '$' is not used as a prefix.

<!-- <?php
  class Maths{

    const PI = 3.14;

    public function display_PI(){
        echo self::PI;
    }
}

$radius = 2;
$perimeter = 2*(Maths::PI)*($radius);
echo $perimeter.PHP_EOL;                //Output: 12.56
?> -->

Use-case:

TOPIC: Magic methods:
There are 16 magic methods defined in PHP. 

- __construct()
- __destruct()
- __toString()
- __get()
- __set()
- __call()
- __invoke()
- __sleep()
- __wakeup()
- __clone()
- __unserialize()
- __debuginfo()
- __isset()
- __unset()
- __callStatic()
- __set_state()

