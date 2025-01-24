<?php

namespace Src\Entities;

class UtilityExpense extends Expense
{
    public function calculateMonthlyCost(): float
    {
        return $this->getCost();
    }
}