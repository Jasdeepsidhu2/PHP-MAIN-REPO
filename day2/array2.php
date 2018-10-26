 <pre>
 <?php

// numric indexed  

$list=[
    'jas',
    'mam'
];
var_dump($list);
echo "\n";
echo "Json encoding\n";
echo json_encode($list); //show like a array
echo "\n";
// associative array like objects but declare as an array index like string

$jas=[
    'name'=>'Jas',
    'age'=>22
];

var_dump($jas);
echo "\n";
echo "Json encoding\n";
echo json_encode($jas); //show like  a object 
echo "\n";

// push item

$jas['hair']='long';

$jas[]='something'; //it adds at index 0 but dosn't make sense
var_dump($jas);
echo "\n";


if(!isset($jas['isthere'])) //check a element
{
    echo "not there";
}
