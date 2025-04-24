<?php

session_start();

    if(!isset($_SESSION['Usuario'])){
        header("Location: Login.php?erro=true");
        exit;
    }
    echo "<body style='background-color:lightblue'>
    <h1>Clientes</h1>
    </body>";

?>