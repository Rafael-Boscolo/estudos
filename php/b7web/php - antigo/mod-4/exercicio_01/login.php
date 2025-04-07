<?php
    session_start();

    if(isset($_SESSION['aviso'])) {
        echo '<h2>'.$_SESSION['aviso'].'</h2>';
        $_SESSION['aviso'] = '';
    }
?>

<form action="index.php" method="POST">
    <label for="">
        NOME:
        <br/>
        <input type="text" name="nome" >

        <br/>
        <input type="submit" value="Salvar">
    </label>
</form>