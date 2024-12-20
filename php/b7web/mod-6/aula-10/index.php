<?php
require_once('PostClass.php');
require_once('FotoClass.php');
require_once('TextoClass.php');

$post = new Foto(2);
$post->setUrl('abc');

$post1 = new Texto(2);
$post1->setText('Ola mundo');


echo "POST ".$post->getId()." - Likes: ". $post->getLikes()." - ULR: ".$post->getUrl()."<br/>";
echo "TEXTO: ".$post1->getText();