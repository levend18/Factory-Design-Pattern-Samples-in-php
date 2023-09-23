<?php
// Abstract Product
interface ComputerComponent {
    public function getDescription(): string;
}

// Concrete Products
class CPU implements ComputerComponent {
    public function getDescription(): string {
        return "CPU: High-performance processor";
    }
}

class RAM implements ComputerComponent {
    public function getDescription(): string {
        return "RAM: 16GB DDR4 Memory";
    }
}

class Storage implements ComputerComponent {
    public function getDescription(): string {
        return "Storage: 512GB SSD";
    }
}

// Abstract Factory
interface ComputerComponentFactory {
    public function createComponent(): ComputerComponent;
}

// Concrete Factories
class CPUFactory implements ComputerComponentFactory {
    public function createComponent(): ComputerComponent {
        return new CPU();
    }
}

class RAMFactory implements ComputerComponentFactory {
    public function createComponent(): ComputerComponent {
        return new RAM();
    }
}

class StorageFactory implements ComputerComponentFactory {
    public function createComponent(): ComputerComponent {
        return new Storage();
    }
}

// Client Code
function assembleComputer(ComputerComponentFactory ...$factories) {
    foreach ($factories as $factory) {
        $component = $factory->createComponent();
        echo $component->getDescription() . "\n";
    }
}

$cpuFactory = new CPUFactory();
$ramFactory = new RAMFactory();
$storageFactory = new StorageFactory();

assembleComputer($cpuFactory, $ramFactory, $storageFactory);
