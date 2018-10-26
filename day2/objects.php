
<pre>
<?php

$jas=[
    'name'=>'jasdeep',
    'age'=>21
];

$jasObject=(object)$jas;

var_dump ($jasObject);

class Cake{    //make a class

    public $type= 'choclolate';
    private $secretIngredient ='ginger';

    public function describeTaste(){
        return 'yummy!!!';
    }


}
$cake=new Cake(); //instance of class means object of that class
echo $cake->describeTaste();//call a method
echo "\n";

echo $cake->type; //don't use $ sign for type 
echo "\n";
$cake->type='vanila';//overwrite the property
echo $cake->type. "  overwritten";
// echo $cake->secretIngredient;  // can't use private data 
echo "\n";
var_dump($cake);


if (method_exists($cake, 'something')){ 
    echo "no exists\n";//will not run
}

if (method_exists($cake, 'describeTaste')){
    echo "exists\n";
}

