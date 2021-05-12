<?php

    $first = mt_rand(1, 10);
    $second = mt_rand(1, 10);
    $third = mt_rand(1, 10);

    $first_sqr = pow($first, 2);
    $second_sqr = pow($second, 2);
    $third_sqr = pow($third, 2);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table {
                border: 1px solid black;
                border-collapse: collapse;
            }
            td {
                border: 1px solid black;
                width: 70px;
                height: 60px;     
                padding-left: 10px;          
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td><?= $first; ?></td>
                <td><?= $first_sqr ?></td>
            </tr>
            <tr>
                <td><?=  $second ?></td>
                <td><?= $second_sqr ?></td>
            </tr>
            <tr>
                <td><?= $third ?></td>
                <td><?= $third_sqr ?></td>
            </tr>            
        </table>
    </body>
</html>