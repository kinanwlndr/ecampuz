<?php
$x=1;
for ($x=1; $x <=50 ; $x++) { 
    if ($x % 3 != 0 && $x % 5 != 0) {
        echo $x . "<br>";
        continue;
    }
    if ($x % 3 == 0) {
        echo "Foo";
    }
    if ($x % 5 == 0) {
        echo "Bar";
    }
    echo "<br>";
}


?>