<?php
$number = 3;

// for($i=1; $i <= 10; $i++) {
//     $total = $number * $i;
//     echo $number." x ". $i." = ".$total."<br/>";

//     if($i == 5) {
//         // break;
//         continue;
//     }
// }

// i e j
for($i=1; $i<= 10; $i++) {
    for($j=1; $j<=10; $j++) {
        if($j == 10){
            echo $i."x".$j." = ".$i*$j."<br/>";
        } else {
            echo $i." x ".$j." = ".$i*$j."<br/>";
        }
    }
    echo "--------------------<br/>";
}

?>