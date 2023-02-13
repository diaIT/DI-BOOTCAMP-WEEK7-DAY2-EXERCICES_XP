<?php 

//Create a function, myFunction, using the given code.

function MyFunction($myint)
{
    //Using your created function, verify if 2.5 is a valid integer.

    if (filter_var($myint, FILTER_VALIDATE_INT)===0 ||!filter_var($myint, FILTER_VALIDATE_INT)===false) {
       echo "$myint is a valid integer";

    } else {
        echo"$myint is not a valid integer";
    }
    
//Print Validation Complete after validating, using the finally block.
 
}
 try {

    MyFunction(2.5);
     
 } 
 catch (Exception $e) {
    echo "Try again.";
     
 }
 finally{
     echo "<br>";
    echo "Validation Complete";
 }

 ?>