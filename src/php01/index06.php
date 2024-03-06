<?php
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}
function returnNumber($a)
{
    $a++;
    return $a;
}

$num = 100;
outputNumber($num);
echo "<br />";
echo returnNumber($num);
echo "<br />";

function fiveecho($a, $b){
    echo ($a / $b) . "<br />";
}

fiveecho($num, 20);

function scoreecho($score1, $score2, $score3){
    $scoresum = ($score1 + $score2 + $score3);
    if($scoresum > 210){
        echo "合計点は" . $scoresum . "なので合格です" . "<br />";
        return;
    }
    else{
        echo "合計点は" . $scoresum . "なので不合格です" . "<br />";
        return;
    }
}

scoreecho(100,50,80);

function CalculationTriangle($num1, $num2){
    $result = $num1 * $num2 / 2;
    return $result;
}
function CalculationSquare($num1, $num2){
    $result = $num1 * $num2;
    return $result;
}
function CalculationTrapezoid($num1, $num2, $num3){
    $result = ($num1 + $num2) * $num3 / 2;
    return $result;
}

echo CalculationTriangle(5, 6) . "<br />";
echo CalculationSquare(5, 6) . "<br />";
echo CalculationTrapezoid(10, 20, 30) . "<br />";

