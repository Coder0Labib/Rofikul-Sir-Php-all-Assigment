<?php
echo  "<br>";
  // Question 02 Assignment : Question 02: 
	//If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100
  // You have to rotate from 1 to 100.
  // Your output message should like that, “3 is a odd number”
  // Not need to print even number
echo  "Question 02 Assignment";
echo  "<br>";
   $end=100;
   $odd="is a odd number";
    for($i=1;$i<$end;$i++)
   {
     if($i%2!=0){
           echo  "$i $odd <br>";
      }   
    }
    echo  "<br>";
    echo  "<br>";

// Factorial - I think everyone knows the word. Factorial of 4 is given below:
// 4! = 4*3*2*1 = 24
// 6! = 6*5*4*3*2*1 = 720  
// So let’s calculate the factorial of 7.

    echo  "Question 03 Assignment";
    $num = 7;  
    $factorial = 1;  
    for ($x = $factorial; $x <= $num; $x++)   
    {  
      $factorial = $factorial * $x;  
    }  
    echo  "<br>";
    echo "Factorial of $num is $factorial ";  
    echo  "<br>";
    echo  "<br>";
   
// Question 04 Assignment : 
// Question 04: 
// Print out from 100 - 1 using a while loop. 
// You must use decrement operator

    echo  "Question 04 Assignment";
    echo  "<br>";
    $x = 100;
    while ( $x>=1) {
          echo "$x <br>";
          $x--;
    } 
    echo  "<br>";
    echo  "<br>";
// Question 05: 
// You have an array of your purchased product items. 
// ['apple', 'orange', 'banana', 'mango']
// Show all products as a table list.
// Output should like that: “sl- 1 and product - apple”

  $Products = [ 'orange', 'banana', 'mango' ,'apple'];
  // var_dump ($Products);
  // array(4) { 
  //   [0]=> string(5) "apple"
  //   [1]=> string(6) "orange"
  //   [2]=> string(6) "banana"
  //   [3]=> string(5) "mango" }
 foreach($Products as $key => $value)
   {
   if(++$key){echo "sl $key and product- $value";
   echo "<br>";}
 }
?>