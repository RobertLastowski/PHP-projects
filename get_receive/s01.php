<?php
    session_start();
?>

<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content = "text/html;charset=utf-8" />

<body>

    <?php
        $_SESSION['login'] = "Jasio";

    ?>

    <a href = s02.php>Klikij mnie aby przejsc do STRONY 2 </a>

</body>

</head>
</html>
