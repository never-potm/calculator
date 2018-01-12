## Problem
We want to build a calculator that receives two numbers and does an operation.

We do not know which kind of operations we want to do yet, we will decide them in the future and this calculator may have many complex operations.

Current planned operations:

- Sum
- Rest
- Divide
- Multiply
- VAT (amount, vat rate)
- much others

We want to be able to test each of the operations as well as the calculator.

You can choose the order and types of your parameters. The goal is with one call tell the calculator 2 numbers and one operation
$calculator->calculate(number,number, operation)

The calculator should return a number.

The calculator can throw exceptions if it is unable to realize an operation.

Implement:
- Calculator
- Sum Operation
- Divide operation

Optional:
The calculator should Trigger an Event at the end of the operation which contains the two numbers, operation and result.

## How to run ?

You can run this code using `php Starter.php 1a 2 <operation-type>`
Operation types:
- add
- subtract
- multiply
- divide

## PHPUnit tests
You can run PHPUnit tests using `php \vendor\phpunit\phpunit\phpunit`