<h2>Loop Foreach</h2><br/>

<?php 

$ingredientes = [ 
    'bolo',
    'arroz',
    'feijao',
    'abobora',
    'macarrao'
];

foreach($ingredientes as $chave => $ingrediente) {
    echo "Item ".($chave+1) .": ".$ingrediente."<br/>";
}

echo "----------";

echo "<ul>";
foreach($ingredientes as $ingrediente) {
    echo "<li>".$ingrediente."</li>";
}
echo "</ul>";


?>