<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabela {
            border: 1px solid black;
            border-collapse: collapse;

        }
        .celija_prvi {
            border: 1px solid black;
            padding: 10px;
            padding-right: 50px;
        }
        .celija_drugi {
            height: 30px;
            width: 30px;
            border: 1px solid black;
        }
        .obojena{
            background-color:black;
        }
    </style>
</head>
<body>
    
    <?php

        echo "Prvi zadatak<br><br><br>";

        echo "<table class='tabela'>";
        for ($i=2; $i<=6; $i+=2) {
            echo "<tr>";
            for($j=3; $j<=12; $j+=3){
            echo "<td class='celija_prvi'>$i - $j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";


        echo "<br><br><br>Drugi zadatak<br><br><br>";

        $num = mt_rand(1, 64);
        echo "Slucajan broj je: $num <br><br>";

        $brojac = 0;

        echo "<table class='tabela'>";
        for ($i=0; $i<8; $i++) {
            echo "<tr>";            
            for ($j=0; $j<8; $j++) {
                $brojac++;
                if($num != $brojac){
                    $boja = "";
                }else {
                    $boja = "obojena";
                }
                echo "<td class='celija_drugi $boja'></td>";
                
            }
            echo "</tr>";
        }
        echo "</table>";


    ?>

</body>
</html>