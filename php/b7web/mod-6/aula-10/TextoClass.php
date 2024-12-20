<?php

class Texto extends Post {
    private string $text;

    public function setText($t) {
        $this->text = $t;
    }

    public function getText() {
        return $this->text;
    }

    public function __construct($i) {
        return $this->setId($i);
    }

}