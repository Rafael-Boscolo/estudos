<?php 
require('header.php');
?>

<form action="recebedor.php" method="POST">
    <label for="">
        Nome:
        <br/>
        <input type="text" name="nome" >
    </label>
    <br/>
    <br/>

    <label for="">
        Senha:
        <br/>
        <input type="password" name="idade" >
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar" >

</form>