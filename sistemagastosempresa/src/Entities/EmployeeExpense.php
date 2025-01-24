<?php

namespace Src\Entities;

class EmployeeExpense extends Expense
{
    private int $numEmployees;

    public function __construct(string $name, float $cost, int $numEmployees)
    {
        parent::__construct($name, $cost);
        $this->numEmployees = $numEmployees;
    }

    public function getNumEmployees(): int
    {
        return $this->numEmployees;
    }

    public function calculateMonthlyCost(): float
    {
        return $this->getCost() * $this->numEmployees;
    }
}