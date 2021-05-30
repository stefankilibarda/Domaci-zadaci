<style>
    .red {
        color: red;
    }
    .green {
        color: green;
    }
    .blue {
        color: blue;
    }
    .yellow {
        color: yellow;
    }
    .oznacen {
        background-color: red;
        color: white;
    }
</style>

<?php 

    echo "Prvi zadatak<br><br><br>";

    function napravi_niz_1($a, $b){
        $y = [];
        $k = mt_rand(5,15);
        for($i=0; $i<$k; $i++)
            $y[$i] = mt_rand($a, $b);
        return $y;
    }



    $x = napravi_niz_1(9, 200);
    print_r($x);
    echo "<br><br>";

    

    $num = count($x);
    $brojac_d = 0;
    $brojac_t = 0;

    for($i=0; $i<$num; $i++) {
        if($x[$i] > 9 && $x[$i] < 100) {
            $brojac_d++;
        }elseif ($x[$i] > 99 & $x[$i] < 201) {
            $brojac_t++;
        }
    }
    

    if($brojac_d > $brojac_t){
        echo "Ima vise dvocifrenih brojeva";
    }else {
        echo "Ima vise trocifrenih brojeva";
        
    }

    echo "<br><br><br><br>Drugi zadatak<br><br><br><br>";


    $pal = array("civic", "level", "website", "radar", "smartphone", "noon", "function", "testing");
    
    
    print_r($pal);
    echo "<br><br>";

    function palindrome($arg) {
        $num = count($arg);
        for($i=0; $i<$num; $i++){
            if($arg[$i] == strrev($arg[$i])) {
                echo $arg[$i] . ", ";
            }
        }
    }
    palindrome($pal);



    echo "<br><br><br><br>Treci zadatak<br><br><br><br>";

    $reci = array("Stavka 1", "Stavka 2", "Stavka 3", "Stavka 4", "Stavka 5");
    
    
    print_r($reci);
    echo "<br><br>";

    function lista($arg, $word){
        
        echo "<ul>";
        foreach($arg as $ind=>$value) {
            if($arg[$ind] == $word) {
                echo "<li class='oznacen'>$value</li>";
            }else {
                echo "<li>$value</li>";
            }
        }
        echo "</ul>";
    }

    lista($reci, "Stavka 2");


    echo "<br><br><br><br>Peti zadatak<br><br><br><br>";

    $boje = array("red", "green", "blue", "yellow");
    $reci = array("sto", "stolica", "mobilni", "sat");

    $len_b = count($boje);
    $len_r = count($reci);
        

    print_r($boje);
    echo "<br>";
    print_r($reci);
    echo "<br><br>";

    

    for($i=0; $i<$len_r; $i++) {
        echo "<span class=" . $boje[$i] . ">" . $reci[$i] . "</span><br>";        
    }
  
?>