<?php
// Abstract Product
interface Vehicle {
    public function drive(): void;
}

// Concrete Product 1
class Car implements Vehicle {
    public function drive(): void {
        echo "Driving a car...\n";
    }
}

// Concrete Product 2
class Bicycle implements Vehicle {
    public function drive(): void {
        echo "Riding a bicycle...\n";
    }
}

// Abstract Factory
interface VehicleFactory {
    public function createVehicle(): Vehicle;
}

// Concrete Factory 1
class CarFactory implements VehicleFactory {
    public function createVehicle(): Vehicle {
        return new Car();
    }
}

// Concrete Factory 2
class BicycleFactory implements VehicleFactory {
    public function createVehicle(): Vehicle {
        return new Bicycle();
    }
}

// Client Code
function driveVehicle(VehicleFactory $factory) {
    $vehicle = $factory->createVehicle();
    $vehicle->drive();
}

echo "Driving a car:\n";
driveVehicle(new CarFactory());

echo "\nRiding a bicycle:\n";
driveVehicle(new BicycleFactory());
