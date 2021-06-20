<?php



class Baza {
        public $conn;

        function __construct(){
            $this->conn = new mysqli('localhost', 'root', '', 'turisticka_agencija');

            if($this->conn->connect_error) {
                die ("Greska u konekciji: ". $this->conn->connect_error);
            }
        }
        function izvrsi_select(){
            $s = $this->conn->query("SELECT COUNT(id) as broj FROM `destinacije`");
            if($s === false) {
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            }else{
                $niz = $s->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'poruka'=>"Ukupan broj raspolozivih destinacija je: ".$niz[0]["broj"]];
            }
        }
        function prikazi_destinacije(){
            $d = $this->conn->query("SELECT drzava, grad, datum_polaska, datum_povratka FROM destinacije JOIN putovanja ON putovanja.destinacija_id = destinacije.id");
            if($d === false) {
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            }else{
                $niz = $d->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'destinacije'=>$niz];
            }
        }
        function prikazi_putnike(){
            $p = $this->conn->query("SELECT p.ime_prezime, d.drzava, d.grad, put.datum_polaska, put.datum_povratka FROM putovanja as put JOIN spisak_putnika as sp ON sp.id_putovanja = put.id JOIN putnici as p ON p.broj_pasosa = sp.broj_pasosa JOIN destinacije as d on d.id = put.destinacija_id");
            if($p === false) {
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            }else{
                $niz = $p->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'putnici'=>$niz];
            }
        }
        function otkazi_rezervaciju($broj_pasosa){
            $o = $this->conn->query("DELETE FROM `spisak_putnika` WHERE broj_pasosa='$broj_pasosa'");
            if($o === false) {
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            }else{
                return ['uspesno'=>true, 'poruka'=>"Uspesno ste otkazali putovanje"];
            }
        }

    }

    $b = new Baza();
    echo "<pre>";
    print_r($b->izvrsi_select());
    print_r($b->prikazi_destinacije());
    print_r($b->prikazi_putnike());
    print_r($b->otkazi_rezervaciju('90'));

?>