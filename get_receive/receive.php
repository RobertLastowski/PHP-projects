<?php

    // var_dump($_POST);
    // // $hero_imie = $_GET["imie"];
    // $hero_imie = $_POST["imie"];

    // echo $hero_imie;

    var_dump($_GET);
    $sql = "insert intouser (imie, plec, oczy)values('".$_GET['imie']."','".$_GET['sex']."','".$_GET['eyes'].")";

    echo $sql;
?>