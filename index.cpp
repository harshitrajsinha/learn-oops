#include <iostream>

using namespace std;

class MyClass {
public:
    
    static int myCounter;
    int counter = 0;

    MyClass() {
        myCounter++;
        counter++;
    }


};

int MyClass::myCounter = 0;

int main() {
    // Creating instances of the class
    MyClass obj1;
    MyClass obj2;
    MyClass obj3;


    // Display the counter value
    cout<<MyClass::myCounter<<endl;
    return 0;
}
