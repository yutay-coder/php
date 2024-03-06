<?php

for($i = 1; $i <= 50; $i++){
    if($i % 3 == 0){
        if($i % 5 == 0){
            echo "FizzBuzz" . "<br />";
        }
        else{
            echo "Fizz" . "<br />";
        }
    }
    elseif($i % 5 == 0){
        echo "Buzz" . "<br />";
    }
    else{
        echo $i . "<br />";
    }
}
echo "<br />";

//3で割り切れる数数	Fizz
//5で割り切れる数	Buzz
//3でも5でも割り切れる数	FizzBuzz
//それ以外の数	数字

for($n = 0; $n < 5; $n++){
    for($x = 0; $x < 5; $x++){
        echo "○";
    }
    echo "<br />";
}
