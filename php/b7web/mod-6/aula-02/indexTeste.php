<h2>Definindo Classes e Objetos</h2><br/>

<?php 
class Post {
    public int $likes = 0;
    public array $coments = [];
    public string $author;

    public function aumentarLike() {
        $this->likes++;
    }

}

$post1 = new Post();
$post1->coments = ['Rafael tudo joia', 'Lacerda'];
$post1->aumentarLike();





$post1->likes = 10;

echo $post1;

for($i=0; $i<=10; $i++) {
    $post1->aumentarLike();
    
    echo 'Total de curtidas atual:'.$post1->likes.'<br/>';
}




$post2 = new Post();

echo 'POST 1:'.$post1->likes.'<br/>';
echo 'POST 2:'.$post2->likes.'<br/>';

echo '<hr/>';

echo '<pre>';
print_r($post1);

echo $post1->coments[1];