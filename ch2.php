<?php 

class Gadget {
    public $merk,
           $processor,
           $ram;

    public function __construct( $merk = "merk", $processor = "processor", $ram = "ram"){
        $this->merk = $merk;
        $this->processor = $processor;
        $this->ram = $ram;
    }

    public function getInfoGadget(){
        $str = "{$this->merk} | {$this->processor} | {$this->ram}";
        
        return $str;
    }
}


class Handphone extends Gadget {
    public $ukuran;

    public function __construct( $merk = "merk", $processor = "processor", $ram = "ram", $ukuran = 0 ){
        parent::__construct( $merk, $processor, $ram);
        $this->ukuran = $ukuran;
    }

    public function getInfoGadget(){
        $str = "Handphone : " . parent::getInfoGadget() . " | {$this->ukuran} inches.";
        return $str;
    }
}


class Laptop extends Gadget {
    public $berat;

    public function __construct( $merk = "merk", $processor = "processor", $ram = "ram", $berat = 0 ){
        parent::__construct( $merk, $processor, $ram);
        $this->berat = $berat;
    }

    public function getInfoGadget(){
        $str = "Laptop : " . parent::getInfoGadget() . " | {$this->berat} kg.";
        return $str;
    }
}


class cetakInfoGadget{
    public function cetak( Gadget $gadget) {
        $str = "{$Gadget->merk} | {$Gadget->getLabel()}";
        return $str;
    }
}


$gadget1 = new Handphone( "Xiaomi redmi note 10", "Snapdragon 678", "6 GB", 6.43 );
$gadget2 = new Laptop( "Infinix inbook X1", "i3-1005G1", "256 GB", 1.47);


echo $gadget1->getInfoGadget();
echo "<br>";
echo $gadget2->getInfoGadget();

?>