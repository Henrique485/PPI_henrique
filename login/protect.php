<?php

if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("vc n pode acessar esta pagina pq n está logado.<p><a href=\"index.php\">Entrar</a></p>");
}

?>