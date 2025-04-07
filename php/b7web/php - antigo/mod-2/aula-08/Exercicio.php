<h2>Exercicio Loop</h2><br/>

<?php 
$linha = 0;

while($linha < 10) {

    for($i=0;$i<10;$i++) {

        echo "-";

        if($i==9){ 
            echo "<br/>";
        }

    }
    $linha++;
}

?>