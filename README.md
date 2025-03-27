# 💼 Sistema de Gastos Empresariais

Este projeto é um sistema simples e funcional para controle de **gastos empresariais**, permitindo o gerenciamento de diferentes tipos de despesas como contas de serviços públicos, despesas com funcionários e outros tipos de gastos. O sistema foi desenvolvido em PHP com orientação a objetos, e segue uma arquitetura limpa com separação entre modelo, controlador e lógica principal.

## 📌 Objetivo

Oferecer uma solução prática para empresas que desejam organizar, registrar e visualizar seus gastos categorizados, com a possibilidade de expansão e integração futura com bancos de dados e interfaces web.

## 🛠️ Tecnologias Utilizadas

- PHP 7.4 ou superior  
- Programação Orientada a Objetos (POO)  
- Estrutura modular com classes separadas por responsabilidade

## 🧱 Arquitetura do Sistema

O sistema está dividido em camadas bem definidas:

- `Expense.php`: classe base para qualquer tipo de despesa  
- `EmployeeExpense.php`: herda de `Expense` e representa despesas com funcionários  
- `UtilityExpense.php`: herda de `Expense` e representa contas como água, luz, internet etc.  
- `OtherExpense.php`: herda de `Expense` para quaisquer outras despesas não categorizadas  
- `ExpenseModel.php`: modelo que armazena, calcula totais e organiza as despesas  
- `ExpenseController.php`: controlador que interage com o modelo e define o fluxo do sistema  
- `index.php`: ponto de entrada da aplicação, simulando o funcionamento completo

## 🚀 Como Executar

1. Certifique-se de ter o PHP instalado na máquina:

```bash
php -v
```

2. Clone este repositório ou copie os arquivos para uma pasta local.

3. Navegue até a pasta onde estão os arquivos e execute:

```bash
php index.php
```

4. O sistema mostrará a saída no terminal, incluindo as despesas cadastradas e o total geral.

## 📌 Exemplo de Funcionamento

O sistema inicializa com exemplos de gastos como:

-  Conta de Luz: R$ 350,00  
-  Salário do Funcionário: R$ 5.000,00  
-  Compra de suprimentos diversos: R$ 850,00  

Ao final, exibe um **resumo total das despesas**.

## ✨ Funcionalidades Futuras (sugestões)

- Persistência em banco de dados (MySQL/PostgreSQL)  
- Interface web para inserção e visualização dinâmica  
- Geração de relatórios mensais em PDF  
- Filtro por data, tipo de gasto ou centro de custo

