

<?php
# conditional statements
# if, else, elseif
$age = 34;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "You are an $status. <br>"; 

# switch statement
# best used when comparing one variable against multiple values
$day = "Saturday";
switch ($day) {
    case "Monday":
        echo "start of the week.";
        break;
    case "Friday":
        echo "Almost the weekend.";
        break;
    case "Saturday":
        echo "Its the weekend.";
        break;
}


# loops
# for loop
for ($i = 0; $i < 5; $i++) {
    echo "The value of i is: $i <br>";
}
# while loop
$count = 1;
while ($count <= 5) {
    echo "Count: $count <br>";
    $count++;
}
# do-while loop
$num = 10;
do {
    echo "Num: $num <br>";
    $num--;
} while ($num >= 1);
# foreach loop
# designed for arrays and collections
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $fruit) {
    echo "I like $fruit <br>";
}
# for associate arrays (key-value pairs)
$student = ["name" => "Alice", "age" => 30, "city" => "Gulu"];
foreach ($student as $key => $value) {
    echo "$key: $value <br>";

}

# break and continue
# break exits the loop entirely
for ($i = 0; $i < 10; $i++) {
    if ($i >= 5) {
        break; // exit the loop when i is 5
    }
    echo "i: $i <br>";
}
# continue skips the current iteration and moves to the next one
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue; // skip even numbers
    }
    echo "i: $i <br>";

}
#nested loops
# loops inside loops useful for tables, grids and patterns
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= 3; $col++) {
        echo "$row,$col) &nbsp;"; // &nbsp; is a non-breaking space for formatting
    }
    echo "<br>"; // new line after each row
}
/* print numbers 1 to 30 but,
- for multiples of 3 print "Fizz"
- for multiples of 5 print "Buzz"
print "FizzBuzz" for multiples of both 3 and 5
*/
/* use nested loops to print a 10x10 multiplication table */


?>