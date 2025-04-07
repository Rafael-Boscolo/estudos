<?php

$expiracao = time() - 3600;
setcookie('nome', '', $expiracao);

header('Location: index.php');
exit;