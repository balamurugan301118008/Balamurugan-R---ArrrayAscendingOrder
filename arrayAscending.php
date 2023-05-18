<?php

$input = [2,32,1];
$finalResults = [];
for($i=0; $i<count($input); $i++){
    if($input[$i] < $input[1]){
        $swapOne = $input[$i];
        $swapTwo =  $input[1];
        $input[1] = $swapOne;
        $input[$i] = $swapTwo;
        array_push($finalResults,$input);
    }
    if($input[1] < $input[2]){
        $swapOne = $input[1];
        $swapTwo =  $input[2];
        $input[1] = $swapTwo;
        $input[2] = $swapOne;
        array_push($finalResults,$input);
    }
}
print_r($finalResults);
    
// 1.) declare a array for storing inputs (for instance $input = [1,2,5];)
// 2.) loop the array for split the inputs 
// 3.) then, as far as I know access via index method to the array values
// 4.) 
// if i expected that output then I will minimize the code  

// For example: 
// Input [1, 2, 5]

// Output
// [1, 5, 2]
// [5, 1, 2]
// [5, 2, 1] -->













