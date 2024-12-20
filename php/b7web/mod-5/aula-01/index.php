<h2>Array Range => range()</h2><hr/>

<?php 


$array = range(1, 30);

echo '<pre>';
print_r($array);

for($i=1; $i<=3; $i++) {
    foreach($array as $denominador) {
        $total = $i * $denominador; 
        echo "$i * $denominador = $total <br/>";
    }
    echo '<hr/>';
}

// TESTE

// $array = [ 1, 2, 3];

// foreach($array as $item) {
//     echo $item.'<br/>';
// }


// echo '<pre>';
// print_r($array);

// echo '</pre>';