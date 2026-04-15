<?php
# functions
function greet() {
    echo "Hello, welcome to PHP programming! <br>";
}

greet(); // calling the function

# parameters and arguments
function greetPerson($name) {
    echo "Hello, $name! <br>";
}
greetPerson("Kibirige"); // calling the function with an argument
greetPerson("Shafiq");

#multiple parameters
function add($a, $b) {
    echo $a + $b . "<br>"; 
}
add(5, 10); // outputs 15
add(3, 7); // outputs 10

#default parameters
function greetuser($name = "Guest") {
    echo "Hello, $name! <br>";
}
greetuser(); // uses default value "Guest"
greetuser("Babe"); // overrides default value with "Alice"

# return values
function multiply($x, $y) {
    return $x * $y;
}
$result = multiply(4, 5); // returns 20
echo "The result of multiplication is: $result <br>";
# note: once return is executed, the function exits and any code after return will not be executed

# variable scope
# local scope: variables defined inside a function are not accessible outside the function
function myFunc() {
    $message = "I am local ";
    echo $message . "<br>";
}

myFunc();
# echo $message;

# global scope: variables defined outside of functions are accessible globally
$sitename = "Shafiq";
function displaySite() {
    global $sitename; // to access global variable inside function, we need to declare it
    echo "Welcome to $sitename! <br>";
}
displaySite();
echo "The site name is: $sitename <br>"; // we can access global variable outside the function without any issues
# static variables: retain their value between function calls
function counter() {
    static $count = 0; // static variable initialized only once
    $count++;
    echo "Counter: $count <br>";
}
counter(); // Counter: 1
counter(); // Counter: 2
counter(); // Counter: 3

# arrays
# indexed arrays
$fruits = ["apple", "banana", "orange"];
echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[2] . "<br>";
# echo $fruits[-1] . "<br>";
# associative arrays key-value pairs
$student = [
    "name" => "Kimuli", 
    "age" => 30,
    "score" => 87
];

echo "Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Score: " . $student["score"] . "<br>";

# multidimensional arrays arrays containing other arrays
$students = [
    [ "name" => "Isaac", "age" => 30, "score" => 85 ],
    [ "name" => "Wyclif", "age" => 25, "score" => 90 ],
    [ "name" => "Kevin", "age" => 28, "score" => 92 ]
]; 
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Score: " . $student["score"] . "<br>";
}
# common array functions
# adding and removing elements
$colors = ["red", "green", "blue"];
array_push($colors, "yellow"); // adds "yellow" to the end of the array
array_pop($colors); // removes the last element ("yellow")
echo implode(", ", $colors) . "<br>";

array_unshift($colors, "purple"); // adds "purple" to the beginning of the array
array_shift($colors); // removes the first element ("purple")
echo implode(", ", $colors) . "<br>";
$numbers = [5, 2, 9, 1, 5];
echo count($numbers) . "<br>";
sort($numbers); // sorts the array in ascending order
echo implode(", ", $numbers) . "<br>";
rsort($numbers); // sorts the array in descending order
echo implode(", ", $numbers) . "<br>"; 
echo in_array(5, $numbers) ? "5 is in the array <br>" : "5 is not in the array <br>";
echo in_array(3, $numbers) ? "3 is in the array <br>" : "3 is not in the array <br>"; 
$doubled = array_map(fn($n) => $n * 2, $numbers); // creates a new array with each element doubled
echo implode(", ", $doubled) . "<br>";
$evens = array_filter($numbers, fn($n) => $n % 2 == 0); // creates a new array with only even numbers
echo implode(", ", $evens) . "<br>";    
# associative array functions
$person = ["name" => "Pasha", "age" => 12, "score" => 85];
print_r(array_keys($person));
echo "<br>";
print_r(array_values($person));
echo "<br>";
# merge two arrays
$extra = ["grade" => "A", "city" => "Gulu"];
$merged = array_merge($person, $extra);
print_r($merged);
     
# write a function that takes an array of numbers and returns the average
# write a function that takes an array of strings and returns the longest string
# write a function that takes a score and returns a letter grade.
# write a function that takes a string and returns it in reverse order
# write a function that takes an array of names and returns only those longer than 4 characters
# write a function that takes an array of numbers and returns only the prime numbers
# write a function that takes an array of scores and returns the highest score
# write a function that takes an array of names and returns them sorted alphabetically
# write a function that takes an array of numbers and returns the sum of all even numbers
?>