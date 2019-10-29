<?
header('Content-Type: text/plain');
$arg1 = intval(($_GET['arg1']) ?? 0);
$arg2 = intval(($_GET['arg2']) ?? 0);
$oper = $_GET['operation'] ?? '';
($oper == 'div' && $arg2 == 0) ? die('error!') : '';
(!empty($oper)) ? calculate($arg1, $arg2, $oper) : die('no operation!');
function calculate(int $arg1, int $arg2, string $oper){
    switch ($oper){
        case 'add':
            echo $arg1 + $arg2;
            break;
        case 'sub':
            echo $arg1 - $arg2;
            break;
        case 'mul':
            echo $arg1 * $arg2;
            break;
        case 'div':
            echo $arg1 / $arg2;
            break;
        default:
            echo "wrong operation!";
    }
}