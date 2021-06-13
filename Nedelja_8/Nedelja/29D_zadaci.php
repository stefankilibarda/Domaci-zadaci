<?php

    class SastojakHrane {

        public $naziv;
        public $mera;
        public $kalorije;

        public function __construct($naziv, $mera, $kalorije) {
            $this->naziv = $naziv;
            $this->mera = $mera;
            $this->kalorije = $kalorije;
        }
        public function promeniMeru($nova_mera) {            
            $this->mera = $nova_mera;
        }
        public function prikazi() {
            echo "<p> $this->naziv, $this->mera, sadrzi $this->kalorije kcal</p>";
        }

    }

    class Jelo {

        public $naslov;
        public $opis;
        public $sastojci_hrane = [];

        public function __construct($naslov, $opis, $podaci) {           

            $this->naslov = $naslov;
            $this->opis = $opis;
            $this->sastojci_hrane = [];

            for($i=0; $i<count($podaci); $i++) {
                $s = new SastojakHrane($podaci[$i]['naziv'], $podaci[$i]['mera'], $podaci[$i]['kalorije']);
                $this->sastojci_hrane[$i] = $s;
            }            
            
        }
        
        public function prikazi() {            
            $html = "";
            foreach($this->sastojci_hrane as $sastojak) {
                $html .= $sastojak->naziv . " " . $sastojak->mera . " " . $sastojak->kalorije . "<br>";
            }
            echo "$this->naslov Opis: $this->opis Sastojci: $html";
        }
        public function promeniMeru($naziv, $nova_mera) {
            
            foreach($this->sastojci_hrane as $sastojak) {
                if($sastojak->naziv == $naziv) {
                    $sastojak->promeniMeru($nova_mera);
                }
            }
            
        }
        
    }
    
    include "29D_podaci.php";
    $jelo = new Jelo("Palacinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi();
    $jelo->promeniMeru("brasno", "400 gr");
    $jelo->prikazi();
?>