<?php

if(isset($_COOKIE['nome'])) {
    setcookie('nome', '', time() - 3600);
}

header('Location: login.php');
exit;