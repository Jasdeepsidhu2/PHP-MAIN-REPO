
<pre>
<?php
// ****concept of this***
class Cake{    //make a class

    public $type= 'choclolate';
    private $secretIngredient ='ginger';

    public function __construct($type,$secret){
        $this->type=$type;
        $this->secretIngredient=$secret;

    }

    public function describeTaste(){
        return 'yummy!!!'.$this->type;
    }
    public function recipe(){
        return $this->secretIngredient;
    }

}
$cake1=new Cake('chocolate' ,'abc');//call  by constructor
echo $cake1->describeTaste().'<br/>';
echo $cake1->recipe().'<br/>';

$cake2=new Cake('Carrot', 'xyz'); //call  by constructor
echo $cake2->describeTaste().'<br/>';
echo $cake2->recipe().'<br/>';
