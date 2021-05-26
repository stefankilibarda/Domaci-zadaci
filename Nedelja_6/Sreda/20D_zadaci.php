<?php

    echo "Prvi zadatak<br><br>";

    function kojiJeNajveci($num1, $num2, $num3) {
        if ($num1 > $num2 && $num1 > $num3){
            return $num1;
        }elseif($num2 > $num3){
            return $num2;
        }else {
            return $num3;
        }
    }

    $first = mt_rand(1, 100);
    $second = mt_rand(1, 100);
    $third = mt_rand(1, 100);
    echo "<br><br> $first, $second, $third<br><br>";

    $rez = kojiJeNajveci($first, $second, $third);
    echo "Najveci je broj <span style='color: red'>$rez</span>";

    echo "<br><br><br>Drugi zadatak<br><br>";


    function createSpans($num) {
        $div = "<div>";        
        for ($i=1; $i<=$num; $i++){
            $div .= "<span>$i</span><br>";            
        }
        $div .= "</div>";
        return $div;
    }

    $rez2 = createSpans(5);
    echo $rez2;



    echo "<br><br><br>Treci zadatak<br><br>";

    function createDivs($num1, $num2) {
        $div = "";
        for ($i=1; $i<=$num1; $i++) {
            $div .= "<div>";
            for ($j=1; $j<=$num2; $j++) {
                $div .= "<span>$j</span><br>";
            }
            $div .= "</div>";
        }
        return $div;
    }

    $rez3 = createDivs(5,2);
    echo $rez3;
?>