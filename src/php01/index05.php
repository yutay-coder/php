<?php
//forループ
$int = 0;
for($i = 0; $i < 5; $i++){
    $int += 2;
    echo $int . "<br />";
}
echo "<br />";

//while
$count = 0;

while($count <= 100){
    $count += 1;
    if($count == 20){
        break;
    }
    if($count % 3 != 0){
        echo $count . "<br />";
    }
}


$num = 0;
do{
    echo "num = " . $num . "<br />";
    $num++;
}while($num < 3);


