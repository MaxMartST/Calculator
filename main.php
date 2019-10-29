<?php
require_once('common.inc.php');

$arg1 = $_GET['arg1'] ?? null;
$arg2 = $_GET['arg2'] ?? null;
$operation = $_GET['operation'] ?? '';

$errorCode = checkCalculatorParam($arg1, $arg2, $operation);
if ($errorCode == ERR_OK) {
    $result = calculator($arg1, $arg2, $operation, $errorCode);
}

echo ($errorCode == ERR_OK) ? $result : getErrorMassege($errorCode);