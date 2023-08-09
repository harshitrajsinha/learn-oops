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

# Cloning vs Assigning an object to an instantiated object

<!-- <?php

    $obj1 = new someClass();

    $obj2 = $obj1;
    echo ($obj2 === $obj1) [output: 1/true]

    $obj3 = clone $obj1;
    var_dump($obj3 === $obj1) [output: bool(false)]
?> -->