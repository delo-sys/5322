<?php

// Control structures in PHP
//   Control structures determine the flow of executuion in your code based on diffrent conditions and logic. Theyre the foundation of programming logic that allow your scripts to make decisions and repeat operations.

// 1. Conditional statements
// Conditional statements execute diffrent code blocks based on whether certain conditions are true or false

// 1.1 if, else and elseif
// The most fundamental way to make decisions in your code:
// BASIC if statement 
// Syntax
// if (condition){
//     code to execute if condition is true 
// }
$age = 20;
if ($age >= 18){
     //code to executes if condition is true 
    echo "You are an adult .<br>";
}
//  if - else statement
// Syntax
// if (condition){
//     code to execute if condition is true 
// } else{
// code to execute if condition is false
// }

$tempreture = 30;

if ($tempreture > 30){
    //code to executes if condition is true 
    echo "It's hot outside .<br>";
}else{
    //code to executes if condition is false
    echo "It's not hot outside .<br>";
}

// If-elseif-else statement for multiple conditions.
// Allows checking multiple conditions in sequence

$grade = 85;

if($grade >= 90){
    // First condition executes -executes if grade is 90 or above
    echo "A - Execellent! <br>";
}else if($grade >= 80){
    // Second condition executes -only checked if first condition is false
    // executes if grade is between 80-89
    echo "B -Good Job! <br>";
}elseif($grade >= 70){//third condition - omly checked if  all previous conditions are  false  
    echo "c- staisfactory ! <br> ";
} else if( $grade >=60) {//forth conditon - only checked if the prevous condition are false}
    echo "D - you passed , but you can do better! <br>  ";
}else{ // default case - excutes if all conditions above are false
    //in this case , if grade is below 60
    echo "F - you need to improve!<br> ";


}

/**
 * important notes 
 * - conditions are eveaulated from top to bottom
 * - once a conditions is true , it's code block executes and php skips all remaining conditions
 * - the else block is optional and provide a defult case
 * - you can have as many elseif  
 */

//  nested if statement - placing if statement inside other if statements
$isloggedin = true ;
$isadmin = true ;

if ($isloggedin) {
    // outer condition-checks if user is logged in
    echo "welcome back <br> ";
    if  ($isadmin) {
    // inner condition - only checks if outer condition is true 
    // checks if the logged in users is admin 
    echo "you have adminstrator privilages <br> ";

    }  else  {
    // executes if users is not logged in
    echo "you have user privivages <br>  ";
    }
    
} else {
    // execute if users is not looged is in
    echo "please log in to continue. <br>";
}

// 1.2 switch statement 
// the switch statesment provides an elegant way to compare a variable against many different values.

// switch syntax
// switch (expressions){
// case values;
// code;
// breaks;
// defualt
// code;
//  }

$dayofweek = date ("1"); // gets the current day name (e.g, monday)

// echo $dayofweek;

switch($dayofweek){
    case "Monday" :
        // exceutes if $dayofweek equals "monday" (loose comparison)
        echo "it's the start of the work week. <br> ";
        break; // the break statement prevent fall-through to the next case
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        
        // multiple statement without breake statement will fall through
        // these execute if $dayoftheweek is any of these three values 
        echo "its  a midweek . <br>";
        break;
    case "Saturday";
    case "Sunday";
        echo "its a weekend <br> ";
    default:
        //optional default that executes if no case matches
        echo "invalid day of the week <br>";
        // no break is needed in default case (it's the last one ) 
}
/**
 * important notes :
 * - swtich uses loose comporation (==) not strict comparison (==)
 * - without break  , execute fall through to the next case
 * - the default case is optional
 * - switch is often cleaner than multiple elesif statement when comparing as values 
 */

//  1.3 ternary operator
// a shorthand way to write simple if-elseif statement 
// syntax
// conditions ? values_if_true :value _if_false
$age = 20;

