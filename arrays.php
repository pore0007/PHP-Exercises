<?php 
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ["Nachos", "Noodles", "Momos", "Maggi"];

/*
Print every array element in a new line.
*/
echo $food[0]; 
echo '<br />';

echo $food[1];
echo '<br />';

echo $food[2];
echo '<br />';

echo $food[3];
echo '<br />';

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
<li> $food[0] </li>
<li> $food[1] </li>
<li> $food[2] </li>
<li> $food[3] </li>
</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/


$food_assoc = [
    "Nachos" => "Appetizer", 
    "Noodles" => "Main Course",
    "Momos" => "Appetizer",
    "Maggi" => "Snack"
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach($food_assoc as $key => $value){
    echo $key." | ".$value."\n";
    echo '<br />';
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
 

$food_assoc["Nachos"] = [
    "Type" => "Appetizer",
    "Origin" => "Mexico",
];

$food_assoc["Noodles"] = [
    "Type" => "Main Course",
    "Origin" => "China",
];

$food_assoc["Momos"] = [
    "Type" => "Appetizer",
    "Origin" => "Nepal",
];

$food_assoc["Maggi"] = [
    "Type" => "Snack",
    "Origin" => "Switzerland",
];


/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

foreach ($food_assoc as $key => $value) { 
    echo '<br />';
    echo $key . "\n"; 
    foreach ($value as $sub_key => $sub_val) { 
                  
        if (is_array($sub_val)) { 
            echo $sub_key . " \n"; 
            
            foreach ($sub_val as $k => $v) { 
            
            }
        } else { 
            echo " | " . $sub_val . " \n"; 
        } 
    } 
} 

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

echo "<table border=1 cellspacing=0 cellpading=0>

<tr>
<th> food </th>
<th>type</th>
<th>origin</th>
</tr>

<tr>
<td>Nachos</td>
<td>Appetizer</td>
<td>Mexico</td>
</tr>

<tr>
<td>Noodles</td>
<td>Main Course</td>
/<td>China</td>
</tr>

<tr>
<td>Momos</td>
<td>Appetizer</td>
<td>Nepal</td>
</tr>

<tr>
<td>Maggi</td>
<td>Snack</td>
<td>Switzerland</td>
</tr>

</table>";

?>