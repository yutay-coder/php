<?php
$people = array('Taro', 'Jiro', 'Saburo');
//連想配列
$peopletest = [
    "person1" => "Taro",
    "person2" => "Jiro",
    "person3" => "Saburo"
];
//多次元配列
$peopletest2 = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

$int = 100;

echo $people[0];
echo "<br />";
var_dump($int);
echo "<br />";
echo $peopletest["person2"];
echo "<br />";

//配列の数だけループ
foreach ($peopletest as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}

foreach($peopletest2 as $person){
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "<br />";
}

