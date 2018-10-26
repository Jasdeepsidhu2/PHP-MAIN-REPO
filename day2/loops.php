<pre>
<?php

$list=['a','b','c'];

foreach($list as $item)
{
    echo "$item\n";
}

echo "Last value   $item\n";

$student=[
    'name'=>'Jasdeep',
    'prg'=>'wbdv'
];

foreach($student as $key =>$value){

    echo "$key is $value \n";
}
$jame=[
    'name'=>'jame',
    'prg'=>'wbdv'
];

$list2=[$student,$jame];
echo " \n\nNested  loops  \n";
foreach ($list2 as $item){
    foreach($item as $k=>$v){
        echo "$k : $v\n";
    }
}

echo "\n\nNested  loops second method  \n";

foreach ($list2 as $item){

    echo $item['name'] . ' has ' . $item['prg']. "\n";


}
