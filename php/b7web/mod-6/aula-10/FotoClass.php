<?php

class Foto extends Post {
    private string $url;

    public function __construct($i) {
        $this->setId($i);
        $this->setLikes(77);
    }

    public function setUrl($u) {
        $this->url = $u;
    }

    public function getUrl() {
        return $this->url;
    }


}