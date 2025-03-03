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
?>