<?php

require_once __DIR__ . '/vendor/autoload.php';

use Src\Models\ExpenseModel;
use Src\Entities\EmployeeExpense;
use Src\Entities\UtilityExpense;
use Src\Entities\OtherExpense;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "================================================\n";
echo "Sistema Mensal de Consulta de Gastos Empresarial\n";
echo "================================================\n\n";

$expenseModel = new ExpenseModel();

$contaEnergia = (float) readline("Qual foi o gasto de conta de luz? ");
$expenseModel->addExpense(new UtilityExpense("Conta de Energia", $contaEnergia));

$contaAgua = (float) readline("Qual foi o gasto de conta de água? ");
$expenseModel->addExpense(new UtilityExpense("Conta de Água", $contaAgua));

$contaWifi = (float) readline("Qual foi o gasto de conta com Wi-Fi? ");
$expenseModel->addExpense(new UtilityExpense("Conta de Wi-Fi", $contaWifi));

$valorManutencao = (float) readline("Qual foi o gasto de manutenção de equipamentos? ");
$taxaExtra = (float) readline("Informe a taxa adicional (0 se não existir): ");
$expenseModel->addExpense(new OtherExpense("Manutenção de Equipamentos", $valorManutencao, $taxaExtra));

$quantidadeEstagiarios = (int) readline("Quantos estagiários há na empresa? (se não houver, aperte 0): ");
if ($quantidadeEstagiarios > 0) {
    $salarioEstagiario = (float) readline("Qual é o salário de cada estagiário? ");
    $expenseModel->addExpense(new EmployeeExpense("Salário de Estagiários", $salarioEstagiario, $quantidadeEstagiarios));
}

$quantidadeJunior = (int) readline("Quantos funcionários Júnior há na empresa? (se não houver, aperte 0): ");
if ($quantidadeJunior > 0) {
    $salarioJunior = (float) readline("Qual é o salário de cada funcionário Júnior? ");
    $expenseModel->addExpense(new EmployeeExpense("Salário de Funcionários Júnior", $salarioJunior, $quantidadeJunior));
}

$quantidadePleno = (int) readline("Quantos funcionários Pleno há na empresa? (se não houver, aperte 0): ");
if ($quantidadePleno > 0) {
    $salarioPleno = (float) readline("Qual é o salário de cada funcionário Pleno? ");
    $expenseModel->addExpense(new EmployeeExpense("Salário de Funcionários Pleno", $salarioPleno, $quantidadePleno));
}

$quantidadeSenior = (int) readline("Quantos funcionários Sênior há na empresa? (se não houver, aperte 0): ");
if ($quantidadeSenior > 0) {
    $salarioSenior = (float) readline("Qual é o salário de cada funcionário Sênior? ");
    $expenseModel->addExpense(new EmployeeExpense("Salário de Funcionários Sênior", $salarioSenior, $quantidadeSenior));
}

$expenses = $expenseModel->getExpenses();

echo "\n========================================\n";
echo "Lista de despesas cadastradas:\n";
foreach ($expenses as $expense) {
    echo "- " . $expense->getName() . ": R$ " 
         . number_format($expense->calculateMonthlyCost(), 2, ',', '.') . "\n";
}

$total = $expenseModel->calculateTotalMonthlyCost();

echo "\n========================================\n";
echo "TOTAL A PAGAR: R$ " . number_format($total, 2, ',', '.') . "\n";
echo "========================================\n";

echo "\nEsse sistema foi criado por Sarah Hernandes, obrigada pelo uso!\n";
echo "Espero que tenha gostado e te auxiliado.\n";
echo "========================================\n";