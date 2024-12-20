<h2>Encapsulamento</h2><br/>

<?php 
class Post {
    private $id;
    private int $likes = 0;
    private array $coments = [];
    private string $author;

    public function __construct($postId) {
        $this->id = $postId;
        $this->likes = 12 * $postId;
    }

    public function setAuthor($nome) {
        $this->author = $nome;
    }
    public function getAuthor() {
        return $this->author ?? 'Visitante';
    }

    public function setLikes($lk) {
        $this->likes = $lk;
    }
    public function getLikes() {
        return $this->likes;
    }

}

$post1 = new Post(1);
$post1->setAuthor('Rafael');

$post2 = new Post(2);
$post2->setAuthor('');

echo 'POST 1:'.$post1->getLikes().' - '.$post1->getAuthor().' <br/>';
echo 'POST 2:'.$post2->getLikes().' - '.$post2->getAuthor().' <br/>';
