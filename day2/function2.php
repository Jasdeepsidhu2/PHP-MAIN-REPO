
<?php


function doSomething(){
   echo "\n Not good \n ";
//    echo $a;    //not working no scope different than javascript(has global scope)
   
}


function returnSomething($item){
    return $item."!!!!!!!\n";

}



function main(){

    echo returnSomething('Great');
    doSomething();
}
main();