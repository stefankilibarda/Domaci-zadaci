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

    class Baldahin extends Krevet {
            public $visina;
            public $cenaBaldahina;

            public function __construct($nova_duzina, $nova_sirina, $nov_materijal, $nova_cena, $visina, $cenaBaldahina) {
                $this->visina = $visina;
                $this->cenaBaldahina = $cenaBaldahina;
                parent::__construct($nova_duzina, $nova_sirina, $nov_materijal, $nova_cena);
            }

            public function zbirna_cena() {
                $zbirna_cena = $this->daj_cenu() + $this->cenaBaldahina;
                return $zbirna_cena;
            }

            public function daj_cenu(){
                return $this->ucitaj_cenu();
            }

            public function __toString() {
                return "Cena kreveta bez baldahina je " . $this->daj_cenu() . " din, a cena kreveta sa baldahinom je " .$this->zbirna_cena() . " din."; 
            }


    }

    $bal = new Baldahin(200, 160, "iverica", 15000, 150, 10000);
    
    echo $bal;
?>