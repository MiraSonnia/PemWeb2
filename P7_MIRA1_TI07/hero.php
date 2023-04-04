<?php
class Hero{
    // Atribut / Propeties pada class
    public $name;
    public $health;
    public $damage; 

    // constructor akan dijalankan secara otomatis
    public function __construct($name,$health,$damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }

    // method untuk menampilkan informasi  hero 
    public function getInfo(){
        echo "Nama Hero:". $this->name;
        echo "<br> HP:" . $this->health;
        echo "<br> Damage:" . $this->damage;
    }
}

//membuat objek dari class hero
$hero1 = new Hero('Alucard',3200,200);
$hero2 = new Hero('Franco',5000,50);

//memanggil method
$hero1->getInfo();