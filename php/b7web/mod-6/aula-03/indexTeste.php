<h2>Método Contstrutor</h2><br/>

<?php 
class Post {
    public $id;
    public int $likes = 0;
    public array $coments = [];
    public string $author;

    public function __construct($postId) {
        $this->id = $postId;
        $this->likes = 12 * $postId;
    }

    public function aumentarLike() {
        $this->likes++;
    }

}

$post1 = new Post(1);
// $post1->aumentarLike();
$post2 = new Post(2);

echo 'POST 1: '.$post1->likes.'<br/>';
echo 'POST 2: '.$post2->likes.'<br/>';
