# Understanding class and object with an example -
It is often said that class is a bluprint and objects are real entity or instance. But what does it mean?
We can understand this with an example of shapes. We can create a class called 'Shape' that has properties like no_of_sides, length_of_side (assuming all sides are equal) and methods such as get_area(), get_volume(). But this just defines a structure of how something may look like, 'shape' itself does not have an existance of its own. The objects of this class such as triangle, rectangle, square etc are real entity/instance (something created out of the blueprint).

# Class can be considered as user-defined data-type. Since it is a data-type, we can create variables, which are called 'instances'

# Properties => Variables | Methods => Functions

# Public, Private, Protected => Visibility of property and method (scope in which it can be accessed)

[
    class className{

        inside class
    }

    outside class

]

# Public: 
The properties and functions that can be accessed outside the class.

[
someClassInstance = new className();
someClassInstance->classProperty = 'someValue';
someClassInstance->classMethod();
]

# Private:
The properties which we don't want to be accessed or changed accidently. For example someUniqueID. These properties are accessible within the class but not accessible outside the class. However, it can be by creating a method in such a way that we can decide whether the accessibility is of read-only or read+write etc.

In languages such as PHP which is dynamically typed languages, same variable can be assigned any type of value whether integer, string or boolean at different places, in order to restrict or avoid accidental assignment we can make use of private, by making a property private and allowing assignment only through a method so that we can define some rules on what type of values it can accept or be assigned with. For example, value for a phone number variable should be of 10 digits and should not be of any type other than positive integer


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
We access a property or function outside a class by creating an instance/object of that class like (someInstance->accessbileProperty). However, in order to access a property/variable or function/method within a class we use 'this' keyword since we cannot create instance of that class inside the same class.

IMPORTANT:
The objects created are not like variables (containers, they don't store any value) but they are like pointers which point to a memory location. Example:
someInstance2 = someInstance1 (someInstance2 is now pointing to same memory location to which someInstance1 was pointing)
someInstance1->someProperty = "update value"
print(someInstance2->someProperty) [The updated value will be printed, even though the value was updated through someInstance1, because they are like pointers and not containers]

# Does a destructor method in object-oriented programming always runs at end, even if it is not created ?

In languages that support destructor methods (like PHP with the __destruct() method), the destructor is automatically called when an object is no longer reachable and is being destroyed. In many object-oriented programming languages, if we define a destructor (or a finalizer) method in a class, it will be automatically called when an object is being destroyed. If we do not define such a method the object will still be cleaned up by the memory management system, but no custom cleanup code will be executed.

# what "when an object is no longer reachable" meant  in above response ?

In the context of object-oriented programming and memory management, "when an object is no longer reachable" refers to a situation where there are no active references or pointers to the object from the rest of the program's execution context. When an object is created, it is typically assigned to a variable or used in some way by your code. As long as there are variables or references that point to the object, it is considered "reachable" because your code can still access and interact with it.
If we have used an object to assign a value to a property, and that is the last line of code executed before the program terminates, you can say that the object is no longer reachable at the end of the code execution. In this specific scenario, since the program has finished executing, all references to the object will go out of scope, and the object becomes unreachable. When the program terminates, the memory used by the object will be released as part of the cleanup process by the operating system and the language's runtime environment. In languages with automatic memory management and garbage collection, like most modern object-oriented languages, the memory occupied by objects that are no longer reachable will be reclaimed.


# Static properties and methods:

When we use 'static' keyword before declaring a property, the property belongs to the class and not to an instance, which means such properties are shared among all instances. For example, if a static property is declared as 0 and is incremented within a constructor (every time a new object is created), then the final value of the static property will be sum of the number of objects created. However, for a non-static property, each instance will point to a new property as if it has been newly created.

A static property is called using class name but a non-static property is called using instance name.

Different programming languages have different syntax to declare and initialize a static property. For example, PHP uses 'self' keyword in order to access a static property within a class, like use of 'this' keyword for non-static properties.

NOTE: If we want any property or method to be common for all instance, such as a property to keep count of number of employees, then such property should be made static and we should use static function to access such property. However, if any property needs to be kept unique for each employee, such as employeeId or name then those properties should be non-static.

