<?php

namespace Src\Controllers;

use Src\Models\ExpenseModel;
use Src\Entities\EmployeeExpense;
use Src\Entities\UtilityExpense;
use Src\Entities\OtherExpense;

class ExpenseController
{
    private ExpenseModel $expenseModel;

    public function __construct()
    {
        $this->expenseModel = new ExpenseModel();
    }

    public function runDemo(): float
    {

        $contaEnergia = (float) readline("Qual foi o gasto de conta de luz? ");
        $this->expenseModel->addExpense(new UtilityExpense("Conta de Energia", $contaEnergia));


        $contaAgua = (float) readline("Qual foi o gasto de conta de água? ");
        $this->expenseModel->addExpense(new UtilityExpense("Conta de Água", $contaAgua));


        $contaWifi = (float) readline("Qual foi o gasto de conta com Wi-Fi? ");
        $this->expenseModel->addExpense(new UtilityExpense("Conta de Wi-Fi", $contaWifi));


        $valorManutencao = (float) readline("Qual foi o gasto de manutenção de equipamentos? ");
        $taxaExtra = (float) readline("Há uma taxa adicional nessa manutenção? Se sim, informe o valor, senão 0: ");
        $this->expenseModel->addExpense(new OtherExpense("Manutenção de Equipamentos", $valorManutencao, $taxaExtra));


        $salarioBase = (float) readline("Qual o salário base do funcionário? ");
        $numFuncionarios = (int) readline("Para quantos funcionários? ");
        $this->expenseModel->addExpense(new EmployeeExpense("Salário Base", $salarioBase, $numFuncionarios));


        return $this->expenseModel->calculateTotalMonthlyCost();
    }

    public function getAllExpenses(): array
    {
        return $this->expenseModel->getExpenses();
    }
}