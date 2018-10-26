
<?php
include_once './Equipment.php';
class Oven extends Equipment{
    public function heated(){
        return "Oven takes 45 mins to heated up.";
    }
}
