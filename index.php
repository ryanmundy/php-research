<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body id="body">

    <h1>PHP Calculator</h1>
    <div id="calculator">
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

        ?>

    </div>
</body>
</html>