// compact way to assign a value based condition
$status = ($age>= 18) ? "adult":"minor";
echo "you are $status <br>";

// Equivalent if statement
// if ($age>= 18){
//     $status = "adult";
// }else {
//     $status ="minor";
// }
// Nested ternary operators (can be hard to read use with caution)  

$score = 75;
$grade = ($score >= 90)? "A":
        (($score >= 80)? "B":
        (($score >= 70)? "C":"F"));

echo "Your grade: $grade <br>";

/**
 * Tips for ternary operators 
 * -Best for simple conditions
 * -Use parenthesis for clarity
 * -Avoid deep nesting - it makes code harder to read
 * - Din't use for complex logic  - use if/else instead
 */

//  2.Loops
// Loops allow you to execute code repeatedly based on certain conditions making repetitive tasks more efficient.

// 2.1 While loops
// Executes code as long as the specified condition is true
// Syntax:
//  While( condition ){
//      code to execute
// }

$counter = 0;

while ($counter <= 10){
    // This code repeats as long as the condition is true
    echo "Count : $counter <br>";
    $counter ++ ; //Increment counter  - CRUCIAL to avoid infinite loops
}
/**
 * Important notes
 * -The condition is evaluated before each iteration 
 * -If the condition is false
 * - Always ensure the loop condition will eventually be false
 * -be careful to avoid infinite loops (when condition never becomes false)
 */

//  example : using while to process data until a condition is met 
$done = false;

while (!$done) {
    // simulate some conditions that  might change $done to true 
    $randomnumber = rand (1,10);
    if ($randomnumber >8) {
        echo "found a number greater than 8 : $randomnumber <br> ";
        $done = true ; // this will exit the loop 
    } else{
        echo "still looking ... Got $randomnumber <br>";
    }
    }

//example : reading data from  a file until end-of-file
$file = fopen ("data.txt", "r");

while (!feof($file)) {
    // process each line until end of file is reached 
    $line = fgets($file);
    echo $line . "<br>";
}

fclose($file);

//alternative syntax (for templates) 
while($condition) :
    // code to exceute
endwhile;


// 2.2 do -while loop
// it similiar to while but guarantee that the excutesat least once because the condition is checked after execution  
// syntax
// do {
// code to excute 
// } while (condition);

$counter = 1;
do {
    // the code excutes first, then the condition is checked 
    echo "count: $counter <br>";
    $counter ++; 
} while ($counter<5);

/**
 * key differnces from while loop:
 * - code always executes at least once , even if the condition is intially false
 * - conditions is checked at the end of each iteration
 * - appropriate when you need to process something at least once 
 */

//  example :validating user input
// do {
//     $input = getInput (); // assume this function get input user input 
//     $valid = validateinput ($input); // assume this validates the input 
    
//     if (!$valid) {
//         echo "invalid input, please try again .";
//     }
// }while(!$valid); //keep asking until valid input is provided

// Exapmle : where loop body excutes despite conditions being false 
$number = 10;

do {
    echo "this runs once even though the conditions is false <br> ";
} while($number<5);

// 2.3 for loop
// used when you know the number of interation in advance
// syntax
// for (initialization ; condition; incrment/derement ) {
    // code to execute
// }

// 1. initializaton - runs once at the begining
// 2. conditions - checked before each iteration
// 3. increment /drecrement - runs after each iteration

for ($i = 1; $i<=5; $i++) {
    echo "iteration $i <br>";
} while ($number <5)

/**
 * how the for loop works 
 * 1. initialzation $i=1
 * 2. check if $i <= (true)
 * 3. excute  the loop body
 * 4. increment $i ($i become 2)
 * 5. check if $1 <=5 (true)
 * 6. execute the loop body
 * ..and so on untill becomes 6 and becomes false
 */

//  omitting parts  of a loop
$i =0;
for (; $i <5;) {
    echo $i . "<br>";
    $i++;
} 

// using for loop with arrays
$fruits =["apple , banana , orange , grape , mango"];
$fruitcount = count($fruits);

