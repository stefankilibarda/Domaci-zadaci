<style>
    .kontejner_proizvoda {
        border: 2px solid black;
        width: 200px;
        display:  inline-block;      
        padding: 10px 10px;
        margin: 2px;
        
    }
    .slika {
        width: 200px;
        height: 200px;
    }
    .cena_bez_popusta {
        color: red;
        text-decoration: line-through;
    }
    .p_veci {
        color: green;
    }
</style>

<?php

    function proizvod($slika, $ime, $cena, $popust=0) {
        echo "<div class='kontejner_proizvoda'>";
        echo "<img src='$slika' alt='$ime' class='slika'/>";
        echo "<p class='naziv_proizvoda'>$ime</p>";
            if($popust > 0) {
                $nova_cena = $cena - $popust;
                echo "<p class='cena_bez_popusta'>$cena</p>";
                echo "<p class='p_veci'>$nova_cena</p>";
            }else {
                echo "<p>$cena</p>";
            }
        echo "</div>";

    }


?>