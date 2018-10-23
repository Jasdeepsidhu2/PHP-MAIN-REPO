
<pre>
<?php
$a=1;
$b=3.6;
$c=true;

$e=['fun',0,1];
$d=new stdClass();
$f=function (){
    return 'Hi';
};
$g='Jas';
echo ($a."\n".$b."\n".$g);
var_dump($a,$b,$c,$e,$d,$f);


define('CONSTANT',10);
var_dump(CONSTANT);

?>