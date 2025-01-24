<?php

namespace Src\Entities;

class OtherExpense extends Expense
{
    private float $additionalFee;

    public function __construct(string $name, float $cost, float $additionalFee)
    {
        parent::__construct($name, $cost);
        $this->additionalFee = $additionalFee;
    }

    public function getAdditionalFee(): float
    {
        return $this->additionalFee;
    }

    public function calculateMonthlyCost(): float
    {
        return $this->getCost() + $this->additionalFee;
    }
}