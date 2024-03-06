<?php
//if文
$a = 7;

if($a == 5){
    echo "\$aは5です";
}
elseif($a == 7){
    echo "\$aは7です";
}
else{
    echo "\$aは5と7以外です";
}
echo "<br />";

//三項演算子
$result = ($a == 7) ? "TRUE" : "FALSE";
echo $result;
echo "<br />";

//swich文
$people = "Saburo";

switch ($people) {
case "Taro":
echo "太郎です";
break;
case "Saburo":
echo "三郎です";
break;
}