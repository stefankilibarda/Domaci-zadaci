<?php 

    class Krevet{

        public $duzina;
        public $sirina;
        public $materijal;
        private $cena;

        public function __construct($nova_duzina, $nova_sirina, $nov_materijal, $nova_cena){
            $this->duzina = $nova_duzina;
            $this->sirina = $nova_sirina;
            $this->materijal = $nov_materijal;
            $this->cena = $nova_cena;
        }
        public function ucitaj_cenu(){
            return $this->cena;
        }
        public function __toString(){
            return "Krevet je duzine " . $this->duzina . " i sirine " . $this->sirina . ", napravljen od " . $this->materijal . " po ceni od " . $this->cena;
        }
        public function popust($popust){
            $iznos_popusta = $this->cena * ($popust / 100);
            $nova_cena = $this->cena - $iznos_popusta;
            return round($nova_cena);
            
        }

    }

    $krevet_1 = new Krevet(200, 160,"stof", 15000);
    $krevet_2 = new Krevet(200, 90,"borovina", 5000);
    $cena_1 = $krevet_1->ucitaj_cenu();
    $cena_2 = $krevet_2->ucitaj_cenu();

    if($cena_1 > $cena_2) {
        echo $krevet_1;
    }else {
        echo $krevet_2;
    }

    echo "<br><br>";
    
    $krevet_puna_cena = new Krevet(200, 160, "iverica", 25699);
    echo $krevet_puna_cena;
    $krevet_popust = $krevet_puna_cena->popust(10);
    echo ", a sa popustom, cena je $krevet_popust dinara";
    
    

?>