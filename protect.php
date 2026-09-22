<?php

if (!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])){
    die("Você não tem acesso a esta página. Você não está logado. <a href=\"index.php\">Logar?</a>");
    session_destroy();
}
?>