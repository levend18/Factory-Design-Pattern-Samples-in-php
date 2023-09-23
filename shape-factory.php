<?php
// Abstract Product
interface Shape {
    public function area(): float;
}

// Concrete Products
class Circle implements Shape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function area(): float {
        return pi() * $this->radius * $this->radius;
    }
}

class Square implements Shape {
    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function area(): float {
        return $this->side * $this->side;
    }
}

// Abstract Factory
interface ShapeFactory {
    public function createShape(): Shape;
}

// Concrete Factories
class CircleFactory implements ShapeFactory {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function createShape(): Shape {
        return new Circle($this->radius);
    }
}

class SquareFactory implements ShapeFactory {
    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function createShape(): Shape {
        return new Square($this->side);
    }
}

// Client Code
function calculateArea(ShapeFactory $factory): void
{
    $shape = $factory->createShape();
    $area = $shape->area();
    echo "Area: $area\n";
}

$circleFactory = new CircleFactory(5.0);
$squareFactory = new SquareFactory(4.0);

calculateArea($circleFactory);
calculateArea($squareFactory);
