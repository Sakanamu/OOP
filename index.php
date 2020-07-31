<?php
//class

/*class robot{

    public $name;
    public $legs;
    public $cold_blooded;
    //konstruktor
    public function __construct($suara){
        $this->suara = $suara;
    }
    //set & get :)
    public function set_suara($suara){
        $this->suara = $suara;
    }
    public function get_suara(){
        return $this->suara;
    }
}
*/
require_once 'frog.php';
class animal{

    public $name;
    public $legs;
    public $cold_blooded;
    //set & get :)
   
 
    public function get_name(){
        return 'Shaun'. $this->name;
    }

    public function get_legs(){
        return '2'. $this->legs;
    }

    public function get_cold_blooded(){
        return 'False'. $this->cold_blooded;
    }
}
$sheep = new animal;
echo "Relase 0 ";
echo '<br>';
echo 'nama : ' .$sheep->get_name() . ' Legs : '. $sheep->get_legs(). ' Cold Blooded : '. $sheep->get_cold_blooded();

$sungokong = new ape('Kera Sakti');
echo '<br>';
echo 'Release 1';
echo '<br>';
echo 'nama : ' .$sungokong->get_name() . ' Legs : '. $sungokong->get_legs(). ' Cold Blooded : '. $sungokong->get_cold_blooded(). ' Yell : '. $sungokong->yell();
echo '<br>';

$kodok = new frog('buduk');
echo 'nama : ' .$kodok->get_name() . ' Legs : '. $kodok->get_legs(). ' Cold Blooded : '. $kodok->get_cold_blooded(). ' Jump : '. $kodok->jump();
?>