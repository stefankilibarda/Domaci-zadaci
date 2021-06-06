<!DOCTYPE html>
<?php
    include_once 'proizvod.php';

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            proizvod("huaweip40.jpg", "Huawei P40", 500, 40);        
            proizvod("iphone12.jpg", "Apple iPhone 12", 800, 80);        
            proizvod("samsunggalaxys20.jpg", "Samsung Galaxy S20", 575);        
        ?>
    </body>
</html>