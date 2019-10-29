<?php
function add($arg1, $arg2) {
    return $arg1 + $arg2;
}
function sub($arg1, $arg2) {
    return $arg1 - $arg2;
}
function mul($arg1, $arg2) {
    return $arg1 * $arg2;
}
function div($arg1, $arg2, &$errorCode)
{
    if ($arg2 == 0) {
        $errorCode = ERR_DIVISION_BYZERO;
        return 0;
    }
    else
        return $arg1 / $arg2;
}

function calculator($arg1, $arg2, $operation, &$errorCode)
{
    switch (mb_strtolower($operation)) {
        case "add":
            return add($arg1, $arg2);
            break;
        case "sub":
            return  sub($arg1, $arg2);
            break;
        case "mul":
            return mul($arg1, $arg2);
            break;
        case "div":
            return div($arg1, $arg2, $errorCode);
            break;
    }
}