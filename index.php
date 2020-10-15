<?php
class Employee {
    public $id;
    public $name;
    
    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }
}

$employees = [
    new Employee(101, "Ahmad Fasehan"),
    new Employee(102, "Andris Firmansyah"),
    new Employee(103, "Akhirudin Sudiyat"),
    new Employee(104, "Bani Arham"),
    new Employee(105, "Rido Raudho")
];

foreach ($employees as $employee) {
    echo "{$employee->name} \n";
}
