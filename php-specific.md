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

# Cloning vs Assigning an object to an instantiated object

<!-- <?php

    $obj1 = new someClass();

    $obj2 = $obj1;
    echo ($obj2 === $obj1) [output: 1/true]

    $obj3 = clone $obj1;
    var_dump($obj3 === $obj1) [output: bool(false)]
?> -->