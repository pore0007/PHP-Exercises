<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$counter = 1;
while ($counter <= 10) {
	echo $counter ." "; 
	$counter++;
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

$arr = range(5,100,5); 
  
foreach ($arr as $a) { 
      
    echo "$a "; 
} 

echo "</br >";

/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

 $i=5;
        while($i <= 100){
            if($i % 2 == 0){
            $i." "; //even
            }else{
                echo $i." "; //odd
                 }
            $i++;
        }

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ["Nachos", "Noodles", "Momos", "Maggi"];

/*
Use while-loop to print array elements (every food in a new row).
*/

    $arrayLength = count($food);

    $i = 0;
    while ($i < $arrayLength){
        echo $food[$i] ."<br />";
        $i++;
    }
    
echo '<br>';
/*
Use for-loop to print array elements (every food in a new row).
*/

        for ($i = 0; $i < count($food); $i++)  {
            echo $food[$i] ."<br />";
        }

echo '<br>';
/*
Use foreach-loop to print array elements (every food in a new row).
*/

    foreach ($food as $foodlist)  {
        echo $foodlist ."<br />";
        }


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/

    echo "<ul>";
        $food = ["Nachos", "Noodles", "Momos", "Maggi"];
    for($i=0; $i<count($food); $i++) {  //end when $i is larger than amount of people
        echo "  <li>{$food[$i]}</li>\n";
    }
        echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

$food_assoc = [
  "Nachos" => [
    "type" => "Appetizer",
    "origin" => "Mexico"
  ],
  "Noodles" => [
    "type" => "Main Course",
    "origin" => "China"
  ],
    "Momos" => [
    "type" => "Appetizer",
    "origin" => "Nepal"
  ],
    "Maggi" => [
    "type" => "Snack",
    "origin" => "Switzerland"
  ]
];

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

echo '<pre>'; 
print_r($food_assoc); 
echo '</pre>';

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/
echo "<h3>My favourite meals</h3>";
echo '<ul>';
    foreach ($food_assoc as $key => $value) {
        echo '<li>' . $key . '</li>';
        echo '<ul>';
    foreach ($value as $subkey => $subvalue) {
        echo '<li>' . $subkey . ":" . $subvalue . '</li>';
    }
        echo '</ul>';
    }
        echo '</ul>';
?>