<h2>Entendendo Injeção de Dependência:</h2>
<hr/>

<?php
interface MatematicaBasica {

    public function somar($x,$y);
}

class Basico1 implements MatematicaBasica{

    public function somar($x, $y) {
        return $x + $y;
    }
}

class Basico2 implements MatematicaBasica{

    public function somar ($x, $y) {
        $res = $x;
        for($i=0;$i<$y;$i++) {
            $res++;
        }
        return $res;
    }

}

class Matematica{
    private $basic;

    public function __construct($b) {
        $this->basic = $b;
    }

    public function somar($x,$y) {
        return $this->basic->somar($x, $y);
    }
}

$a = new Matematica(new Basico2());
echo $a->somar(10,2). '<br/>';
