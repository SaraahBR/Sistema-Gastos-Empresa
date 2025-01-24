<?php

namespace Src\Entities;

abstract class Expense
{
    protected string $name;
    protected float $cost;

    public function __construct(string $name, float $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    abstract public function calculateMonthlyCost(): float;
}
