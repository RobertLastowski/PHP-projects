<?php
    session_start();
?>

<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content = "text/html;charset=utf-8" />

<body>

    <?php

        echo  "LOGIN: ".$_SESSION['login'];

    ?>
    <div></div>
    <a href = s01.php>Klikij mnie aby przejsc do STRONY 1 </a>

</body>

</head>
</html>
