<?php

    class Baza {

        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', $baza);

            if($this->conn->connect_error){
                die ("Greska prilikom konektovanja: ". $this->conn->connect_error);
            } 
        }
        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);

            if($podaci == false) {
                return ['uspesan'=>false, 'error'=>$this->conn->error];
            }else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesan'=>true, 'niz'=>$niz];
            }
        }
        function vrati_id($drzava, $grad){
            $rez = $this->izvrsi_select("SELECT id FROM destinacije WHERE drzava='$drzava' AND grad='$grad'");

            if($rez['uspesan'] == true){
                return $rez['niz'][0]['id'];
            }else{
                return "Neuspesan upit";
            }
        }
        function vrati_destinaciju($id){
            $rez = $this->izvrsi_select("SELECT putovanja.id, putovanja.datum_polaska, putovanja.datum_povratka, putovanja.cena, destinacije.drzava, destinacije.grad FROM putovanja JOIN destinacije ON putovanja.destinacija_id = destinacije.id WHERE destinacije.id=$id");

            if($rez['uspesan'] == true) {
                return $rez['niz'];
            }else{
                return "Nema trazenih destinacija";
            }
        }
        function brisi_aranzman($id){
            $rez = $this->conn->query("DELETE FROM spisak_putnika WHERE id_putovanja=$id");

            if($rez == true) {
                return "Otkazali ste putovanje";
            }else{
                return "Neuspesno otkazivanje";
            }
        }


    }

    $b = new Baza('turisticka_agencija');
    $upit = $b->izvrsi_select("SELECT * FROM destinacije");
    $id = $b->vrati_id('Sjedinjene Americke Drzave', 'Vasington');
    $dest = $b->vrati_destinaciju($id);  
    $brisi = $b->brisi_aranzman($dest[0]['id']);
    echo "<pre>";
    var_dump($brisi);

  
    
    
?>