<html>

<head>
<title>Hello World</title>
</head>
<body>

<form action="process.php" method="post">
    Enter Your Name:<input name="name" type="text">
    <input type="submit">
</form>

<?php

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

$numbers = array(5, 3, 7);
$sum = 0;

foreach ($numbers as $number){
    $sum = $sum + $number;
}

echo $sum;


?>

</body>
</html>