<?php

    echo "Zadatak 1<br><br>";

    $i = 1;
    while ($i<=20) {        
        echo "$i, ";
        $i++;             
    }
    

    echo "<br><br>Zadatak 2<br><br>";

    $i = 30;
    $s = 30;
    while($s<100000 && $i>= 1)  {
        $poslednji_br = $i;
        $i--;        
        $s = $s * $i;        
        if ($s < 100000) {
            $rezultat = $s;            
        }
    }
    echo "<span style='color: red'>$rezultat</span> je konacan rezultat, a poslednji pomnozeni broj je <span style='color: green'>$poslednji_br</span>";
    
    echo "<br><br>Zadatak 3<br><br>";

    
    
    for ($i=30; $i<100; $i++) {
        $prva = floor($i / 10);        
        $druga = $i % 10;
        
        if ($prva % 3 == 0 || $druga % 4 == 0) {
            continue;
        }else {
            echo "$i, ";            
        }
    }
    
    
?>