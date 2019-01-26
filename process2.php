<html>

<head>
<title>Hello World</title>
</head>
<body>

<?php

    $name = $_POST["name"];
    $year = $_POST["birthYear"];
    $age = 2019 - $year;
    echo "Hello, $name. You were born in $year and are $age years old.";

?>

</body>
</html>