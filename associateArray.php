
<!-- type 2 associate array --no numner position number but instead we use key -->
<?php

$myArray = array("ben"=> 35, "cat"=> 40, "tom"=> 50); // value pair = key and value
echo $myArray["ben"];// instead of posiiton 0123 we use key insted to get value from array

// for each loop in associate array
// i will call all value by x
foreach($myArray as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
?>