<?php

    $ime1 = $_GET['ime1'];
    $ime2 = $_GET['ime2'];

    function zadatak1() {
        global $ime1, $ime2;
        $duzina1 = strlen($ime1);
        $duzina2 = strlen($ime2);
        if($duzina1 > $duzina2){
            echo $ime1;
        }else {
            echo $ime2;
        }
    }
    
    echo "Zadatak 1<br><br>";
    echo zadatak1();

    echo "<br><br><br><br>";
    echo "Zadatak 2<br><br>";

    function zadatak2() {
        global $ime1, $ime2;
        $duzina1 = strlen($ime1);
        $duzina2 = strlen($ime2);
        if ($duzina1 > $duzina2) {
            return $ime1;
        }else {
            return $ime2;
        }
    }

    $duze_ime = zadatak2();
    echo $duze_ime;


    echo "<br><br><br><br>";
    echo "Zadatak 3<br><br>";

    function zadatak3() {
        global $ime1, $ime2;
        $duzina1 = strlen($ime1);
        $duzina2 = strlen($ime2);
        if ($duzina1 < $duzina2) {
            return "Krace ime je <span style='color: green;'>$ime1</span>" . " " . "a duze ime je <span style='color: red;'>$ime2</span>";
        }else {
            return "Krace ime je <span style='color: green;'>$ime2</span>" . " " . "a duze ime je <span style='color: red;'>$ime1</span>";
        }
    }

    $duze_ime = zadatak3();
    echo $duze_ime;
    


?>