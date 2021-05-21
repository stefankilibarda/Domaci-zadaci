<?php

    echo "Zadatak 1<br><br>";

    $ime = "Stefan";
    $prezime = "Kilibarda";
    $br_slova = strlen($ime . $prezime);

    function ime_i_prezime() {
        global $ime, $prezime;
        echo "<p><span>$ime</span> <span>$prezime</span></p>";        
    }
    for ($i=0; $i<$br_slova; $i++) {        
        ime_i_prezime();
    }

    ime_i_prezime();

    echo "<br>";


    echo "Zadatak 2<br><br>";

    $n = mt_rand(1, 10);
    $x = mt_rand(1, 10);
    echo "Brojevi su $n i $x <br><br>";
    
    function span_elementi() {
        global $n;
        for ($i=0; $i<$n; $i++) {
            echo "<span>Ovo je span $i</span> ";
        }
    }

    for ($i=0; $i<$x; $i++) {
        echo "<div>";
        echo span_elementi();
        echo "</div>";
    }
    
?>