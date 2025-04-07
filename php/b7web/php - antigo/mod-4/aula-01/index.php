<?php 
session_start();

require_once('header.php');

if(isset($_SESSION['aviso'])) {
    echo '<h2 style="color: red;">'.$_SESSION['aviso'].'</h2>';
    $_SESSION['aviso'] = '';
}

?>

<a href="apagar.php"> Apagar Cookie</a>

<form action="recebedor.php" method="POST">

    <label for="">
        Nome:
        <br/>
        <input type="text" name="nome" >
    </label>
    <br/>
    <br/>

    <label for="">
        E-mail:
        <br/>
        <input type="text" name="email" >
    </label>
    <br/>
    <br/>

    <label for="">
        Idade:
        <br/>
        <input type="text" name="idade" >
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar" >

</form>