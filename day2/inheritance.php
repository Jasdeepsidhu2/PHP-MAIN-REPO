<pre>
<?php

class Cake{    //make a class

    public $type= 'choclolate';
   

    public function describeTaste(){
        return 'I am a '.$this->type;
    }
   

}

class chocolateCake extends Cake{
    public $type='chocolate';
}
$cake = new Cake();
echo $cake->describeTaste();
echo '<br>';
$chocoCake=new chocolateCake();
$chocoCake->describeTaste();