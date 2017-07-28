**Singleton Design Pattern**

**Problem:** There are situations when you need only one instance object of a class is all we need in our applications.
Eg. A database connection object or a system configuration object.

Singleton pattern is used to limit the instantiation of the class to a single object.

A singleton is similar to a global state variable.
Difference: A singleton is instantiated when required instead of residing in memory all the time.

**Singleton Pattern in Drupal**
- Static `\Drupal` service container object.
  - The bad example.
  - `\Drupal` object introduces an undesirable global state in our code.
  - It is needed as a support for legacy procedural code. Eg. use of services in hooks.
- Site `Settings` singleton
  - The good example.
