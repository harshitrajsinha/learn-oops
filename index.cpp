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


int main() {
    // Creating instances of the class
    MyClass obj1;


    // Display the counter value
    cout<<MyClass::myCounter<<endl;
    return 0;
}
