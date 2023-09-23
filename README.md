### Factory Design Pattern and Class Example

```markdown
This repository contains PHP code examples that demonstrate the Factory Design Pattern and provides an example class called `Country`.

## Factory Design Pattern

The Factory Design Pattern is a creational design pattern that provides an interface for creating objects in a super factory method but allows subclasses to alter the type of objects that will be created. It promotes code reusability and maintainability.

### Installation

   ```
1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/yourusername/factory-design-pattern-examples.git

2. Navigate to the project directory:

   ```bash
   cd factory-design-pattern-examples
   ```

### Usage

You can explore the examples within this repository to understand how the Factory Design Pattern works.

### Examples

#### Computer Component Factory

In this example, we use the Factory Design Pattern to create different types of computer components (CPU, RAM, and Storage). Each component is created using a specific factory, and the `assembleComputer` function demonstrates how to assemble a computer with these components.

To run the example:

```bash
php computer-component-factory.php
```

#### Shape Factory

This example demonstrates the Factory Design Pattern to create different shapes (Circle and Square). You can create shapes with specific dimensions using the respective factories and calculate their areas.

To run the example:

```bash
php shape-factory.php
```

## Example Class: Country

The provided `Country` class is not directly related to the Factory Design Pattern but can be used as a standalone class in your projects. The class includes properties related to a country, such as its name, population, and capital.

### Usage

You can use the `Country` class in your PHP projects to represent and manipulate information about countries.

```php
<?php
class Country {
    public $name;
    public $population;
    public $capital;

    public function __construct($name, $population, $capital) {
        $this->name = $name;
        $this->population = $population;
        $this->capital = $capital;
    }
}
```
