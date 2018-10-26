<?php
namespace Shop2;

include_once './Equipment.php';
class Oven extends \Shop\Equipment{ //use the class from different namespace
    public function heated(){
        return "Oven takes 45 mins to heated up.";
    }
}
