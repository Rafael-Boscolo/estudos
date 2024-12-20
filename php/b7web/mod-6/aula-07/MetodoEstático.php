<h2>Método Estático</h2><br/>

<?php 

class Matematica {

    public static function somar($a, $b) {
        return $a +$b;
    }

}

echo Matematica::somar(3, 9) ;