<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
</head>
<body>
    <?php 
    //Scalar-type variables
    $string = "Daniel";
    $int = 12345;
    $float = 1.2345;
    $bool = true;

    echo $string;
    echo "<br>";
    echo $int;
    echo "<br>";
    echo $float;
    echo "<br>";
    echo $bool;
    echo "<br>";

    //Array-type variables
    $array = array("Daniel", "John");
    $anotherArray = ["Daniel", "Jimmy"]; //PHP 5.4 forward only, not compatible with older versions

    print_r($array);
    echo "<br>";
    print_r($anotherArray);
    echo "<br>";

    //Concatenating multiple variables in a string
    $stringExample = "What's";
    $anotherStringExample = "up?";
    $concatenation = $stringExample . " " . $anotherStringExample;

    echo $concatenation;
    echo "<br>";

    //Arithmetic Operations
    echo "10 % 3 = " . 10 % 3;
    echo "<br>";
    echo "10 ' 3 = " . 10 ** 3;
    echo "<br>";
    echo "1 + 2 * 4 = " . 1 + 2 * 4;
    echo "<br>";
    echo "(1 + 2) * 4 = " . (1 + 2) * 4;
    echo "<br>";

    //Comparison operators
    //More operators would be '<', '>', '<=', '>=', '<>', which does the exact same as '!=', etc.
    $compFirst = 2;
    $compSecond = "2";

    if($compFirst == $compSecond){ //'==' does not differentiate between data types, and will return true
        echo "The first comparison returns true"; 
    }else{
        echo "The first comparison returns false";
    }
    echo "<br>";
    

    if($compFirst === $compSecond){ //However, with '===' we'll also check if their data types match
        echo "The second comparison returns true"; 
    }else{
        echo "The second comparison returns false";
    }
    echo "<br>";

    if($compFirst != $compSecond){ //To check if they're different, we'll use '!='
        echo "The third comparison returns true"; 
    }else{
        echo "The third comparison returns false";
    }
    echo "<br>";
    

    if($compFirst !== $compSecond){ //And we'll use '!==' to also check about their data types
        echo "The fourth comparison returns true"; 
    }else{
        echo "The fourth comparison returns false";
    }
    echo "<br>";
    
    ?>
</body>
</html>