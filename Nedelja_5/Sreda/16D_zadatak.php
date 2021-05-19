<?php


    $br1 = $_GET['prvi_br'];
    $br2 = $_GET['drugi_br'];
    $br3 = $_GET['treci_br'];
    $br4 = $_GET['cetvrti_br'];
    echo "Brojevi su: $br1, $br2, $br3, $br4<br>";

    if ($br2 > $br1 && $br4 > $br3) {
        function racunanje() {
            global $br1, $br2, $br3, $br4;
            $zbir_1 = 0;
            $zbir_2 = 0;
            for ($i=$br1; $i<=$br2; $i+=2)     {
                if ($i % 4 == 0) {
                    $zbir_1 += $i;                    
                }
            }   
                for ($i=$br3; $i<=$br4; $i++) {
                    if($i % 3 == 0) {
                        $zbir_2 += $i;
                    }
                }               
            
            if ($zbir_1 > $zbir_2) {
                return "Veci je zbir brojeva $br1 i $br2, i on iznosi: $zbir_1";
            }else {
                return "Veci je zbir brojeva $br3 i $br4, i on iznosi: $zbir_2";
            }
        }
    }else {
        die("Brojevi ne zadovoljavaju uslove");
    }

    $rez = racunanje();
    echo $rez;

?>