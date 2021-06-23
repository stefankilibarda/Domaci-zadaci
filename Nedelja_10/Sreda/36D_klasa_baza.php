<?php

    class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', $baza);
            
            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);            
        }

        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }
        function izvrsi_upit($upit){
            $odg = $this->conn->query($upit);
            if($odg === false) {
                die('Nije izvrsen upit: ' . $this->conn->error);
            } else {                
                echo "Uspesno izvrsen upit!";
            }
                
        }
        function daj_proizvode(){
            $r = $this->izvrsi_select("select * from proizvodi");
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }
        function daj_proizvod($id){
            $r = $this->izvrsi_select("select * from proizvodi WHERE id=$id");
            if($r['uspesno'] == true){
                return $r['niz'][0];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }
    }
    $b = new Baza('36d_5528_stefan_kilibarda');
    
    

?>