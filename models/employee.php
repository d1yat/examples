<?php

namespace App\Models;

class Employee {
    public $id;
    public $name;
    
    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }
}
