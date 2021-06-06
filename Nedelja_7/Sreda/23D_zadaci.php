<style>
    .red {
        color: red;
    }
    .green {
        color: green;
    }
</style>

<?php 

    echo "Prvi zadatak<br><br><br>";



    $niz1 = ["sveska", "flasa", "mis", "novcanik", "naocare", "pas", "sat", "kauc"];
    
    function pravi_span($niz1) {
        $len = count($niz1);

        for($i=0; $i<$len; $i++) {
            if (strlen($niz1[$i]) < 5) {
                echo "<span class='red'>" . $niz1[$i] . ", </span>";
            }elseif (strlen($niz1[$i]) > 5) {
                echo "<span class='green'>" . $niz1[$i] . ", </span>";
            }
        }
    }

    pravi_span($niz1);






    echo "<br><br><br>Drugi zadatak<br><br><br>";



    function napravi_niz_1($a, $b){
        $y = [];
        $k = mt_rand(5,15);
        for($i=0; $i<$k; $i++)
            $y[$i] = mt_rand($a, $b);
        return $y;
    }

    $x = napravi_niz_1(1, 30);
    echo "Originalni niz je: " . join(", ", $x);
    echo "<br>";

    


    function novi_niz($x){
        $len = count($x);
        $sum = array_sum($x);
        $avg = $sum / $len;
        $y = [];


        for($i=0; $i<$len; $i++) {
            if($x[$i] > $avg) {
                array_push($y, $x[$i]);
            }else {
                continue;
            }
        }
        return $y;
    }
    $novi_niz = novi_niz($x);
    echo "Novi niz sa svim brojevima koji su veci od aritmeticke sredine originalnog niza: " . join(", ", $novi_niz);







    echo "<br><br><br>Treci zadatak<br><br><br>";


    echo "a)<br><br>";


    $niz = $_GET['niz'];

    function ucitavanje_niza($niz) {
        
        $niz = explode(" ", $niz);
        return $niz;
    }

    $x = ucitavanje_niza($niz);
    echo join(",", $x);
    
    
    echo "<br><br>b)<br><br>";


    $arr = [2, 1, 3, 8, 6, 16, 18];

    function tri_parna($arr) {
        $brojac = 0;        
        $len = count($arr);
        $parni = false;

        for($i=0; $i<$len; $i++) {
            if((int)$arr[$i] % 2 == 0) {
                $brojac++;
            }
        }
        if($brojac > 3) {            
            $parni = true;
        }
        return $parni;
    }

    if(tri_parna($arr)){
        echo "Dati niz IMA vise od tri parna broja";
    }else {
        echo "Dati niz NEMA vise od tri parna broja";
    }


    echo "<br><br>c)<br><br>";



    $arr2 = [2, 8, 3, 9, 12, 21, 16];

    function manji_od_1000($arr2) {
        $ima = true;

        for($i=0; $i<count($arr2); $i++) {
            if($arr2[$i] > 1000) {
                $ima = false;                
            }
        }
        return $ima;
    }
    if(manji_od_1000($arr2)){
        echo "Svi brojevi u datom nizu su manji od 1000";
    }else {
        echo "U datom nizu postoji broj je veci od 1000";
    }


    echo "<br><br>d)<br><br>";
    

    function provera_inputa($niz) {
        $prolaz = false;
        $niz = explode(" ", $niz);
        

        
        if(manji_od_1000($niz) === true && tri_parna($niz) === true) {            
            $prolaz = true;         
        }
        
        return $prolaz;
    }

    echo "Niz je: $niz <br>";

    if(provera_inputa($niz)) {
        echo "Niz ispunjava uslove";
    }else {
        echo "Nije ispunio uslove";
    }
?>