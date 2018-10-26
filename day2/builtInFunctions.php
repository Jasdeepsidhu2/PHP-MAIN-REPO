
<?php


$r=date('y-m-d h:i:s');
echo date('Y-M-D'), '<br>';
echo $r, "<br>";
echo strtoupper('jasdeep'), "<br>";// on php.net tons of built in functions
$number= number_format(2.56666777,4);

echo round($number), "<br>";
echo round($number,1), "<br>";

echo rand('10',30), "<br>";//random number in range and  php converts sting into a integer value if it can
echo rand();//random number


