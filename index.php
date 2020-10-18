<?php

require_once 'autoload.php';

use App\Models\Employee;

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
