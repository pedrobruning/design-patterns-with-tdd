# Factory Method
## Description
Creational Design used to provide an interface responsible for creating an object based on a superclass (Often called Creator), 
but allows all the subclasses (Often called Products) to change the object that will be created 
## When to use ?
When you do not know all the types and dependencies of the objects that you are working with
## Problem
Imagine you are creating a **Soccer Championship** application. The first version of your app can only handle 
**World Cup Championships** so the majority of your code is inside a big **World Cup Championship Class**.
    
After some time your client says that the application should support local championships too, 
like **Brazilian Soccer Championship**.
## Solution
The Factory Method pattern suggests that you abstract a direct object construction call to a factory method.
    
Making this factory method abstract enable you to create a different subclass for every type of **Championship**
