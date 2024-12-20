<h2>CABEÇALHO FORMULÁRIO</h2>
<?php
    if(isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
        echo "<h2> $nome </h2>";
    }
?>
<hr/>