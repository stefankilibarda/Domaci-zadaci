<?php
    
    $ime = $_GET['ime'];    
    $prezime = $_GET['prezime'];

    $inicijal_ime = substr($ime, 0, 1);
    $inicijal_prezime = substr($prezime, 0, 1);
    echo "$inicijal_ime.$inicijal_prezime.";
?>