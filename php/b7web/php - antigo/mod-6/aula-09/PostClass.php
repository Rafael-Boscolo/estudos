<h2>Entendendo Herança - PAI</h2><hr/>
<?php
class Post {
    private $id;
    private $likes;

    public function setId($i) {
        $this->id = $i;
    }

    public function getId() {
        return $this->id;
    }

    public function setLikes($n) {
        $this->likes = $n;
    }

    public function getLikes() {
        return $this->likes;
    }

}