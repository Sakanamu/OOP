<?php

//class
class robot{
    //property
    public $suara = 'goblok';
    public $berat = 30;

    public function bersuara(){
        echo 'suararobot'. $this->suara;
    }
}


$robot1 = new robot;
$robot1->bersuara();
//echo 'suara' . $robot1 -> suara. $robot1 -> berat;
?>