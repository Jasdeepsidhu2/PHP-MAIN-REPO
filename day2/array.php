
<pre>  
<?php

$arr=[1,4,'v','f',true];
var_dump($arr) ;
// echo $arr; //not properly work not convert the strings

echo $arr[0], "\n";
echo $arr[3];

array_push($arr, 'e','F');
var_dump($arr);

$arr[9]='new';
var_dump($arr);

$arr[count($arr)]='last';//explicitly append at end
$arr[]='nextlast';//append at last
var_dump($arr);


if(isset($arr[22]))  //check if index exist
{
    echo $arr[22];
}
else{
    echo "22 element not exits\n";
}


if (isset($var)) //check variable exists
{
    echo $var;
}
else
{
    echo '$var does\'t exist'."\n"; 
}


$arr[2]='overwritten';

echo "Sorted array\n";
sort($arr);
var_dump($arr);


function compare($a,$b){ //custom sort function
    return $a <=> $b;
}

usort($arr ,'compare');
var_dump($arr);