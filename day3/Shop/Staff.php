
<?php

include_once './Person.php'; //to avoid multiple times declaration
class Staff extends Person{
    public function staffCount()
    {
        return "enough staff";
    }
}