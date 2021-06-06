<?php

    $x = [ 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
    ];

    echo "<p>---------------------<p/>";
    echo "<p>a) dodavanje godina staza<p/>";

    $x = array_map(function($osoba){
        for($i=0; $i<4; $i++) {
            $osoba['godine_staza'] = mt_rand(1, 3);
        }
        return $osoba;
    }, $x);

    echo "<pre>";
    print_r($x);
    echo "</pre>";

    echo "<p>---------------------<p/>";
    echo "<p>b) sortiranje po godinama staza<p/>";

    usort($x, function($a, $b){
        if($a['godine_staza'] > $b['godine_staza']) {
            return -1;
        }
        elseif($a['godine_staza'] == $b['godine_staza']) {
            if($a['godine'] > $b['godine']){
                return -1;
            }else {
                return 1;
            }        
        }else {
            return 1;
        }
    });

    function prikazi_osobu($osoba){
        foreach($osoba as $o){
            echo "<p>" . join(", ", $o) . "</p>";
        }
    }
    prikazi_osobu($x);

    

    echo "<p>---------------------<p/>";
    echo "<p>c) niz po godinama staza<p/>";

    $max = 0;

   function max_gs($osoba) {
        global $max;
        $niz = [];
        foreach($osoba as $el) {
            if($max < $el['godine_staza']) {
                $max = $el['godine_staza'];
            }
        }       
        
        $niz =    array_filter($osoba, function($o){
            global $max;
        
           
                if($o['godine_staza'] == $max){
                    return $o;
                }
            });
        
        return $niz;        
   }
   $max = max_gs($x);
   echo "<pre>";
   var_dump($max);
   echo "</pre>";
   

   
       
   
?>