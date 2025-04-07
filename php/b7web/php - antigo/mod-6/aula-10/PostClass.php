<h2>Entendendo Herança - PAI</h2><hr/>
<?php
class Post {
    private int $id;
    private int $likes;

    protected function setId($i) {
        $this->id = $i;
    }

    public function getId() {
        return $this->id;
    }

    protected function setLikes($n) {
        $this->likes = $n;
    }

    public function getLikes() {
        return $this->likes;
    }

}