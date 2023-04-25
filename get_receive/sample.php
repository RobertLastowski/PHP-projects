<?php

if(isset($_GET['n']))
    $n = $_GET['n'];
else
    $n=1;

if($n==1)$obrazek = "1.png";
if($n==2)$obrazek = "2.png";
if($n==3)$obrazek = "3.png";

echo "<img src ='img/$obrazek' alt=''/>" 

?>