<?php
    session_start();
    if ($_POST['usuari'] == 'user' && $_POST['contrasenya'] == 'pass') {
        $_SESSION['usu_nom'] = 'user';
        header('Location: ../01_Superglobals/superglobals.php');
    } else {
        echo "Usuari i/o paraula clau incorrectes!";
    }
?>
