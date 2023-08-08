# Class can be considered as user-defined data-type. Since it is a data-type, we can create variables which are called 'instances'

# Properties => Variables | Methods => Functions

# Public, Private, Protected => Visibility of property and function (scope in which it can be accessed)

[class className{

    inside class
}

outside class

]

* Public: The properties and functions that are going to be accessed outside the class.

[
someClassInstance = new className();
someClassInstance->classProperty = 'someValue';
someClassInstance->classMethod();
]

* Private:
The properties, especially, which we don't want to be accessed or changed accidently. For example someUniqueID variable. These properties are accessible within the class and not accessible outside the class but can be allowed to by creating a method in such a way that we can decide whether the accessibility is of read-only/ read+write.

In languages such as PHP which is dynamically typed languages, same variable can be assigned any type of value whether integer, string or boolean at different places, in order to restrict or avoid accidental assignment we can make use of private, by making a property private and allowing assignment only through a method so that we can define some rules on what type of values it can accept or be assigned with.


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