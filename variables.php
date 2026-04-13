<?php
$name = "kabimbiri";
$age = 89;
$price = 1.89;
$isstudent = true;

echo gettype($name) . "<br>";

echo $name . "<br>";
echo $age . "<br>";
echo $price . "<br>";

echo "My name is $name and I am $age years old.<br>";
echo "The price of sugar is $price.<br>";

// this is a single line comment
# this is also a single line comment
/*
This is a multi-line comment
that
i am
writing
*/

# operators.
$a = 10;
$b = 5;
echo $a + $b . "<br>"; // addition
echo $a - $b . "<br>"; // subtraction
echo $a * $b . "<br>"; // multiplication
echo $a / $b . "<br>"; // division
echo $a % $b . "<br>"; // modulus
echo $a ** $b . "<br>"; // exponentiation

$x = 10;
echo $x += 5; // equivalent to $x = $x + 5
echo"<br>";
echo $x -= 3;// equivalent to $x = $x - 3
echo"<br>";
echo $x *= 2; // equivalent to $x = $x * 2
echo"<br>";
echo $x;
echo"<br>";

# comparison
echo var_dump(5 == "5") . "<br>";
echo var_dump(5 === "5") . "<br>";
echo var_dump(5 != "5") . "<br>";
echo var_dump(5 !== "5") . "<br>";
echo var_dump(5 >= 3) . "<br>";

# build a php page that;
# stores a student's name, age, and grade in variables
# displays a sentence like "My name is [name], I am [age] years old, and I scored 88%"
# calculates and displays the grade as a letter (A,B,C ,D, F) using comparison.


