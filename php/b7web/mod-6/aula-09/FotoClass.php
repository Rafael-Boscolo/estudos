<?php

class Foto extends Post {
    private string $url;

    public function __construct($i) {
        return $this->setId($i);
    }

    public function setUrl($u) {
        $this->url = $u;
    }

    public function getUrl() {
        return $this->url;
    }
}