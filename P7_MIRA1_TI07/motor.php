<?php
class motor{
    public $merk;
    public $bensin;
    public $topSpeed; 
    public $cc = 1;

    public function __construct($merk,$bensin,$topSpeed,$cc)
    {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

    public function jalan($jarak) //kilometer
    {
      $jalan = $jarak / 30;
      $waktu = $jarak / $this->topSpeed;
      $this->bensin -= $jalan;
      
      echo "Motor <p>$this->merk $this->cc CC</b> telah jalan dengan jarak <b>$jarak km</b>
       dan kecepatan <b>$this->topSpeed km/h</b> dengan waktu <b>$waktu jam</b>
       Bensin yang tersisa yaitu <b>$this->bensin Liter </b> <hr><br>";
  
    }
}
$motor = new Motor('Yamaha', 5, 750, 1500);
$motor->Jalan(30);

$motor2 = new Motor('Honda', 4, 750, 1500);
$motor2->Jalan(30);

$motor3 = new Motor('Dukati', 7, 750, 1500);
$motor3->Jalan(30);
?>
