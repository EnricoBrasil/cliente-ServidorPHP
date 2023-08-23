<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Voce nao pode acessar essa pagina porque nao está logado. <p><a href=\"../index.php\">Entrar</p>");
}



?>