for ($i = 0; $i < $fruitcount; $i++){
    echo "Fruit at index $i:".$fruits[$i] ."<br>";
}


// Alternative syntax(for template)
for ($i =1; $i< 10; $i++):
    // code
endfor;

/**
 * When to use for loops :
 * -When you know the exact number of iterations in advance
 * -When working with array indices
 * -For mathematical sequences
 * -When you need a counter variable
 */

//  2.4 Foreach loop
// Specifically designed for iterating through arrays and objects

// syntax
// foreach (array-expression as $value){
//      code
// }

// basic foreach on indexed array
$colors = ["red", "green", "blue"];

foreach ($colors as $color) {
    // $colors takes the value of each array element in sequence 
    echo "colors: $color <br>";  
}

/**
 * how it works :
 * 1. first ileration : $color = "red"
 * 2. second ileration : $color = "green"
 * 3. thrid ileration : $color = "blue" 
 */
// foreach with key => value on associative array
$person =[
    "name"=>"john",
    "age"=>"30",
    "city"=> "newyork"
];

foreach($person as $key => $value){
    // $key contains the array key (e.g, "name" , "age")
    // $value contains the corresponding value (e.g "john" , "30")
    echo "$key:$value <br>";  
}

// Iterating over nested arrays
$user = [
    ["name" => "Alice", "email"=> "alice@example.com"],
    ["name" => "Bob","email"=>"@example.com"]
];

foreach ($user as $user) {
    echo "name:". $user["name"]. ",Email:". $user ["name"].
    "<br>"; 
}

// aternative syntax
foreach ($array as $value):
    // code
endforeach;
/**
 * advantages of foreach 
 * -No need to initialize counter or check array bounds 
 * - works with any array types (indexed , associative , multidimensional)
 * -more readabled and less prone to errors 
 * - automatically handles the correct number of iteration  
 */

//  2.5 loop control statements
// statement that change the normal flow of loop 
// break -< exits the loop immediately
for ($i=1; $i<=10; $i++) {
    if ($i==5) {
        echo"breaking at $i<br>";
        break;// immdiately exits the loop when $i equals 5
    }

// after  the break   execution continue with the code after the loop 

// continue statement - skips the rest of the current iteration 
for ($i=1; $i<= 10; $i++) {
    if ($i % 2==0) {
        continue;//skip even number 
    }
    echo "odd number : $i<br>";
}
}
// after the continue , the loop jumps to the iteration

/**
 * best practices
 * -use break  when you've found what you are looking for or meta termination condition
 * - use continue to skip iteration that don't meet certain criteria 
 * - avoid excessive use of break and continue as they can make code harder to follow
 */

//  3. inculde and require statements
// these statement allow you to include code from other files ,promoting code reuse and oraganization

// include - include and evaluate the specified files 
include 'header.php';
// if files doesn't exist , include produces a warning but script continues 

// includes _once - includes the file only once 
include_once ' functions.php';
// if the files was already included , it won't be included again
// useful for function or class to avoid redeclaraton errors

// require - similar to include but produces a fatal error if the file doesn't exist
require 'config.php';
// script will stop if the file not found - use when the files is absolutley necessary

// require_once - require the file only once 
require_once "database.php";
// fatal error if not found , include only once
// most commonly used for crirtical class defination
/**
 * when to use each :
 * - use require when the file is critical to application
 * - use include when the file is optional 
 * - use_once versions when the file contains functions or classes to prevent redifination errors
 * 
 * paths:
 * -relative paths are relative to the current script
 * -absolute paths start from the files system root 
 * -you can use variables in path :include $file_path;  
 */

//  example of common directory structure and inculde 
require_once 'config/database.php';    // database configuration
require_once 'include/functions.php';  //helper functon
include 'templates/header.php';        //site header (HTML)

// content goes here

include 'template/footer.php';        // site footer (HTML)
?>