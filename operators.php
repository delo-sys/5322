<?php 

// php operators 

//operators in php allow you to perform operations on variables and values. they are fundamental building blocks for creating expressions that manipulate data in your programs .

//1. arithmetic operators 
// these operators perform basic mathematical operations
echo "1 . arthmetic operators</b> <br>";
// addtions (+)
// the addtion operator adds two values together
$sum = 10+5;// result : 15
echo "sum : $sum <br>" ;

// subtraction(-)
// the subtration operations subtracts the right operand from the left operand
$difference = 10-5 ; // result:5
echo "difference : $difference <br>";

// multipiction (*)
// the mulitpliction operator multiplies two values
$product = 10 * 5; //result: 50
echo "product : $product <br>";

// division (/)
// the division operator divides the left operand by the right operand 
// note :divison by zero will cause a fatal error
$quotient = 10 / 5 ; // result :2
echo "quotient : $quotient <br>";

// modlus (%)
// 10 divided by 3 equals 3 with a remanider of 1
$remainder = 10%3; // result 1
echo "remainder : $remainder <br>";

// exponentation (**) - php 5.6+
// raises the left operand to the power of the right operand 
// 2 raised to the power 3 equals 8
$power = 2**3 ; // result :8
echo "power : $power <br>";

// integer divison (indiv ()) php 7+
// returns the integer quotient of the division
// 10 divided by 3 gives 3 (decimal part is truncated )
$intdivision = intdiv(10,3); //result :3
echo "intdivison $intdivision <br>";

// tomorrow - assignment operators
echo "2.tomorrow - assignment operators</b> <br>";
// these operators assign vaules to variabes :
// basic assignment (=)
$x = 10 ; // assign 10 to $x
// combined assignment operators
$x =10;
echo "x = $x <br>";
$x +=5;//equivalent to : $x = $x + 5; result :15
echo "x += $x <br>";
$x -=3;//equivalent to : $x = $x - 3; result :12
echo "x -= $x <br>";
$x *=2;//equivalent to : $x = $x * 2; result :24
echo "x *= $x <br>"; 
$x /=4;//equivalent to : $x = $x / 4; result :6
echo "x /= $x <br>";
$x %=4;//equilvalent to: $x = $x % 4; rseult :2
echo "x %= $x <br>";


// combined assignment operators perform an operation and assignment in one step

// comparision operators
echo "3.comparision operators</b> <br>" ; 
// these operator  compare two values and return boolean result (true or false)

// equal (==)
echo var_dump (5==5). "<br>"; // bool (true)
echo var_dump (5=="5"). "<br>"; // bool (fasle) - differnt values 

// not equal (!= or <>)
echo var_dump (5!= 10)." <br>"; //bool(true)
echo var_dump(5<>"10" ). "<br>"; //bool(true) alternative syntax

// greater than (>)
echo var_dump(10>"5")."<br>"; // bool (true)

// less than (<)
echo var_dump(5<"10")."<br>"; //bool (true)

// greater than or equal to (>=)
echo var_dump (10>="10")."<br>"; //bool (true)

// less than or equal to (<=)
echo var_dump (5<="5") ."<br>"; // bool (true)

// logical operators
//  these operators perform logical operation on boolean values - and , or , not , xor
echo "<b> 4 . logical operator </b> <br>";
// 1. and  (&& ,and ) all operands must be true , to have a true results
echo "a. logical AND (&&,and) </i> </b> <br>";
echo var_dump(true&&true)."<br>";  // bool (true)
echo var_dump(true&&false)."<br>"; // bool (false)
echo var_dump(true&&false)."<br>"; // bool (false)
echo var_dump(true&&false)."<br>"; // bool (false)

// 2.or (||,or)
echo "<br><b><i> b. logical or (||,or) </i></b> <br> ";

var_dump (true||true);//bool (true)
var_dump (true||false);//bool (true)
var_dump (false||true);//bool (true)
var_dump (true||false);//bool (false)

// 3. not (!,not) -reverses a condition
echo "<br><b><i> c. logical not  (!,not) </i><b><br>";
var_dump (!true);  // bool(false)
var_dump (!true);  // bool(true)
var_dump (!true); // bool(true)
var_dump(!true); // bool(true) aternative syntax

// 2.xor (||,or)exculsive or , true if one is true , but not both
echo "<br><b><i> b. logical xor (||,or) </i></b> <br> ";
var_dump (true xor false); //bool(true);
var_dump (true xor false); //bool(false);

// Tommorow -String operations
// String operations
// Operators for working with strings
// Concatenation(.)
$firstName = "Fidel";
$lastName = "Odhiambo";
$fullname= "<br>" . $firstName ." ".  $lastName . "<br>";
echo $fullname; //Fidel Odhiambo

// Concatenaton assignment(=.)
$text = "Hello";
$text .= " World!"; //$text now conatins hello World
$text .=" !";// Text now contains hello world
echo $text . "<br>";

// Array Operators
// Operators for working with arrays 
// Union (+)
$array1 = ["a" => "apple", "b" =>"banana"];
$array2 = ["b" =>"blueberry", "c"=> "cherry"];
$result = $array1 + $array2;
var_dump( $result);
// Result; ["a" => "apple", "b" =>"banana", "c"=> "cherry"]
// Note ; if keys exist in both arrays, the first array's value are kept
echo "<br>";
// Equality(==)
$array1 =[1, 2, 3];
$array2 =[1, 2, 3];
var_dump($array1 == $array2);// bool(true)

echo "<br>";
// Identity (===)
$array1 =[1, 2, 3];
$array2 =["1", "2", "3"];
var_dump($array1 === $array2);// bool(false) diffrent types

echo "<br>";
// Inequality(!=, <>)
var_dump($array1 == $array2);// bool(true)

echo "<br>";
// Non-Identity (!==)
var_dump($array1 !== $array2);

echo "<br>";
// Increment decrement operators

// These operators increase or decrease variables by one
// Pre-increment(++$x)
$x = 5;
$y = ++$x; // $x will be incremented to 6 then added to $y  
// $x is 6 and $y is 6

echo $x."<br>";
echo $y."<br>";

// post increment ($x++)
$x = 5;
$y = $x++; // $x is assigned to $y then incremented to 6
// $x is 6 while $y is 5
echo $x."<br>";
echo $y."<br>";

// Predecrement (--$x)
$x = 5;
$y = --$x;// $x will be decremented to 4 then assigned to $y
// $x is 4 while $y is 4
echo $x."<br>";
echo $y."<br>";
?>