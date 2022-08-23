<?php
// Question One


// $my_numbers = [1, 2, 3, 4, 5];
// $my_numbers = [15, 25, 35];
// $my_numbers = [8, 8];
// $sum = 0;
// foreach ($my_numbers as $number) {

//     if ($number % 2 == 0 && $number != 8) {
//         $sum = $sum + 1;
//     } else if ($number % 2 != 0 && $number != 8) {
//         $sum = $sum + 3;
//     } else if ($number % 2 == 0 && $number == 8) {
//         $sum = $sum + 5;
//     }
// }
// echo $sum;

// $str = "TestGorilla";
// $str_len = strlen($str);
// $str = str_split($str);


// echo $str[0];
// // echo $str_len;


//Question 2

$string  = str_replace(" ", "", strtolower('coding exercise'));
$letters = str_split($string);
$result  = array_fill_keys($letters, 0);
$implode = [];
foreach ($result as $key => $value) {
    if ($key == ' ') {
        continue;
    } else {
        $implode[] =  $key;
    }
}
$previous = [];

foreach ($letters as $letter) {
    for ($l = 0; $l < count($implode); $l++) {
        if ($letter == $implode[$l]) {
            $result[$letter]++;
        }
    }

    $previous[] = $letter;
}

$arr_ch = array_chunk($result, 1, true);

$array = [];

for ($a = 0; $a < count($implode); $a++) {

    for ($b = 0; $b < count($arr_ch); $b++) {

        if (array_key_exists($implode[$a], $arr_ch[$b])) {
            $star = "";

            for ($j = 0; $j < $arr_ch[$b][$implode[$a]]; $j++) {

                $star =  $star . "*";
            }

            $array[] =  $implode[$a] . ":" . $star . ',';
        }
    }
}



$finall = implode("", $array);
print_r(substr_replace($finall, "", -1));
