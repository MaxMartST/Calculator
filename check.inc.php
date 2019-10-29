<?php
define("ERR_OK", 0);
define("ERR_NOT_DEFINED_PARAMETERS", 1);        //НЕ ОПРЕДЕЛЕННЫЕ ПАРАМЕТРЫ
define("ERR_WRONG_NUMBER_OF_PARAMETERS", 2);    //НЕПРАВИЛЬНОЕ ЧИСЛО ПАРАМЕТРОВ
define("ERR_WRONG_NAMES_OF_PARAMETERS", 3);     //НЕПРАВИЛЬНЫЕ ИМЕНА ПАРАМЕТРОВ
define("ERR_ARGUMENTS_ARE_NOT_NUMERIC", 4);     //АРГУМЕНТЫ НЕ ЧИСЛЕННЫЕ
define("ERR_INVALID_OPERATION", 5);             //НЕПРАВИЛЬНЫЙ ОПЕРАТОР
define("ERR_DIVISION_BYZERO", 6);               //ДЕЛЕНИЕ НА НОЛЬ
define("ERR_EMPTY_PARAMETERS", 7);              //ПУСТЫЕ ПАРАМЕТРЫ
define("ERR_ARG1_NOT_FOUND", 8);                //НЕ НАЙДЕН ПАРАМЕТР ARG1
define("ERR_ARG2_NOT_FOUND", 9);                //НЕ НАЙДЕН ПАРАМЕТР ARG2
define("ERR_OPERATION_NOT_FOUND", 10);          //НЕ НАЙДЕН ПАРАМЕТР OPERATION
define("CORRECT_NUMBER_OF_PARAMETERS", 3);      //ПРАВИЛЬНОЕ ЧИСЛО ПАРАМЕТРОВ

function checkCalculatorParam($arg1, $arg2, $operation)
{
    $parametrs = array("arg1", "arg2", "operation");
    $err = array(ERR_ARG1_NOT_FOUND, ERR_ARG2_NOT_FOUND, ERR_OPERATION_NOT_FOUND);
    $mathOperation = array("add", "sub", "mul", "div");
    $index = 0;
    if (count($_GET) == 0) {
        return ERR_NOT_DEFINED_PARAMETERS;
    }
    if (count($_GET) != CORRECT_NUMBER_OF_PARAMETERS) {
        return ERR_WRONG_NUMBER_OF_PARAMETERS;
    }
    foreach ($parametrs as $element) {
        if (!array_key_exists($element, $_GET)) {
            return $err[$index];
        }
        $index++;
    }
    if ($arg1 == null || $arg2 == null || $operation == '') {
        return ERR_EMPTY_PARAMETERS;
    }
    if ((!is_numeric($arg1)) || (!is_numeric($arg2))) {
        return ERR_ARGUMENTS_ARE_NOT_NUMERIC;
    }
    if ($arg2 == 0 && mb_strtolower($operation) == 'div') {
        return ERR_DIVISION_BYZERO;
    }
    if (!in_array(mb_strtolower($operation), $mathOperation)) {
        return ERR_INVALID_OPERATION;
    }
    return ERR_OK;
}