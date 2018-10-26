<?php
class App{

    public function run(){
        $data=$this->getdata();
        $this->printOutput($data);

        
    }
    public function getData(){
        return ['tweet1','tweet2'];
    }
    public function printOutput($data1){
        // echo '<body>';
        include './tweet.php'; //I want to call this many times.
        include './tweet.php'; // So no include_once
        // echo'<body>';

    }

}
function main(){
$app=new App();
$app->run();


}
main();