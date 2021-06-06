<?php

    $x = [
        ["ime"=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ["ime"=>"Ivana", "godine"=>20, "grad"=>"BG", "pozicija"=>"dizajner"],
        ["ime"=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ["ime"=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"],
        ["ime"=>"Milan", "godine"=>27, "grad"=>"SU", "pozicija"=>"tester"],
        ["ime"=>"Jovana", "godine"=>31, "grad"=>"NS", "pozicija"=>"HR"],
        ["ime"=>"Branislav", "godine"=>30, "grad"=>"BG", "pozicija"=>"data analyst"],
        ["ime"=>"Nikola", "godine"=>42, "grad"=>"SU", "pozicija"=>"programer"]        
    ];   

    echo "<p>==========================</p>";
    echo "<p>Prikaz imena svih programera<p>";

    function programeri($x) {
        foreach($x as $niz) {
            if($niz['pozicija'] == 'programer'){
                echo $niz['ime'] . ", ";
            }
        }
    }

    programeri($x);


    echo "<p>==========================</p>";
    echo "<p>Prikaz podataka date osobe i sve osobe cije ime sadrzi slovo s<p>";

    function svi_podaci($x, $osoba) {
        $imena = [];
        foreach($x as $el) {
            if($el['ime'] == $osoba) {
                echo join(", ", $el);  
                
            }
            if(str_contains(strtolower($el['ime']), "s")){
                array_push($imena, $el['ime']);
            }
            
        }
        
        echo "<p>" .join(", ", $imena) . "</p>";
    }

    svi_podaci($x, "Branislav")
?>