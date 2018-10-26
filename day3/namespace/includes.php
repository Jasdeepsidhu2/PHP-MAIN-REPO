<pre>
<?php

include './Cake.php';
include_once './Person.php'; //include all files include_once
include_once './Shop.php';
// include_once './Equipment.php';// no need to include here/ include in oven file
include_once './DeliveryTruck.php';
include_once './Oven.php';
include "./Staff.php"; // order of includes matters take care to avoid errors
   
use Shop\Cake as Cake;   //alias 
use Shop\Shop as Myshop;

function main(){
    $cake=new Cake();
    $person=new Shop\Person(); //examples to use namespace 
    $staff=new Shop\Staff();
    $shop=new MyShop(); //use alias
    $euip= new Shop\Equipment('Good'); 
    $oven= new Shop2\Oven('inheritance');//try for another name namespace
    $deliveryTruck=new Shop\DeliveryTruck();

    echo "Cake :".  $cake->ingredients();
    echo "\n";
    echo "Person: ". $person->eat('vanilla');
    echo "\n";
    echo "Staff:  ".$staff->staffCount();
    echo "\n";
    echo "Staff inheritance:  ". $staff->eat('vanilla2');
    echo "\n";
    echo "Shop:   ".$shop->openShop();
    echo "\n";
    echo "Equipment:  ".$euip->availableEuip('Big machine');
    echo "\n";
    echo "Oven:    ".$oven-> heated();
    echo "\n";
    echo "Oven inheritance is :   ".$oven->availableEuip('Big machine2');
    echo "\n";
    echo "Delivery Truck:   ".$deliveryTruck->countTruck();
    echo "\n";

    



}
main();