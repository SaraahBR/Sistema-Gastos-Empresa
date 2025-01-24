<?php

namespace Src\Models;

use Src\Entities\Expense;

class ExpenseModel
{
    private array $expenses = [];

    public function addExpense(Expense $expense): void
    {
        $this->expenses[] = $expense;
    }

    
    public function calculateTotalMonthlyCost(): float
    {
        $total = 0.0;
        foreach ($this->expenses as $expense) {
            $total += $expense->calculateMonthlyCost();
        }
        return $total;
    }


    public function getExpenses(): array
    {
        return $this->expenses;
    }
}