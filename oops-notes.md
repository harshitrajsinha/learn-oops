# Class can be considered as user-defined data-type. Since it is a data-type, we can create variables, which are called 'instances'

# Properties => Variables | Methods => Functions

# Public, Private, Protected => Visibility of property and function (scope in which it can be accessed)

[class className{

    inside class
}

outside class

]

# Public: 
The properties and functions that are going to be accessed outside the class.

[
someClassInstance = new className();
someClassInstance->classProperty = 'someValue';
someClassInstance->classMethod();
]

# Private:
The properties which we don't want to be accessed or changed accidently. For example someUniqueID. These properties are accessible within the class but not accessible outside the class. However, it can be allowed to by creating a method in such a way that we can decide whether the accessibility is of read-only or read+write etc.

In languages such as PHP which is dynamically typed languages, same variable can be assigned any type of value whether integer, string or boolean at different places, in order to restrict or avoid accidental assignment we can make use of private, by making a property private and allowing assignment only through a method so that we can define some rules on what type of values it can accept or be assigned with. For example, value for a phone number variable should be of 10 digits and should not be on any type other than positive integer


[
    class className{
        private someProperty;

        public function funName(){
            return this->someProperty
        }
    }

    className_instance->funName() //In order to access someProperty

]


# Use of this keyword:
When we access a property or function outside a class, we do so by creating an instance/object of that class like (someInstance->accessbileProperty). However, in order to access a property/variable or function/method within a class we use 'this' keyword since we cannot create instance of that class inside itself.

# Important:
The objects created are not like variables (containers, they don't store any value) but they are like pointers which point to a memory location. Example:
someInstance2 = someInstance1 ($someInstance2 is now pointing to same memory location)
someInstance1->someProperty = "update value"
print(someInstance2->someProperty) [The updated value will be printed, even though the value was updated through someInstance1, because they are like pointers and not containers]

# Does a destructor method in object-oriented programming always runs at end, even if it is not created ?

In languages that support destructor methods (like PHP with the __destruct() method), the destructor is automatically called when an object is no longer reachable and is being destroyed. However, if you do not define a destructor method in your class, the default behavior will be to not have a destructor.  In many object-oriented programming languages, if you define a destructor (or a finalizer) method in a class, it will be automatically called when an object is being destroyed. If you do not define such a method, the object will still be cleaned up by the memory management system, but no custom cleanup code will be executed.

# what is mean by "when an object is no longer reachable"  in above response ?

In the context of object-oriented programming and memory management, "when an object is no longer reachable" refers to a situation where there are no active references or pointers to the object from the rest of the program's execution context. When an object is created, it is typically assigned to a variable or used in some way by your code. As long as there are variables or references that point to the object, it is considered "reachable" because your code can still access and interact with it.
If we have used an object to assign a value to a property, and that property is the last line of code executed before the program terminates, you can say that the object is no longer reachable at the end of the code execution. In this specific scenario, since the program has finished executing, all references to the object will go out of scope, and the object becomes unreachable. When the program terminates, the memory used by the object will be released as part of the cleanup process by the operating system and the language's runtime environment. In languages with automatic memory management and garbage collection, like most modern object-oriented languages, the memory occupied by objects that are no longer reachable will be reclaimed.


