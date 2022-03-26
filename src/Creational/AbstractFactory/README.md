# Abstract Factory
## Description
Creational Design that allows you to create a family of objects without specifying the concrete class. 
## When to use ?
When your code needs to work with various families of related products, but you don`t want it to depend on the concrete 
classes of those products -- They might be unknown, or you want to allow future extensibility.
## Problem
Imagine you are creating a **Soccer Team Uniform** application. Your application has three main pieces: **Shirt**; 
**Shorts**; And **Football Boots**.
    
You need a way to create individual pieces of the uniform matching its family, you don`t want a Brazilian fan to 
recieve half of the uniform from Germany (hehe).
## Solution
The Abstract Factory pattern suggests that you make one Factory for each family that your product has, implementing a 
Base Factory Interface. And make an interface for each Product, making its variants to implement the Base Product Interface too.

