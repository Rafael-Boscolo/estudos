<?php

class Divisao {
    private int $year;

    public function dividirAno() {
        return $this->year;
    }

    public function __construct($b){
        $this->year = $b /2;
    }
}