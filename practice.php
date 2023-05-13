<?php
//1. We need Array datas (Declare an array);
//2. Loop needed (Reverse loop);
//3. Need an array to store values;
//4. try to access by index;
//5. Any doubt print_r 



// 1. Swap two number inside the array;
// 2. Loop;


$input = [1,2,3];
$results = [];
for($i=0; $i<count($input); $i++){
    // print_r($input[$i]);
    if($input[$i] < $input[$i+1]){
        // $results[] =($input[$i]);
        $a = $input[$i];
        $b =  $input[$i+1];
        
        $input[$i] = $b;
        $input[$i+1] = $a;
        array_push($results,$input);
    }
    if($input[$i] < $input[$i+2]){
        // $results[] =($input[$i]);
        $a = $input[$i];
        $b =  $input[$i+2];
        
        $input[$i] = $b;
        $input[$i+2] = $a;
        array_push($results,$input);
    }

    // else{
    //     array_push($results,$input);
    // }   
    
}
print_r($results);




















//Index accessing method
// $input = [1,2,3];
// $results = [];
// for($i=0; $i<count($input)-1; $i++){
//     // print_r($input[2]);
//     if($input[$i] < $input[1]){
//         // $results[] =($input[$i]);
//         $a = $input[$i];
//         $b =  $input[1];
        
//         $input[$i] = $b;
//         $input[1] = $a;
//         array_push($results,$input);
//     }
//     if($input[$i] < $input[2]){
//         // $results[] =($input[$i]);
//         $a = $input[$i];
//         $b =  $input[2];
        
//         $input[$i] = $b;
//         $input[2] = $a;
//         array_push($results,$input);
//     }

//     else{
//         array_push($results,$input);
//     }   
    
// }
// print_r($results);
// print_r($results);

// else{
//     print_r($results);
// }    
