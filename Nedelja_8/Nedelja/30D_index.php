<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size:1.5em">   
    
    <?php
        include "30D_Proizvod.php";
        $grupa = (isset($_GET['grupa']))? $_GET['grupa'] : "";
        $website->header();
        $website->meni($podaci);
        $lp->prikazi_sve_proizvode($grupa);
        $website->footer();


    

    ?>
    
</body>
</html>