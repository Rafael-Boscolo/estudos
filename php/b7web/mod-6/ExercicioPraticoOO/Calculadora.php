<?php
class Calculadora {
    public float $total;

    public function __construct() {
        return $this->total = 0;
    }

    public function add($number) {
        $this->total = $this->total + $number;
    }

    public function sub($number) {
        $this->total = $this->total - $number;
    }

    public function mult($number) {
        $this->total = $this->total * $number;
    }

    public function div($number) {
        $this->total = $this->total / $number;
    }

    public function total() {
        return $this->total;
    }

    public function clear() {
        $this->total = 0;
    }

}