<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        .red {
            color: red;
        }
        .green {
            color: green;
        }
        </style>
    </head>
    <body>
        <?php
            echo "Prvi zadatak <br><br><br>";

            $a = mt_rand(1, 1000);
            $b = mt_rand(1, 1000);    
            echo "$a, $b <br>";

            if ($a > $b) {
                echo "<p style='color: green'>$a</p>";
                echo "<p style='color: red'>$b</p>";
            }else {
                echo "<p style='color: green'>$b</p>";
                echo "<p style='color: red'>$a</p>";
            }
                        

            if ($a > $b) {
                $bojaA = "green";
                $bojaB = "red";               
            }else {
                $bojaA = "red";   
                $bojaB = "green"             ;
            }     
            
            echo "<p class='$bojaA'>$a</p><br>";
            echo "<p class='$bojaB'>$b</p><br>";
            
            echo "<br><br><br>";
        ?>
        

        <?php
            echo "Drugi zadatak <br><br><br>";
            $br1 = mt_rand(1, 10000);
            $br2 = mt_rand(1, 10000);
            $br3 = mt_rand(1, 10000);
            echo "Random brojevi su: $br1, $br2, $br3 <br><br>";

            if ($br1 < $br2 && $br1 < $br3) {
                echo "$br1, ";
                if($br2 < $br3) {
                    echo "$br2, $br3";
                }else {
                    echo "$br3, $br2";
                }
            }elseif ($br2 < $br3) {
                echo "$br2, ";
                if ($br1 < $br3) {
                    echo "$br1, $br3";
                }else {
                    echo "$br3, $br1";
                }
            }else {
                echo "$br3, ";
                if ($br1 < $br2) {
                    echo "$br1, $br2";
                }else {
                    echo "$br2, $br1";
                }
            }

        ?>
    </body>
</html>