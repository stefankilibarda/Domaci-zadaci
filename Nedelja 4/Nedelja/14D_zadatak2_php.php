<?php

    $ime_prezime = $_GET['ime_prezime'];

    $inicijal_ime = substr($ime_prezime, 0, 1);
    $inicijal_prezime = substr($ime_prezime, strpos($ime_prezime, " "), 2);
    echo "$inicijal_ime.$inicijal_prezime.";
    
?>