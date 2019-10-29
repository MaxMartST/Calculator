<?php
function getErrorMassege($errorCode)
{
    $massages = [
        ERR_NOT_DEFINED_PARAMETERS => 'НЕ ОПРЕДЕЛЕННЫЕ ПАРАМЕТРЫ',
        ERR_WRONG_NUMBER_OF_PARAMETERS => 'НЕПРАВИЛЬНОЕ ЧИСЛО ПАРАМЕТРОВ',
        ERR_WRONG_NAMES_OF_PARAMETERS => 'НЕПРАВИЛЬНЫЕ ИМЕНА ПАРАМЕТРОВ',
        ERR_ARGUMENTS_ARE_NOT_NUMERIC => 'АРГУМЕНТЫ НЕ ЧИСЛЕННЫЕ',
        ERR_INVALID_OPERATION => 'НЕПРАВИЛЬНЫЙ ОПЕРАТОР',
        ERR_DIVISION_BYZERO => 'ДЕЛЕНИЕ НА НОЛЬ',
        ERR_EMPTY_PARAMETERS => 'ПУСТЫЕ ПАРАМЕТРЫ',
        ERR_ARG1_NOT_FOUND => 'НЕ НАЙДЕН ПАРАМЕТР ARG1',
        ERR_ARG2_NOT_FOUND => 'НЕ НАЙДЕН ПАРАМЕТР ARG2',
        ERR_OPERATION_NOT_FOUND => 'НЕ НАЙДЕН ПАРАМЕТР OPERATION',
        CORRECT_NUMBER_OF_PARAMETERS => 'ПРАВИЛЬНОЕ ЧИСЛО ПАРАМЕТРОВ'
    ];
    return $massages[$errorCode] ?? '';
}