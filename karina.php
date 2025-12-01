<?php
class Calculator {
    private $number1 = 0;
    private $number2 = 0;
    
    public function displayMenu() {
        echo "\n=== PHP КАЛЬКУЛЯТОР ===\n";
        echo "1. Ввести два числа\n";
        echo "2. Выполнить сложение\n";
        echo "3. Выполнить вычитание\n";
        echo "4. Выполнить деление\n";
        echo "5. Возвести число в степень\n";
        echo "6. Выход\n";
        echo "Выберите пункт меню: ";
    }