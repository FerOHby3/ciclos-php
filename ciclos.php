<?php
setcookie("usuario", "juan", time()+(86400*30), "/");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<title>Ciclo For en PHP </title>
</head>
<body>
    <h1>Ciclo for</h1>
    
    <ul>
        <?php
        for ($i =1; $i <=5; $i++) {
            echo "<li> Elemento $i </li>";
        }

        ?>
        <h1>Cookie Set</h1>
        <?php
        if (isset($_COOKIE["usuario"])) {
            echo "Cookie 'usuario' esta configurada. Valor: " .
    $_COOKIE["usuario"];
    } else {
        echo "Cookie 'usuario' no esta configurada.";
    }   
    ?>
    </ul>
</body>
</html>