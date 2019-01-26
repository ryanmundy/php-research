<html>

<head>
<title>Hello World</title>
</head>
<body>

<!-- <form action="process.php" method="post">
    Enter Your Name:<input name="name" type="text">
    <input type="submit">
</form> -->
<!-- How old are you?
<form action="process2.php" method="post">
    Enter Your Name:<input name="name" type="text">
    Enter Your Birth Year:<input name="birthYear" type="number">
    <input type="submit">
</form> -->

<h1>PHP Calculator</h1>
<form>
    <input name="num1" type="number" placeholder="Number 1">
    <select name="operator">
        <option>None</option>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input name="num2" type="number" placeholder="Number 2">
    =
    <button name="submit" value="submit" type="submit">Calculate</button>
</form>
<p>The answer is: </p>

<?php

if(isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch($operator){
        case "None":
            echo "You need to select an operator";
        break;
        case "+":
            echo $result1 + $result2;
        break; 
        case "-":
            echo $result1 - $result2;
        break; 
        case "*":
            echo $result1 * $result2;
        break; 
        case "/":
            echo $result1 / $result2;
        break;     
    }
}


// $myvar= "This is my variable";
// echo $myvar;//echo outputs to display

// $number=5;
// $number2=3;
// $sum=$number + $number2;
// echo $sum;

// $name="Jake";
// echo "Hello, $name";

// $loggedIn = true;

// if($loggedIn == true){
//     echo "You are logged in";
// } else{
//     echo "Please log in";
// }

// $people = array("Ryan", "John", "Joe");
// print_r($people);
// echo $people[2];

// foreach($people as $person){
//     echo $person . ' ';
// }

// $numbers = array(5, 3, 7);
// $sum = 0;

// foreach ($numbers as $number){
//     $sum = $sum + $number;
// }

// echo $sum;


?>

</body>
</html>