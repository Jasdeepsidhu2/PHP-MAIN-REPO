
<pre>
<?php
$a=0;
function doSomething(){
   echo "Not good \n ";
//    echo $a;    //not working no scope different than javascript(has global scope)
   
}
doSomething();

function returnSomething($item){
    return $item."!!!!!!!\n";

}
echo returnSomething($a);


