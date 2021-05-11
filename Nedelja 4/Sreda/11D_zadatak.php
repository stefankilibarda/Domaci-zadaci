<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            echo "Zadatak 1";

            $vrednost1 = 200;
            $vrednost2 = 80;

            $zbir = $vrednost1 + $vrednost2;
            $proizvod = $vrednost1 * $vrednost2;
            $razlika = $vrednost1 - $vrednost2;
            $kolicnik = $vrednost1 / $vrednost2;        
        ?>
        <br>
            <?php echo $zbir; ?>
        <br>
            <?php echo $proizvod; ?>
        <br>
            <?php echo $razlika; ?>
        <br>
            <?php echo $kolicnik; ?>
        <br>
        <br>
        <?php
            echo "Zadatak 2";

            $a = 7;
            $b = 3;
            $c = 9;

            $rezultat = $a + $b + $c;
        ?>
        <br>
        <?php 
            echo "Zbir brojeva " . $a . ", " . $b . " i " . $c . " je " . $rezultat . ".";
        ?>
        
    </body>
</html>