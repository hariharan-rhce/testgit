<?php  

echo "this is testing";
$alpha = range('A', 'Z');  
for($i=0; $i<5; $i++){   
  for($j=5; $j>$i; $j--){  
    echo $alpha[$i];  
    }  
    echo "<br>";  
}  
echo "has bben completed";
?>  
