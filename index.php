
<!-- 2 type 
1type  index array every number have number 0123 attch to value
 2 type associate array each value we donot attach number but name or key attach to each value of array -->

<?php
//type 1
$total = 0;// we total all number
$myArray = array(1,2,3,4,5);
// echo $myArray[4]; call only one value

//call all value

for($i=0; $i<5; $i++){
    $total = $total + $myArray[$i]; //line 8 and this line make total for the whole number
    //echo $myArray[$i]." "; we use . insted of + for connect in php -- print all
//echo $myArray[$i]*2 . " ";  all number mutiply by 2


}
//we print $total outside loop to know final total number
echo $total; 


//line 24 count is a function is function to count all value on the array--5 position
$l = count($myArray);
echo "<br>".$l ;

?>

