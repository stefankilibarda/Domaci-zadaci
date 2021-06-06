<?php 

    echo "Prvi zadatak<br><br><br>";

    function novi_niz($a, $b) {
        $y = [];
        $x = mt_rand(5, 15);
        for($i=0; $i<$x; $i++) {
            $y[$i] = mt_rand($a, $b);            
        }
        return $y;
    }

    $niz = novi_niz(0, 10);
    echo "Niz je: " . join(", ", $niz) . "<br>";

    function ima_li_nule($niz) {
        $nula = true;
        foreach($niz as $el) {
            if($el == 0){
                $nula = false;                
            }           
        }
        return $nula;
    }
    if(ima_li_nule($niz) === false){
        echo "Niz sadrzi nulu, funkcija vraca FALSE";
    }else {
        echo "Niz ne sadrzi nulu, funkcija vraca TRUE";
    }


    echo "<br><br><br>Drugi zadatak<br><br><br>";

    $assoc = ["ponedeljak"=>27, "utorak"=>29, "cetvrtak"=>28, "petak"=>28];
    
    function uspesnost($assoc) {
        $max = 0;
        $ind = 0;
        foreach($assoc as $dan => $uradjeni) {
            if($max < $uradjeni) {
                $max = $uradjeni;
                $ind = $dan;
            }
        }
        echo "Najuspesniji dan je $ind, sa $max uspesno uradjenih domacih zadataka<br>";
    }

    function prosecna_uspesnost($assoc) {
        $counter = 0;
        $ukupno = 0;
        foreach($assoc as $uradjeni) {
            $ukupno += $uradjeni;
            $counter++;
        }
        $rezultat = $ukupno / $uradjeni;
        echo "Prosecna uspesnost je $rezultat uradjenih domacih zadataka<br>";
    }

    function razlika($assoc) {
        $min = $assoc["ponedeljak"];
        $max = 0;
        foreach($assoc as $uradjeni) {
            if($min > $uradjeni) {
                $min = $uradjeni;
            }
            if($max < $uradjeni) {
                $max = $uradjeni;
            }
        }
        $rezultat = $max - $min;
        echo "Razlika izmedju najgore i najbolje uspesnosti je $rezultat";
    }

    uspesnost($assoc);
    prosecna_uspesnost($assoc);
    razlika($assoc);



?>